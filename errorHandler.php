<?php

/*function my_custom_err_handler($number, $string, $file, $line, $context)
{
	// $number: This is the integar number which defines the Error Reporting Level.
	// $string: This string contains the error description.
	// $file: This defines the file in which error occured. This is optional parameter.
	// $line: This defines the line number on which error occured. This is optional parameter.
	// $context: This one is the last and optional parameter. This will contain an array of every variable that existed in the scope the error was triggered in.
	echo 'Level Of Error:-'.$number.'<br>';
	echo 'Error Description:-'.$string.'<br>';
	echo 'File Name:-'.$file.'<br>';
	echo 'Line Number:-'.$line.'<br>';	
}
$old_error_handler = set_error_handler("myErrorHandler");
$a='error handler example';

echo $a;*/

function catch_fatal_error()
{
  // Getting Last Error
  $last_error =  error_get_last();
  
  // Check if Last error is of type FATAL
  if(isset($last_error['type']) && $last_error['type']==E_ERROR)
  {  
    echo 'erorres:-- we are in error function.';
  }

}
register_shutdown_function('catch_fatal_error');

require("non_exist_file.php");


echo $php_errormsg;