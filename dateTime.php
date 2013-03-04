<?php
	
   $timezone = "Asia/Calcutta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
echo date('Y-m-d H:i:s');

echo date('d-M-y',strtotime('06-02-13'));
