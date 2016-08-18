<?php
class MyClass 
{

	function __construct()
	{
		print "In constructor<br />";
		$this->name = "MyClass obj explicity";
	}
 
	function __destruct()
	{
		print "Destroying=>" . $this->name . "\n";
	}
} 
$obj = new Myclass(); 

