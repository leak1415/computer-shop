<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop Store</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-bar {
            font-size: 14px;
            background: #f8f9fa;
            padding: 6px 0;
        }

        /* Logo Style */
        .brand-logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .brand-logo span {
            color: #007bff; /* blue text like screenshot */
        }

        /* Navbar Links */
        .navbar-nav .nav-link {
            font-weight: 600;
            font-size:12px;
            margin-right: 25px;
            color: #000 !important;
            padding: 10px 18px;
            letter-spacing: 0.5px;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff !important;
        }

        /* Cart Link */
        .cart-link {
            font-weight: 700;
            color: #007bff;
        }

        /* Align navbar content */
        .navbar .container {
            align-items: center;
        }

        /* Dropdown Currency button */
        .dropdown-toggle {
            font-size: 14px;
        }

        /* Fix mobile menu item alignment */
        @media (max-width: 992px) {
            .navbar-nav {
                margin-top: 10px;
                text-align: center;
            }
            
            .cart-link {
                display: block;
                margin-top: 10px;
                text-align: center;
            }
        }
        .profile {
            margin-left: 30px;
            font-size:20px;
        }

            .badge-circle {
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 8px 14px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
    }

    .card-img-top {
        background: #f6f6f6;
        padding: 20px;
    }


        .hero-section {
        min-height: 100vh;
        background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.55)),
                    url('https://images.unsplash.com/photo-1580894894513-541e068a3e2b?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;
        color: white;
        position: relative;
        }
        
        .hero-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 90%;
        max-width: 900px;
        }
        
        .main-title {
        font-size: clamp(2.5rem, 7vw, 5.5rem);
        font-weight: 800;
        letter-spacing: -1px;
        margin-bottom: 1.2rem;
        text-shadow: 0 4px 12px rgba(0,0,0,0.7);
        }
        
        .subtitle {
        font-size: clamp(1.3rem, 4vw, 2.2rem);
        font-weight: 400;
        margin-bottom: 2.5rem;
        opacity: 0.95;
        }
        
        .shop-btn {
        padding: 0.9rem 2.5rem;
        font-size: 1.3rem;
        font-weight: 600;
        letter-spacing: 1px;
        }
        
        @media (max-width: 576px) {
        .main-title {
            font-size: 3.2rem;
        }
        .subtitle {
            font-size: 1.4rem;
        }
        }


        .promo-card {
            border: 1px solid #ddd;
            overflow: hidden;
            display: flex;
            height: 300px; /* Adjust as needed */
        }
        .promo-left {
            background-color: #f5f5f5;
            width: 40%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .promo-right {
            background-color: #ffffff;
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
        }
        .promo-img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }
        .brand-logo {
            max-height: 40px;
            margin-bottom: 15px;
        }
        .promo-link {
            text-decoration: none;
            font-weight: 500;
            color: #0066cc;
        }
        .promo-link:hover {
            text-decoration: underline;
        }


    </style>
</head>
<body>