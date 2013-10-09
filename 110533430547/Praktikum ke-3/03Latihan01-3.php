<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Identifikasi Metode</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" /> <br />	<!--deklarasi tipe masukan data yaitu text-->
<input type="submit" value="OK" />	<!--untuk membuat tombol OK untuk men-submit masukan-->
</form>

<?php

if (isset($_REQUEST['nama'])) {
echo 'Hallo, ' . $_SERVER['REQUEST METHOD'];
}

?>

</body>
</html>