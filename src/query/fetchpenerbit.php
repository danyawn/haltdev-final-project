<?php

include 'koneksi.php';

$query = "SELECT * FROM penerbit";
$result = mysqli_query($conn, $query);



if (mysqli_num_rows($result) > 0) {
  $hasil_penerbit = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $hasil_penerbit[] = $row;
  }
  
} else {
  echo "0 results";
}

mysqli_close($conn);
