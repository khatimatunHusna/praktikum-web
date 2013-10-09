<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-trransitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--sebaiknya untuk kode program ini menggunakan browser Mozilla,
kalau mengguankan Chrome, kotak dialog prompt-nya tidak keluar-->

<html>
<head>
   <title>Login Form</title>
</head>

<body onLoad="document.form1.user.focus();"> <!--onLoad memungkinkan kita untuk dapat meletakkan kursor pengguna dalam kotak teks atau menempatkan fokus pada pilih kotak setelah halaman dibuka-->
	
	<!--di bawah ini file js-->
	<script type="text/javascript">
		// Fungsi check digunakan untuk mengecheck kosong atau tidaknya username dan password
		function check()
		{
			if(form1.user.value == "")
			{
				alert('Masukkan Username');
				document.form1.user.focus();
				return false;
			}
			else if(form1.pass.value=="")
			{    
				alert('Masukkan Password');
				document.form1.pass.focus();
				return false;
			}    
		return true;
		}

		// Fungsi Huruf digunakan untuk mengecheck penggunaan selain huruf tidak diperbolehkan
		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event	//sama seperti pernyataan if, jika evt bernilai NULL, windows.event akan dijalankan
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('Username dan Password Harus Huruf ');
				return false;
			}
			return true;
		}
	</script>

<!-- di bawah ini file css-->
<style type="text/css">
#apDiv1 {			
    position:absolute;
    width:373px;
    height:330px;
    z-index:1;
    left: 441px;
    top: 62px;
    background-color: #00FF7F; <!--SpringGreen-->
    border: 2px solid Green;	<!--kenapa ini tidak muncul????-->
	font-family: Comic Sans MS;
	color: #228B22;	<!--warna font, ForestGreen-->
}
#apDiv3 {		
    position:absolute;
    width:80px;
    height:25px;
    z-index:2;
    left: 289px;
    top: 274px;
}
.style3 {	
    font-size: 10px;
    font-weight: bold;
}
#apDiv2 {
    position:absolute;
    width:412px;
    height:115px;
    z-index:2;
    top: 0px;
    left: 2px;
}
#header{		
    width:373px;
    height:98px;  
}
#footer{		
    width:373px;
    height:40px;
}
body {		
    background-color: #3CB371;	<!--MediumSeaGreen-->	
}
#apDiv4 {		
    position:absolute;
    width:409px;
    height:221px;
    z-index:2;
    left: 426px;
    top: 411px;
	font-family: Courier New;
}
</style>

<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="apDiv1">	<!--ini untuk login-->
  <div id="header">
    <br>
	<div align="center"><h2>LOG IN</h2><strong>===================</strong><br>
	</div>
  </div>
   <div>
	<div align="center"><strong><br>Username :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">	<!--kotak dialog peringatan jika yang pengguna masukkan bukan huruf-->
    <br>
    <br>
    <strong>Password : </strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input harus huruf" autocomplete="off" onKeyPress="return Huruf(event)"> <!--kotak dialog peringatan jika yang pengguna masukkan bukan huruf-->
    <br>
    <br>
    </div>
  </div>
  <br>
    <div id="apDiv3">	<!--ini untuk submit-->
     <input type="submit" name="submit" value="LOG IN" >
    </div>
     <br>
  </div>
</form>

<div id="apDiv4">		<!--ini untuk balikan setelah memasukkan Username dan password-->

<?php

// digunakan untuk pengecheckkan apakah isi dari inputan user dan password berupa string dan apakah sudah benar atau tidak
if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='nana')AND($_POST['pass']=='rahasia'))
    {	
		//jika username dan password benar
        echo 'Sukses, Anda Telah Masuk Halaman Administrator Dengan Username : '.$_POST['user'];
        echo '<br><br>Hallo, Mr/Mrs ' . $_POST['user'];
    }
    else 
    {
		//jika salah
        echo "<script>alert ('Terjadi Kesalahan Saat Memasukkan Username dan Password');</script>";
    }
}

?>
</div>

</body>
</html>