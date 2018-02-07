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
		</tr>
	</table>
	
	<form action="proses/warga_proses_tambah.php" method="post">
		<table>
			<tr>
				<td>Nama
				<input type="text" name="nama" placeholder="Nama">
				</td>
			</tr>
			<tr>
				<td>Alamat
				<input type="text" name="alamat" placeholder="Alamat">
				</td>
			</tr><tr>
				<td>Jenis Kelamin
					<label>
						<input type="radio" name="jenis" value="l" checked>
						Laki-Laki
					</label>
					<label>
						<input type="radio" name="jenis" value="p" checked>
						Perempuan
					</label>
				</td>
			</tr><tr>
				<td>Tanggal Lahir
				<input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir">
				</td>
			</tr>
		</table>
			<button href="warga.php">Cancel</button>
			<button type="submit">Submit</button>
	</form>
</body>

</html>
	
<?php
}
?>