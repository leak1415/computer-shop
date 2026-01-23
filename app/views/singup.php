
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
<?php require_once("../controllers/control_signup.php")?>
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

                        <form method="POST" >
                            <div class="mb-3">
                                <label class="form-label small text-secondary">
                                    <span class="text-danger">*</span> Full Name
                                </label>
                                <input type="text" name="username" class="form-control form-control-lg fs-6" placeholder="Enter your full name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label small text-secondary">
                                    <span class="text-danger">*</span> Email
                                </label>
                                <input type="email" name="email" class="form-control form-control-lg fs-6" placeholder="Enter your email">
                            </div>

                            <div class="mb-4">
                                <label class="form-label small text-secondary">
                                    <span class="text-danger">*</span> Password
                                </label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control form-control-lg fs-6 border-end-0" placeholder="Create a password">
                                    <span class="input-group-text bg-white border-start-0 text-secondary">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" name="sign_up" class="btn btn-primary btn-lg fs-6 py-2 shadow-sm">Sign Up</button>
                                <div class="text-center">
                                    <span class="small text-secondary">Already have an account?</span>
                                    <a href="../../index.php" class="text-primary small fw-bold text-decoration-none ms-1">Sign In</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>