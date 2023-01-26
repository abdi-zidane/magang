<?php 
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from user1 where id='$id'");
 
header("location:index.php?pesan=hapus");
?>