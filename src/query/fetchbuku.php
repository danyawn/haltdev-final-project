<?php
include 'koneksi.php';

$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $hasil = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $hasil[] = $row;
  }

} else {
  echo "0 results";
}

mysqli_close($conn);
