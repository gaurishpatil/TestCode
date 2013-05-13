<?php
class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "\n";
    }	
}

echo MyClass::constant . "\n";
$obj= new MyClass;
$obj->showConstant();
?>