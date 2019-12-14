<?php
include "koneksi.php";

if (!empty($_POST)) {
if (isset($_POST['hari']) && isset($_POST['nama_operator'])) {
//inisialisasi variabel
$hari = filter_input(INPUT_POST, 'hari', FILTER_SANITIZE_STRING);
$nama_operator = filter_input(INPUT_POST, 'nama_operator', FILTER_SANITIZE_STRING);

$query = mysqli_query($link, "insert into jadwal(hari,nama_operator) values ('$hari', '$nama_operator')");
if($query) {
	header('location: ../jadwalwarnet.php');
} else {
	echo mysqli_error($link);

}
}
}
?>