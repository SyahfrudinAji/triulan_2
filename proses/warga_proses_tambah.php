<?php
session_start();
if(isset($_SESSION['login'])) {

include 'koneksi.php';

$nama			= isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat			= isset($_POST['alamat']) ? $_POST['alamat'] : '';
$jenis			= isset($_POST['jenis']) ? $_POST['jenis'] : '';
$tanggal		= isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';


if (!empty($nama) && !empty($alamat) && !empty($jenis) && !empty($tanggal)) {
	mysqli_query($connect, "INSERT INTO warga VALUES (null, '$nama', '$alamat', '$jenis', '$tanggal', '$user_id', '$tanggal_input')");
	
	header("location:../warga.php");
} else {

	echo "Silahkan lengkapi data <a href='../warga_tambah.php'>santri</a>";

}

} else {
	
	echo "Please < href='../index.php'>login</a> first.";
	
}
?>