<?php
require_once('PHPExcel/PHPExcel.php');
ini_set('memory_limit', '4024M');
	set_time_limit(0);
$input_xlsx = getcwd().'/upload/Book3.xlsx';
 
// The file to which you want to export the CSV data
$output_csv = getcwd().'/upload/Book3'.time().'.csv';
 
// This opens the Excel file with PHPExcel and then exports it to CSV
$objPHPExcel = PHPExcel_IOFactory::load($input_xlsx);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
$objWriter->save($output_csv);

?>