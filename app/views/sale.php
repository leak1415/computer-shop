<?php include __DIR__ . "/layouts/header.php"; ?>
<?php include "navbar.php"; ?>
<?php require_once "app/models/home_db/home.php"; ?>
<?php require_once __DIR__ . "/../models/home_db/image_db.php"; ?>

<!-- SALE HEADER -->
<section class="bg-primary text-black py-5">
    <div class="container text-center">
        <span class="badge bg-warning text-dark mb-3">LIMITED TIME</span>
        <h1 class="display-5 fw-bold">MEGA SALE</h1>
        <p class="lead mb-4">
            Up to <strong>40% OFF</strong> on selected laptops
        </p>
        <a href="#sale-products" class="btn btn-light btn-lg rounded-pill">
            View Deals
        </a>
    </div>
</section>

<!-- HIGHLIGHT DEALS -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-3">
                            <img src="app/views/images/<?php echo $images[0]; ?>"
                                 class="img-fluid"
                                 alt="Gaming Laptop">
                        </div>
                        <div class="col-md-7 p-4">
                            <span class="badge bg-danger mb-2">SAVE 20%</span>
                            <h4 class="fw-bold">Gaming Laptop Deal</h4>
                            <p class="text-muted">
                                RTX 4070 • Intel i7 • 32GB RAM
                            </p>
                            <h5 class="text-primary">$1,519</h5>
                            <small class="text-muted text-decoration-line-through">
                                $1,899
                            </small>
                            <div class="mt-3">
                                <a href="index.php?page=catalog"
                                   class="btn btn-outline-primary btn-sm rounded-pill">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-5 text-center p-3">
                            <img src="app/views/images/<?php echo $images[1]; ?>"
                                 class="img-fluid"
                                 alt="MacBook">
                        </div>
                        <div class="col-md-7 p-4">
                            <span class="badge bg-success mb-2">NEW DEAL</span>
                            <h4 class="fw-bold">MacBook Pro M3</h4>
                            <p class="text-muted">
                                M3 Chip • 18GB RAM • 512GB SSD
                            </p>
                            <h5 class="text-primary">$1,999</h5>
                            <div class="mt-3">
                                <a href="index.php?page=catalog"
                                   class="btn btn-outline-primary btn-sm rounded-pill">
                                    Shop Apple Deals
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SALE PRODUCTS GRID -->
<section id="sale-products" class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Discounted Laptops</h2>
            <p class="text-muted">
                Best value laptops at unbeatable prices
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $image_index = 0;
            while ($row = $result->fetch_assoc()) {
                if ($row['old_price'] <= $row['price']) continue; // SALE ONLY
                $image = $images[$image_index % count($images)];
                $image_index++;

                $discount = round(
                    (($row['old_price'] - $row['price']) / $row['old_price']) * 100
                );
            ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">

                    <div class="position-relative text-center p-3">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">
                            -<?= $discount ?>%
                        </span>
                        <img src="app/views/images/<?php echo $image; ?>"
                             class="img-fluid"
                             style="height:180px; object-fit:contain;"
                             alt="<?php echo htmlspecialchars($row['product_name']); ?>">
                    </div>

                    <div class="card-body text-center">
                        <small class="text-muted">
                            <?php echo $row['category_name']; ?>
                        </small>
                        <h6 class="fw-bold mt-1">
                            <?php echo $row['product_name']; ?>
                        </h6>

                        <div class="text-warning mb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>

                        <h5 class="text-primary mb-0">
                            $<?php echo number_format($row['price'], 0); ?>
                        </h5>
                        <small class="text-muted text-decoration-line-through">
                            $<?php echo number_format($row['old_price'], 0); ?>
                        </small>
                    </div>

                    <div class="card-footer bg-white border-0 text-center">
                        <button class="btn btn-primary btn-sm rounded-pill w-100">
                            <i class="bi bi-cart-plus"></i> Add to Cart
                        </button>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>

<!-- SALE CTA -->
<section class="py-5 text-center">
    <div class="container">
        <h3 class="fw-bold">Hurry! Deals Won’t Last Forever</h3>
        <p class="lead text-muted mb-4">
            Grab your discounted laptop today
        </p>
        <a href="index.php?page=catalog"
           class="btn btn-danger btn-lg rounded-pill">
            Browse All Deals
        </a>
    </div>
</section>

<?php include __DIR__ . "/layouts/footer.php"; ?>
