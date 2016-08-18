<?php
unset($_SESSION['ERRMSG_ARR']);
require_once('includes/include.php');
ini_set('memory_limit', '-1');
if(isset($_FILES['userfile']['name'])) {
    
    $obj = new MyExcel();
    $result = $obj->readmyExcel(basename($_FILES['xlsxfile']['name']),$_POST['throttle']);
    
    if (isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != '') {
        header('location: bofa-uploadproperties.php');
    } else {
        header("location: list.php");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BofA</title>
<link href="style/loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	if (isset($_SESSION['SESS_USER_TYPE']) && $_SESSION['SESS_USER_TYPE']==9) { 
		require_once('includes/menu_bofa.php');
	} else{
		require_once('includes/menu_assetuser.php');
	}	?>
<a href='sample.php?p=true'>Download Sample Properties File</a>
<p>This is a password protected area only accessible to members of Bank Of America. </p>
<table width="500" border="1" align="center" cellpadding="1" cellspacing="0" height="300">
  <tr>
    <td valign="top">
 <table width="100%"  border="0" cellspacing="1" cellpadding="5">
 <tr>
  <td colspan="2" valign="top">
  <?php if (isset($_SESSION['error_msg']) && $_SESSION['error_msg'] != '') { ?>
      <span><?php echo $_SESSION['error_msg'];?></span>
  <?php } ?>
  <h3>Upload File</h3>
  <?php  if (isset($error)) echo $error; ?>
  <form action="" method="post" enctype="multipart/form-data" name="form1">
   <p>
    <input name="xlsxfile" type="file" id="xlsxfile" size="45">
   </p>
   <input type="hidden" name="throttle" id="throttle" value="0" onkeyup="this.value=this.value.replace(/[^\d]/,\'\')"  size="5">
   <p>
    <input type="submit" name="Submit" value="Upload">
   </p>
  </form>
  </td>
    </tr>
    </table>
    </td>
</tr>
</table>
</body>
</html>
