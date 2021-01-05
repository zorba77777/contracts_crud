<?php

namespace app\helpers;

use app\models\Branch;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Yii;

class ExcelHelper
{
    private static string $basicSqlCommand = 'SELECT contracts.id, contracts.counterparty, contracts.subject, branches.name AS branch, users.username, contract_statuses.name AS status, contracts.start_date, contracts.check_date,
       events1.content AS milestone1, events1.date AS date1, events2.content AS milestone2, events2.date AS date2, events3.content AS milestone3, events3.date AS date3,
       events4.content AS milestone4, events4.date AS date4, events5.content AS milestone5, events5.date AS date5, events6.content AS milestone6, events6.date AS date6,
       events7.content AS milestone7, events7.date AS date7, events8.content AS milestone8, events8.date AS date8, events9.content AS milestone9, events9.date AS date9,
       events10.content AS milestone10, events10.date AS date10, events11.content AS milestone11, events11.date AS date11, events12.content AS milestone12, events12.date AS date12,
       events13.content AS milestone13, events13.date AS date13, events14.content AS milestone14, events14.date AS date14, events15.content AS milestone15, events15.date AS date15,
       events16.content AS milestone16, events16.date AS date16, events17.content AS milestone17, events17.date AS date17, events18.content AS milestone18, events18.date AS date18,
       events19.content AS milestone19, events19.date AS date19, events20.content AS milestone20, events20.date AS date20, events21.content AS milestone21, events21.date AS date21,
       events22.content AS milestone22, events22.date AS date22, events23.content AS milestone23, events23.date AS date23, events24.content AS milestone24, events24.date AS date24,
       events25.content AS milestone25, events25.date AS date25, events26.content AS milestone26, events26.date AS date26, events27.content AS milestone27, events27.date AS date27,
       events28.content AS milestone28, events28.date AS date28, events29.content AS milestone29, events29.date AS date29, events30.content AS milestone30, events30.date AS date30
FROM contracts
         JOIN branches ON contracts.branch = branches.id
         JOIN users ON contracts.lawyer = users.id
         JOIN contract_statuses ON contracts.status = contract_statuses.id
         LEFT JOIN events AS events1 ON contracts.id = events1.contract AND events1.ordinal_number = 0
         LEFT JOIN events AS events2 ON contracts.id = events2.contract AND events2.ordinal_number = 1
         LEFT JOIN events AS events3 ON contracts.id = events3.contract AND events3.ordinal_number = 2
         LEFT JOIN events AS events4 ON contracts.id = events4.contract AND events4.ordinal_number = 3
         LEFT JOIN events AS events5 ON contracts.id = events5.contract AND events5.ordinal_number = 4
         LEFT JOIN events AS events6 ON contracts.id = events6.contract AND events6.ordinal_number = 5
         LEFT JOIN events AS events7 ON contracts.id = events7.contract AND events7.ordinal_number = 6
         LEFT JOIN events AS events8 ON contracts.id = events8.contract AND events8.ordinal_number = 7
         LEFT JOIN events AS events9 ON contracts.id = events9.contract AND events9.ordinal_number = 8
         LEFT JOIN events AS events10 ON contracts.id = events10.contract AND events10.ordinal_number = 9
         LEFT JOIN events AS events11 ON contracts.id = events11.contract AND events11.ordinal_number = 10
         LEFT JOIN events AS events12 ON contracts.id = events12.contract AND events12.ordinal_number = 11
         LEFT JOIN events AS events13 ON contracts.id = events13.contract AND events13.ordinal_number = 12
         LEFT JOIN events AS events14 ON contracts.id = events14.contract AND events14.ordinal_number = 13
         LEFT JOIN events AS events15 ON contracts.id = events15.contract AND events15.ordinal_number = 14
         LEFT JOIN events AS events16 ON contracts.id = events16.contract AND events16.ordinal_number = 15
         LEFT JOIN events AS events17 ON contracts.id = events17.contract AND events17.ordinal_number = 16
         LEFT JOIN events AS events18 ON contracts.id = events18.contract AND events18.ordinal_number = 17
         LEFT JOIN events AS events19 ON contracts.id = events19.contract AND events19.ordinal_number = 18
         LEFT JOIN events AS events20 ON contracts.id = events20.contract AND events20.ordinal_number = 19
         LEFT JOIN events AS events21 ON contracts.id = events21.contract AND events21.ordinal_number = 20
         LEFT JOIN events AS events22 ON contracts.id = events22.contract AND events22.ordinal_number = 21
         LEFT JOIN events AS events23 ON contracts.id = events23.contract AND events23.ordinal_number = 22
         LEFT JOIN events AS events24 ON contracts.id = events24.contract AND events24.ordinal_number = 23
         LEFT JOIN events AS events25 ON contracts.id = events25.contract AND events25.ordinal_number = 24
         LEFT JOIN events AS events26 ON contracts.id = events26.contract AND events26.ordinal_number = 25
         LEFT JOIN events AS events27 ON contracts.id = events27.contract AND events27.ordinal_number = 26
         LEFT JOIN events AS events28 ON contracts.id = events28.contract AND events28.ordinal_number = 27
         LEFT JOIN events AS events29 ON contracts.id = events29.contract AND events29.ordinal_number = 28
         LEFT JOIN events AS events30 ON contracts.id = events30.contract AND events30.ordinal_number = 29';

