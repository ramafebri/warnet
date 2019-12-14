<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama_ruangan']) && isset($_POST['jenis_ruangan'])) {
//inisialisasi variabel
$nama_ruangan = filter_input(INPUT_POST, 'nama_ruangan', FILTER_SANITIZE_STRING);
$jenis_ruangan = filter_input(INPUT_POST, 'jenis_ruangan', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into ruangan(nama_ruangan,jenis_ruangan) values ('$nama_ruangan', '$jenis_ruangan')");
if($query) {
	header('location: ../ruanganwarnet.php');
} else {
	echo mysqli_error($link);

}
}
}
?>