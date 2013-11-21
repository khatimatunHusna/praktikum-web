<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Administrator </title>

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
          <a class="navbar-brand" href="#">Halaman Admin</a>
          <a class="btn btn-danger navbar-btn" href="../login/?m=Logout">LOGOUT</a>
         
        </div>
       </div>
    </div>
<?php
	/**
	 * Funsi utama untuk menangani pengolahan data
	 * @param string root parameter menu
	 */
	
	function data_handler($root){
		if(isset($_GET['act']) && $_GET['act'] == 'add'){
			data_editor($root);
			return;
		}
		
		$sql = 'SELECT COUNT(*) AS total FROM ' .MHS;
		$res = mysql_query($sql);
		
		//jika data di tabel ada
		if(mysql_num_rows($res)){
			if(isset($_GET['act']) && $_GET['act'] != ''){
				switch($_GET['act']){
					case 'edit':
						if (isset($_GET['id']) && ctype_digit($_GET['id'])){
							data_editor($root,$_GET['id']);
						}else{
							show_admin_data($root);
						}
					break;
					case 'view':
						if (isset($_GET['id']) && ctype_digit($_GET['id'])){
							data_detail($root,$_GET['id']);
						}else{
							show_admin_data($root);
						}
					break;
					case 'del':
						?>
						<script type="text/javascript">
							var dlt=confirm("Hapus Data Dengan id <?php echo $_GET['id']; ?> ?");
							if(!dlt){
								document.location.href="./";
							}else{
								<?php
								if (isset($_GET['id']) && ctype_digit($_GET['id'])){
								//key untuk menghapus data
								$id = $_GET['id'];
					
								//lengkapi pernyataan sql hapus data
								$sql = 'DELETE FROM mahasiswa WHERE nim='.$id;
								$res = mysql_query($sql);
									if($res){?>
											document.location.href="./";
									<?php
									}else{
										echo 'Gagal Menghapus Data';
									}
								}else{
									show_admin_data($root);
								}
								?>
							}
						</script>
						<?php
					break;
					default:
						show_admin_data($root);
				}
			}else{
				show_admin_data($root);
			}
			@mysql_close($res);
		}else{
			echo 'Data tidak ditemukan';
		}
	}
	
	/**
	 * Fungsi untuk menampilkan menu administrasi
	 * @param string root parameter menu
	 */
	 
	function show_admin_data($root){ ?>
		<h1 style="text-align:center">Simulasi Halaman Admin</h1>
		
		<h2 class="heading">Administrasi Data</h2>
		
		<?php
		$sql = 'SELECT nim, nama, alamat FROM ' .MHS;
		$res = mysql_query($sql);
		
		if($res){
			$num = mysql_num_rows($res);
			if($num){?>
				<div class="tabel">
					
					<a class="btn btn-info" href="<?php echo $root;?>&amp;act=add">Tambah Data</a> <br><br>
					

					<table  class="table table-bordered" width="700" cellpadding="4" cellspacing="0">
						<tr class="active">
							<th>#</th>
							<th width="5">NIM</th>
							<th width="5">Nama</th>
							<th width="5">Alamat</th>
							<th width="5">Menu</th>
						</tr>
						<?php
						$i=1;
						while($row=mysql_fetch_row($res)){
							$bg = (($i % 2) != 0) ? '' : 'even';
							$id = $row[0];?>
							<tr class="<?php echo $bg;?>">
								<td width="2%"><?php echo $i;?></td>
								<td>
									<a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id;?>" title="Lihat Data"><?php echo $id;?></a>
								</td>
								<td><?php echo $row[1];?></td>
								<td><?php echo $row[2];?></td>
								<td align="left">
								 <a class="btn btn-primary" href="<?php echo $root;?>&amp;act=edit&amp;id=<?php echo $id;?>">Edit</a>
								 <a class="btn btn-warning" href="<?php echo $root;?>&amp;act=del&amp;id=<?php echo $id;?>">Hapus</a> 
								</td>
							</tr>
							<?php
							$i++;
						}
						?>
					</table>
				</div>
				<?php
			}else{
				echo 'Belum ada data, isi <a href="'.$root.'&amp;act=add">di sini</a>';
			}
			@mysql_close($res);
		}
	}
	
	/**
	 * Fungsi untuk menampilkan detail data mahasiswa 
	 * @param string root parameter menu
	 * @param integer id nim mahasiswa
	 */
	 
	 function data_detail($root, $id){
	 	$sql = 'SELECT nim, nama, alamat FROM '.MHS.' WHERE nim='.$id;
		$res = mysql_query($sql);
		if($res){
			if(mysql_num_rows($res)){?>
				<div class="tabel">
					<table border="1" width="700" cellpadding="4" cellspacing="0">
						<?php $row = mysql_fetch_row($res); ?>
						<tr>
							<td>NIM</td>
							<td><?php echo $row[0]; ?></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><?php echo $row[1]; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?php echo $row[2]; ?></td>
						</tr>
					</table>
				</div>
				<?php	
			}else{
				echo 'Data Tidak Ditemukan';
			}
			@mysql_close($res);
		}
	 }
	 
	 /**
	  * Fungsi untuk menghasilkan form penambahan/pengubahan 
	  * @param string root parameter menu
	  * @param integer id nim mahasiswa
	  */
	  
	function data_editor($root, $id = 0){
		$view = true;
		if(isset($_POST['nim']) && $_POST['nim']){
			//jika tidak disertai id, berarti insert baru
			if(!$id){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
				$res = mysql_query($sql);
				if($res){?>
				<script type="text/javascript">
					document.location.href="<?php echo $root; ?>";	
				</script>
				<?php
				}else{
					echo 'Gagal menambah data';
				}
			}else{
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$sql = "UPDATE mahasiswa SET nim='".$nim."', nama='".$nama."', alamat='".$alamat."' WHERE nim='".$id."'";
				$res = mysql_query($sql);
				if($res){?>
				<script type="text/javascript">
					document.location.href="<?php echo $root; ?>";	
				</script>
				<?php
				}else{
					echo 'Gagal Memodifikasi';
				}
			}
		}
		
		//Menyiapkan data untuk updating
		if ($view){
			if ($id){
				$sql = 'SELECT nim, nama, alamat FROM '.MHS.' WHERE nim='.$id;
				$res = mysql_query($sql);
				if($res){
					if(mysql_num_rows($res)){
						$row = mysql_fetch_row($res);
						$nim = $row[0];
						$nama = $row[1];
						$alamat = $row[2];
					}else{
						show_admin_data();
						return;
					}
				}
			}else{
				$nim = @$_POST['nim'];
				$nama = @$_POST['nama'];
				$alamat = @$_POST['alamat'];
			}
			?>
			<h2><?php echo $id ? 'Edit' : 'Tambah';?> Data</h2>
			<form action="" method="post">
				<table  table border=0 cellpadding=5>
					<tr>
						<td ><label>NIM* : </label></td>
						<td><input type="text" class="form-control" placeholder="Masukkan NIM " name="nim" size="60" value="<?php echo $nim;?>" /> </td>
					</tr>
					<tr>
						<td><label>Nama : </label></td>
						<td><input type="text" class="form-control" placeholder="Masukkan Nama "name="nama" size="60" value="<?php echo $nama;?>" /> </td>
					</tr>
					<tr>
						<td><label>Alamat : </label></td>
						<td><input type="text" class="form-control" placeholder="Masukkan Alamat " name="alamat" size="60" value="<?php echo $alamat;?>" /> </td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-success" type="submit" value="Submit" /> <input class="btn btn-warning" type="button" value="Cancel" onClick="history.go(-1)" /></td>
					</tr>
				</table>
			</form>
			<br />
			<p>Ket: * Harus diisi</p>
			<?php
		}  	
		return false;
	}
	
	
?>
</body>
</html>