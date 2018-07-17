<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];

mysql_query("update barang_laku set  nama='$nama', jumlah='$jumlah', harga='$harga' where id='$id'");
header("location:barang_laku.php");

?>