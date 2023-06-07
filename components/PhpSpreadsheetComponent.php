<?php

namespace app\components;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Yii;
use yii\base\Component;

class PhpSpreadsheetComponent extends Component {
    
    public function importExcel($file){
        // Import the Excel file
        $spreadsheet = IOFactory::load($file);

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Get the highest row and column indexes
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        // Initialize an array to store the data
        $data = [];

        // Iterate through each row of the sheet
        for ($row = 1; $row <= $highestRow; $row++) {
            // Iterate through each column of the row
            for ($col = 'A'; $col <= $highestColumn; $col++) {
                // Get the cell value
                $cell = $sheet->getCell($col . $row);
                $cellValue = $cell->getValue();

                // Check if the cell value is a date
                if ($cell->getDataType() === DataType::TYPE_NUMERIC && Date::isDateTime($cell)) {
                    // Convert the date value to a PHP DateTime object
                    $cellValue = Date::excelToDateTimeObject($cellValue);
                }

                // Add the cell value to the data array
                $data[$row][$col] = $cellValue;
            }
        }

        return $data;
    }

    public function exportExcel($data, $filename) {
        $spreadsheet = new Spreadsheet();
        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        // Set the data to the sheet
        foreach ($data as $row => $rowData) {
            foreach ($rowData as $col => $cellData) {
                // Check if the cell data is a DateTime object
                if ($cellData instanceof \DateTime) {
                    // Format the date value as desired
                    $cellData = $cellData->format('Y-m-d');
                    
                    // Create a cell with date format
                    $sheet->setCellValueExplicit($col . $row, $cellData, DataType::TYPE_STRING);
                    $sheet->getStyle($col . $row)
                        ->getNumberFormat()
                        ->setFormatCode(NumberFormat::FORMAT_DATE_YYYYMMDD2);
                } else {
                    // Add the cell data as usual
                    $sheet->setCellValue($col . $row, $cellData);
                }
            }
        }

        // Set custom styling
        $sheet->getStyle('A1:Z100')->applyFromArray([
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFCCCCCC'],
            ],
        ]);

        // Set the filename and save the Excel file
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($filename);
    }
}
