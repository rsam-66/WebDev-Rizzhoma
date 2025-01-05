<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizzhoma - Welcome!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Add padding to body to prevent content from hiding under fixed navbar */
        body {
            padding-top: 50px;
            /* Height of navbar + some extra padding */
        }

        /* Hover effect for navbar icons */
        .navbar .nav-icon {
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar .nav-icon:hover {
            color: #89b7d0;
        }

        /* Previous styles remain the same */
        .bg-light-blue {
            background-color: #89b7d0;
        }

        .bg-mint {
            background-color: #c5e0d8;
        }

        .plant-card {
            border: none;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
        }

        .image-placeholder {
            background: #e9ecef;
            height: 200px;
            width: 100%;
        }

        .testimonial-card {
            background-color: #e8f4f8;
            border-radius: 15px;
            padding: 20px;
        }

        .search-box {
            background: white;
            border-radius: 25px;
            padding: 10px 20px;
        }

        /* Enhanced sidebar styles */
        .offcanvas {
            width: 320px !important;
            background: linear-gradient(135deg, #c5e0d8 0%, #89b7d0 100%);
        }

        .offcanvas-header {
            background: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
        }

        .sidebar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            text-decoration: none;
        }

        .sidebar-link {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            color: #2c3e50;
            text-decoration: none;
            transition: all 0.3s ease;
            margin: 5px 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }

        .sidebar-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
            color: #2c3e50;
        }

        .sidebar-link i {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            margin-right: 15px;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }

        .sidebar-link:hover i {
            background: rgba(255, 255, 255, 0.4);
            transform: scale(1.1);
        }

        .sidebar-divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
            margin: 15px;
        }

        .sidebar-footer {
            padding: 20px;
            text-align: center;
            color: #2c3e50;
            font-size: 0.9em;
            background: rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }

        .user-profile {
            display: flex;
            align-items: center;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            margin: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .user-info {
            flex-grow: 1;
        }

        .user-name {
            font-weight: bold;
            color: #2c3e50;
            margin: 0;
        }

        .user-status {
            font-size: 0.9em;
            color: #2c3e50;
            margin: 0;
        }

        .products-scroll {
            overflow-x: auto;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            /* Hide scrollbar for IE and Edge */
            scrollbar-width: none;
            /* Hide scrollbar for Firefox */
            padding: 1rem 0;
        }

        .products-scroll::-webkit-scrollbar {
            display: none;
            /* Hide scrollbar for Chrome, Safari and Opera */
        }

        .products-container {
            display: flex;
            gap: 1.5rem;
            padding: 0.5rem 0;
        }

        .product-card {
            min-width: 300px;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .plant-card {
            border: none;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .plant-card-image {
            height: 200px;
            overflow: hidden;
        }

        .plant-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>

<body>
    <!-- Updated Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-leaf text-success"></i> Rizzhoma
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="me-3 nav-icon"><i class="fas fa-shopping-cart"></i></a>
                <a href="#" class="me-3 nav-icon"><i class="fas fa-user"></i></a>
                <a href="#" class="nav-icon" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- Enhanced Sidebar Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <a href="#" class="sidebar-brand">
                <i class="fas fa-leaf text-success"></i> Rizzhoma
            </a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <!-- User Profile Section -->
            <div class="user-profile">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="user-info">
                    <h6 class="user-name">Welcome!</h6>
                    <p class="user-status">Plant Lover</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <a href="#" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-leaf"></i>
                <span>Products</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-shopping-cart"></i>
                <span>Cart</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-star"></i>
                <span>Donate</span>
            </a>


            <div class="sidebar-divider"></div>

            <a href="#" class="sidebar-link">
                <i class="fas fa-heart"></i>
                <span>Wishlist</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-history"></i>
                <span>Order History</span>
            </a>

            <div class="sidebar-divider"></div>

            <a href="#" class="sidebar-link">
                <i class="fas fa-info-circle"></i>
                <span>About Us</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-phone"></i>
                <span>Contact</span>
            </a>
            <a href="#" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>

            <!-- Footer -->
            <div class="sidebar-footer">
                <p class="mb-0">© 2024 Rizzhoma</p>
                <small>Plant your dreams with us</small>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-light-blue py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Donate your plants</h1>
                    <div class="d-flex gap-4 mb-4">
                        <div>
                            <h4>50+</h4>
                            <p class="mb-0">Plant Species</p>
                        </div>
                        <div>
                            <h4>100+</h4>
                            <p class="mb-0">Customers</p>
                        </div>
                    </div>
                    <div class="search-box d-flex align-items-center w-75">
                        <input type="text" class="form-control border-0" placeholder="What are you looking for?">
                        <button class="btn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-image-container">
                        <img src="asset/image.png" class="img-fluid" alt="Plant Image Here">
                        <div class="image-placeholder h-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Selling Plants -->
    <!-- Modified Best Selling Plants Section -->
    <section class="py-5">
        <div class="container">
            <h1 class="mb-4">Best Selling Plants</h1>
            <div class="row" id="product-container">
                <!-- Data produk akan dimuat di sini -->
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">About us</h2>
            <p class="text-muted mb-5">Order now and appreciate the beauty of nature</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="rounded-circle bg-mint p-4 d-inline-block mb-3">
                        <i class="fas fa-leaf fa-2x"></i>
                    </div>
                    <h5>Large Assortment</h5>
                    <p class="text-muted">We offer many different types of products with fewer variations in each
                        category</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rounded-circle bg-mint p-4 d-inline-block mb-3">
                        <i class="fas fa-box fa-2x"></i>
                    </div>
                    <h5>Fast & Free Shipping</h5>
                    <p class="text-muted">4-day or less delivery time, free shipping and an expedited delivery option
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="rounded-circle bg-mint p-4 d-inline-block mb-3">
                        <i class="fas fa-phone fa-2x"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p class="text-muted">Answers to any business related inquiry 24/7 and in real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-5 bg-mint">
        <div class="container">
            <h2 class="text-center mb-4">Categories</h2>
            <p class="text-center text-muted mb-5">Find what you are looking for</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="image-placeholder mb-3"></div>
                    <h5 class="text-center">Natural Plants</h5>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-placeholder mb-3"></div>
                    <h5 class="text-center">Plant Accessories</h5>
                    <p class="text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="image-placeholder mb-3"></div>
                    <h5 class="text-center">Artificial Plants</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <h2 class="mb-5">What customers say about rizzhoma?</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero
                            et velit...</p>
                        <div class="d-flex align-items-center">
                            <div class="image-placeholder rounded-circle me-3" style="width: 50px; height: 50px;"></div>
                            <div>
                                <h6 class="mb-0">John Doe</h6>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <span class="ms-1">4.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero
                            et velit...</p>
                        <div class="d-flex align-items-center">
                            <div class="image-placeholder rounded-circle me-3" style="width: 50px; height: 50px;"></div>
                            <div>
                                <h6 class="mb-0">John Doe</h6>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <span class="ms-1">4.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light-blue py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3"><i class="fas fa-leaf text-success"></i> Rizzhoma</h5>
                    <p class="text-muted">We help you find your dream plant, you help us make the world better!</p>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/" class="text-dark"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="text-dark"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.x.com/" class="text-dark"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">About</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Product</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Community</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Career</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Our story</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Contact</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-dark">Getting Started</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Pricing</a></li>
                        <li><a href="#" class="text-decoration-none text-dark">Resources</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-top pt-4 mt-4">
                <p class="text-muted text-center mb-0">2023 all Rights Reserved Term of use PT. Flora Cipta Karsa Utama
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'http://127.0.0.1:3000/barang',
                method: 'GET',
                success: function (response) {
                    let productHtml = '';
                    response.forEach(item => {
                        productHtml += `
                <div class="col-md-4 mb-4">
                    <div class="plant-card">
                        <div class="plant-card-image">
                            <img src="data:image/jpeg;base64,' .base64_encode(${item.gambar}).'" height="100" width="100" class="img-fluid" alt="${item.title}">
                        </div>
                        <div class="p-3">
                            <p class="mb-2">${item.title}</p>
                            <p class="fw-bold mb-0">Rp ${parseInt(item.harga).toLocaleString('id-ID')}</p>
                        </div>
                    </div>
                </div>
            `;
                    });
                    $('#product-container').html(productHtml);
                },
                error: function (err) {
                    console.error("Error fetching barang:", err);
                }
            });
        });

    </script>
</body>

</html>
