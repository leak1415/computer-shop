<?php
require_once __DIR__ . '/../../init.php';

session_start();
session_unset();
session_destroy();

header(page_location('../Views/login'));
exit;
