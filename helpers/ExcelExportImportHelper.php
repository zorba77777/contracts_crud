<?php

namespace app\helpers;

use app\models\Contract;
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

            $contract->milestone1 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

            $date1 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(8, $row)->getValue())->format('Y-m-d');
            $contract->date1 = $date1 != '1970-01-01' ? $date1 : '';

            $contract->milestone2 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();

            $date2 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(10, $row)->getValue())->format('Y-m-d');
            $contract->date2 = $date2 != '1970-01-01' ? $date2 : '';

            $contract->milestone3 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();

            $date3 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(12, $row)->getValue())->format('Y-m-d');
            $contract->date3 = $date3 != '1970-01-01' ? $date3 : '';

            $contract->milestone4 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();

            $date4 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(14, $row)->getValue())->format('Y-m-d');
            $contract->date4 = $date4 != '1970-01-01' ? $date4 : '';

            $contract->milestone5 = $worksheet->getCellByColumnAndRow(15, $row)->getValue();

            $date5 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(16, $row)->getValue())->format('Y-m-d');
            $contract->date5 = $date5 != '1970-01-01' ? $date5 : '';

            $contract->milestone6 = $worksheet->getCellByColumnAndRow(17, $row)->getValue();

            $date6 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(18, $row)->getValue())->format('Y-m-d');
            $contract->date6 = $date6 != '1970-01-01' ? $date6 : '';

            $contract->milestone7 = $worksheet->getCellByColumnAndRow(19, $row)->getValue();

            $date7 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(20, $row)->getValue())->format('Y-m-d');
            $contract->date7 = $date7 != '1970-01-01' ? $date7 : '';

            $contract->milestone8 = $worksheet->getCellByColumnAndRow(21, $row)->getValue();

            $date8 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(22, $row)->getValue())->format('Y-m-d');
            $contract->date8 = $date8 != '1970-01-01' ? $date8 : '';

            $contract->milestone9 = $worksheet->getCellByColumnAndRow(23, $row)->getValue();

            $date9 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(24, $row)->getValue())->format('Y-m-d');
            $contract->date9 = $date9 != '1970-01-01' ? $date9 : '';

            $contract->milestone10 = $worksheet->getCellByColumnAndRow(25, $row)->getValue();

            $date10 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(26, $row)->getValue())->format('Y-m-d');
            $contract->date10 = $date10 != '1970-01-01' ? $date10 : '';

            $contract->milestone11 = $worksheet->getCellByColumnAndRow(27, $row)->getValue();

            $date11 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(28, $row)->getValue())->format('Y-m-d');
            $contract->date11 = $date11 != '1970-01-01' ? $date11 : '';

            $contract->milestone12 = $worksheet->getCellByColumnAndRow(29, $row)->getValue();

            $date12 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(30, $row)->getValue())->format('Y-m-d');
            $contract->date12 = $date12 != '1970-01-01' ? $date12 : '';

            $contract->milestone13 = $worksheet->getCellByColumnAndRow(31, $row)->getValue();

            $date13 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(32, $row)->getValue())->format('Y-m-d');
            $contract->date13 = $date13 != '1970-01-01' ? $date13 : '';

            $contract->milestone14 = $worksheet->getCellByColumnAndRow(33, $row)->getValue();

            $date14 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(34, $row)->getValue())->format('Y-m-d');
            $contract->date14 = $date14 != '1970-01-01' ? $date14 : '';

            $contract->milestone15 = $worksheet->getCellByColumnAndRow(35, $row)->getValue();

            $date15 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(36, $row)->getValue())->format('Y-m-d');
            $contract->date15 = $date15 != '1970-01-01' ? $date15 : '';

            $contract->milestone16 = $worksheet->getCellByColumnAndRow(37, $row)->getValue();

            $date16 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(38, $row)->getValue())->format('Y-m-d');
            $contract->date16 = $date16 != '1970-01-01' ? $date16 : '';

            $contract->milestone17 = $worksheet->getCellByColumnAndRow(39, $row)->getValue();

            $date17 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(40, $row)->getValue())->format('Y-m-d');
            $contract->date17 = $date17 != '1970-01-01' ? $date17 : '';

            $contract->milestone18 = $worksheet->getCellByColumnAndRow(41, $row)->getValue();

            $date18 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(42, $row)->getValue())->format('Y-m-d');
            $contract->date18 = $date18 != '1970-01-01' ? $date18 : '';

            $contract->milestone19 = $worksheet->getCellByColumnAndRow(43, $row)->getValue();

            $date19 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(44, $row)->getValue())->format('Y-m-d');
            $contract->date19 = $date19 != '1970-01-01' ? $date19 : '';

            $contract->milestone20 = $worksheet->getCellByColumnAndRow(45, $row)->getValue();

            $date20 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(46, $row)->getValue())->format('Y-m-d');
            $contract->date20 = $date20 != '1970-01-01' ? $date20 : '';

            $contract->milestone21 = $worksheet->getCellByColumnAndRow(47, $row)->getValue();

            $date21 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(48, $row)->getValue())->format('Y-m-d');
            $contract->date21 = $date21 != '1970-01-01' ? $date21 : '';

            $contract->milestone22 = $worksheet->getCellByColumnAndRow(49, $row)->getValue();

            $date22 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(50, $row)->getValue())->format('Y-m-d');
            $contract->date22 = $date22 != '1970-01-01' ? $date22 : '';

            $contract->milestone23 = $worksheet->getCellByColumnAndRow(51, $row)->getValue();

            $date23 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(52, $row)->getValue())->format('Y-m-d');
            $contract->date23 = $date23 != '1970-01-01' ? $date23 : '';

            $contract->milestone24 = $worksheet->getCellByColumnAndRow(53, $row)->getValue();

            $date24 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(54, $row)->getValue())->format('Y-m-d');
            $contract->date24 = $date24 != '1970-01-01' ? $date24 : '';

            $contract->milestone25 = $worksheet->getCellByColumnAndRow(55, $row)->getValue();

            $date25 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(56, $row)->getValue())->format('Y-m-d');
            $contract->date25 = $date25 != '1970-01-01' ? $date25 : '';

            $contract->milestone26 = $worksheet->getCellByColumnAndRow(57, $row)->getValue();

            $date26 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(58, $row)->getValue())->format('Y-m-d');
            $contract->date26 = $date26 != '1970-01-01' ? $date26 : '';

            $contract->milestone27 = $worksheet->getCellByColumnAndRow(59, $row)->getValue();

            $date27 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(60, $row)->getValue())->format('Y-m-d');
            $contract->date27 = $date27 != '1970-01-01' ? $date27 : '';

            $contract->milestone28 = $worksheet->getCellByColumnAndRow(61, $row)->getValue();

            $date28 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(62, $row)->getValue())->format('Y-m-d');
            $contract->date28 = $date28 != '1970-01-01' ? $date28 : '';

            $contract->milestone29 = $worksheet->getCellByColumnAndRow(63, $row)->getValue();

            $date29 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(64, $row)->getValue())->format('Y-m-d');
            $contract->date29 = $date29 != '1970-01-01' ? $date29 : '';

            $contract->milestone30 = $worksheet->getCellByColumnAndRow(65, $row)->getValue();

            $date30 = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($worksheet->getCellByColumnAndRow(66, $row)->getValue())->format('Y-m-d');
            $contract->date30 = $date30 != '1970-01-01' ? $date30 : '';

            $contract->save();
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