<?php
require_once "database.php";

$sql = "
SELECT 
    p.product_id,
    p.product_name,
    p.price,
    p.old_price,
    c.category_name,
    s.cpu,
    s.gpu,
    s.ram,
    (SELECT COUNT(*) FROM product_reviews WHERE product_id = p.product_id) AS review_count
FROM products p
LEFT JOIN categories c ON p.category_id = c.category_id
LEFT JOIN product_specs s ON p.product_id = s.product_id
";

$result = $pdo->query($sql);
?>

