<?php include "layouts/header.php" ?>
<?php include "navbar.php"?>
<?php require_once "app/models/home_db/home.php";?>
<?php require_once __DIR__ . "/../models/home_db/image_db.php";?>

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
                        <img src="app/views/images/<?php echo $images[0]; ?>" alt="Gaming Laptop" class="promo-img">
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
                        <img src="app/views/images/<?php echo $images[1]; ?>" alt="MacBook" class="promo-img">
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
<section class="py-5">
    <div class="container">
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="promo-card enhanced-promo">
                    <div class="promo-left">
                        <div class="discount-badge">-20%</div>
                        <img src="app/views/images/<?php echo $images[2]; ?>" alt="Gaming Laptop" class="promo-img">
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
                        <img src="app/views/images/<?php echo $images[3]; ?>" alt="MacBook" class="promo-img">
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

        <div class="products-grid">
            <?php 
            $image_index = 0;
            while($row = $result->fetch_assoc()) { 
                // Get image from image_db array, loop back to start if we run out
                $image_name = $images[$image_index % count($images)];
                $image_index++;
            ?>
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge-circle bg-danger text-white">HOT</span>
                        
                        <!-- Dynamic image from image_db -->
                        <img src="app/views/images/<?php echo $image_name; ?>" alt="<?php echo htmlspecialchars($row['product_name']); ?>" class="card-img-top">
                       
                            
                        <div class="product-overlay">
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i> Quick View
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="padding">
                        
                        <div class="product-category"><?php echo $row['category_name']; ?></div>
                        
                        <h5 class="product-title"><?php echo $row['product_name']; ?></h5>
                        
                        <div class="product-specs">
                            <span><?php echo $row['cpu']; ?></span>
                            <span><?php echo $row['gpu']; ?></span>
                            <span><?php echo $row['ram']; ?> RAM</span>
                        </div>
                        
                        <div class="product-rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <span class="text-muted">(<?php echo $row['review_count']; ?>)</span>
                        </div>
                        
                        <div class="product-price">
                            <span class="current-price">$<?php echo number_format($row['price'], 0); ?></span>
                            <span class="old-price">$<?php echo number_format($row['old_price'], 0); ?></span>
                        </div>
                        
                        <button class="btn btn-primary w-100 add-to-cart">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            <?php } ?>
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
            </div>

<?php include "layouts/footer.php" ?>