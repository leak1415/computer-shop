<?php

    require_once __DIR__ . '/init.php';

    echo 'Hello';
    // include_once __DIR__ . '/App/Views/dashboard.php';
    header(page_location('./app/views/login'));
    exit;