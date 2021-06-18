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
        <input type="text" class="form-control rounded-pill" id="exampleFormSertifikat">
      </div>
      <a class="btn btn-primary rounded-pill" style="padding-left: 30px; padding-right: 30px; margin-top: 10px;"
        href="">Cek
        Sertifikat</a>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <form>
          <h3 class="pb-2 text-center">Detail Sertifikat</h3>
          <div class="form-group">
            <label for="exampleIdSertifikat">Kode Unik Sertifikat</label>
            <input type="text" class="form-control" id="exampleIdSertifikat" readonly value="SERTF-ID-1910631250006">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Nama Lengkap</label>
            <input type="text" class="form-control" id="exampleInputName" readonly value="Aryo Bhodro Irawan">
          </div>
          <div class="form-group">
            <label for="exampleInputDetail">Penjelasan Sertifikat</label>
            <textarea class="form-control" id="exampleInputDetail" readonly>Pengalaman Sebagai Pengurus Himpunan Mahasiswa 
                Sistem Informasi (HIMSIKA) Fasilkom Unsika 2022 Divisi Relasi Departemen Pemasaran</textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputExpiredDate">Valid Hingga</label>
            <input type="text" class="form-control" id="exampleInputExpiredDate" readonly value="-">
          </div>
        </form>
      </div>
  </div>
  <footer class="bg-light text-center text-lg-start mt-5" >
    <div class="text-center p-3" style="background-color: #e9ecef;">
      Â© 2021 Hak Cipta Dilindungi -
      <a class="text-dark" href="#">Kelompok 4 Sistem Informasi A &#10084;</a>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>