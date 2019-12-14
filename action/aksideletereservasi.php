<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($link, "delete from pesananpelanggan
	where id = '$id'
")or die(mysqli_error($link));

if($query) {
        header('location:../reservasimain.php');
} else {
        echo mysqli_error($link);
}
?>
