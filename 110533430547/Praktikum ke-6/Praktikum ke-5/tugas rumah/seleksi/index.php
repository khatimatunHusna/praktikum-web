<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<table>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" size="40" /></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" size="60" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan" /></td>
				</tr>
			</table>
		</form>
		<?php
			require_once '../koneksi.php';
			//jika field nim dan nama diisi lalu disubmit
			if(isset($_POST['nim']) && isset($_POST['nama'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
					
				//tambahkan data baru ke tabel
				$sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
				$res = mysql_query($sql);
				if($res){
					echo 'Data Berhasil Ditambahkan';
					@mysql_close($res);
				}else{
					echo 'Gagal Menambah Data <br />';
					echo mysql_error();
				}
			}
			echo '<hr />';
			//Memanfaatkan script pengambilan data untuk menampilkan hasil
			require_once './seleksi.php';
		?>
	</body>
</html>