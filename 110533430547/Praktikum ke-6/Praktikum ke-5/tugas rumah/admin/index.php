<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Administrator</title>

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
			ini_set('display_errors',1);
			//Meng-include file koneksi dan data handler
			require_once '../koneksi.php';
			require_once './data_handler.php';
			
			//Konstanta nama tabel
			define('MHS', 'mahasiswa');
			
			//Memanggil fungsi data handler
			data_handler('?m=data');
		?>
	</body>
</html>
