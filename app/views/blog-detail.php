

<?php


// Get blog ID safely
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Code to clear blogs if requested (for testing purposes)
if (isset($_GET['clear'])) {
    $blogs = [];
}

// Blog posts data
$blogs = [
    [
        "id" => 1,
        "title" => "How to Choose the Best Laptop",
        "date" => "2026-01-10",
        "author" => "Admin",
        "content" => "Choosing the right laptop can be tricky. In this article, we guide you through performance, battery life, and budget considerations so you can choose the perfect laptop for your needs.

<h5><i class='bi bi-lightbulb'></i> Key Considerations:</h5>
<ul class='list-unstyled'>
<li><i class='bi bi-cpu text-primary'></i> <strong>Performance:</strong> Evaluate CPU, RAM, and storage based on your usage (e.g., Intel Core i5 or AMD Ryzen 5 for general tasks).</li>
<li><i class='bi bi-display text-success'></i> <strong>Display:</strong> Opt for at least 1920x1080 resolution with good color accuracy for media and work.</li>
<li><i class='bi bi-battery-half text-warning'></i> <strong>Battery Life:</strong> Aim for 8+ hours to ensure portability without constant charging.</li>
<li><i class='bi bi-wallet text-danger'></i> <strong>Budget:</strong> Set a realistic price range and prioritize must-have features over extras.</li>
<li><i class='bi bi-shield-check text-info'></i> <strong>Build Quality:</strong> Check reviews for durability and warranty options.</li>
</ul>
<p>Remember to test the laptop in-store if possible, and read user reviews to make an informed decision.</p>",
        "img" => "https://images.unsplash.com/photo-1580894894513-541e068a3e2b?w=900&h=450&fit=crop"
    ],
    [
        "id" => 2,
        "title" => "Top 5 Gadgets for Students",
        "date" => "2026-01-12",
        "author" => "Admin",
        "content" => "As a student, having the right gadgets can greatly improve productivity. This article covers the top 5 must-have gadgets that help students study smarter and manage their time better.

<h5><i class='bi bi-star'></i> Top 5 Gadgets:</h5>
<ol>
<li><i class='bi bi-headphones text-primary'></i> <strong>Noise-Cancelling Headphones:</strong> Block distractions for focused study sessions.</li>
<li><i class='bi bi-tablet text-success'></i> <strong>Tablet with Stylus:</strong> Perfect for note-taking and digital sketching.</li>
<li><i class='bi bi-mouse text-warning'></i> <strong>Wireless Mouse:</strong> Ergonomic design for long hours of computer work.</li>
<li><i class='bi bi-cloud text-danger'></i> <strong>Portable Charger:</strong> Keep devices powered during long lectures or travel.</li>
<li><i class='bi bi-smartwatch text-info'></i> <strong>Smartwatch:</strong> Track fitness goals and receive notifications without checking your phone.</li>
</ol>
<p>These gadgets not only enhance productivity but also make learning more enjoyable and efficient.</p>",
        "img" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900&h=450&fit=crop"
    ],
    [
        "id" => 3,
        "title" => "Budgeting Tips for Tech Enthusiasts",
        "date" => "2026-01-15",
        "author" => "Admin",
        "content" => "Technology can be expensive. Learn practical budgeting tips that help you save money while still enjoying the latest gadgets and tech accessories.

<h5><i class='bi bi-piggy-bank'></i> Essential Budgeting Tips:</h5>
<ul class='list-unstyled'>
<li><i class='bi bi-search text-primary'></i> <strong>Research and Compare:</strong> Always check prices across multiple retailers and look for deals.</li>
<li><i class='bi bi-calendar-event text-success'></i> <strong>Set a Tech Budget:</strong> Allocate a specific amount monthly for tech purchases.</li>
<li><i class='bi bi-tags text-warning'></i> <strong>Wait for Sales:</strong> Black Friday, Cyber Monday, and back-to-school sales offer great discounts.</li>
<li><i class='bi bi-recycle text-danger'></i> <strong>Buy Used or Refurbished:</strong> Quality pre-owned items can save you significant money.</li>
<li><i class='bi bi-graph-up text-info'></i> <strong>Track Expenses:</strong> Use apps to monitor your spending and adjust as needed.</li>
</ul>
<p>By following these tips, you can build an impressive tech collection without breaking the bank.</p>",
        "img" => "https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=900&h=450&fit=crop"
    ]
];

