<?php
$pages = array(
    "HOME" => "index.php?page=home",
    "CATALOG" => "index.php?page=catalog",
    "SALE" => "index.php?page=sale",
    "BLOG" => "index.php?page=blog",
    "CONTACT US" => "index.php?page=contact"
);
?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand brand-logo" href="index.php">
            <i class="bi bi-laptop"></i> LAPTOP<span>SHOP</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <?php foreach($pages as $key => $value) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $value; ?>"><?php echo $key; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

         
            <div>
                <a href="#" class="cart-link text-decoration-none">
                    <i class="bi bi-bag"></i> MY CART:
                </a>
                <span class="text-secondary">1 item(s)</span>
            </div>

      
            <div class="profile">
                <a href="#" class="text-dark text-decoration-none">
                    <i class="bi bi-person"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <section class="contact-section my-5">
        <h1 class="text-center text-primary mb-4">Let's Chat, Reach Out to Us</h1>
        <p class="text-center">Have questions or feedback? We're here to help.</p>

        <div class="row">
        
            <div class="col-md-6">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">I agree to the privacy policy</label>
                    </div>
                    <button class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>

            <div class="col-md-6">
                <img src="app/views/images/Agent1.jpg" class="img-fluid rounded" alt="Contact">
            </div>
        </div>

        <!-- Google Map -->
        <div class="map-container mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013908327777!2d104.88050867214614!3d11.550859788648934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1769128551900!5m2!1sen!2skh"
                width="100%" height="400" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-top row text-center text-md-start">

           
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="app/views/images/logo.png" alt="Laptop Shop Logo" class="footer-logo mb-2">
                <p class="footer-text">Quality laptops, accessories, and trusted service since 2026.</p>
            </div>

            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="footer-title">Contact</h5>
                <p>Mon - Sun: 8:00 AM - 5:30 PM</p>
                <p>Sales: 012 220 152 | 093 456 747 | 071 5777 378</p>
                <p>Service: 012 220 135 | 093 456 735 | 031 3220 135</p>
            </div>

            <!-- App Download -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h5 class="footer-title">Get Our Instagram
                    <br> and Website</h5>
                <div class="d-flex justify-content-center justify-content-md-start gap-2">
                    <a href="#"><img src="app/views/images/512NaxP2nPd2c.webp" alt="Google Play" class="app-badge"></a>
                    <a href="#"><img src="app/views/images/website.png" alt="App Store" class="app-badge"></a>
                </div>
            </div>

        </div>
        <div class="social-icons mt-4 text-center">
            <a href="https://facebook.com" class="social-icon facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://tiktok.com" class="social-icon tiktok"><i class="fab fa-tiktok"></i></a>
            <a href="https://youtube.com" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
            <a href="https://telegram.org" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
        </div>


        <div class="payment-methods mt-4 text-center">
            <p class="mb-2"><strong>We Accept:</strong></p>
            <img src="app/views/images/payment.png" alt="Payment Methods" class="payment-img">
        </div>
        <p class="text-center mt-3 mb-0">&copy; 2026 Laptop Shop. All Rights Reserved.</p>
    </div>
</footer>
      

