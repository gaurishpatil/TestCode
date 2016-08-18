<?php
class foo
{
    public function something()
    {
        echo __CLASS__; // foo
        var_dump($this);
    }
}

class foo_bar extends foo
{
    public function something()
    {
        echo __CLASS__; // foo_bar
        var_dump($this);
    }
}

class foo_bar_baz extends foo_bar
{
    public function something()
    {
        echo __CLASS__; // foo_bar_baz
        var_dump($this);
    }

    public function call()
    {
        echo self::something(); // self
        echo parent::something(); // parent
        echo foo::something(); // grandparent
    }
}

class foo_bar_ba extends foo_bar
{
    public function display()
    {
        echo parent::something();

    }
}

$obj= new foo_bar_ba;
$obj->display();

$obj2 = new foo_bar_baz;
$obj2->call();

