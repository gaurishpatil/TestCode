<?php
	$name='creoinvent technologies';
	//echo strstr($name,'r');
	
	$email  = 'nameDexample.com';
	$domain = strstr($email, 'De',false);
	echo $domain; // prints @example.com

	$user = stristr($email, 'd'); // As of PHP 5.3.0
	echo $user."<br>"; // prints name
	
	
	$input = array('A: XXX', 'B: XXX', 'C: XXX');

// A simple case: replace XXX in each string with YYY.
echo implode('; ', substr_replace($input, 'YYY', 3, 3))."<br>";

// A more complicated case where each replacement is different.
$replace = array('AAA', 'BBB', 'CCC');
echo implode('; ', substr_replace($input, $replace, 3, 3))."\n";

$variable=NULL;
if(isset($variable))
{
	echo $variable.'is set';
}
else
	echo 'Not set';
	

?>