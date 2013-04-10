<?php
class Foo
{
    public static $my_static = 'static Values';

    public function staticValue() {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$my_static;
    }
}


$foo = new Foo();

print 'FIrst=>'.$foo->staticValue() . "<br>";

print $foo->my_static . "\n";      // Undefined "Property" my_static 

print 'FIrst=>'.$foo::$my_static . "<br>";
$classname = 'Foo';
print 'FIrst=>'.$classname::$my_static . "<br>"; // As of PHP 5.3.0

print 'FIrst bar=>'.Bar::$my_static . "<br>";
$bar = new Bar();
print $bar->fooStatic() . "\n";


Foo::$my_static='New Static Value';
echo Foo::staticValue();
print 'FIrst=>'.Foo::$my_static . "<br>";
?>