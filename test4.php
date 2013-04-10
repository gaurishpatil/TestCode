<?php
$a = 1;
$b = 556;

function Sum1()
{
    global $a, $b;

    $c = $a + $b;
} 

Sum1();
global $c;
echo 'Global C'.$c.'<br>';

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
Sum();
echo $b;

?>