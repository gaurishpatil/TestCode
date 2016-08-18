<?php
$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

$result=array_diff($a1,$a2);
//print_r($result);

//A simple array_combine() example
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$d = array_merge($a, $b);

print_r($c);echo '<br>';
pa($d);

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
print_r($fruits);echo '<br>';


list($a,$b,$c,$d)=array("hero" ,"Holmes", "villain" , "Moriarty");
echo $a.$b.$c.$d.'<br>';

$data = array("hero" => "Holmes", "villain" => "Moriarty");
while (list($key,$val)=each($data)) {
	echo $key.'=>'.$val;echo '<br>';
}
?>