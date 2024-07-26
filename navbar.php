<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="/">
      <img src="src/assets/logo.jpg" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
    </a>

    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#modalbox"
      aria-controls="modalbox" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="modalbox">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-1">
        <li class="nav-item">
          <a data-mdb-ripple-init class="btn btn-primary" href="index.php" role="button">Home</a>
        </li>
        <li class="nav-item">
          <a data-mdb-ripple-init class="btn btn-primary" href="index.php" role="button">Data Panen</a>
        </li>

      </ul>

      <!-- Left links -->

      <div class="d-flex align-items-center">
        <a data-mdb-ripple-init class="btn btn-primary  px-3 me-2" href="registrasi.php" role="button">Daftar</a>
        <a data-mdb-ripple-init class="btn btn-primary  px-3 me-2" href="login.php" role="button">Login</a>

        <a data-mdb-ripple-init class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"><i class="fab fa-github"></i></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>