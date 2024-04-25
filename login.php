<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST['umur'];
if($email == "Razaq@usm.ac.id" && $password == "367" && $umur >=16 && $umur <=44){ 
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/PRAKTEKWEB/dashboard.php');
}else{
    header('Location: http://localhost/PRAKTEKWEB/index.php?error=Login Gagal');
}