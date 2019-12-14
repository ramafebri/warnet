<?php
include "koneksi.php";

$idpelanggan = $_GET['idhari'];
$query = mysqli_query($link, "delete from jadwal
	where idhari = '$idpelanggan'
")or die(mysqli_error($link));

if($query) {
        header('location:../jadwalwarnet.php');
} else {
        echo mysqli_error($link);
}
?>

