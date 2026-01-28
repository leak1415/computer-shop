<?php include __DIR__ . "/layouts/header.php" ?>
<?php include "navbar.php" ?>
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
                <img src="app/views/images/computer-logo-vector-design-template_724865-987 (1).avif" alt="Laptop Shop Logo" class="footer-logo mb-2">
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
                <h5 class="footer-title">Get Our App</h5>
                <div class="d-flex justify-content-center justify-content-md-start gap-2">
                    <a href="https://play.google.com/store" target="_blank"><img src="app/views/images/Google-app-NS.webp" alt="Google Play" class="app-badge"></a>
                    <a href="https://apps.apple.com" target="_blank"><img src="app/views/images/apple-app-store-qr-code-sticker-u1842-a173-x418.png" alt="App Store" class="app-badge"></a>
                </div>
            </div>

        </div>
        <div class="social-icons mt-4 text-center">
            <a href="https://www.facebook.com" target="_blank" class="social-icon facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.tiktok.com" target="_blank" class="social-icon tiktok"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.youtube.com" target="_blank" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
            <a href="https://telegram.org" target="_blank" class="social-icon telegram"><i class="fab fa-telegram"></i></a>
        </div>


        <div class="payment-methods mt-4 text-center">
            <p class="mb-2"><strong>We Accept:</strong></p>
            <img src="app/views/images/payment-methods-epicerie-ludo.png" alt="Payment Methods" class="payment-img">
        </div>
        <p class="text-center mt-3 mb-0">&copy; 2026 Laptop Shop. All Rights Reserved.</p>
    </div>
</footer>
<?php include __DIR__ . "/layouts/footer.php" ?>
   

