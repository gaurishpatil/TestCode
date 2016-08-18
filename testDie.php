<?php
	$a=NULL;
	
	display($a) or die('value not set');
	function display($a)
	{
		if(isset($a)) return $a;
		else return false;
	}
?>