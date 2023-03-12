<?php
include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
$id = $_GET['id']; //menampung id

//query hapus
$data = mysqli_query($conn, "delete from dashboar_admin where ID ='$ID'") or die(mysqli_error($conn));

//alert dan redirect ke index.php
echo "<script>alert('data berhasil dihapus.');window.location='isi.php';</script>";
