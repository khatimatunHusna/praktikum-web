<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>KALKULATOR SEDERHANA</title> <!-- Judul tab -->
</head>

<style type="text/css">
body{
	background-color:#DCDCDC;
	color:#9ACD32;
	font-family:Jokerman;
}	<!-- untuk pengaturan seluruh halaman -->

h1{
	margin-left:100px; 
} <!-- untuk pengaturan judul -->

h3{
	color:#888888;
	margin-top:50px;
	position:fixed; 
	margin-left:22%;
} <!-- pengaturan huruf pada textbox -->

.equal:hover{
	cursor:pointer; 
}

#Input1, #Input2, #hasil{
	height:40px;
	width:175px;
	font-size:18px; 
	color:#FFA500; 
} <!-- pengaturan angka pada textbox -->

#operator,#equal{
	height:40px;
	width:50px;
	font-size:25px;
} <!--pengaturan operator -->

</style>

<body>
	<div id="kotak" align="center">
        <div id="judul" align="center">
    		<h1>KALKULATOR SEDERHANA</h1>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			
            	<tr align="center" style="color:#0099FF;"> <!-- untuk input angka pertama -->
                	<td width="10%" style="background:#666666"><input  id="Input1" type="number" name="Input1" 
                    value="<?php
							echo isset($_POST['Input1'])?$_POST['Input1'] : ''; 
						?>" required placeholder="Masukkan Angka" /></td> <!-- prefilling input angka pertama -->
                        
                    <td width="5%" style="background:#666666"> 
                    <select id="operator" name="operator"> <!-- combobox untuk operator-->
                    	<option></option>
                    	<option value="+" 
						<?php if (isset($_POST['operator']) && $_POST['operator']=='+')
						{
							echo "selected";
						} ?>>+</option> <!-- Pengaturan operator penjumlahan -->
                        <option value="-"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='-') 
						{
							echo "selected";
						} ?>>-</option> <!-- Pengaturan operator pengurangan -->
                        <option value="*"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='*') 
						{
							echo "selected";
						} ?>>*</option> <!-- Pengaturan operator perkalian -->
                        <option value="/"  
						<?php if (isset($_POST['operator']) && $_POST['operator']=='/')
						{
							echo "selected";
						} ?>>/</option <!-- Pengaturan operator pembagian-->
                    </select>
                    	
                    </td>
					<!-- untuk input angka yang kedua -->
                    <td width="10%" style="background:#666666"><input id="Input2" type="number" name="Input2" 
					value="<?php
							echo isset($_POST['Input2'])?$_POST['Input2'] : '';
						?>" required placeholder="Masukkan Angka" /></td> <!-- prefilling input angka kedua--> 
                    
					 <?php
					 	//pernyataan if untuk memeriksa apakah masukan berua angka
                        if(isset($_POST['Input1']) or isset($_POST['Input2']) ){
                        $Input1 = $_POST['Input1']; 
                        $Input2 = $_POST['Input2']; 
                        }else{
                        $Input1 = "0"; 
                        $Input2 = "0";
                        } 
						
                        if(isset($_POST['operator'])){
                        $operator =$_POST['operator'];
                        }else
						{
							$operator ="0";
                        }
                        switch($operator){
						case "+": //operasi penjumlahan
                            $hasil = $_POST["Input1"] + $_POST["Input2"];
                        	break;
                        case "-": //operasi pengurangan
                            $hasil = $_POST["Input1"] - $_POST["Input2"];
                        	break;
                        case "*": //operasi perkalian
                            $hasil = $_POST["Input1"] * $_POST["Input2"];
                        	break;
                        case "/": //operasi pembagian
                            $hasil = $_POST["Input1"] / $_POST["Input2"];
                       		break;
						default : //jika operator tidak dipilih, maka hasilnya kosong
							break;
                        }
                    ?>
                    
                    <td><input id="equal" type="submit" class="equal" value="=" name="equal" /></td>  <!-- Button submit -->
                    <td><input id="hasil" type="text" name="hasil" value="<?php echo $hasil;?>"placeholder="Hasil" /><!-- prefilling untuk textbox hasil -->
					</td> 
                </tr>
            </form>
            </table>
    	</div>
    </div>
</body>
</html>
