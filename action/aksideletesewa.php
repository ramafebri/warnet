<?php
include "koneksi.php";

$id_kost = $_GET['idpelanggan'];
$query = mysqli_query($link, "delete from jadwal
	where idpelanggan = '$id_sewa'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamankost.php');
} else {
        echo mysqli_error($link);
}
?>

