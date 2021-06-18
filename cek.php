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
  <nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
    <a class="navbar-brand" href="index.php" style="font-weight: 500;">Verifikasi Sertifikat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php#tentang">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php#hubungi">Kontak Kami</a>
        </li>
      </ul>
      <a class="nav-link btn btn-primary rounded-pill" style="padding-left: 30px; padding-right: 30px;"
        href="login.php">Masuk</a>
      <a class="nav-link btn btn-secondary rounded-pill"
        style="margin-left: 10px; padding-left: 30px; padding-right: 30px;" href="register.php">Registrasi</a>
    </div>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Cek keaslian sertifikat di sini</h1>
      <p class="lead">Buat apa dicek? Agar sertifikat terjaga keasliannya dan mudah disalurkan.</p>
      <div class="form-group mb-0 pb-0">
        <label for="exampleFormSertifikat">Kode Unik</label>
        <input type="email" class="form-control rounded-pill" id="exampleFormSertifikat">
      </div>
      <a class="btn btn-primary rounded-pill" style="padding-left: 30px; padding-right: 30px; margin-top: 10px;"
        href="cek_hasil.php">Cek
        Sertifikat</a>
    </div>
  </div>  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>