// Find the selected blog
$blog = null;
foreach ($blogs as $b) {
    if ($b['id'] === $id) {
        $blog = $b;
        break;
    }
}
?>

<section class="py-5">
    <div class="container">
        <?php if (!$blog): ?>
            <h3 class="text-center">Blog post not found.</h3>
            <div class="text-center mt-3">
                <a href="?page=blog" class="btn btn-outline-primary">Back to Blog</a>
            </div>
        <?php else: ?>
            <div class="row">
                <!-- Main Article -->
                <div class="col-lg-8">
                    <h1 class="mb-3"><?php echo htmlspecialchars($blog['title']); ?></h1>
                    <p class="text-muted mb-4">
                        <i class="bi bi-person"></i> By <?php echo htmlspecialchars($blog['author']); ?> |
                        <i class="bi bi-calendar"></i> <?php echo htmlspecialchars($blog['date']); ?>
                    </p>

                    <img src="<?php echo $blog['img']; ?>" class="img-fluid rounded mb-4"
                        alt="<?php echo htmlspecialchars($blog['title']); ?>">

                    <div class="fs-5 mb-4"><?php echo $blog['content']; ?></div>

                    <a href="?page=blog" class="btn btn-outline-primary">
                        <i class="bi bi-arrow-left"></i> Back to Blog
                    </a>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Author Info Widget -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0"><i class="bi bi-person-circle"></i> About the Author</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="https://via.placeholder.com/100x100?text=Admin" class="rounded-circle mb-3"
                                alt="Author">
                            <h6><?php echo htmlspecialchars($blog['author']); ?></h6>
                            <p class="small text-muted">Tech enthusiast and writer sharing insights on the latest gadgets
                                and tech trends.</p>
                        </div>
                    </div>

                    <!-- Recent Posts Widget -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0"><i class="bi bi-clock-history"></i> Recent Posts</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <?php
                                foreach ($blogs as $b) {
                                    if ($b['id'] !== $blog['id']) {
                                        echo '<li class="mb-3">';
                                        echo '<a href="?page=blog-detail&id=' . $b['id'] . '" class="text-decoration-none d-block">';
                                        echo '<div class="d-flex">';
                                        echo '<img src="' . $b['img'] . '" class="me-3 rounded" alt="' . $b['title'] . '" style="width: 60px; height: 40px; object-fit: cover;">';
                                        echo '<div>';
                                        echo '<h6 class="mb-1 text-dark">' . $b['title'] . '</h6>';
                                        echo '<small class="text-muted"><i class="bi bi-calendar"></i> ' . $b['date'] . '</small>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</a>';
                                        echo '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0"><i class="bi bi-tags"></i> Categories</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="?page=blog" class="text-decoration-none"><i class="bi bi-tag"></i>
                                        Laptops</a></li>
                                <li class="mb-2"><a href="?page=blog" class="text-decoration-none"><i class="bi bi-tag"></i>
                                        Gadgets</a></li>
                                <li class="mb-2"><a href="?page=blog" class="text-decoration-none"><i class="bi bi-tag"></i>
                                        Budgeting</a></li>
                                <li class="mb-2"><a href="?page=blog" class="text-decoration-none"><i class="bi bi-tag"></i>
                                        Tech Tips</a></li>
                                <li class="mb-0"><a href="?page=blog" class="text-decoration-none"><i class="bi bi-tag"></i>
                                        Reviews</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Share Widget -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0"><i class="bi bi-share"></i> Share This Post</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <a href="#" class="text-primary"><i class="bi bi-facebook fs-4"></i></a>
                                <a href="#" class="text-info"><i class="bi bi-twitter fs-4"></i></a>
                                <a href="#" class="text-danger"><i class="bi bi-instagram fs-4"></i></a>
                                <a href="#" class="text-success"><i class="bi bi-whatsapp fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>