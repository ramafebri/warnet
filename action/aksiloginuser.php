<?php 
include "koneksi.php";
session_start();
 
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
 
$login = mysqli_query($connect, "select * from member where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
    $_SESSION["loggedin"] = true;
    $_SESSION["id_user"] = $id;
    $_SESSION["username"] = $username;
		header("../index.php");
}
else{
	header("location:../loginuser.php");
}
 
?>