<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container-fluid mr-4">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse w-75 me-5 pe-5" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="./mostrarHoteles.php?controller=HabitacionHotel&action=mostrarTabla">
        <img
            src="../assets/img/logo.png"
          height="45"
          alt="MDB Logo"
          loading="lazy"
        >
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto pe-5">
        <li class="nav-item">
            <a class="nav-link" href="./mostrarHoteles.php?controller=HabitacionHotel&action=mostrarTabla">Hoteles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./mostrarReservas.php?controller=Reserva&action=mostrarReservas.php">Reservas</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="../index.php?crr">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
      </a>

    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</header>