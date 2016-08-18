<?php
	error_reporting(-1);
	$dbname = 'sundaydriver';
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';

	$backup_file = $dbname .'-'. date("Y-m-d-H-i-s") . '.sql';
	$command = "mysqldump -h $dbhost -u $dbuser -p $dbpass ".
			   "$dbname > $backup_file";

	system($command);
?>