<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Menciptakan Database</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/form.css" rel="stylesheet">
		<link href="assets/css/container.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="assets/css/chozen.css" rel="stylesheet">
		<link href="assets/css/demo.css" rel="stylesheet">
		<link href="assets/css/docs.css" rel="stylesheet">
		<link href="assets/css/font-awesome.css" rel="stylesheet">
</head>

<body>

<?php
	require_once './koneksi.php';
	$db = 'myweb';
	$res = mysql_query('CREATE DATABASE ' . $db);
	if ($res) {
		echo 'Database ' .$db. ' Created';
		mysql_close($res);
	} else {
		echo mysql_error();
	}
?>

</body>
</html>