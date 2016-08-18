<?php
	error_reporting(-1);
	ini_set('memory_limit', '3055M');
	set_time_limit(0);
include 'simplexlsx.class.php';

//$xlsx = new SimpleXLSX('countries_and_population.xlsx');
$xlsx = new SimpleXLSX('D30_8-8-13.xlsx');
	if ($xlsx->success())
		pa( $xlsx->rows() );
	else
		echo 'xlsx error: '.$xlsx->error();
	die;	

echo '<table cellpadding="10">
<tr><td valign="top">';

// output worsheet 1

list($num_cols, $num_rows) = $xlsx->dimension();

echo '<h1>Sheet 1</h1>';
echo '<table>';
foreach( $xlsx->rows() as $r ) {
	echo '<tr>';
	for( $i=0; $i < $num_cols; $i++ )
		echo '<td>'.( (!empty($r[$i])) ? $r[$i] : '&nbsp;' ).'</td>';
	echo '</tr>';
}
echo '</table>';

echo '</td><td valign="top">';

// output worsheet 2

list($num_cols, $num_rows) = $xlsx->dimension(2);

echo '<h1>Sheet 2</h1>';
echo '<table>';
foreach( $xlsx->rows(2) as $r ) {
	echo '<tr>';
	for( $i=0; $i < $num_cols; $i++ )
		echo '<td>'.( (!empty($r[$i])) ? $r[$i] : '&nbsp;' ).'</td>';
	echo '</tr>';
}
echo '</table>';

echo '</td></tr></table>';

?>