<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Checkbox</title> 
</head>

<body>

	<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
	 Hobby
	 <input type="checkbox" name="hobby[]" value="Membaca"
	 <option value="Membaca"
		<?php
		if($_POST['hobby'] == 'Membaca'){
		echo 'checked="checked"';		//perintah preselecting
		}
	 ?>
	 />Membaca
	 
	 <input type="checkbox" name="hobby[]" value="Olahraga"
	 <option value="Olahraga"
		<?php
		if($_POST['hobby'] == 'Olahraga'){
		echo 'checked="checked"';
		}
	 ?>
	 />Olahraga
	 
	 <input type="checkbox" name="hobby[]" value="Menonton Film"
	 <option value="Menonton Film"
		<?php
		if($_POST['hobby'] == 'Menonton Film'){
		echo 'checked="checked"';
		}
	 ?>
	 />Menonton Film
	 
	 <input type="checkbox" name="hobby[]" value="Menyanyi"
	 <option value="Menyanyi"
		<?php
		if($_POST['hobby'] == 'Menyanyi'){
		echo 'checked="checked"';
		}
	 ?>
	 />Menyanyi 
	 
	 <input type="checkbox" name="hobby[]" value="Belanja"
	 <option value="Belanja"
		<?php
		if($_POST['hobby'] == 'Belanja'){
		echo 'checked="checked"';
		}
	 ?>
	 />Belanja <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php 
// Ekstraksi nilai 
if (isset($_POST['hobby'])) { 
  foreach ($_POST['hobby'] as $key => $val) { 
    echo $key . ' -> ' .$val . '<br />'; 
  } 
} 
?> 
 
</body> 
 
</html> 