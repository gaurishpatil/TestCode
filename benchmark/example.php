<?php

require 'benchmark.php';

// a place to store the result of each test
$results = array();

// my version of un-camel casing a word
function test_1() {
  return strtolower(implode(' ', preg_split('/(?<=\\w)([A-Z])/', 'aCamelCasedWord')));
}

// CakePHP's version of un-camel casing a word
function test_2() {
  return strtolower(preg_replace('/(?<=\\w)([A-Z])/', '_\\1', 'aCamelCasedWord'));
}

function test3()
{
	echo 'in echo '.$a='TEst';
}

function test4()
{
	print 'in print'.$a='TEst';
}

/**
 * @param title
 * @param function/test
 * @param allowed time to run
 */
$results[] = Benchmark::run_test('My Version', 'test_1', 10);
$results[] = Benchmark::run_test('Cake\'s Version', 'test_2', 10);

foreach( $results as $result )
  echo $result;
?>