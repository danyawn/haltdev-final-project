<?php

include '../koneksi.php';

$id_penerbit = $_POST['id_penerbit'];
$email = $_POST['email'];
$tahun = $_POST['tahun'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$phone = $_POST['phone'];

$query = mysqli_query($conn, "UPDATE penerbit SET email='$email', tahun='$tahun', nama='$nama_penerbit', alamat='$alamat', kota='$kota', phone='$phone' WHERE id_penerbit='$id_penerbit'");

if ($query) {
  echo "<script>alert('Data berhasil diupdate!');window.location.href='../admin.php';</script>";
} else {
  echo "<script>alert('Data gagal diupdate!');window.location.href='../admin.php';</script>";
}

mysqli_close($conn);
?>