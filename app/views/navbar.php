<?php
$pages = array(
    "HOME" => "index.php?page=home",
    "CATALOG" => "index.php?page=catalog",
    "SALE" => "index.php?page=sale",
    "BLOG" => "index.php?page=blog",
    "CONTACT US" => "index.php?page=contact"
);
?>

<!-- Top Bar -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand brand-logo" href="index.php">
      <i class="bi bi-laptop"></i> LAPTOP<span>SHOP</span>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <?php foreach($pages as $key => $value) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $value; ?>"><?php echo $key; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>

      <!-- Cart -->
      <div class="d-flex align-items-center gap-3">
        <a href="#" class="cart-link text-decoration-none position-relative">
          <i class="bi bi-bag fs-5"></i>
          <span class="cart-count badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle">0</span>
        </a>
        <div class="profile">
          <a href="#" class="text-dark text-decoration-none">
            <i class="bi bi-person fs-5"></i>
          </a>
        </div>
      </div>
  </div>
</nav>


