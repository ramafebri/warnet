<?php
include "koneksi.php";
//if (!empty($_POST)) {
if (isset($_POST['hari']) && isset($_POST['nama_operator'])) {
//inisialisasi variabel
$idhari = $_GET['idhari'];
$hari = filter_input(INPUT_POST, 'hari', FILTER_SANITIZE_STRING);
$nama_operator = filter_input(INPUT_POST, 'nama_operator', FILTER_SANITIZE_STRING);
$query = mysqli_query($link, "update jadwal set 
	hari='$hari',
	nama_operator='$nama_operator'
    where idhari='$idhari'") or die(mysqli_error($link));
    
if($query) {
    
        header('location:../jadwalwarnet.php');
} else {
        echo mysqli_error($link);
}
}
?>