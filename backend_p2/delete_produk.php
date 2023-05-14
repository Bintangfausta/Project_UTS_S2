<?php require_once 'dbkoneksi.php';
// tangkap iddel dari url
$delete = $_GET['iddel'];
// bikin query hapus data
$sql = "DELETE FROM produk Where id=?";
// require query
$st = $dbh->prepare($sql);
// jalanin query
$st->execute([$delete]);

// pindahin ke halaman list_pelanggan
header('location:produk.php');
?>