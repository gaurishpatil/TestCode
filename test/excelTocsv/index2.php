<?php

	ini_set('memory_limit', '1024M');
	set_time_limit(0);
	require_once('PHPExcel/PHPExcel.php');
	
	$file=getcwd().'/upload/Book2.xlsx';
	$objReader = PHPExcel_IOFactory::createReader('Excel2007');
	$objPHPExcel = $objReader->load($file); //$file --> your filepath and filename

	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
	$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

	$csv='';
	$fp = fopen(getcwd().'/upload/Book2.csv', 'w');
	for ($row = 2; $row <= $highestRow; ++$row) {        
		$csv=array();
		for ($col = 0; $col <= $highestColumnIndex; ++$col) {                
			array_push($csv,$objWorksheet->getCellByColumnAndRow($col, $row)->getValue());                
		}
		fputcsv($fp, $csv);            
	}
	
?>