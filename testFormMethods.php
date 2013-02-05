<?php
	error_reporting(-1);
	if(isset($_GET['Submit']) && $_GET['Submit']=='Submit')
	{
		//echo $_GET;
		echo '<pre>';
		print_r($_GET);
		echo '</pre>';
	}
?>
<form action="testFormMethods.php" method="GET">
<input type="text" name="test[]" />
<input type="text" name="test[]" />
<input type="text" name="test[]" />
<input type="submit" name="Submit" value="Submit" />

</form>