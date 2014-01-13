<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.jcryption.js"></script>
		<script type="text/javascript">
			
			$(function() {
				var hashObj = new jsSHA("mySuperPassword", "ASCII");
				var password = hashObj.getHash("Niyuj", "HEX");alert(password);


			});
		</script>
<?php
	require_once("jcryption.php");
	$jCryption = new jCryption();
	echo $jCryption->decrypt();
?>		
		