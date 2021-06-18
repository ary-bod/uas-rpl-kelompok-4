<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <a class="navbar-brand" href="index.php" style="font-weight: 500;">Verifikasi Sertifikat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item <?= ($page === "Home") ? "active" : "" ?>">
        <a class=" nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?= ($page === "About") ? "active" : "" ?>">
        <a class="nav-link" href="tentang.php#tentang">Tentang Kami</a>
      </li>
      <li class="nav-item <?= ($page === "About") ? "active" : "" ?>">
        <a class="nav-link" href="tentang.php#hubungi">Kontak Kami</a>
      </li>
    </ul>
    <a class="nav-link btn btn-primary rounded-pill" style="padding-left: 30px; padding-right: 30px;" href="login.php">Masuk</a>
    <a class="nav-link btn btn-secondary rounded-pill" style="margin-left: 10px; padding-left: 30px; padding-right: 30px;" href="register.php">Registrasi</a>
  </div>
</nav>