<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['nama']) && isset($_POST['ruangan']) && isset($_POST['waktu'])  && isset($_POST['Konfirmasi'])) {
//inisialisasi variabel
$idpelanggan = ($_GET['id']);
$nama_kost = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
$ruangan = filter_input(INPUT_POST, 'ruangan', FILTER_SANITIZE_STRING);
$waktu = filter_input(INPUT_POST, 'waktu', FILTER_SANITIZE_STRING);
$konfirmasi = filter_input(INPUT_POST, 'Konfirmasi', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "update pesananuser set 
nama='$nama_kost',
ruangan='$ruangan',
waktu='$waktu',
Konfirmasi='$konfirmasi'
where id='$idpelanggan'");
if($query) {
	header('location: ../halamanregistmain.php');
} else {
	echo mysqli_error($link);

}
}
}
?>