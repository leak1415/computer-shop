<?php
$connection = new mysqli("localhost", "root", "", "shop_db");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>