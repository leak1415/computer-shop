<?php
require_once __DIR__ . '/../../init.php';

if (isset($_GET['page']) && htmlspecialchars($_GET['page']) === 'signin') {
    header(page_location('login'));
    exit;
}
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$level = 'Guest';


if ($username && $email && $password) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }


    $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $check->execute([$email]);
    if ($check->fetch()) {
        echo '<script>alert("Email already exits!") </script>';
    } elseif (isset($username) && isset($email) && isset($password)) {

        $stmt = $pdo->prepare("INSERT INTO users (nickname, email, password, level) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $password, $level]);

        $userId = $pdo->lastInsertId();
        header(page_location('home'));

        $user = $stmt->fetch();
        if ($user) {
            $_SESSION['level'] = $user['level'];
        }

        if (!$user) {
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-primary-subtle d-flex align-items-center justify-content-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">
                <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 1.5rem;">
                    <div class="row g-0">

                        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-5" style="background-color: #C2D2FF;">
                            <img src="./images/signup-image.png" class="img-fluid" alt="Sign Up Illustration">
                        </div>

                        <div class="col-md-6 p-4 p-lg-5 bg-white">
                            <div class="text-center mb-4">
                                <h2 class="fw-bold mb-1">Create Account</h2>
                                <p class="text-secondary small">Join us and start your journey.</p>
                            </div>

                            <form method="POST">
                                <div class="mb-3">
                                    <label class="form-label small text-secondary">
                                        <span class="text-danger">*</span> Full Name
                                    </label>
                                    <input name="username" type="text" class="form-control form-control-lg fs-6" placeholder="Enter your full name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small text-secondary">
                                        <span class="text-danger">*</span> Email
                                    </label>
                                    <input name="email" type="email" class="form-control form-control-lg fs-6" placeholder="Enter your email">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label small text-secondary">
                                        <span class="text-danger">*</span> Password
                                    </label>
                                    <div class="input-group">
                                        <input name="password" type="password" id="password"
                                            class="form-control form-control-lg fs-6 border-end-0"
                                            placeholder="Create a password">

                                        <span class="input-group-text bg-white border-start-0 text-secondary"
                                            style="cursor: pointer;"
                                            onclick="togglePassword()">
                                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                                        </span>
                                    </div>

                                </div>

                                <div class="d-grid gap-3">
                                    <button type="submit" class="btn btn-primary btn-lg fs-6 py-2 shadow-sm">Sign Up</button>
                                    <div class="text-center">
                                        <span class="small text-secondary">Already have an account?</span>
                                        <a href="?page=signin" class="text-primary small fw-bold text-decoration-none ms-1">Sign In</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");

            if (password.type === "password") {
                password.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                password.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
    </script>

</body>

</html>