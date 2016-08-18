<?php
	$s = "This is a Search tesis Search test";
	pa($s);
	$offset = strpos($s, "Search",true);
	
	$sSplit=explode('Search',$s);pa($sSplit);
	
	for($i=0;$cnt=count($sSplit),$i<$cnt;$i++)
	{
		$a.=$sSplit[$i];
		if($cnt==($i+2))
		{
			$a.=' DDDD '.' Search';		
		}	
		else if(isset($sSplit[$i+1]))
		{
			$a=$a.'Search';
		}
		//pa($a);
	}
	
	echo $a;
?>