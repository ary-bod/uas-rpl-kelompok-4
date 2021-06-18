<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Verifikasi Sertifikat</title>

</head>

<body>
  <nav class=" navbar navbar-expand-lg navbar-light bg-light p-4">
    <a class="navbar-brand" href="index.php" style="font-weight: 500;">Verifikasi Sertifikat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="akun.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php#tentang">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php#hubungi">Kontak Kami</a>
        </li>
      </ul>
      <a class="nav-link btn btn-primary rounded-pill" style="padding-left: 25px; padding-right: 25px;" href="#"><i
          class="fa fa-fw fa-user" style="margin-right: 5px;"></i>Akun</a>
      <a class="nav-link btn btn-secondary rounded-pill"
        style="margin-left: 10px; padding-left: 30px; padding-right: 30px;" href="register.php"><i
          class="fa fa-fw fa-sign-out-alt" style="margin-right: 5px;"></i>Keluar</a>
    </div>
  </nav>
  <section>
    <div class="row container mt-4" style="max-width: 1920px;">
      <div class="col-md-3">
        <div class="card" style="min-height: 86vh;">
          <div class="card-body">
            <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png"
              class="border-radius: 50%;" style="height: 80px;">
            <h5 class="card-title">Aryo Bhodro Irawan</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pengguna sejak Mei 2021</h6>

            <a href="pengaturan.php" class="btn btn-light btn-block text-left mt-4 active"><i class="fas fa-cog"
                style="margin-right: 10px;"></i>Pengaturan
              Saya</a>
            <a href="sertifikatsaya.php" class="btn btn-light btn-block text-left"><i class="fas fa-sticky-note"
                style="margin-right: 10px;"></i>Sertifikat
              Saya</a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" value="emailaddress@example.com"
                      readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputName" value="Aryo Bhodro Irawan">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputDateBirth">Tanggal Lahir</label>
                   <input type="date" class="form-control" id="exampleInputDateBirth"> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputGender">Jenis Kelamin</label>
                    <select class="custom-select" id="exampleInputGender">
                      <option>Pilih jenis kelamin</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>       
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputSchool">Universitas / Sekolah</label>
                    <input type="text" class="form-control" id="exampleInputSchool" value="Universitas Singaperbangsa Karawang">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputMajor">Jurusan</label>
                    <input type="text" class="form-control" id="exampleInputMajor" value="Sistem Informasi">
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-block rounded-pill">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>