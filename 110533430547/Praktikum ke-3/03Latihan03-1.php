<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Radio Button</title> 
</head>

<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	Jenis Kelamin
	<input type="radio" name="sex" value="Pria" />Pria	<!--deklarasi salah satu pilihan radio button, yaitu variabel 'sex' dengan nilai 'Pria'-->
	<input type="radio" name="sex" value="Wanita" />Wanita <br />	<!--variabel 'sex' dengan nilai 'Wanita'-->
	
	<input type="submit" value="OK" >
</form>

<?php
//pemanggilan forms
if(isset($_POST['sex'])){
	echo $_POST['sex'];
}
?>

</body>
</html>