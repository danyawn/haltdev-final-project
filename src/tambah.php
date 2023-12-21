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

  <div class="p-4 m-auto w-75 h-auto mt-5 rounded-3 table-responsive card mb-5">
    <h5 class="title" style="color:black;">Tambah Buku</h5>
    <form class="" action="query/tambahbuku.php" method="post">
      <div class="mb-3">
        <label for="id_buku" class="form-label">ID Buku</label>
        <input type="text" class="form-control" id="id_buku" name="id_buku">
      </div>
      <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori">
      </div>
      <div class="mb-3">
        <label for="nama_buku" class="form-label">Nama Buku</label>
        <input type="text" class="form-control" id="nama_buku" name="nama_buku">
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga">
      </div>
      <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok">
      </div>
      <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <select class="form-select" id="penerbit" name="penerbit">
          <?php
          include '/query/fetchpenerbit.php';
          if ($hasil_penerbit) {
            foreach ($hasil_penerbit as $p) {
              echo '<option value="' . $p['nama'] . '">' . $p['nama'] . '</option>';
            }
          } else {
            echo '<option value="0">Tidak ada penerbit</option>';
          }
          ?>

        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>

</html>