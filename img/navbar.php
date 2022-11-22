<nav
  class="navbar navbar-expand-md sticky-top bg-white navbar-light"
  id="main-nav"
>
  <div class="container">
    <div class="navbar-brand">
      <a href="index.html" id="ors_brand_collapse"
        ><img src="img/logo_original.png" alt="ORS Logo" />Office Relocation
        Services</a
      >
    </div>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbar-content"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-content">
      <ul class="navbar-nav">
        <li <?php if ($currentPage === 'home') {echo 'class="nav-item mr-3 active"';} ?> class="nav-item mr-3">
          <a href="index.php" class="nav-link">HOME</a>
        </li>
        <li <?php if ($currentPage === 'about') {echo 'class="nav-item mr-3 active"';} ?> class="nav-item mr-3">
          <a href="about.php" class="nav-link">ABOUT</a>
        </li>
        <li <?php if ($currentPage === 'rel-office' || $currentPage === 'rel-lib' || $currentPage === 'rel-IT'
          || $currentPage === 'rel-warehouse' || $currentPage === 'rel-store') {echo 'class="nav-item dropdown mr-3 active"';} ?>
          class="nav-item dropdown mr-3">
          <a
            href="#" id="dropdownMenuButton" class="nav-link dropdown-toggle" data-toggle="dropdown"
            >SERVICES</a
          >
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a <?php if ($currentPage === 'rel-office') {echo 'class="dropdown-item active"';} ?> href="rel_office.php" class="dropdown-item">
              Office Reloctions
            </a>
            <a <?php if ($currentPage === 'rel-lib') {echo 'class="dropdown-item active"';} ?> href="rel_lib.php" class="dropdown-item">
              Library Relocations
            </a>
            <a <?php if ($currentPage === 'rel-IT') {echo 'class="dropdown-item active"';} ?> href="rel_comp.php" class="dropdown-item">
              IT Reloctions
            </a>
            <a <?php if ($currentPage === 'rel-warehouse') {echo 'class="dropdown-item active"';} ?> href="rel_ware.php" class="dropdown-item">
              Warehouse Relocations
            </a>
            <a <?php if ($currentPage === 'store') {echo 'class="dropdown-item active"';} ?> href="#" class="dropdown-item disabled">
              Storage
            </a>
          </div>
        </li>
        <li <?php if ($currentPage === 'crates') {echo 'class="nav-item mr-3 active"';} ?> class="nav-item mr-3">
          <a href="crates.php" class="nav-link">CRATE HIRE</a>
        </li>
        <li <?php if ($currentPage === 'contact') {echo 'class="nav-item mr-3 active"';} ?> class="nav-item mr-3">
          <a href="contact.php" class="nav-link">CONTACT US</a>
        </li>

    </div>
  </div>
</nav>
