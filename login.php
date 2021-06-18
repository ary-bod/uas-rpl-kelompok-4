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
        <h3>Masuk ke Verifikasi Sertifikat</h3>
      </a>
    </div>
    <div class="card">
      <div class="card-body">
        <form action="proses_login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">Kita tidak pernah membagikan alamat email kamu ke orang
              lain.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block rounded-pill">Masuk</button>
          <hr>
          <a class="btn btn-secondary btn-block rounded-pill" href="register.php">Registrasi ke Verifikasi
            Sertifikat</a>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>