<?php

namespace app\helpers;

use app\models\Contract;
use app\models\Event;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelExportImportHelper
{
    public static function ImportToContracts()
    {
        set_time_limit(180);

        $inputFileName = __DIR__ . '/contracts.xlsx';

        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($inputFileName);

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();

        for ($row = 2; $row <= $highestRow; ++$row) {

            $contract = new Contract();

            $contract->counterparty = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
            $contract->subject = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
            $contract->branch = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
            $contract->lawyer = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
            $contract->status = $worksheet->getCellByColumnAndRow(5, $row)->getValue();

            $startDate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(6, $row)->getValue())->format('Y-m-d');
            $contract->start_date = $startDate != '1970-01-01' ? $startDate : '';

            $contract->save();

            $i = 0;
            for ($j = 7; $j <= 65; $j = $j + 2) {

                if ($eventContent = $worksheet->getCellByColumnAndRow($j, $row)->getValue()) {
                    $event = new Event();
                    $event->content = $eventContent;

                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(($j + 1), $row)->getValue())->format('Y-m-d');
                    $event->date = $date != '1970-01-01' ? $date : '';

                    $event->user = $contract->lawyer;
                    $event->creator = $contract->lawyer;
                    $event->contract = $contract->id;

                    $event->ordinal_number = $i;
                    $i++;

                    $event->save();
                }
            }
        }
    }

    public static function ExportFromContracts()
    {
        set_time_limit(180);
        $file = \Yii::createObject([
            'class' => 'codemix\excelexport\ExcelFile',
            'sheets' => [
                'Users' => [
                    'class' => 'codemix\excelexport\ActiveExcelSheet',
                    'query' => Contract::find(),
                ]
            ]
        ]);
        $file->send('contracts.xlsx');

    }

}