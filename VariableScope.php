<?php
$a=1; /* global scope */ 

function test()
{ 
    //global $a; /* reference to local scope variable */ 
	//echo $a;
	echo $GLOBALS['a'];
} 

test();

///this is change


?>