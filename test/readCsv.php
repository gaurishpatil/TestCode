<?php
	$fp = fopen('Column.csv','r') or die("can't open file");
	//$fp = fopen('Column2.csv','r') or die("can't open file");
	
	while($csv_line = fgetcsv($fp)) {
		echo str_replace(array('.','?'),'',str_replace(' ','_',strtolower($csv_line[0]))).' varchar(200) NOT NULL,<br>';
		//echo "'".$csv_line[0].",<br>";
	}
	
?>