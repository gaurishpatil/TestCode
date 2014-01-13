<?php
	
	$currentDate='12/30/2013';
	//$currentDate='01/03/2013';
	$weekSatDate='01/04/2014';
	
    $toDate=$weekSatDate>$currentDate?$currentDate:$weekSatDate;
	
	echo $toDate;
?>