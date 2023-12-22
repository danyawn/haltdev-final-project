<!DOCTYPE html>
<html lang="en">

<?php
include 'koneksi.php';
include 'query/fetchpenerbit.php';
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNIBOOKSTORE - Dashboard</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="def-background">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand  title" href="index.php">UNIBOOKSTORE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengadaan.php">Kebutuhan Buku</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- =======================NavEnd======================== -->

  <!-- =======================Content======================== -->


  <?php
  include 'koneksi.php';

  $id_penerbit = $_GET['id_penerbit'];

  $query = mysqli_query($conn, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");
  ?>
  <div class="m-auto w-75 h-auto mt-5 rounded-3 table-responsive card">
    <?php

    while ($hasil = mysqli_fetch_array($query)) {
    ?>
      <form class="p-4" action="query/updatepenerbit.php" method="post">
        <div class="mb-3">
          <label for="id_penerbit" class="form-label">ID Penerbit</label>
          <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" value="<?php echo $hasil['id_penerbit']; ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-Mail</label>
          <input type="text" class="form-control" id="email" name="email" value="<?php echo $hasil['email']; ?>">
        </div>
        <div class="mb-3">
          <label for="tahun" class="form-label">Tahun</label>
          <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $hasil['tahun']; ?>">
        </div>
        <div class="mb-3">
          <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
          <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $hasil['nama']; ?>">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $hasil['alamat']; ?>">
        </div>
        <div class="mb-3">
          <label for="kota" class="form-label">Kota</label>
          <input type="text" class="form-control" id="kota" name="kota" value="<?php echo $hasil['kota']; ?>">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">No Handphone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $hasil['phone']; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    <?php } ?>
  </div>


</body>

</html>