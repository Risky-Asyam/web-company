<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
  <title>SMC_IT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body class="container">
  <header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Join Now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <?php
    $katakunci = (isset($_GET['katakunci']))?$_GET['katakunci']:"";
    ?>
    <h1>Halaman Admin</h1>
    <p>
      <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
      </a>
    </p>
    <form class="row g-3" method="get">
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
      </div>
      <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary"/>
      </div>
    </form>
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="col-1">#</th>
          <th>Judul</th>
          <th>Kutipan</th>
          <th class="col-1">Aksi</th>
        </tr>
      </thead>
    </table>
  </main>
  <footer class="bg-light">
    <div class="text-center p-3" style="background:#CCCCCC">
      Copyright &copy; 2023
    </div>
  </footer>
</body>

</html>