<?php
include "koneksi.php";

$id_pemilik = $_GET['idruangan'];
$query = mysqli_query($link, "delete from ruangan
	where idruangan = '$id_pemilik'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamanpemilik.php');
} else {
        echo mysqli_error($link);
}
?>

