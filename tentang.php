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
            <li class="nav-item active">
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
  <section id="tentang">
    <div class="jumbotron jumbotron-fluid pt-4 pb-4">
        <div class="container">
        <h1 class="display-4">Tentang kami</h1>
        <p class="lead">Detail mengenai kami loh dan cara menghubungi kami</p>
        </div>
    </div>
    <div class="container pb-3">
        <h3>Siapa kami?</h3>
        <p>Kami adalah Mahasiswa Universitas Singaperbangsa Karawang Program Studi Sistem Informasi. Kami membuat platform 
            yang bernama Verifikasi Sertifikat.</p>
        <h3>Untuk apa kami membuat ini?</h3>
        <p>Kami membuat Verifikasi Sertifikat awalnya guna mempermudah pembagian sertifikat keorganisasian mahasiswa ke 
            mahasiswanya berupa e-Sertifikat (sertifikat digital) dan mempermudah penyimpanan sertifikat agar tidak mudah hilang.</p>
        <p>Setelah itu kami melanjutkan Verifikasi Sertifikat untuk perusahaan-perusahaan yang ingin mencari mahasiswa dengan kriteria 
            kerja sesuai dengan sertifikat atau pengalaman yang mahasiswa punya melalui filterisasi, dan juga mahasiswa juga dapat 
            mencari pekerjaan sesuai dengan kemampuan yang dia punya di Verifikasi Sertifikat.</p>
        <h3>Apakah dokumen para pengguna terjaga kerahasiaannya?</h3>
        <p>Ya, dokumen para pengguna akan terjaga kerahasiaannya dan tidak akan kami gunakan untuk hal-hal yang menyimpang.</p>
        <h3>Apakah layanan kami berbayar?</h3>
        <p>Tidak, layanan kami tidak dipungut biaya bagi para pengguna.</p>
        <h3>Bagaimana cara untuk menghubungi kami?</h3>
        <p>Jika ada pertanyaan atau hal yang ingin disampaikan, silahkan isi form yang terdapat di bawah ini.</p>
    </div>
  </section>
  <section id="hubungi">
    <div class="jumbotron jumbotron-fluid pt-4 pb-4">
        <div class="container">
        <h1 class="display-4">Hubungi kami</h1>
        <p class="lead">Isi form di bawah untuk menghubungi kami</p>
        </div>
    </div>
    <div class="container">
        <div class="card">
        <div class="card-body">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleInputName">
            </div>
            <div class="form-group">
                <label for="exampleInputMessage">Pesan</label>
                <textarea class="form-control" id="exampleInputMessage"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block rounded-pill">Kirim Pesan</button>
            </form>
        </div>
        </div>
    </div>
  </section>
  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color: #e9ecef;">
      Â© 2021 Hak Cipta Dilindungi -
      <a class="text-dark" href="#">Kelompok 4 Sistem Informasi A &#10084;</a>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html