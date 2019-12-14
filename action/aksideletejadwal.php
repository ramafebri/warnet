<?php
include "koneksi.php";

$id_jadwal = $_GET['idpelanggan'];
$query = mysqli_query($link, "delete from jadwal
	where idpelanggan = '$id_jadwal'
")or die(mysqli_error($link));

if($query) {
        header('location:../jadwalwarnet.php');
} else {
        echo mysqli_error($link);
}
?>

