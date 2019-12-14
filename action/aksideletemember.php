<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($link, "delete from user
	where id = '$id'
")or die(mysqli_error($link));

if($query) {
        header('location:../informasimember.php');
} else {
        echo mysqli_error($link);
}
?>

