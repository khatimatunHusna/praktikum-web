<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Seleksi Preselecting</title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	 Hobby
	 <select name="hobby">
		<option value="Menyanyi"
		<?php
		if($_POST['hobby'] == 'Menyanyi'){
		echo 'selected="seleted"';		//perintah preselecting
	}
	?>
	/>Menyanyi
		<option value="Olahraga"
		<?php
		if($_POST['hobby'] == 'Olahraga'){
		echo 'selected="seleted"';
	}
	?>
	/>Olahraga
		<option value="Membaca"
		<?php
		if($_POST['hobby'] == 'Membaca'){
		echo 'selected="seleted"';
	}
	?>
	/>Membaca
		<option value="Belanja"
		<?php
		if($_POST['hobby'] == 'Belanja'){
		echo 'selected="seleted"';
	}
	?>
	/>Belanja
	
	 </select> <br />
	 
	 <input type="submit" value="OK" >
</form>

<?php
//memanggil form
if(isset($_POST['hobby'])){
	echo $_POST['hobby'];
}
?>

</body>
</html>