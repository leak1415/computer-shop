<?php include __DIR__ . "/layouts/header.php" ?>
<?php include "navbar.php" ?>
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
                        <img src="app/views/images/1.png" alt="Gaming Laptop" class="promo-img">
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
                        <a href="app/views/rog.php" class="promo-link">
                            <i class="bi bi-arrow-right-circle"></i> Shop Gaming Laptops
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="promo-card enhanced-promo">
                    <div class="promo-left">
                        <div class="discount-badge new-badge">NEW</div>
                        <img src="app/views/images/49.png" alt="MacBook" class="promo-img">
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
                        <div class="discount-badge">-15%</div>
                        <img src="app/views/images/3.png" alt="MSI Gaming Laptop" class="promo-img">
                    </div>
                    <div class="promo-right">
                        <div class="brand-header">
                            <div class="brand-logo">
                                <i class="bi bi-cpu-fill"></i>
                                <span>MSI</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                        </div>
                        <h3 class="promo-title">MSI Gaming Beast</h3>
                        <p class="promo-desc">RTX 4060 • AMD Ryzen 7 • 16GB RAM</p>
                        <div class="price-tag">
                            <span class="original-price">$1,599</span>
                            <span class="sale-price">$1,359</span>
                        </div>
                        <a href="app/views/rog.php" class="promo-link">
                            <i class="bi bi-arrow-right-circle"></i> Shop MSI Gaming
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="promo-card enhanced-promo">
                    <div class="promo-left">
                        <div class="discount-badge">-10%</div>
                        <img src="app/views/images/4.png" alt="Lenovo Laptop" class="promo-img">
                    </div>
                    <div class="promo-right">
                        <div class="brand-header">
                            <div class="brand-logo">
                                <i class="bi bi-laptop"></i>
                                <span>Lenovo</span>
                            </div>
                            <div class="rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                        <h3 class="promo-title">Lenovo ThinkPad</h3>
                        <p class="promo-desc">Intel i7 • 16GB RAM • 512GB SSD</p>
                        <div class="price-tag">
                            <span class="original-price">$1,299</span>
                            <span class="sale-price">$1,169</span>
                        </div>
                        <a href="index.php?page=catalog" class="promo-link">
                            <i class="bi bi-arrow-right-circle"></i> Shop Business Laptops
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

                    <!-- Dynamic image from image_db -->
                    <img src="app/views/images/<?php echo $image_name; ?>"
                        alt="<?php echo htmlspecialchars($row['product_name']); ?>" class="card-img-top">


                    <div class="product-overlay">
                        <button class="btn btn-primary btn-sm quick-view-btn">
                            <i class="bi bi-eye"></i> Quick View
                        </button>
                    </div>
                </div>
                <div class="card-body">

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
            <button class="btn btn-outline-primary btn-lg" onclick="toggleAllProducts()">
                <span id="viewAllText">View All Products</span> <i class="bi bi-arrow-right" id="viewAllIcon"></i>
            </button>
        </div>
    </div>
</section>

