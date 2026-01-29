<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Success Roadmap | Laptop Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .hero-section { background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%); color: white; padding: 60px 0; }
        .card { border: none; border-radius: 15px; transition: transform 0.3s ease; height: 100%; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .step-number { width: 40px; height: 40px; background: #198754; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; margin-bottom: 15px; }
        .table-custom { background: white; border-radius: 15px; overflow: hidden; }
        .cta-box { background: #212529; color: white; border-radius: 15px; padding: 40px; text-align: center; }
    </style>
</head>
<body>

<?php
// Simple data array for categories
$categories = [
    ['title' => 'Gaming', 'desc' => 'High-performance beasts'],
    ['title' => 'Business', 'desc' => 'Reliability & Security'],
    ['title' => 'Student', 'desc' => 'Portability & Value'],
    ['title' => 'Creative', 'desc' => 'Power for Pixels']
];
?>

<header class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">🚀 Elevate Your Tech Business</h1>
        <p class="lead">The definitive roadmap from storefront to market leader.</p>
    </div>
</header>

<main class="container my-5">
    
    <section class="mb-5">
        <h2 class="mb-4">🏗️ Phase 1: The Digital Storefront</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="step-number">1</div>
                    <h5>First Impressions</h5>
                    <p class="text-muted">Audit your homepage weekly. Ensure images are high-res and titles are punchy.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="step-number">2</div>
                    <h5>The One-Click Rule</h5>
                    <p class="text-muted">Intuitive navigation. If a customer has to think about where to click, you've lost them.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <div class="step-number">3</div>
                    <h5>Problem Solving</h5>
                    <p class="text-muted">Categorize by use-case rather than just specs to help customers choose faster.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">📈 Phase 2: Strategic Inventory</h2>
        <div class="table-responsive table-custom shadow-sm">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Action</th>
                        <th>Why it works</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Dynamic Pricing</strong></td>
                        <td>Triggers the psychological urge to save using "Original vs. Sale" visuals.</td>
                    </tr>
                    <tr>
                        <td><strong>Feature Rotation</strong></td>
                        <td>Keeps the site fresh for returning visitors, boosting SEO.</td>
                    </tr>
                    <tr>
                        <td><strong>Trust Badges</strong></td>
                        <td>Guides eyes toward high-margin items like "-20%" or "Best Seller".</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="mb-4">📂 Recommended Categories</h2>
        <div class="row">
            <?php foreach($categories as $cat): ?>
            <div class="col-md-3 mb-3">
                <div class="p-3 border rounded bg-white text-center">
                    <h6 class="fw-bold mb-1"><?php echo $cat['title']; ?></h6>
                    <small class="text-muted"><?php echo $cat['desc']; ?></small>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="cta-box shadow">
        <h3>Ready to Scale Your Operations?</h3>
        <p class="mb-4">Download our free guide on setting up a high-efficiency professional repair bench.</p>
        <a href="./strategy.php" class="btn btn-primary btn-lg px-5 py-3 fw-bold">Go Back to See the Tips</a>
    </section>

</main>

<footer class="text-center py-4 text-muted">
    <p>&copy; <?php echo date("Y"); ?> Laptop Shop Business Solutions</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>