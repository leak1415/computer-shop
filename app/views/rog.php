<?php include "layouts/header.php" ?>
<?php include "navbar.php"?>
<?php require_once __DIR__ . "/../models/home_db/home.php";?>
<?php require_once __DIR__ . "/../models/rog_db/rog_image_db.php";?>

<!-- ROG Gaming Laptops Section -->
<section class="py-5">
    <div class="container">
        <!-- Page Header -->
        <div class="text-center mb-5">
            <div class="brand-header mb-4">
                <div class="brand-logo mx-auto"
                    style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; background: #ff6b00; border-radius: 50%; margin-bottom: 20px;">
                    <i class="bi bi-cpu-fill text-white" style="font-size: 40px;"></i>
                </div>
                <h1 class="display-4 fw-bold text-uppercase">ROG Gaming Laptops</h1>
                <p class="lead text-muted">Ultimate gaming machines for champions</p>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <p class="text-center">Experience the pinnacle of gaming performance with ROG (Republic of Gamers)
                        laptops. Engineered for competitive gaming, featuring cutting-edge graphics, lightning-fast
                        processors, and advanced cooling systems.</p>
                </div>
            </div>
        </div>

        <!-- Filter Options -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <button class="btn btn-outline-primary active">All ROG</button>
                    <button class="btn btn-outline-primary">RTX 4090</button>
                    <button class="btn btn-outline-primary">RTX 4080</button>
                    <button class="btn btn-outline-primary">RTX 4070</button>
                    <button class="btn btn-outline-primary">Intel i9</button>
                    <button class="btn btn-outline-primary">AMD Ryzen 9</button>
                </div>
            </div>
        </div>

        <!-- ROG Products Grid -->
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

        <!-- Back to Home -->
        <div class="text-center mt-5">
            <a href="index.php?page=home" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-arrow-left"></i> Back to Home
            </a>
        </div>
    </div>
</section>

<!-- ROG Features Section -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-white">ROG EXCLUSIVE FEATURES</h2>
            <p class="section-subtitle text-white-50">What makes ROG laptops the ultimate gaming choice</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h4>Extreme Performance</h4>
                    <p>Latest Intel/AMD processors with RTX 40 series graphics</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-snow"></i>
                    </div>
                    <h4>Advanced Cooling</h4>
                    <p>Liquid metal cooling and custom fan systems</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h4>RGB Lighting</h4>
                    <p>Aura Sync RGB with per-key keyboard lighting</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-item text-center">
                    <div class="feature-icon">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h4>High Refresh Displays</h4>
                    <p>Up to 240Hz refresh rate with 3ms response time</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "layouts/footer.php" ?>