<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Rizzhoma">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('products*') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contacts*') ? 'active' : '' }}" href="{{ route('contacts') }}">Contacts</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="{{ route('cart') }}" class="me-3"><i class="fas fa-shopping-cart"></i></a>
                <a href="{{ route('profile') }}"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>
</nav>