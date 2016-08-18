<?php
	error_reporting(-1);
	ini_set('memory_limit', '3055M');
	set_time_limit(0);
	require_once('PHPExcel/PHPExcel.php');
	
	$file=getcwd().'/upload/Book4.xlsx';
	$objReader = PHPExcel_IOFactory::createReader('Excel2007');
	$objPHPExcel = $objReader->load($file); //$file --> your filepath and filename

	$objWorksheet = $objPHPExcel->getActiveSheet();
	$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
	$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

	$csv='';
	mysql_connect('localhost','root','');
    mysql_select_db('matchingapp');
	$fp = fopen(getcwd().'/upload/Book4.csv', 'a+');
	for ($row = 1; $row <= $highestRow; ++$row) {        
	//for ($row = 1; $row <= 5; ++$row) {        
		//$csv=array();
		$csv='';
		for ($col = 0; $col <= $highestColumnIndex; ++$col) {
			if($objWorksheet->getCellByColumnAndRow($col, $row)->getValue()=='') 
			{
				$csv=mb_substr($csv, 0, -1);				
				$csv.="\r\n";
			}	
			else $csv.='"'.$objWorksheet->getCellByColumnAndRow($col, $row)->getValue().'", ';
						
			//array_push($csv,'"'.$objWorksheet->getCellByColumnAndRow($col, $row)->getValue().'"');                
		}
		
		/*if(mysql_query('insert into properties_d30 values('.$csv.')'))
		   $msg.=$c.'=>successfully<br>';*/
		pa($csv,1);
		//fputcsv($fp, $csv); 
		fwrite($fp, $csv); 
		
		unset($csv);
	}
	//pa($msg);
	
?>