<?php
include "koneksi.php";
//if (!empty($_POST)) {
if (isset($_POST['nama'])) {
//inisialisasi variabel
$idpelanggan = $_GET['id'];
$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$query = mysqli_query($link, "update user set 
	nama='$nama',
	alamat='$alamat',
	username='$username',
	password='$password',
	status='member'
	where id='$idpelanggan'
") or die(mysqli_error($link));
if($query) {
        header('location:../informasimember.php');
} else {
        echo mysqli_error($link);
}
}
//}
?>