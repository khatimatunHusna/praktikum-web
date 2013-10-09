<?php

$acc_user = 'nana';
$acc_pas = 'nana';
    if (isset($_POST['login']))
{
        $username = $_POST['username']; // diambil dari nama input di form login
        $password = $_POST['password']; // diambil dari nama input di form login
          
        if (($username==$acc_user) && ($password==$acc_pas))
            {
            session_start();
            $_SESSION['user'] = $username;
            echo 'Login berhasil, silahkan lanjutkan......'.
                '<br/>'.
                '<a href="index.script.php">Lanjutkan</a>'.
                '<br/>';
            } else {
            echo 'Username dan password salah'.
                '<br/>'.
                '<a href="login.php">Coba lagi</a>'.
                '<br/>';
            }
        }

?>