<?php


include '../koneksi.php';

$id_penerbit = $_GET['id_penerbit'];

$query = "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'";

$result = mysqli_query($conn, $query);

if ($result) {
  echo "<script>alert('Data penerbit berhasil dihapus!');window.location.href='../admin.php';</script>";
} else {
  echo "<script>alert('Data penerbit gagal dihapus!');window.location.href='../admin.php';</script>";
}


?>