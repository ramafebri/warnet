<?php
include "./koneksi.php";
session_start();
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
 
$login = mysqli_query($link, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	$cekIsi = mysqli_fetch_assoc($login);
	if($cekIsi['status'] == "member"){
		
		$_SESSION['username'] = $username;
		$_SESSION['status_user'] = "login";
		header("location:../indexpelanggan.php");
	}
	if($cekIsi['status'] == "admin"){
		$_SESSION['username'] = $username;
		$_SESSION['status_user'] = "login";
		header("location:../index.php");
	}
}
else{
	header("location:halamanlogin.php");
}

?>