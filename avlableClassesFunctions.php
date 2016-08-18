<?php
/*function pa($a,$d=0)
{
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	if($d==1) die;
}*/

/**Get all classes in PHP*/

$classes = get_declared_classes();
sort($classes);
echo 'Available Classes in PHP Library = ><br />';
pa($classes);

$functions = get_defined_functions();
sort($functions['internal']);
sort($functions['user']);
echo 'Available Functions in PHP Library = ><br />';
pa($functions);
echo 'Available Constants in PHP Library = ><br />';
pa(get_defined_constants(true));
pa(date(DATE_RSS));