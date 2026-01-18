
<?php include "layouts/header.php" ?>
<?php include "navbar.php"?>


<!-- Blog Hero Section -->
<section class="hero-section d-flex align-items-center bg-secondary text-white">
    <div class="hero-content container text-center">
        <h1 class="main-title text-uppercase">OUR BLOG</h1>
        <p class="subtitle">Tips, guides, and insights about laptops and tech</p>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">LATEST ARTICLES</h2>
            <p class="section-subtitle">Stay up-to-date with the latest news, reviews, and guides</p>
        </div>

        <div class="row g-4">
            <?php
            // Example blog posts
            $blogs = [
                [
                    "title" => "How to Choose the Best Laptop",
                    "date" => "2026-01-10",
                    "author" => "Admin",
                    "content" => "Choosing the right laptop can be tricky. Here are some tips to find the best one for your needs...",
                    "img" => "https://images.unsplash.com/photo-1580894894513-541e068a3e2b?w=400&h=250&fit=crop"
                ],
                [
                    "title" => "Top 5 Gadgets for Students",
                    "date" => "2026-01-12",
                    "author" => "Admin",
                    "content" => "As a student, you need gadgets that help with studying and productivity. Here are the top 5 gadgets...",
                    "img" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400&h=250&fit=crop"
                ],
                [
                    "title" => "Budgeting Tips for Tech Enthusiasts",
                    "date" => "2026-01-15",
                    "author" => "Admin",
                    "content" => "Tech can be expensive. Learn how to manage your budget and still enjoy your favorite gadgets.",
                    "img" => "https://images.unsplash.com/photo-1581091870629-59b34d7a9e1f?w=400&h=250&fit=crop"
                ]
            ];

            foreach ($blogs as $blog) {
                echo '<div class="col-lg-4 col-md-6">';
                echo '<div class="card blog-card h-100 shadow-sm">';
                echo '<img src="' . $blog['img'] . '" class="card-img-top" alt="' . $blog['title'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $blog['title'] . '</h5>';
                echo '<p class="text-muted">By ' . $blog['author'] . ' | ' . $blog['date'] . '</p>';
                echo '<p class="card-text">' . $blog['content'] . '</p>';
                echo '<a href="#" class="btn btn-primary w-100">Read More</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-outline-primary btn-lg">
                View All Articles <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<?php include "layouts/footer.php" ?>

