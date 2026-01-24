<?php 
require_once "app/models/home_db/database.php";  // Import the database connection

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
include "app/views/layouts/header.php"; 

switch($page) {
    case 'catalog':
        include "app/views/catalog.php";
        break;
    case 'sale':
        include "app/views/sale.php";
        break;
    case 'blog':
        include "app/views/blog.php";
        break;
    case 'contact':
        include "app/views/contact.php";
        break;
    default:
        include "app/views/home.php";
        break;
}

include "app/views/layouts/footer.php"; 
?>