<!-- All Products Section (Hidden by default) -->
<section id="allProductsSection" class="py-5 bg-light" style="display: none;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">ALL PRODUCTS</h2>
            <p class="section-subtitle">Complete collection of laptops available in our store</p>
        </div>

        <!-- Filter Options -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <button class="btn btn-outline-primary active" onclick="filterProducts('all')">All Products</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('gaming')">Gaming</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('business')">Business</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('student')">Student</button>
                    <button class="btn btn-outline-primary" onclick="filterProducts('apple')">Apple</button>
                </div>
            </div>
        </div>

        <!-- All Products Grid -->
        <div class="products-grid" id="allProductsGrid">
            <?php 
            // Reset result pointer to show all products again
            $result->data_seek(0);
            $image_index = 0;
            
            // Create additional sample products for demonstration
            $additional_products = [
                [
                    'product_name' => 'Dell XPS 13',
                    'category_name' => 'Business Laptop',
                    'cpu' => 'Intel Core i7-1360P',
                    'gpu' => 'Intel Iris Xe',
                    'ram' => '16GB',
                    'price' => 1299,
                    'old_price' => 1499,
                    'review_count' => 234
                ],
                [
                    'product_name' => 'HP Spectre x360',
                    'category_name' => 'Business Laptop',
                    'cpu' => 'Intel Core i7-1355U',
                    'gpu' => 'Intel Iris Xe',
                    'ram' => '16GB',
                    'price' => 1199,
                    'old_price' => 1399,
                    'review_count' => 189
                ],
                [
                    'product_name' => 'Lenovo ThinkPad X1',
                    'category_name' => 'Business Laptop',
                    'cpu' => 'Intel Core i5-1335U',
                    'gpu' => 'Intel Iris Xe',
                    'ram' => '16GB',
                    'price' => 1599,
                    'old_price' => 1799,
                    'review_count' => 156
                ],
                [
                    'product_name' => 'ASUS ZenBook 14',
                    'category_name' => 'Student Laptop',
                    'cpu' => 'AMD Ryzen 7 7730U',
                    'gpu' => 'AMD Radeon',
                    'ram' => '8GB',
                    'price' => 799,
                    'old_price' => 999,
                    'review_count' => 145
                ],
                [
                    'product_name' => 'Acer Swift 3',
                    'category_name' => 'Student Laptop',
                    'cpu' => 'Intel Core i5-1335U',
                    'gpu' => 'Intel Iris Xe',
                    'ram' => '8GB',
                    'price' => 699,
                    'old_price' => 849,
                    'review_count' => 123
                ],
                [
                    'product_name' => 'Microsoft Surface Pro',
                    'category_name' => 'Student Laptop',
                    'cpu' => 'Intel Core i7-1255U',
                    'gpu' => 'Intel Iris Xe',
                    'ram' => '16GB',
                    'price' => 1399,
                    'old_price' => 1599,
                    'review_count' => 267
                ],
                [
                    'product_name' => 'MSI Creator 16',
                    'category_name' => 'Creative Laptop',
                    'cpu' => 'Intel Core i9-13900HX',
                    'gpu' => 'RTX 4070',
                    'ram' => '32GB',
                    'price' => 2799,
                    'old_price' => 3199,
                    'review_count' => 89
                ],
                [
                    'product_name' => 'Razer Blade 15',
                    'category_name' => 'Gaming Laptop',
                    'cpu' => 'Intel Core i7-13700H',
                    'gpu' => 'RTX 4060',
                    'ram' => '16GB',
                    'price' => 1899,
                    'old_price' => 2199,
                    'review_count' => 178
                ],
                [
                    'product_name' => 'Alienware m16',
                    'category_name' => 'Gaming Laptop',
                    'cpu' => 'AMD Ryzen 7 7745HX',
                    'gpu' => 'RTX 4080',
                    'ram' => '32GB',
                    'price' => 2499,
                    'old_price' => 2899,
                    'review_count' => 134
                ]
            ];
            
            // Display original products
            while($row = $result->fetch_assoc()) { 
                $image_name = $images[$image_index % count($images)];
                $image_index++;
            ?>
            <div class="product-card all-product" data-category="all">
                <div class="product-image">
                    <img src="app/views/images/<?php echo $image_name; ?>" alt="<?php echo htmlspecialchars($row['product_name']); ?>" class="card-img-top">
                    <div class="product-overlay">
                        <button class="btn btn-primary btn-sm quick-view-btn">
                            <i class="bi bi-eye"></i> Quick View
                        </button>
                    </div>
                </div>
                <div class="card-body">
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
            
            <?php
            // Display additional products
            foreach ($additional_products as $product) {
                $image_name = $images[$image_index % count($images)];
                $image_index++;
                $category_class = 'all';
                if (strpos(strtolower($product['category_name']), 'gaming') !== false) $category_class = 'gaming';
                elseif (strpos(strtolower($product['category_name']), 'business') !== false) $category_class = 'business';
                elseif (strpos(strtolower($product['category_name']), 'student') !== false) $category_class = 'student';
                elseif (strpos(strtolower($product['product_name']), 'apple') !== false || strpos(strtolower($product['product_name']), 'macbook') !== false) $category_class = 'apple';
            ?>
            <div class="product-card all-product" data-category="<?php echo $category_class; ?>">
                <div class="product-image">
                    <img src="app/views/images/<?php echo $image_name; ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" class="card-img-top">
                    <div class="product-overlay">
                        <button class="btn btn-primary btn-sm quick-view-btn">
                            <i class="bi bi-eye"></i> Quick View
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="product-category"><?php echo $product['category_name']; ?></div>
                    <h5 class="product-title"><?php echo $product['product_name']; ?></h5>
                    <div class="product-specs">
                        <span><?php echo $product['cpu']; ?></span>
                        <span><?php echo $product['gpu']; ?></span>
                        <span><?php echo $product['ram']; ?> RAM</span>
                    </div>
                    <div class="product-rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <span class="text-muted">(<?php echo $product['review_count']; ?>)</span>
                    </div>
                    <div class="product-price">
                        <span class="current-price">$<?php echo number_format($product['price'], 0); ?></span>
                        <span class="old-price">$<?php echo number_format($product['old_price'], 0); ?></span>
                    </div>
                    <button class="btn btn-primary w-100 add-to-cart">
                        <i class="bi bi-cart-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
            <?php } ?>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-secondary btn-lg" onclick="toggleAllProducts()">
                <i class="bi bi-arrow-up"></i> Back to Featured
            </button>
        </div>
    </div>
</section>

<script>
function toggleAllProducts() {
    const section = document.getElementById('allProductsSection');
    const buttonText = document.getElementById('viewAllText');
    const buttonIcon = document.getElementById('viewAllIcon');
    
    if (section.style.display === 'none') {
        section.style.display = 'block';
        buttonText.textContent = 'Hide All Products';
        buttonIcon.className = 'bi bi-arrow-up';
        
        // Smooth scroll to the new section
        section.scrollIntoView({ behavior: 'smooth' });
    } else {
        section.style.display = 'none';
        buttonText.textContent = 'View All Products';
        buttonIcon.className = 'bi bi-arrow-right';
        
        // Smooth scroll back to featured products
        document.querySelector('.featured-products-section').scrollIntoView({ behavior: 'smooth' });
    }
}

function filterProducts(category) {
    const products = document.querySelectorAll('.all-product');
    const buttons = document.querySelectorAll('.btn-outline-primary');
    
    // Update active button
    buttons.forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent.toLowerCase().includes(category) || 
            (category === 'all' && btn.textContent === 'All Products')) {
            btn.classList.add('active');
        }
    });
    
    // Filter products
    products.forEach(product => {
        if (category === 'all' || product.dataset.category === category) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}
</script>

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
                <div class="feature-card-modern">
                    <div class="feature-card-header">
                        <div class="feature-icon-modern">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div class="feature-badge">FREE</div>
                    </div>
                    <div class="feature-card-body">
                        <h4>Free Shipping</h4>
                        <p>Free delivery on all orders over $500</p>
                        <div class="feature-details">
                            <span><i class="bi bi-check-circle"></i> Express delivery</span>
                            <span><i class="bi bi-check-circle"></i> Track orders</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card-modern">
                    <div class="feature-card-header">
                        <div class="feature-icon-modern">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="feature-badge">PROTECTED</div>
                    </div>
                    <div class="feature-card-body">
                        <h4>2 Year Warranty</h4>
                        <p>Extended warranty on all laptop purchases</p>
                        <div class="feature-details">
                            <span><i class="bi bi-check-circle"></i> Full coverage</span>
                            <span><i class="bi bi-check-circle"></i> Fast replacement</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card-modern">
                    <div class="feature-card-header">
                        <div class="feature-icon-modern">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <div class="feature-badge">EASY</div>
                    </div>
                    <div class="feature-card-body">
                        <h4>30-Day Returns</h4>
                        <p>Hassle-free returns within 30 days</p>
                        <div class="feature-details">
                            <span><i class="bi bi-check-circle"></i> No questions asked</span>
                            <span><i class="bi bi-check-circle"></i> Full refund</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-card-modern">
                    <div class="feature-card-header">
                        <div class="feature-icon-modern">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-badge">ALWAYS</div>
                    </div>
                    <div class="feature-card-body">
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock customer service</p>
                        <div class="feature-details">
                            <span><i class="bi bi-check-circle"></i> Live chat</span>
                            <span><i class="bi bi-check-circle"></i> Phone support</span>
                        </div>
                    </div>
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
                <div class="testimonial-card-modern">
                    <div class="testimonial-header">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-verified">
                            <i class="bi bi-patch-check-fill"></i> Verified Purchase
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Amazing service and fast delivery! The gaming laptop I ordered exceeded my expectations. Highly recommend!"</p>
                        <div class="testimonial-product">
                            <i class="bi bi-laptop"></i> ROG Strix G16
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="app/views/images/46.png" alt="John Smith">
                            <div class="avatar-badge">
                                <i class="bi bi-controller"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">John Smith</h6>
                            <span class="author-title">Gaming Enthusiast</span>
                            <div class="review-date">2 weeks ago</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card-modern">
                    <div class="testimonial-header">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-verified">
                            <i class="bi bi-patch-check-fill"></i> Verified Purchase
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Great selection of business laptops. Found the perfect Dell XPS for my work. Customer service was very helpful!"</p>
                        <div class="testimonial-product">
                            <i class="bi bi-laptop"></i> Dell XPS 15
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="app/views/images/47.png" alt="Sarah Johnson">
                            <div class="avatar-badge">
                                <i class="bi bi-briefcase"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">Sarah Johnson</h6>
                            <span class="author-title">Business Owner</span>
                            <div class="review-date">1 month ago</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card-modern">
                    <div class="testimonial-header">
                        <div class="testimonial-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="testimonial-verified">
                            <i class="bi bi-patch-check-fill"></i> Verified Purchase
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-text">"Perfect student laptop at an amazing price. Fast shipping and easy returns policy. Will definitely shop here again!"</p>
                        <div class="testimonial-product">
                            <i class="bi bi-laptop"></i> MacBook Air M2
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="app/views/images/48.png" alt="Mike Chen">
                            <div class="avatar-badge">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">Mike Chen</h6>
                            <span class="author-title">College Student</span>
                            <div class="review-date">3 weeks ago</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . "/layouts/footer.php" ?>
