<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizzhoma - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            padding: 1rem 0;
        }
        .navbar .brand-logo {
            width: 120px;
            height: auto;
        }
        .navbar .nav-link {
            font-size: 14px;
            font-weight: 400;
            color: #666 !important;
            padding: 0 1.5rem !important;
        }
        .navbar .nav-link.active {
            color: #000 !important;
            font-weight: 500;
        }
        .navbar .cart-icon, .navbar .user-icon {
            font-size: 18px;
            color: #666;
        }

        /* Login Container Styles */
        .login-container {
            min-height: calc(100vh - 300px);
            padding: 3rem 0;
        }
        .login-form-container {
            max-width: 360px;
            margin: 0 auto;
        }
        .tree-icon {
            width: 150px;
            height: auto;
            margin: 2rem 0;

        }
        .form-control {
            height: 45px;
            font-size: 13px;
            font-weight: 300;
            padding: 0.75rem 1rem;
            border-radius: 6px;
        }
        .form-control::placeholder {
            color: #999;
        }
        .forgot-password {
            font-size: 12px;
            color: #999;
            font-weight: 300;
        }
        .login-btn {
            height: 45px;
            background-color: #5B99BC;
            border: none;
            font-size: 14px;
            font-weight: 400;
            margin: 1.5rem 0;
        }
        .divider-text {
            font-size: 12px;
            color: #999;
            font-weight: 300;
            margin: 1rem 0;
        }
        .google-btn {
            height: 45px;
            border: 1px solid #ddd;
            background: white;
            color: #666;
            font-size: 14px;
            font-weight: 400;
        }
        .google-btn img {
            width: 18px;
            height: auto;
            margin-right: 8px;
        }

        /* Footer Styles */
        .footer {
            background-color: #5B99BC;
            color: white;
            padding: 4rem 0 2rem;
        }
        .footer .brand-logo {
            width: 120px;
            height: auto;
            margin-bottom: 1rem;
        }
        .footer p {
            font-size: 13px;
            font-weight: 300;
            margin-bottom: 1.5rem;
        }
        .footer h5 {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 1.5rem;
        }
        .footer ul li {
            margin-bottom: 0.75rem;
        }
        .footer a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 300;
        }
        .social-icon {
            width: 32px;
            height: 32px;
            border: 1px solid white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.75rem;
            font-size: 14px;
        }
        .footer .copyright {
            font-size: 12px;
            font-weight: 300;
            margin-top: 3rem;
        }
        .login-btn {
            height: 45px;
            background-color: #5B99BC;
            border: none;
            font-size: 14px;
            font-weight: 400;
            margin: 1.5rem 0 1rem; /* Adjusted margin bottom */
        }
        
        .sign-up-text {
            font-size: 12px;
            color: #999;
            font-weight: 300;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .sign-up-text a {
            color: #5B99BC;
            text-decoration: none;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./images/Group 13490.png" alt="Rizzhoma" class="brand-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <a href="#" class="me-4 cart-icon"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#" class="user-icon"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="container login-container">
        <div class="login-form-container">
            <div class="text-center">
                <img src="./images/Group 13490.png" alt="Tree Icon" class="tree-icon">
            </div>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="text-end mb-2">
                    <a href="#" class="text-decoration-none forgot-password">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 login-btn">Sign In</button>
                <div class="sign-up-text">
                    Don't have an account? <a href="signup.html">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <img src="./images/Group 13490.png" alt="Rizzhoma" class="brand-logo">
                    <p>We help you find your dream plant</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Our story</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Getting Started</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center copyright">
                <p>2023 all Right Reserved Term of use Rizzhoma</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>