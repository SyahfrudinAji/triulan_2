<?php
session_start();
if(isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	<teble>
		<tr>
			<th><b>Data Warga<b></th>
			<br>
			<th><a href="warga_tambah.php" class="btn btn-primary pull-right">Tambah Data</a></th>
			<br>
			<a href="logout.php">Sign Out</a>
		</tr>
	</table>
		
	  <table border="1">
		<tr>
			<th style="width: 10px">No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Aksi</th>
		</tr>
	  </table>
	  
	<?php
include 'proses/koneksi.php';

$sql = mysqli_query($connect, "SELECT *, warga.id as id_warga, warga.nama as nama_warga FROM warga");
$no = 1;
while($row = mysqli_fetch_array($sql)) {
	echo "
	<tr>
		<td>".$no++."</td>
		<td>".$row['nama_warga']."</td>
		<td>".$row['alamat']."</td>
		<td>".(($row['jenis_kelamin'] == 'l') ? 'laki-laki' : 'perempuan')."</td>
		<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
		<td>
			<a class='btn btn-info btn-xs' href='warga_edit.php?ID=$row[id_warga]'>
				<i class='fa fa-pencil'></i> Edit
			</a>
			<a class='btn btn-danger btn-xs delete' href='proses/warga_proses_hapus.php?ID=$row[id_warga]'>
				<i class='fa fa-trash-o'></i>
				Hapus
			</a>
		</td>
	</tr>
	";
}
	  
	?>
</body>
</html>
<?php
} else {
	echo "Please <a href='index.php'>login</a> first.";
}
?>