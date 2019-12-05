<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama']) && isset($_POST['ruangan']) && isset($_POST['waktu']) && isset($_POST['Konfirmasi'])) {
//inisialisasi variabel
$nama_kost = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
$alamat = filter_input(INPUT_POST, 'ruangan', FILTER_SANITIZE_STRING);
$waktu = filter_input(INPUT_POST, 'waktu', FILTER_SANITIZE_STRING);
$konfirmasi = filter_input(INPUT_POST, 'Konfirmasi', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into pesananuser(nama,ruangan,waktu,Konfirmasi) values ('$nama_kost', '$alamat','$waktu','$konfirmasi')");
if($query) {
	header('location: ../Registrasimainuser.php');
} else {
	echo mysqli_error($link);

}
}
}
?>