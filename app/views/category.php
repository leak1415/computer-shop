<?php
require_once __DIR__ . '/../../init.php';
validate_route();
$email = '';
$level = '';

if (isset($_SESSION['email']) && isset($_SESSION['level'])) {
    $email = $_SESSION['email'];
    $level = $_SESSION['level'];
} else {
    if (isset($_SESSION['level'])) {
        $level = $_SESSION['level'];
    }
}

function show_link_if_exists($filepath, $label, $userLevel, $for = ['Admin'])
{
    if (in_array($userLevel, $for)) {
        echo '<a href="' . $filepath . '" class="nav-link">' . $label . '</a>';
    }
}

?>

<?php require_once __DIR__ . '/../../init.php';

    validate_login()
?>

<?php
$pages = array(
    "HOME" => ["/app/views/home.php", ['Admin', 'User', 'Guest']],
    "CATEGORY" => ["/app/views/category.php", ['Admin', 'User', 'Guest']],
    "SALE" => ["/app/views/sale.php", ['Admin', 'User', 'Guest']],
    "BLOG" => ["/app/views/blog.php", ['Admin', 'User', 'Guest']],
    "STRATEGY" => ["/app/views/strategy.php", ['Admin']],
    "CONTACT US" => ["/app/views/contact.php", ['Admin', 'User', 'Guest']],
);
?>

<!-- Top Bar -->





<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize session variables
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

// Product data
$all_products = [
    [
        'id' => 1,
        'name' => 'Gaming Laptop RTX 4070',
        'price' => 1499.00,
        'old_price' => 1699.00,
        'is_new' => false,
        'is_sale' => true,
        'desc' => 'High-performance gaming laptop with RTX 4070 GPU, 16GB RAM, 1TB SSD.',
        'category' => 'laptops',
        'brand' => 'ASUS',
        'rating' => 4.8,
        'review_count' => 124,
        'specs' => [
            'Processor' => 'Intel Core i7-13700H',
            'GPU' => 'NVIDIA RTX 4070 8GB',
            'RAM' => '16GB DDR5',
            'Storage' => '1TB NVMe SSD',
            'Display' => '15.6" QHD 165Hz',
            'OS' => 'Windows 11 Pro'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=800',
            'https://images.unsplash.com/photo-1600003263720-95b45a4035d5?w=800',
            'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=800'
        ]
    ],
    [
        'id' => 2,
        'name' => 'Mechanical Keyboard RGB',
        'price' => 89.99,
        'old_price' => 0,
        'is_new' => false,
        'is_sale' => false,
        'desc' => 'RGB backlit mechanical keyboard with blue switches.',
        'category' => 'accessories',
        'brand' => 'Corsair',
        'rating' => 4.5,
        'review_count' => 89,
        'specs' => [
            'Switch Type' => 'Cherry MX Blue',
            'Backlight' => 'RGB Per-key',
            'Connectivity' => 'USB',
            'Keycaps' => 'Doubleshot PBT',
            'Polling Rate' => '1000Hz'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1541140532154-b024d705b90a?w=800',
            'https://images.unsplash.com/photo-1618384887929-16ec33fab9ef?w=800'
        ]
    ],
    [
        'id' => 3,
        'name' => '27" 1440p 165Hz Gaming Monitor',
        'price' => 279.00,
        'old_price' => 329.00,
        'is_new' => false,
        'is_sale' => true,
        'desc' => 'Ultra-smooth 165Hz refresh rate, IPS panel.',
        'category' => 'monitors',
        'brand' => 'LG',
        'rating' => 4.7,
        'review_count' => 156,
        'specs' => [
            'Resolution' => '2560x1440 QHD',
            'Refresh Rate' => '165Hz',
            'Panel Type' => 'IPS',
            'Response Time' => '1ms',
            'Adaptive Sync' => 'AMD FreeSync Premium',
            'Ports' => '2x HDMI, 1x DisplayPort'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=800',
            'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=800'
        ]
    ],
    [
        'id' => 4,
        'name' => 'Intel Core i7-13700K',
        'price' => 399.00,
        'old_price' => 0,
        'is_new' => true,
        'is_sale' => false,
        'desc' => '13th gen Intel processor with 16 cores.',
        'category' => 'components',
        'brand' => 'Intel',
        'rating' => 4.9,
        'review_count' => 203,
        'specs' => [
            'Cores' => '16 (8P+8E)',
            'Threads' => '24',
            'Base Clock' => '3.4 GHz',
            'Max Turbo' => '5.4 GHz',
            'Cache' => '30MB',
            'Socket' => 'LGA1700'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1587202372634-32705e3bf49c?w=800',
            'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800'
        ]
    ],
    [
        'id' => 5,
        'name' => 'NVIDIA RTX 4080 Graphics Card',
        'price' => 1199.00,
        'old_price' => 1399.00,
        'is_new' => false,
        'is_sale' => true,
        'desc' => 'Next-gen GPU with ray tracing and DLSS 3.',
        'category' => 'components',
        'brand' => 'NVIDIA',
        'rating' => 4.8,
        'review_count' => 178,
        'specs' => [
            'GPU' => 'RTX 4080',
            'VRAM' => '16GB GDDR6X',
            'Core Clock' => '2205 MHz',
            'Memory Bus' => '256-bit',
            'Power Connectors' => '3x 8-pin',
            'Outputs' => '3x DP, 1x HDMI'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=800',
            'https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?w=800'
        ]
    ],
    [
        'id' => 6,
        'name' => 'DDR5 32GB 6000MHz RAM Kit',
        'price' => 149.00,
        'old_price' => 0,
        'is_new' => true,
        'is_sale' => false,
        'desc' => 'High-speed DDR5 memory kit.',
        'category' => 'components',
        'brand' => 'G.Skill',
        'rating' => 4.6,
        'review_count' => 67,
        'specs' => [
            'Capacity' => '32GB (2x16GB)',
            'Speed' => '6000MHz',
            'Timing' => 'CL36',
            'Voltage' => '1.35V',
            'Heatspreader' => 'RGB'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800'
        ]
    ],
    [
        'id' => 7,
        'name' => '1TB NVMe SSD Gen4',
        'price' => 89.00,
        'old_price' => 109.00,
        'is_new' => false,
        'is_sale' => true,
        'desc' => 'Blazing fast Gen4 NVMe SSD.',
        'category' => 'components',
        'brand' => 'Samsung',
        'rating' => 4.7,
        'review_count' => 142,
        'specs' => [
            'Capacity' => '1TB',
            'Interface' => 'PCIe 4.0 x4',
            'Read Speed' => '7000 MB/s',
            'Write Speed' => '5000 MB/s',
            'Endurance' => '600 TBW'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800'
        ]
    ],
    [
        'id' => 8,
        'name' => 'Wireless RGB Gaming Mouse',
        'price' => 69.99,
        'old_price' => 0,
        'is_new' => false,
        'is_sale' => false,
        'desc' => '16K DPI sensor, customizable RGB.',
        'category' => 'accessories',
        'brand' => 'Logitech',
        'rating' => 4.4,
        'review_count' => 91,
        'specs' => [
            'Sensor' => 'Hero 25K',
            'DPI' => '100-25600',
            'Buttons' => '11 programmable',
            'Battery Life' => '70 hours',
            'Weight' => '80g'
        ],
        'images' => [
            'https://images.unsplash.com/photo-1527814050087-3793815479db?w=800',
            'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=800'
        ]
    ],
    [
        'id' => 9,
        'name' => 'Acer 14 Spin 7 2in1 Notebook',
        'price' => 115.00,
        'old_price' => 150.00,
        'is_new' => true,
        'is_sale' => true,
        'desc' => 'Versatile 2-in-1 convertible laptop.',
        'category' => 'laptops',
        'brand' => 'Acer',
        'rating' => 4.3,
        'review_count' => 78,
        'specs' => [
            'Processor' => 'Intel Core i5-1235U',
            'RAM' => '8GB LPDDR4',
            'Storage' => '512GB SSD',
            'Display' => '14" FHD Touch',
            'Battery' => '10 hours',
            'OS' => 'Windows 11'
        ],
        'images' => [
            'https://theme459-computer-store.myshopify.com/cdn/shop/products/acer_14_spin_7_2in1_multitouch_notebook_2_270x270_crop_center.png?v=1537262918'
        ]
    ],
    [
        'id' => 10,
        'name' => 'Apple MacBook Air M2',
        'price' => 999.00,
        'old_price' => 0,
        'is_new' => true,
        'is_sale' => false,
        'desc' => 'Lightweight, powerful M2 chip.',
        'category' => 'laptops',
        'brand' => 'Apple',
        'rating' => 4.9,
        'review_count' => 312,
        'specs' => [
            'Processor' => 'Apple M2',
            'RAM' => '8GB Unified',
            'Storage' => '256GB SSD',
            'Display' => '13.6" Liquid Retina',
            'Battery' => '18 hours',
            'OS' => 'macOS'
        ],
        'images' => [
            'https://theme459-computer-store.myshopify.com/cdn/shop/products/apple_12_macbook_2_270x270_crop_center.png?v=1537262970'
        ]
    ],
    [
        'id' => 11,
        'name' => 'Apple iPad Pro 12.9 M2',
        'price' => 1099.00,
        'old_price' => 1299.00,
        'is_new' => false,
        'is_sale' => true,
        'desc' => 'Liquid Retina XDR display, M2 chip.',
        'category' => 'tablets',
        'brand' => 'Apple',
        'rating' => 4.8,
        'review_count' => 189,
        'specs' => [
            'Processor' => 'Apple M2',
            'RAM' => '8GB',
            'Storage' => '128GB',
            'Display' => '12.9" Liquid Retina XDR',
            'Camera' => '12MP Wide, 10MP Ultra Wide',
            'Battery' => 'Up to 10 hours'
        ],
        'images' => [
            'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/KX1mS4TAtt8J5h1jS43Eee040hKw3Lys6av8htWN.png'
        ]
    ],
    [
        'id' => 12,
        'name' => 'ASUS ROG Strix RTX 4090',
        'price' => 1899.00,
        'old_price' => 2199.00,
        'is_new' => true,
        'is_sale' => true,
        'desc' => 'Flagship GPU for extreme gaming.',
        'category' => 'components',
        'brand' => 'ASUS',
        'rating' => 4.9,
        'review_count' => 145,
        'specs' => [
            'GPU' => 'RTX 4090',
            'VRAM' => '24GB GDDR6X',
            'Core Clock' => '2580 MHz',
            'Memory Bus' => '384-bit',
            'Power Connectors' => '1x 16-pin',
            'Outputs' => '2x HDMI, 3x DisplayPort'
        ],
        'images' => [
            'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/9DSm4DygGTSzCPUc0gsWS3VG8UUS6PUDWcFMt4xe.png'
        ]
    ]
];

