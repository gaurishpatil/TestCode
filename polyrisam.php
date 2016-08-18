<?php
error_reporting(-1);

class test{
		public function add()
		{
			$noOfParams=func_num_args();
			$argList=func_get_args();//pa($argList,1);
			switch($noOfParams)
			{
				case 2: return $this->addTwo($argList[0],$argList[1]);break;
				case 3: return $this->concatinateThree($argList[0],$argList[1],$argList[2]);break;
			}
		}
		
		public function addTwo($a,$b)
		{					
			return $a+$b;
		}		
		
		public function concatinateThree($a,$b,$c)
		{				
			return $a.$b.$c;			
		}
}
	
	$test= new test();
	//echo $test->add(4,5);
	//echo $test->add(4,5,6);
	
class childTest extends test{
	public function add()
	{
		echo 'function overriding';
		echo parent::add(5,6);
	}
}	
$testChild= new childTest;
echo $testChild->add(5,8);
?>