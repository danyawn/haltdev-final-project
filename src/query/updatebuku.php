<?php

include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$query = "UPDATE buku SET kategori='$kategori', nama='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE id='$id_buku'";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>alert('Data berhasil diupdate!');window.location.href='../admin.php';</script>";
} else {
  echo "<script>alert('Data gagal diupdate!');window.location.href='../admin.php';</script>";
}

?>