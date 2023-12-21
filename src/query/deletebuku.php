<?php

include '../koneksi.php';

$id_buku = $_GET['id'];

$query = "DELETE FROM buku WHERE id='$id_buku'";

$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>alert('Data berhasil dihapus!');window.location.href='../admin.php';</script>";
} else {
  echo "<script>alert('Data gagal dihapus!');window.location.href='../admin.php';</script>";
}

?>