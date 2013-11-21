<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Menciptakan Tabel</title>
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
	
	$sql = 'CREATE TABLE mahasiswa (
			nim VARCHAR(12) NOT NULL,
			nama VARCHAR(40) NOT NULL,
			alamat VARCHAR(100),
			PRIMARY KEY (nim)
			) ENGINE=MyISAM;';
			
	$res = mysql_query($sql);
	
	if ($res) {
		echo 'Tabel Created';
		mysql_close($res);
	} else {
		echo mysql_error();
	}
	
?>

</body>
</html>