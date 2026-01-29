<?php
require_once __DIR__ . '/../../init.php';

// Start session if not already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Run route validation BEFORE any HTML
validate_route();

$email = '';
$level = '';

if (isset($_SESSION['email']) && isset($_SESSION['level'])) {
    $email = $_SESSION['email'];
    $level = $_SESSION['level'];
} else {
    if (isset($_SESSION['level'])) {
        $level = $_SESSION['level'];
    }
}

// Determine current page for navbar active
$currentPage = basename($_SERVER['PHP_SELF']);

function show_link_if_exists($filepath, $label, $userLevel, $for = ['Admin'])
{
    global $currentPage;

    if (in_array($userLevel, $for)) {
        $linkPage = basename($filepath);
        $activeClass = ($currentPage === $linkPage) ? 'active' : '';
        echo '<a href="' . $filepath . '" class="nav-link ' . $activeClass . '">' . $label . '</a>';
    }
}

$pages = [
    "HOME" => ["/app/views/home.php", ['Admin', 'User', 'Guest']],
    "CATEGORY" => ["/app/views/category.php", ['Admin', 'User', 'Guest']],
    
    "SALE" => ["/app/views/sale.php", ['Admin', 'User', 'Guest']],
    "BLOG" => ["/app/views/blog.php", ['Admin', 'User', 'Guest']],
    "STRATEGY" => ["/app/views/strategy.php", ['Admin']],
    "CONTACT US" => ["/app/views/contact.php", ['Admin', 'User', 'Guest']],
];
?>


<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold brand-logo" href="#">
            <i class="bi bi-laptop me-1"></i> LAPTOP<span class="text-danger">SHOP</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <!-- Center Menu -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-2 text-center">
                <?php foreach ($pages as $key => $value) : ?>
                    <li class="nav-item">
                        <?= show_link_if_exists($value[0], $key, $level, $value[1]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Right Side -->
            <div class="d-flex align-items-center gap-3">

                <a href="?page=catalog" class="cart-link text-decoration-none position-relative" title="Shopping Cart">
                    <i class="bi bi-bag fs-5"></i>
                    <span class="cart-count badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle">0</span>
                </a>



                <!-- Auth Buttons -->
                <div class="d-flex gap-2">
                    <form action="../../app/views/login.php" method="post" class="m-0">
                        <button type="submit" class="btn btn-outline-dark btn-sm px-3">Login</button>
                    </form>

                    <form action="../../app/controllers/logout.php" method="post" class="m-0">
                        <button type="submit" class="btn btn-danger btn-sm px-3">Logout</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</nav>