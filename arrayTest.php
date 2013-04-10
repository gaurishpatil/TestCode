<?php
$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

$result=array_diff($a1,$a2);
print_r($result);

//A simple array_combine() example
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
print_r($fruits);

$data = array("hero" => "Holmes", "villain" => "Moriarty");
while (list($key, $value) = each($data)) {
	echo "$key: $value \n";
}
?>