<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rizzhoma Impact Report</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #f8f9fa;
      padding: 10px 30px;
    }
    .logo {
      display: flex;
      align-items: center;
    }
    .logo img {
      height: 40px;
      margin-right: 10px;
    }
    .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .menu a {
      margin: 0 15px;
      color: #333;
      text-decoration: none;
      font-weight: 500;
    }
    .impact-report {
      background-color: #d0dce3;
      padding: 40px;
      text-align: center;
    }
    .impact-report h2 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }
    .impact-report .date {
      font-size: 1.2rem;
      color: #666;
    }
    .icons-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }
    .icon-card {
      background-color: #f4f4f4;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }
    .icon-card img {
      width: 50px;
      margin-bottom: 10px;
    }
    .footer {
      background-color: #4c89a0;
      color: white;
      padding: 40px 20px;
    }
    .footer a {
      color: white;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
    .footer .social-icons img {
      width: 30px;
      margin-right: 10px;
    }

      .social-icons {
    display: flex;
    gap: 15px;
  }
  .social-icons .social-icon {
    color: white;
    font-size: 24px;
    transition: color 0.3s ease;
  }
  .social-icons .social-icon:hover {
    color: #007bff; /* Ganti dengan warna yang sesuai jika diperlukan */
  }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}"
    </div>
    <nav class="menu">
    <a href="{{ route('best.selling') }}">Home</a>
    <a href="#">Products</a>
    <a href="#">Contacts</a>
</nav>

  </header>

  <!-- Impact Report -->
  <section class="impact-report">
    <h2>Impact Report</h2>
    <p class="date">Planted on 25/07/2024</p>

    <div class="icons-container">
      <div class="icon-card" data-bs-toggle="modal" data-bs-target="#earlyGrowthModal">
      <img src="{{ asset('images/early.png') }}" alt="Logo" style="width: 100px;">
        <p>Early Growth Progress</p>
      </div>
      <div class="icon-card">
      <img src="{{ asset('images/root.png') }}" alt="Logo" style="width: 100px;">        <p>Root Development</p>
      </div>
      <div class="icon-card">
      <img src="{{ asset('images/file.png') }}" alt="Logo" style="width: 100px;">        <p>Environmental Resilience</p>
      </div>
      <div class="icon-card">
      <img src="{{ asset('images/file (1).png') }}" alt="Logo" style="width: 140px;">        <p>Water Conservation</p>
      </div>
      <div class="icon-card">
      <img src="{{ asset('images/community.png') }}" alt="Logo" style="width: 100px;">        <p>Community Engagement</p>
      </div>
    </div>
  </section>


  <!-- Modal for Early Growth Progress -->
  <div class="modal fade" id="earlyGrowthModal" tabindex="-1" aria-labelledby="earlyGrowthModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="earlyGrowthModalLabel">Early Growth Progress</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Data Pohon -->
          @foreach($pohons as $pohon)
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">{{ $pohon->title }}</h5>
                <img src="{{ asset('storage/'.$pohon->gambar) }}" alt="{{ $pohon->title }}" class="card-img-top" style="width: 100px;">
                <p class="card-text">{{ $pohon->desc }}</p>
                <p><strong>Stock:</strong> {{ $pohon->stock }}</p>
                <p><strong>Price:</strong> Rp. {{ number_format($pohon->harga, 2) }}</p>
              </div>
            </div>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Rizzhoma</h5>
          <p>We help you find your dream plant</p>
          <div class="social-icons">
          <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Information</h5>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5>Company</h5>
          <ul>
            <li><a href="#">Community</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Our Story</a></li>
          </ul>
        </div>
      </div>
      <p class="text-center mt-4">&copy; 2023 All Rights Reserved | Terms of Use Rizzhoma</p>
    </div>
  </footer>

  <!-- Bootstrap JS (Optional, but required for modal) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
