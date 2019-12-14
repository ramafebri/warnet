<?php
include "koneksi.php";

$id_ruangan = $_GET['idruangan'];
$query = mysqli_query($link, "delete from ruangan
	where idruangan = '$id_ruangan'
")or die(mysqli_error($link));

if($query) {
        header('location:../ruanganwarnet.php');
} else {
        echo mysqli_error($link);
}
?>

