<script type="text/javascript" src="http://www.gpatil.informedpower.com/home-energy-survey/energy-survey"></script>

<?php
$arr = array(1,2,3,4,5,6,7,8,9);

$string = rtrim(implode(',', $arr), ',');

var_dump($string);

    pa($_SERVER,1);
		function siteURL() {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ||
    $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $domainName = $_SERVER['HTTP_HOST'];
  return $protocol.$domainName;
}
	//pa($_SERVER);
	$var_g='asdf';echo $var_g;
	pa(filter_list());

	echo date('Y-m-d',strtotime('05-Jan-2013 00:00:00')).'asfasd----';

	$email = 'invalid@email';
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "This ($email) email address is not valid.";
	}
	$temp = false;
	var_dump(isset($temp));


	$foo = 5 + "10 Little Piggies"; // $foo is integer (15)
	echo $foo.'<br />';
	$foo = 5 + "456 Small Pigs";     // $foo is integer (15)
	echo $foo.'<br />';

	echo date('m-d').'<br >';
	echo date('Y-01-04').'<br >';
	echo date('Y-m-d',time()+86400*3).'<br />';//tomorrow's date;

    $variableFloat=1234567890123452.4555525;
    echo 'No:---';
    var_dump($variableFloat);

	$dates = array();
	$step = '+1 day';
	$format = 'Y-m-d';
    $current = strtotime(date('Y-m-d',time()-86400*30));
    $last = strtotime(date('Y-m-d',time()+86400*30));

    while( $current <= $last ) {
        $dates[] = date($format, $current);
        $current = strtotime($step, $current);
    }

    pa($dates);

    class A
    {
        public function display()
        {
            echo 'we are in Parent Class';
        }
    }
    class B extends A
    {
        public function display()
        {
            echo 'we are in child class';
        }
        /*public function callParentDisplay()
        {
            parent::display();
        }*/
    }
    $obj= new B;
    $obj->display();
   // $obj->callParentDisplay();


   echo 'Server Variables:- '.$_SERVER['REMOTE_USER'];

   function foo()
	{
		$numargs = func_num_args();
		$numargs = func_get_args();
		echo "Number of arguments: $numargs\n";
	}

		foo(1, 2, 3);
