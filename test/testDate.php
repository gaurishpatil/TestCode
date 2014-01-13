<?php
	$cnt=400;
	if($cnt<400) echo 'ressasdf';
	define('a',100);
	$a=100;
	//a=200;
	echo time().'<br>';sleep(5);
	echo a;
	
	echo date('m/d/Y',strtotime('now'));
	
	$var=array(1, 2, array("a", "b", "c"));
	var_dump($var);
	$b = 3.1;
	$c = true;
	var_dump($b, $c);
	$output = print_r($var, true);
	echo $output;
	
	echo time();
	exit;
?> 