<?php

include '../koneksi.php';

$id_penerbit = $_POST['id_penerbit'];
$email = $_POST['email'];
$tahun = $_POST['tahun'];
$nama_penerbit = $_POST['nama_penerbit'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$phone = $_POST['phone'];

$query = "SELECT id_penerbit FROM penerbit WHERE id_penerbit = '$id_penerbit'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<script>alert('ID penerbit sudah ada dalam database!');window.location.href='../tambahpenerbit.php';</script>";
} else {
  $result = mysqli_query($conn, "INSERT INTO penerbit (id_penerbit, email, tahun, nama, alamat, kota, phone) VALUES ('$id_penerbit', '$email', '$tahun', '$nama_penerbit', '$alamat', '$kota', '$phone')");

  if ($result) {
    echo "<script>alert('Data Penerbit berhasil ditambahkan!');window.location.href='../admin.php';</script>";
  } else {
    echo "<script>alert('Data Penerbit gagal ditambahkan!');window.location.href='../admin.php';</script>";
  }
}

mysqli_close($conn);
