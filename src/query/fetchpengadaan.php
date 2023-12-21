<?php

include 'koneksi.php';


$query = "SELECT * FROM buku WHERE stok = (SELECT MIN(stok) FROM buku)";
$hasil = mysqli_query($conn, $query);

if (mysqli_num_rows($hasil) > 0) {
  $buku = mysqli_fetch_assoc($hasil);
} else {
  echo "No books found";
}

mysqli_close($conn);
