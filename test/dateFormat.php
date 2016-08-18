<?php
abstract class dateFormat 
{ 
    public static $date_format = 'm/d/Y';
    public static $store_format = 'Y-m-d';


    public static function covertToMysqlFormat($date)
    {
        return date(self::$store_format, strtotime($date));
    }

    public static function covertToUserFormat($date)
    {
        return date(self::$date_format, strtotime($date));
    }
}

//echo date('d M,Y', strtotime(str_replace(array('/',' '),'-','31 07/2013')));
echo date('d M,Y', strtotime('31/07/2013'));

?>