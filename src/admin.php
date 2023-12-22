<!DOCTYPE html>
<html lang="en">

<?php
include 'query/fetchbuku.php';
include 'query/fetchpenerbit.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UNIBOOKSTORE - Admin</title>
  <link rel="stylesheet" href="styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="def-background mb-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand title" href="index.php">UNIBOOKSTORE</a>
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
          <input id="searchInput" class="form-control me-2" type="search" placeholder="Search Buku" aria-label="Search" onkeyup="searchBooks()">
        </form>
      </div>
    </div>
  </nav>
  <!-- =======================NavEnd======================== -->

  <!-- =======================Content======================== -->



  <div class="grid gap-2 mt-5 w-75 m-auto h-auto flex-col-med card p-3 rounded-3">
    <h4 class="text-center title">Daftar Buku</h4>
    <a href="tambah.php">
      <button class="btn btn-primary">Tambah Buku</button>
    </a>
    <div class=" rounded-3 table-responsive card">
      <table class="table table-striped rounded-5 table-bordered">
        <thead>
          <tr>
            <th scope="col">ID Buku</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody id="tbodybuku">
          <?php if (count($hasil) === 0) : ?>
            <tr>
              <td colspan="7">Tidak ada buku</td>
            </tr>
          <?php else : ?>
            <?php foreach ($hasil as $b) : ?>
              <tr id="trbuku">
                <td><?= $b['id'] ?></td>
                <td><?= $b['kategori'] ?></td>
                <td><?= $b['nama'] ?></td>
                <td><?= $b['harga'] ?></td>
                <td><?= $b['stok'] ?></td>
                <td><?= $b['penerbit'] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="editbuku.php?id=<?= $b['id'] ?>">
                      <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="query/deletebuku.php?id=<?= $b['id'] ?>">
                      <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>

        </tbody>
      </table>
    </div>
  </div>


  <div class="grid gap-2 mt-5 w-75 m-auto h-auto flex-col-med card p-3 rounded-3">
    <h4 class="text-center title">Daftar Penerbit</h4>
    <a href="tambahpenerbit.php">
      <button class="btn btn-primary" style="width:fit-content;">Tambah Penerbit</button>
    </a>
    <div class=" rounded-3 table-responsive card">
      <table class="table table-striped rounded-5 table-bordered">
        <thead>
          <tr>
            <th scope="col">ID Penerbit</th>
            <th scope="col">Email</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Nomor</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($hasil_penerbit) === 0) : ?>
            <tr>
              <td colspan="7">Tidak ada buku</td>
            </tr>
          <?php else : ?>
            <?php foreach ($hasil_penerbit as $b) : ?>
              <tr>
                <td><?= $b['id_penerbit'] ?></td>
                <td><?= $b['email'] ?></td>
                <td><?= $b['tahun'] ?></td>
                <td><?= $b['nama'] ?></td>
                <td><?= $b['alamat'] ?></td>
                <td><?= $b['kota'] ?></td>
                <td><?= $b['phone'] ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="editpenerbit.php?id_penerbit=<?= $b['id_penerbit'] ?>">
                      <button type="button" class="btn btn-primary">Edit</button>
                    </a>
                    <a href="query/deletepenerbit.php?id_penerbit=<?= $b['id_penerbit'] ?>">
                      <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>



  <script>
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('#tbodybuku tr');

    searchInput.addEventListener('input', function() {
      const searchValue = this.value.toLowerCase();

      tableRows.forEach(function(row) {
        const rowData = row.textContent.toLowerCase();

        if (rowData.includes(searchValue)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  </script>

</body>

</html>