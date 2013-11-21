<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Login</title>

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

   	<div class="navbar navbar-warna navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">LOGIN</a>
          <a class="btn btn-danger navbar-btn" href="../tugas rumah/?m=Logout">MENU UTAMA</a>
        </div>
       </div>
    </div>
<?php
	function init_login(){
		//simulasi data account nama dan password
		$nama = 'admin';
		$pass = 'admin';
		session_start();
		if(isset($_POST['nama']) && isset($_POST['pass'])){
			$n = trim($_POST['nama']);
			$p = trim($_POST['pass']);
			
			if(($n === $nama) && ($p===$pass)){
				//jika sama,set cookie
				$_SESSION['login']=$n;
				//redireksi
				?>
				<script type="text/javascript">
					document.location.href="./";
				</script>
				<?php
			}else{
				echo '<h1 style="margin:10px auto;text-align:center;">nama/password tidak sesuai</h1>';
				return false;
			}
		}
	}
	function validate(){
		if(!isset($_SESSION['login'])){
			?>
		<div class="container">
	<div class="inner">
	<form action="" method="post">
	<table border=0 cellpadding=5>
		<tr>
			<td><label>Nama</label></td>
			<td><input type="text" class="form-control" placeholder="Masukkan Nama " name="nama" /></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td><input type="password" class="form-control" placeholder="Masukkan Password " name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="LOGIN" /></td>
		</tr>
	</table>
	</form>
	</div>

	<hr>
 <!-- footer -->
      <footer>
        <p>&copy; Khatimatun Husna PTI C 2011</p>
      </footer>
</div>
			<?php
			exit;
		}
		if(isset($_GET['m']) && $_GET['m'] == 'Logout'){
			//hapus cookie
			if(isset($_SESSION['login'])){
				unset($_SESSION['login']);
				session_destroy();
			}
			
			//redireksi halaman
			?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
			<?php
		}
	}
?>
</body>
</html>