    private static string $orderingCommandPart = ' ORDER BY contracts.start_date;';

    private static string $whereCommandPart = ' WHERE contracts.branch = ';

    public static string $unseparatedExcelFileName = __DIR__ . '/contracts.xlsx';

    private static function getSqlCommand(int $branchId = 0): string
    {
        if (!$branchId) {
            $sqlCommand = self::$basicSqlCommand . self::$orderingCommandPart;
        } else {
            $sqlCommand = self::$basicSqlCommand . self::$whereCommandPart . $branchId . self::$orderingCommandPart;
        }

        return $sqlCommand;
    }

    public static function createSpreadSheet(int $branchId = 0)
    {
        set_time_limit(600);
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand(self::getSqlCommand($branchId));

        $result = $command->queryAll();

        $spreadsheet = new Spreadsheet();
        $spreadsheet->getDefaultStyle()->getAlignment()->setWrapText(true);

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->getDefaultColumnDimension()->setWidth(36);
        $sheet->getColumnDimension('A')->setWidth('8');
        $sheet->getColumnDimension('D')->setWidth('20');
        $sheet->getColumnDimension('E')->setWidth('18');
        $sheet->getColumnDimension('F')->setWidth('16');
        $sheet->getColumnDimension('G')->setWidth('12');
        $sheet->getColumnDimension('H')->setWidth('12');
        $sheet->getColumnDimension('J')->setWidth('12');
        $sheet->getColumnDimension('L')->setWidth('12');
        $sheet->getColumnDimension('N')->setWidth('12');
        $sheet->getColumnDimension('P')->setWidth('12');
        $sheet->getColumnDimension('R')->setWidth('12');
        $sheet->getColumnDimension('T')->setWidth('12');
        $sheet->getColumnDimension('V')->setWidth('12');
        $sheet->getColumnDimension('X')->setWidth('12');
        $sheet->getColumnDimension('Z')->setWidth('12');
        $sheet->getColumnDimension('AB')->setWidth('12');
        $sheet->getColumnDimension('AD')->setWidth('12');
        $sheet->getColumnDimension('AF')->setWidth('12');
        $sheet->getColumnDimension('AH')->setWidth('12');
        $sheet->getColumnDimension('AJ')->setWidth('12');
        $sheet->getColumnDimension('AL')->setWidth('12');
        $sheet->getColumnDimension('AN')->setWidth('12');
        $sheet->getColumnDimension('AP')->setWidth('12');
        $sheet->getColumnDimension('AR')->setWidth('12');
        $sheet->getColumnDimension('AT')->setWidth('12');
        $sheet->getColumnDimension('AV')->setWidth('12');
        $sheet->getColumnDimension('AX')->setWidth('12');
        $sheet->getColumnDimension('AZ')->setWidth('12');
        $sheet->getColumnDimension('BB')->setWidth('12');
        $sheet->getColumnDimension('BD')->setWidth('12');
        $sheet->getColumnDimension('BF')->setWidth('12');
        $sheet->getColumnDimension('BH')->setWidth('12');
        $sheet->getColumnDimension('BJ')->setWidth('12');
        $sheet->getColumnDimension('BL')->setWidth('12');
        $sheet->getColumnDimension('BN')->setWidth('12');
        $sheet->getColumnDimension('BP')->setWidth('12');
        $sheet->setTitle('Contracts');

        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Контрагент');
        $sheet->setCellValue('C1', 'Адрес аренды / предмет хоз. договора');
        $sheet->setCellValue('D1', 'Филиал / СП');
        $sheet->setCellValue('E1', 'Исполнитель');
        $sheet->setCellValue('F1', 'Статус задачи');
        $sheet->setCellValue('G1', 'Дата поступления');
        $sheet->setCellValue('H1', 'Контрольная дата');
        $sheet->setCellValue('I1', 'Веха1');
        $sheet->setCellValue('J1', 'Дата1');
        $sheet->setCellValue('K1', 'Веха2');
        $sheet->setCellValue('L1', 'Дата2');
        $sheet->setCellValue('M1', 'Веха3');
        $sheet->setCellValue('N1', 'Дата3');
        $sheet->setCellValue('O1', 'Веха4');
        $sheet->setCellValue('P1', 'Дата4');
        $sheet->setCellValue('Q1', 'Веха5');
        $sheet->setCellValue('R1', 'Дата5');
        $sheet->setCellValue('S1', 'Веха6');
        $sheet->setCellValue('T1', 'Дата6');
        $sheet->setCellValue('U1', 'Веха7');
        $sheet->setCellValue('V1', 'Дата7');
        $sheet->setCellValue('W1', 'Веха8');
        $sheet->setCellValue('X1', 'Дата8');
        $sheet->setCellValue('Y1', 'Веха9');
        $sheet->setCellValue('Z1', 'Дата9');
        $sheet->setCellValue('AA1', 'Веха10');
        $sheet->setCellValue('AB1', 'Дата10');
        $sheet->setCellValue('AC1', 'Веха11');
        $sheet->setCellValue('AD1', 'Дата11');
        $sheet->setCellValue('AE1', 'Веха12');
        $sheet->setCellValue('AF1', 'Дата12');
        $sheet->setCellValue('AG1', 'Веха13');
        $sheet->setCellValue('AH1', 'Дата13');
        $sheet->setCellValue('AI1', 'Веха14');
        $sheet->setCellValue('AJ1', 'Дата14');
        $sheet->setCellValue('AK1', 'Веха15');
        $sheet->setCellValue('AL1', 'Дата15');
        $sheet->setCellValue('AM1', 'Веха16');
        $sheet->setCellValue('AN1', 'Дата16');
        $sheet->setCellValue('AO1', 'Веха17');
        $sheet->setCellValue('AP1', 'Дата17');
        $sheet->setCellValue('AQ1', 'Веха18');
        $sheet->setCellValue('AR1', 'Дата18');
        $sheet->setCellValue('AS1', 'Веха19');
        $sheet->setCellValue('AT1', 'Дата19');
        $sheet->setCellValue('AU1', 'Веха20');
        $sheet->setCellValue('AV1', 'Дата20');
        $sheet->setCellValue('AW1', 'Веха21');
        $sheet->setCellValue('AX1', 'Дата21');
        $sheet->setCellValue('AY1', 'Веха22');
        $sheet->setCellValue('AZ1', 'Дата22');
        $sheet->setCellValue('BA1', 'Веха23');
        $sheet->setCellValue('BB1', 'Дата23');
        $sheet->setCellValue('BC1', 'Веха24');
        $sheet->setCellValue('BD1', 'Дата24');
        $sheet->setCellValue('BE1', 'Веха25');
        $sheet->setCellValue('BF1', 'Дата25');
        $sheet->setCellValue('BG1', 'Веха26');
        $sheet->setCellValue('BH1', 'Дата26');
        $sheet->setCellValue('BI1', 'Веха27');
        $sheet->setCellValue('BJ1', 'Дата27');
        $sheet->setCellValue('BK1', 'Веха28');
        $sheet->setCellValue('BL1', 'Дата28');
        $sheet->setCellValue('BM1', 'Веха29');
        $sheet->setCellValue('BN1', 'Дата29');
        $sheet->setCellValue('BO1', 'Веха30');
        $sheet->setCellValue('BP1', 'Дата30');

        $counterRow = 1;
        foreach ($result as $row) {
            $counterRow++;

            $sheet->setCellValue('A' . $counterRow, $row['id']);
            $sheet->setCellValue('B' . $counterRow, $row['counterparty']);
            $sheet->setCellValue('C' . $counterRow, $row['subject']);
            $sheet->setCellValue('D' . $counterRow, $row['branch']);
            $sheet->setCellValue('E' . $counterRow, $row['username']);
            $sheet->setCellValue('F' . $counterRow, $row['status']);
            $sheet->setCellValue('G' . $counterRow, $row['start_date']);
            $sheet->setCellValue('H' . $counterRow, $row['check_date']);
            $sheet->setCellValue('I' . $counterRow, $row['milestone1']);
            $sheet->setCellValue('J' . $counterRow, $row['date1']);
            $sheet->setCellValue('K' . $counterRow, $row['milestone2']);
            $sheet->setCellValue('L' . $counterRow, $row['date2']);
            $sheet->setCellValue('M' . $counterRow, $row['milestone3']);
            $sheet->setCellValue('N' . $counterRow, $row['date3']);
            $sheet->setCellValue('O' . $counterRow, $row['milestone4']);
            $sheet->setCellValue('P' . $counterRow, $row['date4']);
            $sheet->setCellValue('Q' . $counterRow, $row['milestone5']);
            $sheet->setCellValue('R' . $counterRow, $row['date5']);
            $sheet->setCellValue('S' . $counterRow, $row['milestone6']);
            $sheet->setCellValue('T' . $counterRow, $row['date6']);
            $sheet->setCellValue('U' . $counterRow, $row['milestone7']);
            $sheet->setCellValue('V' . $counterRow, $row['date7']);
            $sheet->setCellValue('W' . $counterRow, $row['milestone8']);
            $sheet->setCellValue('X' . $counterRow, $row['date8']);
            $sheet->setCellValue('Y' . $counterRow, $row['milestone9']);
            $sheet->setCellValue('Z' . $counterRow, $row['date9']);
            $sheet->setCellValue('AA' . $counterRow, $row['milestone10']);
            $sheet->setCellValue('AB' . $counterRow, $row['date10']);
            $sheet->setCellValue('AC' . $counterRow, $row['milestone11']);
            $sheet->setCellValue('AD' . $counterRow, $row['date11']);
            $sheet->setCellValue('AE' . $counterRow, $row['milestone12']);
            $sheet->setCellValue('AF' . $counterRow, $row['date12']);
            $sheet->setCellValue('AG' . $counterRow, $row['milestone13']);
            $sheet->setCellValue('AH' . $counterRow, $row['date13']);
            $sheet->setCellValue('AI' . $counterRow, $row['milestone14']);
            $sheet->setCellValue('AJ' . $counterRow, $row['date14']);
            $sheet->setCellValue('AK' . $counterRow, $row['milestone15']);
            $sheet->setCellValue('AL' . $counterRow, $row['date15']);
            $sheet->setCellValue('AM' . $counterRow, $row['milestone16']);
            $sheet->setCellValue('AN' . $counterRow, $row['date16']);
            $sheet->setCellValue('AO' . $counterRow, $row['milestone17']);
            $sheet->setCellValue('AP' . $counterRow, $row['date17']);
            $sheet->setCellValue('AQ' . $counterRow, $row['milestone18']);
            $sheet->setCellValue('AR' . $counterRow, $row['date18']);
            $sheet->setCellValue('AS' . $counterRow, $row['milestone19']);
            $sheet->setCellValue('AT' . $counterRow, $row['date19']);
            $sheet->setCellValue('AU' . $counterRow, $row['milestone20']);
            $sheet->setCellValue('AV' . $counterRow, $row['date20']);
            $sheet->setCellValue('AW' . $counterRow, $row['milestone21']);
            $sheet->setCellValue('AX' . $counterRow, $row['date21']);
            $sheet->setCellValue('AY' . $counterRow, $row['milestone22']);
            $sheet->setCellValue('AZ' . $counterRow, $row['date22']);
            $sheet->setCellValue('BA' . $counterRow, $row['milestone23']);
            $sheet->setCellValue('BB' . $counterRow, $row['date23']);
            $sheet->setCellValue('BC' . $counterRow, $row['milestone24']);
            $sheet->setCellValue('BD' . $counterRow, $row['date24']);
            $sheet->setCellValue('BE' . $counterRow, $row['milestone25']);
            $sheet->setCellValue('BF' . $counterRow, $row['date25']);
            $sheet->setCellValue('BG' . $counterRow, $row['milestone26']);
            $sheet->setCellValue('BH' . $counterRow, $row['date26']);
            $sheet->setCellValue('BI' . $counterRow, $row['milestone27']);
            $sheet->setCellValue('BJ' . $counterRow, $row['date27']);
            $sheet->setCellValue('BK' . $counterRow, $row['milestone28']);
            $sheet->setCellValue('BL' . $counterRow, $row['date28']);
            $sheet->setCellValue('BM' . $counterRow, $row['milestone29']);
            $sheet->setCellValue('BN' . $counterRow, $row['date29']);
            $sheet->setCellValue('BO' . $counterRow, $row['milestone30']);
            $sheet->setCellValue('BP' . $counterRow, $row['date30']);
        }

        self::saveSpreadSheet($spreadsheet, $branchId);
    }

    private static function saveSpreadSheet(Spreadsheet $spreadsheet, int $branchId = 0)
    {
        $writer = new Xlsx($spreadsheet);

        if (!$branchId) {
            $writer->save(self::$unseparatedExcelFileName);
        } else {
            $name = Branch::findOne($branchId)->name;
            $writer->save(__DIR__ . '/' . $name . '.xlsx');
        }

    }

}