// Add more products
for ($i = 13; $i <= 36; $i++) {
    $source_product = $all_products[($i - 1) % count($all_products)];
    $new_product = $source_product;
    $new_product['id'] = $i;
    $new_product['name'] = $source_product['name'] . " " . chr(64 + (($i - 1) % 26) + 1);
    $new_product['price'] = $source_product['price'] * (0.9 + (($i % 10) / 100));
    if ($i % 4 == 0) {
        $new_product['old_price'] = $new_product['price'] * 1.2;
        $new_product['is_sale'] = true;
    }
    if ($i % 5 == 0) {
        $new_product['is_new'] = true;
    }
    $all_products[] = $new_product;
}

// Image fallback pool
$image_pool = [
    'https://p1-ofp.static.pub/ShareResource/na/homepage/featured-product-espot/lenovo-cto-consumer-thinkpad-x1-carbon.jpg',
    'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/dell-client-products/notebooks/dell-plus/db16250/media-gallery/fpr/notebook-db16250nt-fpr-bl-gallery-2.psd?qlt=90,0&op_usm=1.75,0.3,2,0&resMode=sharp&pscan=auto&fmt=png-alpha&hei=500',
    'https://cdn.cs.1worldsync.com/0b/84/0b8472e6-d2fb-4ecb-96f7-137231008396.jpg',
    'https://images.unsplash.com/photo-1611078489935-0cb4c2497a00?w=600',
    'https://images.unsplash.com/photo-1588109273901-3104a9f14a5f?w=600',
    'https://theme459-computer-store.myshopify.com/cdn/shop/products/acer_14_spin_7_2in1_multitouch_notebook_2_270x270_crop_center.png?v=1537262918',
    'https://theme459-computer-store.myshopify.com/cdn/shop/products/apple_12_macbook_2_270x270_crop_center.png?v=1537262970',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/KX1mS4TAtt8J5h1jS43Eee040hKw3Lys6av8htWN.png',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/9DSm4DygGTSzCPUc0gsWS3VG8UUS6PUDWcFMt4xe.png',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/e1FItvCJf9gXm6RxLCU5EIFT9vqqxaYEYzcza3Dv.png',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/fRmCLXpd4FyoaeC8gfQn1MG75bXTKMii6UcyaeIz.png',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/ZefAGPC3v8ool2oREDoAeePhdKqELD21U6QF3jQl.png',
    'https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/Wqu1LaiNpnKEYs2lU0hX6NLakAtbf1RDlJq7PXsB.png',
];

// Helper functions
function getProductById($id)
{
    global $all_products;
    foreach ($all_products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
    return null;
}

function calculateCartTotal()
{
    global $all_products;
    $total = 0;
    foreach ($_SESSION['cart'] as $product_id) {
        $product = getProductById($product_id);
        if ($product) {
            $total += $product['price'];
        }
    }
    return $total;
}

function removeFromCart($product_id)
{
    $key = array_search($product_id, $_SESSION['cart']);
    if ($key !== false) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
    }
}

function clearCart()
{
    $_SESSION['cart'] = [];
}

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $product_id = (int)$_POST['add_to_cart'];
        if (!in_array($product_id, $_SESSION['cart'])) {
            $_SESSION['cart'][] = $product_id;
        }
        header("Location: ?page=cart");
        exit;
    }

    if (isset($_POST['add_to_cart_modal'])) {
        $product_id = (int)$_POST['product_id'];
        $quantity = isset($_POST['quantity']) ? max(1, (int)$_POST['quantity']) : 1;
        for ($i = 0; $i < $quantity; $i++) {
            if (!in_array($product_id, $_SESSION['cart'])) {
                $_SESSION['cart'][] = $product_id;
            }
        }
        header("Location: ?page=cart");
        exit;
    }

    if (isset($_POST['add_to_wishlist'])) {
        $product_id = (int)$_POST['add_to_wishlist'];
        if (!in_array($product_id, $_SESSION['wishlist'])) {
            $_SESSION['wishlist'][] = $product_id;
        }
        header("Location: " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] ?? 'products'));
        exit;
    }

    if (isset($_POST['remove_from_wishlist'])) {
        $product_id = (int)$_POST['remove_from_wishlist'];
        $_SESSION['wishlist'] = array_diff($_SESSION['wishlist'], [$product_id]);
        header("Location: " . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] ?? 'products'));
        exit;
    }

    if (isset($_POST['remove_from_cart'])) {
        $product_id = (int)$_POST['remove_from_cart'];
        removeFromCart($product_id);
        header("Location: ?page=cart");
        exit;
    }

    if (isset($_POST['clear_cart'])) {
        clearCart();
        header("Location: ?page=cart");
        exit;
    }

    if (isset($_POST['update_quantity'])) {
        $product_id = (int)$_POST['product_id'];
        $quantity = max(1, (int)$_POST['quantity']);

        // Remove all instances of this product
        $_SESSION['cart'] = array_diff($_SESSION['cart'], [$product_id]);

        // Add it back the specified number of times
        for ($i = 0; $i < $quantity; $i++) {
            $_SESSION['cart'][] = $product_id;
        }

        header("Location: ?page=cart");
        exit;
    }

    if (isset($_POST['checkout'])) {
        // In a real application, this would process payment
        // For demo, just clear cart and show success
        $order_number = rand(100000, 999999);
        $_SESSION['last_order'] = $order_number;
        clearCart();
        header("Location: ?page=checkout_success");
        exit;
    }
}

