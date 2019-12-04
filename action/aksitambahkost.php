<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['hari']) && isset($_POST['nama_operator'])) {
//inisialisasi variabel
$nama_kost = filter_input(INPUT_POST, 'hari', FILTER_SANITIZE_STRING);
$alamat = filter_input(INPUT_POST, 'nama_operator', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into jadwal(hari,nama_operator) values ('$nama_kost', '$alamat')");
if($query) {
	header('location: ../halamansewa.php');
} else {
	echo mysqli_error($link);

}
}
}
?>