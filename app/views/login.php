<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Bootstrap Only</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-primary-subtle d-flex align-items-center justify-content-center vh-100" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card border-0 shadow-lg overflow-hidden" style="border-radius: 1rem;">
                <div class="row g-0">
                    
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center p-5" style="background-color: #C2D2FF;">
                        <img src="/App/Views/images/login-image.png" class="img-fluid" alt="Character illustration">
                    </div>

                    <div class="col-md-6 p-4 p-lg-5 bg-white">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold text-dark">Sign In</h2>
                            <p class="text-muted small">Unlock you world.</p>
                        </div>

                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label small fw-medium text-secondary">
                                    <span class="text-danger">*</span> Email
                                </label>
                                <input type="email" name="email" class="form-control py-2 border-secondary-subtle" placeholder="Enter your email" style="font-size: 0.9rem;">
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-medium text-secondary">
                                    <span class="text-danger">*</span> Password
                                </label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control py-2 border-secondary-subtle border-end-0" placeholder="Enter your password" style="font-size: 0.9rem;">
                                    <span class="input-group-text bg-white border-secondary-subtle border-start-0 text-secondary">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" name="login" class="btn btn-primary py-2 fw-semibold" style="background-color: #1A73E8; border: none;">Sign In</button>
                                <a href="./App/Views/signup.php" class="btn btn-outline-secondary py-2 text-dark border-light-subtle small" style="font-size: 0.9rem;">
                                    Create an account
                                </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>