// Determine current page
$page = isset($_GET['page']) ? $_GET['page'] : 'products';
$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : null;
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Set page title
$page_titles = [
    'products' => 'All Products',
    'product' => 'Product Details',
    'cart' => 'Shopping Cart',
    'wishlist' => 'My Wishlist',
    'checkout' => 'Checkout',
    'checkout_success' => 'Order Confirmation'
];

$current_page_title = isset($page_titles[$page]) ? $page_titles[$page] : 'Computer Store';

// Get products for current page
$display_products = [];
$total_products = 0;
$total_pages = 1;
$current_page_num = 1;

if ($page === 'products' || $page === 'wishlist') {
    $products_per_page = 12;
    $current_page_num = isset($_GET['p']) ? max(1, (int)$_GET['p']) : 1;
    $offset = ($current_page_num - 1) * $products_per_page;

    if ($page === 'wishlist') {
        $wishlist_product_ids = $_SESSION['wishlist'];
        $filtered_products = array_filter($all_products, function ($product) use ($wishlist_product_ids) {
            return in_array($product['id'], $wishlist_product_ids);
        });
        $display_products = array_slice($filtered_products, $offset, $products_per_page);
        $total_products = count($filtered_products);
    } else {
        if ($category) {
            $filtered_products = array_filter($all_products, function ($product) use ($category) {
                return strtolower($product['category']) === strtolower($category);
            });
            $display_products = array_slice($filtered_products, $offset, $products_per_page);
            $total_products = count($filtered_products);
        } else {
            $display_products = array_slice($all_products, $offset, $products_per_page);
            $total_products = count($all_products);
        }
    }

    $total_pages = ceil($total_products / $products_per_page);
} elseif ($page === 'product' && $product_id) {
    $viewing_product = getProductById($product_id);
    if (!$viewing_product) {
        header("Location: ?page=products");
        exit;
    }
    $current_page_title = $viewing_product['name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($current_page_title) ?> - Computer Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/app/views/css/home.css">
    <link rel="stylesheet" href="/app/views/css/navbar.css">
    <link rel="stylesheet" href="/app/views/css/contact.css">
    <link rel="stylesheet" href="/app/views/css/product-modal.css">
    <link rel="stylesheet" href="/app/views/css/cart-dropdown.css">
    <link rel="stylesheet" href="/app/views/css/feature-cards.css">
    <link rel="stylesheet" href="/app/views/css/testimonial-cards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/app/views/js/product-modal.js"></script>
    <script src="/app/views/js/cart-dropdown.js"></script>
    <style>
        :root {
            --primary: #0066cc;
            --primary-dark: #0052a3;
            --secondary: #6c757d;
            --success: #28a745;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #17a2b8;
            --light: #f8f9fa;
            --dark: #343a40;
            --gray: #6c757d;
            --gray-light: #e9ecef;
            --border-radius: 8px;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        .main-header {
            background: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid var(--gray-light);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            font-size: 2rem;
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .cart-btn {
            background: var(--success);
            color: white;
        }

        .wishlist-btn {
            background: var(--danger);
            color: white;
        }

        .home-btn {
            background: var(--primary);
            color: white;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .count-badge {
            background: white;
            color: var(--dark);
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
            position: absolute;
            top: -8px;
            right: -8px;
        }

        .main-nav {
            padding: 15px 0;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .nav-links a:hover,
        .nav-links a.active {
            background: var(--primary);
            color: white;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
            border-radius: var(--border-radius);
            text-align: center;
        }

        .page-header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .page-header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .breadcrumb {
            background: white;
            padding: 15px 25px;
            border-radius: var(--border-radius);
            margin-bottom: 30px;
            box-shadow: var(--box-shadow);
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .breadcrumb span {
            color: var(--gray);
        }

        /* Common Components */
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .btn-success {
            background: var(--success);
            color: white;
        }

        .btn-success:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .btn-danger {
            background: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .btn-lg {
            padding: 15px 30px;
            font-size: 1.1rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .empty-state-icon {
            font-size: 4rem;
            color: var(--gray-light);
            margin-bottom: 20px;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .empty-state p {
            color: var(--gray);
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            padding: 30px 0;
        }

        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 900px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .header-top {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        .product-card {
            background: white;
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius);
            overflow: hidden;
            text-align: center;
            transition: var(--transition);
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            box-shadow: var(--box-shadow);
            transform: translateY(-5px);
        }

        .product-image-wrapper {
            position: relative;
            height: 220px;
            padding: 15px;
            background: white;
            overflow: hidden;
        }

        .product-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.08);
        }

        .product-actions {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            opacity: 0;
            transition: var(--transition);
        }

        .product-card:hover .product-actions {
            opacity: 1;
        }

        .action-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: white;
            border: none;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            transition: var(--transition);
        }

        .action-btn:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.1);
        }

        .wishlist-btn-icon.active {
            color: var(--danger);
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 6px 12px;
            border-radius: 4px;
            color: white;
            font-size: 0.8rem;
            font-weight: bold;
            text-transform: uppercase;
            z-index: 1;
        }

        .badge-sale {
            background: var(--danger);
        }

        .badge-new {
            background: var(--success);
        }

        .badge-hot {
            background: var(--warning);
            color: var(--dark);
        }

        .product-info {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.05rem;
            margin: 0 0 8px 0;
            line-height: 1.3;
            flex-grow: 1;
        }

        .product-title a {
            color: var(--dark);
            text-decoration: none;
        }

        .product-title a:hover {
            color: var(--primary);
        }

        .product-category {
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 8px;
        }

        .product-brand {
            font-size: 0.85rem;
            color: var(--info);
            font-weight: 500;
            margin-bottom: 8px;
        }

        .rating {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .stars {
            color: var(--warning);
        }

        .rating-count {
            font-size: 0.85rem;
            color: var(--gray);
        }

        .price-container {
            margin: 10px 0;
        }

        .price {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--primary);
        }

        .old-price {
            color: var(--gray);
            text-decoration: line-through;
            margin-left: 8px;
            font-size: 1rem;
        }

        .product-actions-bottom {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        /* Product Detail Page */
        .product-detail-container {
            padding: 30px 0;
        }

        .product-detail {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }

        .product-detail-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
        }

        @media (max-width: 992px) {
            .product-detail-content {
                grid-template-columns: 1fr;
            }
        }

        .product-gallery {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 400px;
            object-fit: contain;
            border-radius: var(--border-radius);
            background: var(--light);
            margin-bottom: 20px;
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding: 10px 0;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 6px;
            cursor: pointer;
            opacity: 0.7;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .thumbnail:hover,
        .thumbnail.active {
            opacity: 1;
            border-color: var(--primary);
        }

        .product-info-detail {
            display: flex;
            flex-direction: column;
        }

        .product-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .product-meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .product-price-detail {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
            margin: 20px 0;
        }

        .product-description {
            margin: 20px 0;
            line-height: 1.8;
            color: var(--dark);
        }

        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .specs-table td {
            padding: 12px 15px;
            border-bottom: 1px solid var(--gray-light);
        }

        .specs-table td:first-child {
            font-weight: 600;
            color: var(--dark);
            width: 40%;
        }

        .specs-table td:last-child {
            color: var(--gray);
        }

        .product-actions-detail {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .qty-btn {
            width: 40px;
            height: 40px;
            background: var(--gray-light);
            border: none;
            border-radius: 6px;
            font-size: 1.2rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qty-input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--gray-light);
            border-radius: 6px;
            font-size: 1.1rem;
        }

        /* Cart Page */
        .cart-container {
            padding: 30px 0;
        }

        .cart-items {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 100px 1fr auto auto;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid var(--gray-light);
            align-items: center;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .cart-item-details {
            display: flex;
            flex-direction: column;
        }

        .cart-item-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cart-item-category {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .cart-item-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary);
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item-total {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--dark);
            min-width: 100px;
            text-align: right;
        }

        .cart-summary {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--box-shadow);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid var(--gray-light);
        }

        .summary-row:last-child {
            border-bottom: none;
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--primary);
        }

        /* Checkout Page */
        .checkout-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            padding: 30px 0;
        }

        @media (max-width: 992px) {
            .checkout-container {
                grid-template-columns: 1fr;
            }
        }

        .checkout-form {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--box-shadow);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 102, 204, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Success Page */
        .success-container {
            text-align: center;
            padding: 60px 20px;
        }

        .success-icon {
            font-size: 5rem;
            color: var(--success);
            margin-bottom: 30px;
        }

        .success-message {
            background: white;
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: var(--box-shadow);
            max-width: 600px;
            margin: 0 auto;
        }

        .success-message h2 {
            color: var(--success);
            margin-bottom: 20px;
        }

        /* Pagination */
        .pagination {
            text-align: center;
            padding: 40px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .pagination a {
            padding: 10px 16px;
            border: 1px solid var(--gray-light);
            border-radius: 6px;
            text-decoration: none;
            color: var(--dark);
            transition: var(--transition);
            min-width: 40px;
            text-align: center;
        }

        .pagination a.active,
        .pagination a:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .pagination a.disabled {
            color: var(--gray);
            cursor: not-allowed;
            opacity: 0.5;
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 25px;
            background: var(--success);
            color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1100;
            animation: slideInRight 0.3s;
            display: none;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .toast.hide {
            animation: slideOutRight 0.3s forwards;
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(100%);
            }
        }

        /* Quick View Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-content {
            position: relative;
            background: white;
            margin: 5% auto;
            padding: 25px;
            border-radius: 12px;
            width: 90%;
            max-width: 900px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            animation: slideIn 0.3s;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .close-modal:hover {
            color: var(--dark);
        }

    </style>
</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold brand-logo" href="#">
            <i class="bi bi-laptop me-1"></i> LAPTOP<span class="text-danger">SHOP</span>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <!-- Center Menu -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-2 text-center">
                <?php foreach ($pages as $key => $value) : ?>
                    <li class="nav-item">
                        <?= show_link_if_exists($value[0], $key, $level, $value[1]) ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Right Side -->
            <div class="d-flex align-items-center gap-3">

                <!-- Cart -->
                <a href="?page=catalog" class="cart-link text-decoration-none position-relative" title="Shopping Cart">
                    <i class="bi bi-bag fs-5"></i>
                    <span class="cart-count badge bg-danger rounded-circle position-absolute top-0 start-100 translate-middle">0</span>
                </a>

                <!-- Auth Buttons -->
                <div class="d-flex gap-2">
                    <form action="../../app/views/login.php" method="post" class="m-0">
                        <button type="submit" class="btn btn-outline-dark btn-sm px-3">Login</button>
                    </form>

                    <form action="../../app/controllers/logout.php" method="post" class="m-0">
                        <button type="submit" class="btn btn-danger btn-sm px-3">Logout</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</nav>


    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-top">
                <a href="?page=products" class="logo">

                    <span></span>
                </a>

                <div class="header-actions">
                    <a href="?page=cart" class="nav-btn cart-btn">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Cart</span>
                        <span class="count-badge"><?= count($_SESSION['cart']) ?></span>
                    </a>
                    <a href="?page=wishlist" class="nav-btn wishlist-btn">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                        <span class="count-badge"><?= count($_SESSION['wishlist']) ?></span>
                    </a>
                </div>
            </div>

            <nav class="main-nav">
                <ul class="nav-links">
                    <li><a href="?page=products" class="<?= $page === 'products' ? 'active' : '' ?>">All Products</a></li>
                    <li><a href="?page=products&category=laptops" class="<?= $category === 'laptops' ? 'active' : '' ?>">Laptops</a></li>
                    <li><a href="?page=products&category=components" class="<?= $category === 'components' ? 'active' : '' ?>">Components</a></li>
                    <li><a href="?page=products&category=monitors" class="<?= $category === 'monitors' ? 'active' : '' ?>">Monitors</a></li>
                    <li><a href="?page=products&category=accessories" class="<?= $category === 'accessories' ? 'active' : '' ?>">Accessories</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="?page=products">Home</a>
            <?php if ($page === 'product'): ?>
                &gt; <a href="?page=products">Products</a> &gt; <span><?= htmlspecialchars($viewing_product['name']) ?></span>
            <?php elseif ($page === 'cart'): ?>
                &gt; <span>Shopping Cart</span>
            <?php elseif ($page === 'wishlist'): ?>
                &gt; <span>My Wishlist</span>
            <?php elseif ($page === 'checkout'): ?>
                &gt; <a href="?page=cart">Cart</a> &gt; <span>Checkout</span>
            <?php elseif ($page === 'checkout_success'): ?>
                &gt; <a href="?page=cart">Cart</a> &gt; <a href="?page=checkout">Checkout</a> &gt; <span>Order Confirmation</span>
            <?php else: ?>
                &gt; <span>Products</span>
            <?php endif; ?>
        </div>

        <?php if ($page === 'products' || $page === 'wishlist'): ?>
            <!-- Products Page -->
            <div class="page-header">
                <h1><?= $page === 'wishlist' ? 'My Wishlist' : ($category ? ucfirst($category) : 'All Products') ?></h1>
                <p><?= $total_products ?> products found</p>
            </div>

            <?php if (empty($display_products)): ?>
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <?php if ($page === 'wishlist'): ?>
                            <i class="fas fa-heart-broken"></i>
                        <?php else: ?>
                            <i class="fas fa-search"></i>
                        <?php endif; ?>
                    </div>
                    <h3><?= $page === 'wishlist' ? 'Your wishlist is empty' : 'No products found' ?></h3>
                    <p>
                        <?php if ($page === 'wishlist'): ?>
                            You haven't added any products to your wishlist yet. Browse our products and click the heart icon to add items you're interested in.
                        <?php else: ?>
                            No products found in this category. Try browsing other categories.
                        <?php endif; ?>
                    </p>
                    <a href="?page=products" class="btn btn-primary">
                        <i class="fas fa-shopping-bag"></i> Browse All Products
                    </a>
                </div>
            <?php else: ?>
                <div class="products-grid">
                    <?php foreach ($display_products as $product):
                        $isInWishlist = in_array($product['id'], $_SESSION['wishlist']);
                    ?>
                        <div class="product-card">
                            <div class="product-image-wrapper">
                                <img class="product-image"
                                    src="<?= !empty($product['images']) ? htmlspecialchars($product['images'][0]) : $image_pool[$product['id'] % count($image_pool)] ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>">

                                <?php if ($product['is_sale']): ?>
                                    <span class="badge badge-sale">SALE</span>
                                <?php endif; ?>
                                <?php if ($product['is_new']): ?>
                                    <span class="badge badge-new">NEW</span>
                                <?php endif; ?>

                                <div class="product-actions">
                                    <button class="action-btn quick-view-btn" title="Quick View" data-product-id="<?= $product['id'] ?>">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <form method="post" class="wishlist-form">
                                        <input type="hidden" name="<?= $isInWishlist ? 'remove_from_wishlist' : 'add_to_wishlist' ?>" value="<?= $product['id'] ?>">
                                        <button type="submit" class="action-btn" title="<?= $isInWishlist ? 'Remove from Wishlist' : 'Add to Wishlist' ?>">
                                            <i class="fas fa-heart <?= $isInWishlist ? 'active' : '' ?>"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="product-info">
                                <div class="product-category"><?= htmlspecialchars($product['category'] ?? '') ?></div>
                                <div class="product-brand"><?= htmlspecialchars($product['brand'] ?? '') ?></div>

                                <h3 class="product-title">
                                    <a href="?page=product&product_id=<?= $product['id'] ?>"><?= htmlspecialchars($product['name']) ?></a>
                                </h3>

                                <?php if (isset($product['rating'])): ?>
                                    <div class="rating">
                                        <div class="stars">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <i class="fas fa-star<?= $i <= floor($product['rating']) ? '' : ($i <= $product['rating'] ? '-half-alt' : '') ?>"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="rating-count">(<?= $product['review_count'] ?? 0 ?>)</div>
                                    </div>
                                <?php endif; ?>

                                <div class="price-container">
                                    <div class="price">
                                        $<?= number_format($product['price'], 2) ?>
                                        <?php if ($product['old_price'] > 0): ?>
                                            <span class="old-price">$<?= number_format($product['old_price'], 2) ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="product-actions-bottom">
                                    <form method="post">
                                        <input type="hidden" name="add_to_cart" value="<?= $product['id'] ?>">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-cart-plus"></i> Add to Cart
                                        </button>
                                    </form>
                                    <a href="?page=product&product_id=<?= $product['id'] ?>" class="btn btn-outline">
                                        <i class="fas fa-info-circle"></i> Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php if ($total_pages > 1): ?>
                    <div class="pagination">
                        <?php if ($current_page_num > 1): ?>
                            <a href="?page=<?= $page ?><?= $category ? '&category=' . $category : '' ?>&p=<?= $current_page_num - 1 ?>">
                                <i class="fas fa-chevron-left"></i> Previous
                            </a>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <?php if ($i == 1 || $i == $total_pages || ($i >= $current_page_num - 2 && $i <= $current_page_num + 2)): ?>
                                <a href="?page=<?= $page ?><?= $category ? '&category=' . $category : '' ?>&p=<?= $i ?>" class="<?= $i === $current_page_num ? 'active' : '' ?>">
                                    <?= $i ?>
                                </a>
                            <?php elseif ($i == $current_page_num - 3 || $i == $current_page_num + 3): ?>
                                <span>...</span>
                            <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($current_page_num < $total_pages): ?>
                            <a href="?page=<?= $page ?><?= $category ? '&category=' . $category : '' ?>&p=<?= $current_page_num + 1 ?>">
                                Next <i class="fas fa-chevron-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        <?php elseif ($page === 'product' && $viewing_product): ?>
            <!-- Product Detail Page -->
            <div class="product-detail-container">
                <div class="product-detail">
                    <div class="product-detail-content">
                        <div class="product-gallery">
                            <img id="mainProductImage" class="main-image"
                                src="<?= !empty($viewing_product['images']) ? htmlspecialchars($viewing_product['images'][0]) : $image_pool[$viewing_product['id'] % count($image_pool)] ?>"
                                alt="<?= htmlspecialchars($viewing_product['name']) ?>">

                            <?php if (!empty($viewing_product['images']) && count($viewing_product['images']) > 1): ?>
                                <div class="thumbnail-container">
                                    <?php foreach ($viewing_product['images'] as $index => $image): ?>
                                        <img class="thumbnail <?= $index === 0 ? 'active' : '' ?>"
                                            src="<?= htmlspecialchars($image) ?>"
                                            alt="Thumbnail <?= $index + 1 ?>"
                                            onclick="changeProductImage(this)">
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="product-info-detail">
                            <h1 style="margin-top: 0; font-size: 2.2rem;"><?= htmlspecialchars($viewing_product['name']) ?></h1>

                            <div class="product-meta">
                                <div class="product-meta-item">
                                    <i class="fas fa-tag"></i>
                                    <span><?= htmlspecialchars($viewing_product['category'] ?? 'Uncategorized') ?></span>
                                </div>
                                <div class="product-meta-item">
                                    <i class="fas fa-industry"></i>
                                    <span><?= htmlspecialchars($viewing_product['brand'] ?? 'Generic') ?></span>
                                </div>
                                <?php if (isset($viewing_product['rating'])): ?>
                                    <div class="product-meta-item">
                                        <i class="fas fa-star" style="color: var(--warning);"></i>
                                        <span><?= number_format($viewing_product['rating'], 1) ?> (<?= $viewing_product['review_count'] ?? 0 ?> reviews)</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="product-price-detail">
                                $<?= number_format($viewing_product['price'], 2) ?>
                                <?php if ($viewing_product['old_price'] > 0): ?>
                                    <span class="old-price" style="font-size: 1.4rem;">$<?= number_format($viewing_product['old_price'], 2) ?></span>
                                <?php endif; ?>

                                <?php if ($viewing_product['is_sale']): ?>
                                    <span class="badge badge-sale" style="font-size: 1rem; position: static; display: inline-block; margin-left: 15px;">SAVE $<?= number_format($viewing_product['old_price'] - $viewing_product['price'], 2) ?></span>
                                <?php endif; ?>
                            </div>

                            <p class="product-description"><?= htmlspecialchars($viewing_product['desc']) ?></p>

                            <?php if (!empty($viewing_product['specs'])): ?>
                                <h3 style="margin-top: 30px;">Specifications</h3>
                                <table class="specs-table">
                                    <?php foreach ($viewing_product['specs'] as $key => $value): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($key) ?></td>
                                            <td><?= htmlspecialchars($value) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php endif; ?>

                            <div class="product-actions-detail">
                                <div class="quantity-selector">
                                    <button class="qty-btn" onclick="changeDetailQty(-1)">-</button>
                                    <input type="number" id="detailQty" value="1" min="1" class="qty-input">
                                    <button class="qty-btn" onclick="changeDetailQty(1)">+</button>
                                </div>

                                <form method="post" style="flex: 1;">
                                    <input type="hidden" name="add_to_cart_modal" value="1">
                                    <input type="hidden" name="product_id" value="<?= $viewing_product['id'] ?>">
                                    <input type="hidden" name="quantity" id="detailQuantity" value="1">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-cart-plus"></i> Add to Cart
                                    </button>
                                </form>

                                <?php if (in_array($viewing_product['id'], $_SESSION['wishlist'])): ?>
                                    <form method="post" style="flex: 1;">
                                        <input type="hidden" name="remove_from_wishlist" value="<?= $viewing_product['id'] ?>">
                                        <button type="submit" class="btn btn-danger btn-lg">
                                            <i class="fas fa-heart-broken"></i> Remove from Wishlist
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <form method="post" style="flex: 1;">
                                        <input type="hidden" name="add_to_wishlist" value="<?= $viewing_product['id'] ?>">
                                        <button type="submit" class="btn btn-outline btn-lg">
                                            <i class="fas fa-heart"></i> Add to Wishlist
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <h2 style="margin-top: 50px; margin-bottom: 30px;">Related Products</h2>
            <div class="products-grid">
                <?php
                $related_products = array_filter($all_products, function ($p) use ($viewing_product) {
                    return $p['id'] != $viewing_product['id'] &&
                        ($p['category'] == $viewing_product['category'] || rand(0, 1) == 1);
                });
                $related_products = array_slice($related_products, 0, 4);

                foreach ($related_products as $product):
                    $isInWishlist = in_array($product['id'], $_SESSION['wishlist']);
                ?>
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img class="product-image"
                                src="<?= !empty($product['images']) ? htmlspecialchars($product['images'][0]) : $image_pool[$product['id'] % count($image_pool)] ?>"
                                alt="<?= htmlspecialchars($product['name']) ?>">

                            <?php if ($product['is_sale']): ?>
                                <span class="badge badge-sale">SALE</span>
                            <?php endif; ?>
                            <?php if ($product['is_new']): ?>
                                <span class="badge badge-new">NEW</span>
                            <?php endif; ?>

                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" title="Quick View" data-product-id="<?= $product['id'] ?>">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <form method="post" class="wishlist-form">
                                    <input type="hidden" name="<?= $isInWishlist ? 'remove_from_wishlist' : 'add_to_wishlist' ?>" value="<?= $product['id'] ?>">
                                    <button type="submit" class="action-btn" title="<?= $isInWishlist ? 'Remove from Wishlist' : 'Add to Wishlist' ?>">
                                        <i class="fas fa-heart <?= $isInWishlist ? 'active' : '' ?>"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="product-category"><?= htmlspecialchars($product['category'] ?? '') ?></div>
                            <h3 class="product-title">
                                <a href="?page=product&product_id=<?= $product['id'] ?>"><?= htmlspecialchars($product['name']) ?></a>
                            </h3>

                            <?php if (isset($product['rating'])): ?>
                                <div class="rating">
                                    <div class="stars">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="fas fa-star<?= $i <= floor($product['rating']) ? '' : ($i <= $product['rating'] ? '-half-alt' : '') ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="rating-count">(<?= $product['review_count'] ?? 0 ?>)</div>
                                </div>
                            <?php endif; ?>

                            <div class="price-container">
                                <div class="price">
                                    $<?= number_format($product['price'], 2) ?>
                                    <?php if ($product['old_price'] > 0): ?>
                                        <span class="old-price">$<?= number_format($product['old_price'], 2) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="product-actions-bottom">
                                <form method="post">
                                    <input type="hidden" name="add_to_cart" value="<?= $product['id'] ?>">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-cart-plus"></i> Add to Cart
                                    </button>
                                </form>
                                <a href="?page=product&product_id=<?= $product['id'] ?>" class="btn btn-outline">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php elseif ($page === 'cart'): ?>
            <!-- Cart Page -->
            <div class="page-header">
                <h1>Shopping Cart</h1>
                <p><?= count($_SESSION['cart']) ?> items in your cart</p>
            </div>

            <div class="cart-container">
                <?php if (empty($_SESSION['cart'])): ?>
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3>Your cart is empty</h3>
                        <p>Looks like you haven't added any products to your cart yet. Start shopping to find amazing products!</p>
                        <a href="?page=products" class="btn btn-primary">
                            <i class="fas fa-shopping-bag"></i> Start Shopping
                        </a>
                    </div>
                <?php else: ?>
                    <div class="cart-items">
                        <?php
                        $cart_items = [];
                        foreach ($_SESSION['cart'] as $product_id) {
                            if (!isset($cart_items[$product_id])) {
                                $cart_items[$product_id] = 0;
                            }
                            $cart_items[$product_id]++;
                        }

                        $cart_total = 0;
                        foreach ($cart_items as $product_id => $quantity):
                            $product = getProductById($product_id);
                            if ($product):
                                $item_total = $product['price'] * $quantity;
                                $cart_total += $item_total;
                        ?>
                                <div class="cart-item">
                                    <img src="<?= !empty($product['images']) ? htmlspecialchars($product['images'][0]) : $image_pool[$product['id'] % count($image_pool)] ?>"
                                        alt="<?= htmlspecialchars($product['name']) ?>" class="cart-item-image">

                                    <div class="cart-item-details">
                                        <h3 class="cart-item-name">
                                            <a href="?page=product&product_id=<?= $product['id'] ?>" style="color: var(--dark); text-decoration: none;">
                                                <?= htmlspecialchars($product['name']) ?>
                                            </a>
                                        </h3>
                                        <div class="cart-item-category"><?= htmlspecialchars($product['category'] ?? '') ?></div>
                                        <div class="cart-item-price">$<?= number_format($product['price'], 2) ?></div>
                                    </div>

                                    <div class="cart-item-quantity">
                                        <form method="post" style="display: flex; align-items: center; gap: 10px;">
                                            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                            <button type="button" onclick="updateQuantity(<?= $product['id'] ?>, -1)" class="qty-btn">-</button>
                                            <input type="number" id="qty-<?= $product['id'] ?>" value="<?= $quantity ?>" min="1" class="qty-input" readonly>
                                            <button type="button" onclick="updateQuantity(<?= $product['id'] ?>, 1)" class="qty-btn">+</button>
                                            <input type="hidden" name="quantity" id="hidden-qty-<?= $product['id'] ?>" value="<?= $quantity ?>">
                                            <button type="submit" name="update_quantity" style="display: none;"></button>
                                        </form>
                                        <form method="post" style="margin-left: 10px;">
                                            <input type="hidden" name="remove_from_cart" value="<?= $product['id'] ?>">
                                            <button type="submit" class="btn btn-danger" style="padding: 8px 12px;">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="cart-item-total">$<?= number_format($item_total, 2) ?></div>
                                </div>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>

                    <div class="cart-summary">
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span>$<?= number_format($cart_total, 2) ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping</span>
                            <span>$<?= $cart_total > 0 ? '10.00' : '0.00' ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Tax</span>
                            <span>$<?= number_format($cart_total * 0.08, 2) ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Total</span>
                            <span>$<?= number_format($cart_total + ($cart_total > 0 ? 10 : 0) + ($cart_total * 0.08), 2) ?></span>
                        </div>

                        <div style="margin-top: 30px; display: flex; gap: 15px;">
                            <a href="?page=products" class="btn btn-outline" style="flex: 1;">
                                <i class="fas fa-arrow-left"></i> Continue Shopping
                            </a>
                            <form method="post" style="flex: 1;">
                                <button type="submit" name="clear_cart" class="btn btn-danger btn-block">
                                    <i class="fas fa-trash"></i> Clear Cart
                                </button>
                            </form>
                            <a href="?page=checkout" class="btn btn-success btn-block" style="flex: 2;">
                                <i class="fas fa-lock"></i> Proceed to Checkout
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        <?php elseif ($page === 'checkout'): ?>
            <!-- Checkout Page -->
            <div class="page-header">
                <h1>Checkout</h1>
                <p>Complete your purchase</p>
            </div>

            <?php if (empty($_SESSION['cart'])): ?>
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Your cart is empty</h3>
                    <p>You need to add items to your cart before checking out.</p>
                    <a href="?page=products" class="btn btn-primary">
                        <i class="fas fa-shopping-bag"></i> Start Shopping
                    </a>
                </div>
            <?php else: ?>
                <?php
                $cart_total = calculateCartTotal();
                $shipping = 10.00;
                $tax = $cart_total * 0.08;
                $total = $cart_total + $shipping + $tax;
                ?>

                <div class="checkout-container">
                    <div class="checkout-form">
                        <h2>Shipping Information</h2>
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <input type="text" class="form-control" name="state" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">ZIP Code</label>
                                    <input type="text" class="form-control" name="zip" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" value="United States" required>
                            </div>

                            <h2 style="margin-top: 40px;">Payment Information</h2>

                            <div class="form-group">
                                <label class="form-label">Card Number</label>
                                <input type="text" class="form-control" name="card_number" placeholder="1234 5678 9012 3456" required>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Expiration Date</label>
                                    <input type="text" class="form-control" name="exp_date" placeholder="MM/YY" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">CVV</label>
                                    <input type="text" class="form-control" name="cvv" placeholder="123" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Name on Card</label>
                                <input type="text" class="form-control" name="card_name" required>
                            </div>

                            <button type="submit" name="checkout" class="btn btn-success btn-lg btn-block" style="margin-top: 30px;">
                                <i class="fas fa-lock"></i> Complete Purchase
                            </button>
                        </form>
                    </div>

                    <div class="cart-summary">
                        <h3>Order Summary</h3>
                        <div class="summary-row">
                            <span>Subtotal</span>
                            <span>$<?= number_format($cart_total, 2) ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping</span>
                            <span>$<?= number_format($shipping, 2) ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Tax</span>
                            <span>$<?= number_format($tax, 2) ?></span>
                        </div>
                        <div class="summary-row">
                            <span>Total</span>
                            <span>$<?= number_format($total, 2) ?></span>
                        </div>

                        <div style="margin-top: 30px;">
                            <a href="?page=cart" class="btn btn-outline btn-block">
                                <i class="fas fa-arrow-left"></i> Back to Cart
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php elseif ($page === 'checkout_success'): ?>
            <!-- Checkout Success Page -->
            <div class="success-container">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>

                <div class="success-message">
                    <h2>Order Confirmed!</h2>
                    <p>Thank you for your purchase. Your order has been received and is being processed.</p>
                    <p><strong>Order Number:</strong> #<?= isset($_SESSION['last_order']) ? $_SESSION['last_order'] : rand(100000, 999999) ?></p>
                    <p>You will receive an email confirmation shortly with your order details.</p>

                    <div style="margin-top: 30px; display: flex; gap: 15px; justify-content: center;">
                        <a href="?page=products" class="btn btn-primary">
                            <i class="fas fa-shopping-bag"></i> Continue Shopping
                        </a>
                        <a href="?page=products" class="btn btn-outline">
                            <i class="fas fa-home"></i> Back to Home
                        </a>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <!-- Default to Products Page -->
            <div class="page-header">
                <h1>All Products</h1>
                <p>Browse our amazing selection of products</p>
            </div>

            <div class="products-grid">
                <?php
                $default_products = array_slice($all_products, 0, 12);
                foreach ($default_products as $product):
                    $isInWishlist = in_array($product['id'], $_SESSION['wishlist']);
                ?>
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img class="product-image"
                                src="<?= !empty($product['images']) ? htmlspecialchars($product['images'][0]) : $image_pool[$product['id'] % count($image_pool)] ?>"
                                alt="<?= htmlspecialchars($product['name']) ?>">

                            <?php if ($product['is_sale']): ?>
                                <span class="badge badge-sale">SALE</span>
                            <?php endif; ?>
                            <?php if ($product['is_new']): ?>
                                <span class="badge badge-new">NEW</span>
                            <?php endif; ?>

                            <div class="product-actions">
                                <button class="action-btn quick-view-btn" title="Quick View" data-product-id="<?= $product['id'] ?>">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <form method="post" class="wishlist-form">
                                    <input type="hidden" name="<?= $isInWishlist ? 'remove_from_wishlist' : 'add_to_wishlist' ?>" value="<?= $product['id'] ?>">
                                    <button type="submit" class="action-btn" title="<?= $isInWishlist ? 'Remove from Wishlist' : 'Add to Wishlist' ?>">
                                        <i class="fas fa-heart <?= $isInWishlist ? 'active' : '' ?>"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="product-category"><?= htmlspecialchars($product['category'] ?? '') ?></div>
                            <div class="product-brand"><?= htmlspecialchars($product['brand'] ?? '') ?></div>

                            <h3 class="product-title">
                                <a href="?page=product&product_id=<?= $product['id'] ?>"><?= htmlspecialchars($product['name']) ?></a>
                            </h3>

                            <?php if (isset($product['rating'])): ?>
                                <div class="rating">
                                    <div class="stars">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="fas fa-star<?= $i <= floor($product['rating']) ? '' : ($i <= $product['rating'] ? '-half-alt' : '') ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="rating-count">(<?= $product['review_count'] ?? 0 ?>)</div>
                                </div>
                            <?php endif; ?>

                            <div class="price-container">
                                <div class="price">
                                    $<?= number_format($product['price'], 2) ?>
                                    <?php if ($product['old_price'] > 0): ?>
                                        <span class="old-price">$<?= number_format($product['old_price'], 2) ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="product-actions-bottom">
                                <form method="post">
                                    <input type="hidden" name="add_to_cart" value="<?= $product['id'] ?>">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-cart-plus"></i> Add to Cart
                                    </button>
                                </form>
                                <a href="?page=product&product_id=<?= $product['id'] ?>" class="btn btn-outline">
                                    <i class="fas fa-info-circle"></i> Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="text-align: center; margin: 40px 0;">
                <a href="?page=products" class="btn btn-primary btn-lg">
                    View All Products <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        <?php endif; ?>
    </main>

    
    <!-- Quick View Modal -->
    <div id="quickviewModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div id="modalContent">
                <!-- Content loaded via JavaScript -->
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="toast" class="toast">
        <i class="fas fa-check-circle"></i>
        <span id="toastMessage">Product added to cart!</span>
    </div>

    <script>
        // Product Detail Image Gallery
        function changeProductImage(thumb) {
            const mainImage = document.getElementById('mainProductImage');
            if (mainImage) {
                mainImage.src = thumb.src;
                document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
                thumb.classList.add('active');
            }
        }

        // Quantity Selectors
        function changeDetailQty(delta) {
            const input = document.getElementById('detailQty');
            const hiddenInput = document.getElementById('detailQuantity');
            if (input && hiddenInput) {
                let val = parseInt(input.value) || 1;
                val = Math.max(1, val + delta);
                input.value = val;
                hiddenInput.value = val;
            }
        }

        // Cart quantity update
        function updateQuantity(productId, delta) {
            const input = document.getElementById('qty-' + productId);
            const hiddenInput = document.getElementById('hidden-qty-' + productId);
            if (input && hiddenInput) {
                let val = parseInt(input.value) || 1;
                val = Math.max(1, val + delta);
                input.value = val;
                hiddenInput.value = val;

                // Submit the form
                const form = input.closest('form');
                if (form) {
                    form.querySelector('button[type="submit"]').click();
                }
            }
        }

        // Quick View Modal
        document.querySelectorAll('.quick-view-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                showQuickView(productId);
            });
        });

        function showQuickView(productId) {
            // Get product data from PHP
            const products = <?= json_encode($all_products) ?>;
            const product = products.find(p => p.id == productId);

            if (!product) return;

            const modalContent = document.getElementById('modalContent');
            const imageUrl = product.images && product.images.length > 0 ?
                product.images[0] :
                '<?= $image_pool[0] ?>';

            // Check if product is in wishlist
            const isInWishlist = <?= json_encode($_SESSION['wishlist'] ?? []) ?>.includes(product.id);

            modalContent.innerHTML = `
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div>
                <img id="modalProductImage" style="max-width: 100%; border-radius: 8px;" src="${imageUrl}" alt="${product.name}">
                ${product.images && product.images.length > 1 ? `
                    <div style="display: flex; gap: 10px; margin-top: 15px;">
                        ${product.images.map((img, idx) => `
                            <img src="${img}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 6px; cursor: pointer; border: ${idx === 0 ? '2px solid #0066cc' : '1px solid #ddd'};" 
                                 onclick="document.getElementById('modalProductImage').src = this.src; this.style.borderColor = '#0066cc'; this.parentNode.querySelectorAll('img').forEach(i => i.style.borderColor = '#ddd')">
                        `).join('')}
                    </div>
                ` : ''}
            </div>
            <div>
                <h2 style="margin-top: 0;">${product.name}</h2>
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                    <span style="font-size: 2rem; color: #0066cc; font-weight: bold;">$${product.price.toFixed(2)}</span>
                    ${product.old_price > 0 ? `<span style="color: #999; text-decoration: line-through;">$${product.old_price.toFixed(2)}</span>` : ''}
                    ${product.is_sale ? '<span style="background: #dc3545; color: white; padding: 4px 10px; border-radius: 4px; font-size: 0.9rem;">SALE</span>' : ''}
                </div>
                <p>${product.desc}</p>
                ${product.specs ? `
                    <h4>Key Features:</h4>
                    <ul style="padding-left: 20px; margin-bottom: 20px;">
                        ${Object.entries(product.specs).slice(0, 3).map(([key, value]) => `<li><strong>${key}:</strong> ${value}</li>`).join('')}
                    </ul>
                ` : ''}
                <div style="display: flex; align-items: center; margin: 20px 0;">
                    <button onclick="changeModalQty(-1)" style="width: 40px; height: 40px; background: #f0f0f0; border: 1px solid #ddd;">−</button>
                    <input type="number" id="modalQty" value="1" min="1" style="width: 60px; text-align: center; margin: 0 10px; padding: 8px; border: 1px solid #ddd;">
                    <button onclick="changeModalQty(1)" style="width: 40px; height: 40px; background: #f0f0f0; border: 1px solid #ddd;">+</button>
                </div>
                <div style="display: flex; gap: 10px;">
                    <form method="post" style="flex: 1;">
                        <input type="hidden" name="add_to_cart_modal" value="1">
                        <input type="hidden" name="product_id" value="${product.id}">
                        <input type="hidden" name="quantity" id="modalQuantity" value="1">
                        <button type="submit" class="btn" style="width: 100%; background: #0066cc; color: white; padding: 14px; border: none; border-radius: 6px; cursor: pointer;">
                            <i class="fas fa-cart-plus"></i> Add to Cart
                        </button>
                    </form>
                    <form method="post" style="flex: 1;">
                        <input type="hidden" name="${isInWishlist ? 'remove_from_wishlist' : 'add_to_wishlist'}" value="${product.id}">
                        <button type="submit" class="btn" style="width: 100%; background: ${isInWishlist ? '#dc3545' : 'transparent'}; color: ${isInWishlist ? 'white' : '#0066cc'}; padding: 14px; border: 1px solid ${isInWishlist ? '#dc3545' : '#0066cc'}; border-radius: 6px; cursor: pointer;">
                            <i class="fas fa-heart"></i> ${isInWishlist ? 'Remove' : 'Wishlist'}
                        </button>
                    </form>
                </div>
                <div style="margin-top: 15px;">
                    <a href="?page=product&product_id=${product.id}" class="btn" style="width: 100%; background: transparent; color: #0066cc; padding: 14px; border: 1px solid #0066cc; border-radius: 6px; text-decoration: none; text-align: center; display: block;">
                        <i class="fas fa-info-circle"></i> View Full Details
                    </a>
                </div>
            </div>
        </div>
    `;

            document.getElementById('quickviewModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function changeModalQty(delta) {
            const input = document.getElementById('modalQty');
            const hiddenInput = document.getElementById('modalQuantity');
            if (input && hiddenInput) {
                let val = parseInt(input.value) || 1;
                val = Math.max(1, val + delta);
                input.value = val;
                hiddenInput.value = val;
            }
        }

        // Modal close handlers
        document.querySelector('.close-modal').addEventListener('click', () => {
            document.getElementById('quickviewModal').style.display = 'none';
            document.body.style.overflow = '';
        });

        document.getElementById('quickviewModal').addEventListener('click', e => {
            if (e.target === document.getElementById('quickviewModal')) {
                document.getElementById('quickviewModal').style.display = 'none';
                document.body.style.overflow = '';
            }
        });

        // Toast notification
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');

            toastMessage.textContent = message;
            toast.style.display = 'flex';

            setTimeout(() => {
                toast.classList.add('hide');
                setTimeout(() => {
                    toast.style.display = 'none';
                    toast.classList.remove('hide');
                }, 300);
            }, 3000);
        }

        // Handle form submissions with toast notifications
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (this.querySelector('input[name="add_to_cart"], input[name="add_to_cart_modal"]')) {
                    setTimeout(() => {
                        showToast('Product added to cart!');
                    }, 100);
                } else if (this.querySelector('input[name="add_to_wishlist"]')) {
                    setTimeout(() => {
                        showToast('Product added to wishlist!');
                    }, 100);
                } else if (this.querySelector('input[name="remove_from_wishlist"]')) {
                    setTimeout(() => {
                        showToast('Product removed from wishlist!');
                    }, 100);
                } else if (this.querySelector('button[name="clear_cart"]')) {
                    setTimeout(() => {
                        showToast('Cart cleared!');
                    }, 100);
                } else if (this.querySelector('button[name="checkout"]')) {
                    setTimeout(() => {
                        showToast('Order placed successfully!');
                    }, 100);
                }
            });
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.getElementById('quickviewModal').style.display = 'none';
                document.body.style.overflow = '';
            }

            if (window.location.search.includes('product_id')) {
                const thumbnails = document.querySelectorAll('.thumbnail');
                if (thumbnails.length > 0) {
                    const activeIndex = Array.from(thumbnails).findIndex(t => t.classList.contains('active'));

                    if (e.key === 'ArrowRight' && activeIndex < thumbnails.length - 1) {
                        thumbnails[activeIndex + 1].click();
                    } else if (e.key === 'ArrowLeft' && activeIndex > 0) {
                        thumbnails[activeIndex - 1].click();
                    }
                }
            }
        });

        // Initialize detail quantity field
        if (document.getElementById('detailQty')) {
            document.getElementById('detailQty').addEventListener('change', function() {
                const val = Math.max(1, parseInt(this.value) || 1);
                this.value = val;
                document.getElementById('detailQuantity').value = val;
            });
        }

        // Auto-hide toast on page load
        setTimeout(() => {
            const toast = document.getElementById('toast');
            if (toast.style.display === 'flex') {
                toast.classList.add('hide');
                setTimeout(() => {
                    toast.style.display = 'none';
                    toast.classList.remove('hide');
                }, 300);
            }
        }, 3000);
    </script>

<?php include __DIR__ . "/layouts/footer.php" ?>