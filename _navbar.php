<nav class="navbar navbar-expand-lg navbar-light bg-light p-4" style="background-color: #290916 !important;">
  <div class="container" style="background-color: #290916 !important;">
    <a class="navbar-brand ml-lg-0 ml-sm-2" href="index.php">Triple-A<span>Train</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" >Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Hubungi</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['email'])) : ?>
          <li class="nav-item">
            <a class="nav-link btn btn-warning text-dark box-shadow rounded-pill" style="padding-left: 30px; padding-right: 30px;" href="./account.php"><i class="fas fa-user"></i> Akun</a>
          </li>
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link btn btn-warning text-dark box-shadow rounded-pill" style="padding-left: 30px; padding-right: 30px;" href="./login.php">Masuk <i class="fas fa-chevron-right"></i></a>
          </li>
          <li class="nav-item mt-lg-0 mt-sm-3">
            <a class="nav-link btn btn-light rounded-pill" style="padding-left: 30px; background-color: #290916 !important; padding-right: 30px;" href="./register.php">Registrasi</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>