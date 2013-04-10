<?php
// This is only an example, the numbers below will
// differ depending on your system

echo convert(memory_get_usage(true)).'<br>'; // 123 kb

$a = str_repeat("Hello", 4242);

echo convert(memory_get_usage(true)).'<br>'; // 123 kb

unset($a);

echo convert(memory_get_usage(true)).'<br>'; // 123 kb

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

?>