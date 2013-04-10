<?php
// Show all errors
error_reporting(E_ALL);

$great = 'fantasticATcreoinvent.com';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}<br >";

// Works, outputs: This is fantastic
echo "This is {$great}<br>";
echo "This is {$great}<br>";

echo strstr($great,'AT',false).'<br>';//case sensitive prints: ATcreoinvent.com 
echo strstr($great,'AT',true).'<br>';//case sensitive prints: fantastic
echo stristr($great,'at',false).'<br>';//case insensitive prints: ATcreoinvent.com

echo strpos($great,'AT').'<br>';//case sensitive prints: 9
echo stripos($great,'at').'<br>';//case insensitive prints: 9


$str = "Hello world. It's a beautiful day";
pa(explode(" ",$str));
pa(explode(" ",$str,2));

