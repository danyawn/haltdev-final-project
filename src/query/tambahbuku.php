<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$penerbit = $_POST['penerbit'];

$query = "INSERT INTO buku (id, kategori, nama, harga, stok, penerbit) VALUES ('$id_buku', '$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')";
$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>alert('Data berhasil ditambahkan!');window.location.href='../admin.php';</script>";
} else {
  echo "<script>alert('Data gagal ditambahkan!');window.location.href='../admin.php';</script>";
}

mysqli_close($conn);
