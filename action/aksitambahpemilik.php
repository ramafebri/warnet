<?php
include "koneksi.php";

if (!empty($_POST)) {
	if (isset($_POST['nama_ruangan']) && isset($_POST['jenis_ruangan'])) {
		//inisialisasi variabel
		$$no_hp_pemilik = filter_input(INPUT_POST, 'nama_ruangan', FILTER_SANITIZE_STRING);
		$tempat_tinggal = filter_input(INPUT_POST, 'jenis_ruangan', FILTER_SANITIZE_STRING);



		$query = mysqli_query($link, "insert into ruangan(nama_ruangan,jenis_ruangan) values ('$no_hp_pemilik','$tempat_tinggal')");
		if($query) {
			header('location: ../halamanpemilik.php');
		} else {
			echo mysqli_error($link);

		}
	}
}
?>