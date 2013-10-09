<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Prefilling Text Field</title>
</head>

<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">	<!--disini deklarasi metode yang digunakan yaitu POST-->
Nama
<input type="text" name="nama"	<!--deklarasi tipe masukan data yaitu text-->
	value="<?php
	echo isset($_POST['nama']) ? $_POST['nama'] : '';
	?>"
/> <br />

<input type="submit" value="OK" />	<!--untuk membuat tombol OK untuk men-submit masukan-->
</form>

<?php
if(isset($_POST['nama'])){
	echo $_POST['nama'];
}
?>

</body>
</html>