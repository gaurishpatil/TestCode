<?php

$foo = function($var) 
{
    $b= "Hello $var";
	return $b;
};
$c= $foo('gaurish'); 
echo $c;
class test {
	public function demo()
	{
		echo 'W3e are in';
	}
}
$test= new test;
$test->demo();

?> 