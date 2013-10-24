<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<html>
<head>
   <title>Set Cookie</title>
</head>

<body>

<?php

//men-set nilai cookie
setcookie('nama cookie', 'nilai cookie');

//mendapatkan nilai cookie
echo $_COOKIE['nama cookie'];

?>

<p>
Tekan Refresh (F5);

</body>
</html>