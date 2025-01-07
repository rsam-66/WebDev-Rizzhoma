<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rizzhoma - Plant Shop</title>
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

        body {
            padding-top: 100px;
        }

        .navbar .nav-icon {
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar .nav-icon:hover {
            color: #89b7d0;
        }

        .bg-light-blue { background-color: #89b7d0; }
        .bg-mint { background-color: #c5e0d8; }

        /* Rest of your combined styles */
        .plant-card {
            border: none;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 100%;
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

        /* Rest of your combined sidebar styles */
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
        }

        /* Add all other styles from both files here */
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('asset/logo_rz.png') }}" alt="Logo" style="width: 200px;">
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

    <!-- Sidebar from second template -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <!-- Sidebar content from second template -->
        <!-- Include the entire sidebar content here -->
    </div>

    <!-- Main Content Area -->
    <div class="container my-4">
        <h1>Find Something!</h1>
        <div class="stats">
            <span>{{ count($barang) }}+ items</span>
            <span>10+ Sellers</span>
        </div>
        <div class="search-box d-flex align-items-center w-75 mb-4">
            <input type="text" class="form-control border-0" placeholder="What are you looking for?">
            <button class="btn"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <!-- Products Grid -->
    <div class="container mb-5">
        @if(count($barang) > 0)
            <div class="row">
                @foreach($barang as $item)
                    <div class="col-md-3 mb-4">
                        <div class="plant-card">
                            <div class="plant-card-image">
                                <img src="{{ asset('asset/' . ($item['image'] ?? 'default.png')) }}" alt="{{ $item['name'] ?? 'Product' }}">
                            </div>
                            <div class="card-body p-3">
                                <h5 class="card-title">{{ $item['title'] ?? 'No Name' }}</h5>
                                <p class="card-text text-muted">${{ number_format($item['harga'] ?? 0, 2) }}</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-info text-center">
                No products available at the moment.
            </div>
        @endif
    </div>

    <!-- About Us Section -->
    <section class="py-5 bg-mint">
        <!-- About us content from second template -->
    </section>

    <!-- Categories Section -->
    <section class="py-5">
        <!-- Categories content from second template -->
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <!-- Testimonials content from second template -->
    </section>

    <!-- Footer -->
    <footer class="bg-light-blue py-5">
        <!-- Footer content from second template -->
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Your existing AJAX code for loading products
            $.ajax({
                url: 'http://127.0.0.1:3000/barang',
                method: 'GET',
                success: function(response) {
                    let productHtml = '';
                    response.forEach(item => {
                        productHtml += `
                            <div class="col-md-4 mb-4">
                                <div class="plant-card">
                                    <div class="plant-card-image">
                                        <img src="data:image/jpeg;base64,${item.gambar}" alt="${item.title}">
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
                error: function(err) {
                    console.error("Error fetching barang:", err);
                }
            });
        });
    </script>
</body>
</html>