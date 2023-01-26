<!DOCTYPE html>
<html>
<head>
	<title>Update data penduduk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Merubah Data Penduduk</h1>
		<h2>Menampilkan data Penduduk</h2>
		<h3>www.datapenduduk.com</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from user1 where id='$id'");
	$nomor = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<form method="post" action="update.php">		
	<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id']?>">
					<input type="text" name="nama" value="<?php echo $d['nama']?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d['alamat']?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan']?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>