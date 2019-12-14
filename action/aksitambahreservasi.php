<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama']) && isset($_POST['ruangan']) && isset($_POST['waktu'])) {
//inisialisasi variabel
$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
$ruangan = filter_input(INPUT_POST, 'ruangan', FILTER_SANITIZE_STRING);
$waktu = filter_input(INPUT_POST, 'waktu', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into pesananpelanggan(nama, ruangan, waktu, Konfirmasi) values ('$nama', '$ruangan','$waktu', 'Not Confirm')");

if($query) {
	header('location: ../reservasimainuser.php');
} else {
	echo mysqli_error($link);

}
}
}
?>