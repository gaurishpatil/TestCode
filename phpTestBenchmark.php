<?php
	$r = 10 * 1000 * 1000;
$start = microtime(true);
 
while($r-- > 0) {
    new StdClass();
}
 
$finish = microtime(true);
echo "time taken: " . ($finish - $start) . "\n";
?>