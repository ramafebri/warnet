<?php
include "koneksi.php";

$idpelanggan = $_GET['idpelanggan'];
$query = mysqli_query($link, "delete from member
	where idpelanggan = '$idpelanggan'
")or die(mysqli_error($link));

if($query) {
        header('location:../halamansewa.php');
} else {
        echo mysqli_error($link);
}
?>

