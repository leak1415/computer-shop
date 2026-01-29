<?php include __DIR__ . "/layouts/header.php" ?>
<?php include "navbar.php" ?>


<section class="hero-section d-flex align-items-center bg-secondary text-white">
    <div class="hero-content container text-center">
        <h1 class="main-title text-uppercase">OUR BLOG</h1>
        <p class="subtitle">Tips, guides, and insights about laptops and tech</p>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="section-title">LATEST ARTICLES</h2>
                    <p class="section-subtitle">Stay up-to-date with the latest news, reviews, and guides</p>
                </div>
                <div class="row g-4">
                    <?php
                    // Code to clear blogs if requested (for testing purposes)
                    if (isset($_GET['clear'])) {
                        $blogs = [];
                    }
                    $blogs = [
                        [
                            "id" => 1,
                            "title" => "How to Choose the Best Laptop",
                            "date" => "2026-01-10",
                            "author" => "Admin",
                            "content" => "Choosing the right laptop can be tricky. Here are some tips to find the best one for your needs...",
                            "img" => "https://images.unsplash.com/photo-1580894894513-541e068a3e2b?w=400&h=250&fit=crop"
                        ],
                        [
                            "id" => 2,
                            "title" => "Top 5 Gadgets for Students",
                            "date" => "2026-01-12",
                            "author" => "Admin",
                            "content" => "As a student, you need gadgets that help with studying and productivity. Here are the top 5 gadgets",
                            "img" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop"
                        ],
                        [
                            "id" => 3,
                            "title" => "Budgeting Tips for Tech Enthusiasts",
                            "date" => "2026-01-15",
                            "author" => "Admin",
                            "content" => "Tech can be expensive. Learn how to manage your budget and still enjoy your favorite gadgets.",
                            "img" => "https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=400&h=250&fit=crop"
                        ]
                    ];

                    foreach ($blogs as $blog) {
                        echo '<div class="col-md-6 col-lg-4">';
                        echo '<div class="card blog-card h-100 shadow-sm border-0">';
                        echo '<img src="' . $blog['img'] . '" class="card-img-top rounded-0" alt="' . $blog['title'] . '">';
                        echo '<div class="card-body d-flex flex-column">';
                        echo '<h5 class="card-title">' . $blog['title'] . '</h5>';
                        echo '<p class="text-muted small mb-2"><i class="bi bi-person"></i> ' . $blog['author'] . ' | <i class="bi bi-calendar"></i> ' . $blog['date'] . '</p>';
                        echo '<p class="card-text flex-grow-1">' . $blog['content'] . '</p>';
                        echo '<a href="?page=blog-detail?id=' . $blog['id'] . '" class="btn btn-primary mt-auto"><i class="bi bi-arrow-right-circle"></i> Read More</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    
                    }
                    ?>
                </div>

                <div class="text-center mt-5">
                    <a href="?page=blog" class="btn btn-outline-primary btn-lg">
                        View All Articles <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="bi bi-search"></i> Search</h5>
                    </div>
                    <div class="card-body">
                        <form method="GET" class="d-flex">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search articles..." aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
                        </form>
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
                            foreach ($blogs as $blog) {
                                echo '<li class="mb-3">';
                                echo '<a href="?page=blog-detail&id=' . $blog['id'] . '" class="text-decoration-none d-block">';
                                echo '<div class="d-flex">';
                                echo '<img src="' . $blog['img'] . '" class="me-3 rounded" alt="' . $blog['title'] . '" style="width: 60px; height: 40px; object-fit: cover;">';
                                echo '<div>';
                                echo '<h6 class="mb-1 text-dark">' . $blog['title'] . '</h6>';
                                echo '<small class="text-muted"><i class="bi bi-calendar"></i> ' . $blog['date'] . '</small>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</li>';
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
                            <li class="mb-2"><a href="?page=blog&category=laptops" class="text-decoration-none"><i class="bi bi-tag"></i> Laptops</a></li>
                            <li class="mb-2"><a href="?page=blog&category=gadgets" class="text-decoration-none"><i class="bi bi-tag"></i> Gadgets</a></li>
                            <li class="mb-2"><a href="?page=blog&category=budgeting" class="text-decoration-none"><i class="bi bi-tag"></i> Budgeting</a></li>
                            <li class="mb-2"><a href="?page=blog&category=tips" class="text-decoration-none"><i class="bi bi-tag"></i> Tech Tips</a></li>
                            <li class="mb-0"><a href="?page=blog&category=reviews" class="text-decoration-none"><i class="bi bi-tag"></i> Reviews</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter Widget -->
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0"><i class="bi bi-envelope"></i> Newsletter</h5>
                    </div>
                    <div class="card-body">
                        <p>Subscribe to get the latest updates and articles delivered to your inbox.</p>
                        <form method="POST" action="?page=blog">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="newsletter_email" placeholder="Enter your email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>
<?php include __DIR__ . "/layouts/footer.php" ?>
