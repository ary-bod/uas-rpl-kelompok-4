<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Verifikasi Sertifikat</title>

</head>

<body>
  <div class="container" style="padding: 10rem 0; max-width: 40%;">
    <div class="text-center">
      <a class="" href="index.php" style="font-weight: 500; color: black;">
        <h3>Registrasi ke Verifikasi Sertifikat</h3>
      </a>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="proses_registrasi.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputName" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" required>
          </div>
          <div class="form-group">
            <label for="exampleInputConfirmPassword">Konfirmasi Password</label>
            <input type="password" class="form-control" id="exampleInputConfirmPassword" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block rounded-pill">Registrasi</button>
          <hr>
          <a class="btn btn-secondary btn-block rounded-pill" href="login.php">Masuk ke Verifikasi Sertifikat</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>