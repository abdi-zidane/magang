<?php 
 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

// var_dump("update user1 set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' where id='$id'");die;¿

mysqli_query($koneksi,"update user1 set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' where id='$id'");
 
header("location:index.php?pesan=update");
 
?>