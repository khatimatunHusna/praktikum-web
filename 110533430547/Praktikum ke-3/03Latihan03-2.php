<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Prefill Data Radio Button</title> 
</head>

<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	Jenis Kelamin
	
	<!--bagian di bawah ini prefilling radio button-->
	<input type="radio" name="sex" value="Pria" checked		
	<?php
	if($_POST['sex'] == 'Pria'){
		echo 'checked="checked"';
	}
	?>
	/>Pria
	
	<input type="radio" name="sex" value="Wanita" checked
	<?php
	if($_POST['sex'] == 'Wanita'){
		echo 'checked="checked"';
	}
	?>
	/>Wanita <br />

		<input type="submit" value="OK" >
</form>

<?php
//pemanggialn form
if(isset($_POST['sex'])){
	echo $_POST['sex'];
}
?>

</body>
</html>