<?php

$string = '   Your Access Token  5fc28e315e93191de7177358f1e0a35432783c36';
$result = str_replace(
  array(' ', 'Your','Access','Token'), 
  array(''), 
  $string
);
var_dump($result);

$name=mb_substr( 'abcabcabc', 0, 8 );
vd($name);

