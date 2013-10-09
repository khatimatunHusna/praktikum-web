<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Metode POST</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">	<!--disini deklarasi metode yang digunakan yaitu POST-->
Nama
<input type="text" name="nama" /> <br />	<!--deklarasi tipe masukan data yaitu text-->
<input type="submit" value="OK" />	<!--untuk membuat tombol OK untuk men-submit masukan-->
</form>

<?php

if (isset($_POST['nama'])) {
echo 'Hallo, ' . $_POST['nama'];	//memanggil nama yang telah diinputkan pengguna
}

?>

</body>
</html>