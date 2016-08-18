<?php
error_reporting(-1);
//print !!!!!!65;
$variable='Pune';
$variable2=' is big city';
print ("foo is=> ".$variable.$variable2); // foo is foobar

	
$ip = "123.456.789.000"; // some IP address
$iparr = preg_split("/\./", $ip); 
print "$iparr[0] <br />";
print "$iparr[1] <br />" ;
print "$iparr[2] <br />"  ;
print "$iparr[3] <br />"  ;

$name='asdfasd';
//echo 'Value of Variable Not Defined Using Echo :=>'.$name;
echo '<br>';
print 'Value of Variable Not Defined Using Print:=>';
if(print $name)
{
	echo '$name exist';
}
else
{
	echo '$name not found';
}

?>