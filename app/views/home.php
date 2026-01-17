<?php include "layouts/header.php" ?>
<?php include "navbar.php"?>

<section class="hero-section d-flex align-items-center">
    <div class="hero-content container">
      <h1 class="main-title text-uppercase">
        PREMIUM LAPTOPS<br>FOR EVERY NEED
      </h1>
      
      <p class="subtitle">
        Gaming • Business • Student • Creative Professionals
      </p>
      
      <div class="hero-buttons">
        <a href="index.php?page=catalog" class="btn btn-primary btn-lg shop-btn rounded-pill shadow-lg me-3">
          <i class="bi bi-bag-fill me-2"></i>SHOP NOW
        </a>
        <a href="#categories" class="btn btn-outline-light btn-lg rounded-pill shadow-lg">
          <i class="bi bi-grid-3x3-gap me-2"></i>BROWSE CATEGORIES
        </a>
      </div>
      
      </div>
    </div>
</section>


<!-- Special Offers Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">SPECIAL OFFERS</h2>
            <p class="section-subtitle">Exclusive deals on top laptop brands</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="promo-card enhanced-promo">
                    <div class="promo-left">
                        <div class="discount-badge">-20%</div>
                        <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400&h=300&fit=crop" alt="Gaming Laptop" class="promo-img">
                    </div>
                    <div class="promo-right">
                        <div class="brand-header">
                            <div class="brand-logo">
                                <i class="bi bi-cpu-fill"></i>
                                <span>ROG</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                        <h3 class="promo-title">Gaming Powerhouse</h3>
                        <p class="promo-desc">RTX 4070 • Intel i7 • 32GB RAM</p>
                        <div class="price-tag">
                            <span class="original-price">$1,899</span>
                            <span class="sale-price">$1,519</span>
                        </div>
                        <a href="index.php?page=catalog" class="promo-link">
                            <i class="bi bi-arrow-right-circle"></i> Shop Gaming Laptops
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="promo-card enhanced-promo">
                    <div class="promo-left">
                        <div class="discount-badge new-badge">NEW</div>
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop" alt="MacBook" class="promo-img">
                    </div>
                    <div class="promo-right">
                        <div class="brand-header">
                            <div class="brand-logo apple-logo">
                                <i class="bi bi-apple"></i>
                                <span>MacBook</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <h3 class="promo-title">MacBook Pro M3</h3>
                        <p class="promo-desc">M3 Chip • 18GB RAM • 512GB SSD</p>
                        <div class="price-tag">
                            <span class="sale-price">$1,999</span>
                        </div>
                        <a href="index.php?page=catalog" class="promo-link">
                            <i class="bi bi-arrow-right-circle"></i> Shop Apple Laptops
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">FEATURED LAPTOPS</h2>
            <p class="section-subtitle">Handpicked laptops for every budget and requirement</p>
        </div>

        <div class="row g-4">
            <!-- Gaming Laptop -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge-circle bg-danger text-white">HOT</span>
                        <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=400&h=300&fit=crop" alt="ASUS ROG Gaming Laptop" class="card-img-top">
                        <div class="product-overlay">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i> Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-category">Gaming</div>
                        <h5 class="product-title">ASUS ROG Strix G16</h5>
                        <div class="product-specs">
                            <span>Intel i9-13900HX</span>
                            <span>RTX 4080</span>
                            <span>32GB RAM</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <span class="text-muted">(124)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$2,499</span>
                            <span class="old-price">$2,899</span>
                        </div>
                        <button class="btn btn-primary w-100 add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Business Laptop -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge-circle bg-success text-white">NEW</span>
                        <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400&h=300&fit=crop" alt="Dell XPS Business Laptop" class="card-img-top">
                        <div class="product-overlay">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i> Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-category">Business</div>
                        <h5 class="product-title">Dell XPS 15</h5>
                        <div class="product-specs">
                            <span>Intel i7-13700H</span>
                            <span>16GB RAM</span>
                            <span>512GB SSD</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <span class="text-muted">(89)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$1,799</span>
                        </div>
                        <button class="btn btn-primary w-100 add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Student Laptop -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge-circle bg-primary text-white">SALE</span>
                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=300&fit=crop" alt="HP Pavilion Student Laptop" class="card-img-top">
                        <div class="product-overlay">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i> Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-category">Student</div>
                        <h5 class="product-title">HP Pavilion 14</h5>
                        <div class="product-specs">
                            <span>AMD Ryzen 5</span>
                            <span>8GB RAM</span>
                            <span>256GB SSD</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                            <span class="text-muted">(156)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$649</span>
                            <span class="old-price">$799</span>
                        </div>
                        <button class="btn btn-primary w-100 add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Creative Laptop -->
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge-circle bg-dark text-white">PRO</span>
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop" alt="MacBook Pro Creative Laptop" class="card-img-top">
                        <div class="product-overlay">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i> Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="product-category">Creative</div>
                        <h5 class="product-title">MacBook Pro 14"</h5>
                        <div class="product-specs">
                            <span>M3 Pro Chip</span>
                            <span>18GB RAM</span>
                            <span>512GB SSD</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="text-muted">(203)</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">$1,999</span>
                        </div>
                        <button class="btn btn-primary w-100 add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="index.php?page=catalog" class="btn btn-outline-primary btn-lg">
                View All Products <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">SHOP BY CATEGORY</h2>
            <p class="section-subtitle">Find the perfect laptop for your specific needs</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-controller"></i>
                    </div>
                    <h4>Gaming Laptops</h4>
                    <p>High-performance machines for ultimate gaming experience</p>
                    <a href="index.php?page=catalog&category=gaming" class="category-link">
                        Shop Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <h4>Business Laptops</h4>
                    <p>Professional laptops for productivity and reliability</p>
                    <a href="index.php?page=catalog&category=business" class="category-link">
                        Shop Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-mortarboard"></i>
                    </div>
                    <h4>Student Laptops</h4>
                    <p>Affordable and portable laptops for education</p>
                    <a href="index.php?page=catalog&category=student" class="category-link">
                        Shop Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4>Creative Laptops</h4>
                    <p>Powerful machines for design and content creation</p>
                    <a href="index.php?page=catalog&category=creative" class="category-link">
                        Shop Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-white">WHY CHOOSE US</h2>
            <p class="section-subtitle text-white-50">We provide the best laptop shopping experience</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <h4>Free Shipping</h4>
                    <p>Free delivery on all orders over $500</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>2 Year Warranty</h4>
                    <p>Extended warranty on all laptop purchases</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-arrow-repeat"></i>
                    </div>
                    <h4>30-Day Returns</h4>
                    <p>Hassle-free returns within 30 days</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-headset"></i>
                    </div>
                    <h4>24/7 Support</h4>
                    <p>Round-the-clock customer service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">CUSTOMER REVIEWS</h2>
            <p class="section-subtitle">What our customers say about us</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">"Amazing service and fast delivery! The gaming laptop I ordered exceeded my expectations. Highly recommend!"</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=50&h=50&fit=crop&crop=face" alt="Customer" class="author-avatar">
                        <div>
                            <h6 class="author-name">John Smith</h6>
                            <span class="author-title">Gaming Enthusiast</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">"Great selection of business laptops. Found the perfect Dell XPS for my work. Customer service was very helpful!"</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=50&h=50&fit=crop&crop=face" alt="Customer" class="author-avatar">
                        <div>
                            <h6 class="author-name">Sarah Johnson</h6>
                            <span class="author-title">Business Owner</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                    </div>
                    <p class="testimonial-text">"Perfect student laptop at an amazing price. Fast shipping and easy returns policy. Will definitely shop here again!"</p>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop&crop=face" alt="Customer" class="author-avatar">
                        <div>
                            <h6 class="author-name">Mike Chen</h6>
                            <span class="author-title">College Student</span>
                        </div>
                    </div>
                </div>

<?php include "layouts/footer.php" ?>