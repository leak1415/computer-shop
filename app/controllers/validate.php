<?php
require_once __DIR__ . '/func.php';

function validate_route()
{
    global $pdo;
    global $_SESSION;

    if (
        empty($_SESSION['email']) ||
        empty($_SESSION['password'])
    ) {
        $_SESSION['level'] = 'Guest';
        // header(page_location('dashboard'));
        // exit;
        return;
    }

    $email = htmlspecialchars($_SESSION['email'] ?? '');
    $password = htmlspecialchars($_SESSION['password'] ?? '');

    $query = 'SELECT * FROM users WHERE email = :email AND password = :password ';
    $result = $pdo->prepare($query);
    $result->execute(['email' => $email, 'password' => $password]);
    $user = $result->fetch();

    if ($user) {
        $_SESSION['level'] = $user['level'];
    }

    if (!$user) {
        header(page_location('login'));
        exit;
    }
}

function validate_login()
{
    global $pdo;
    global $_SESSION;

    if (
        empty($_SESSION['email']) ||
        empty($_SESSION['password'])
    ) {
        
        header(page_location('login'));
        exit;
        return;
    }

    $email = htmlspecialchars($_SESSION['email'] ?? '');
    $password = htmlspecialchars($_SESSION['password'] ?? '');

    $query = 'SELECT * FROM users WHERE email = :email AND password = :password ';
    $result = $pdo->prepare($query);
    $result->execute(['email' => $email, 'password' => $password]);
    $user = $result->fetch();

    if ($user) {
        $_SESSION['level'] = $user['level'];
    }

    if (!$user) {
        header(page_location('login'));
        exit;
    }
}
