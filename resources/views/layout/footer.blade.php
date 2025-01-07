<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Rizzhoma" class="mb-3">
                <p>We help you find<br>your dream plant</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Information</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('about') }}" class="text-white">About</a></li>
                    <li><a href="{{ route('products') }}" class="text-white">Product</a></li>
                    <li><a href="{{ route('blog') }}" class="text-white">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('community') }}" class="text-white">Community</a></li>
                    <li><a href="{{ route('career') }}" class="text-white">Career</a></li>
                    <li><a href="{{ route('our-story') }}" class="text-white">Our story</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('getting-started') }}" class="text-white">Getting Started</a></li>
                    <li><a href="{{ route('pricing') }}" class="text-white">Pricing</a></li>
                    <li><a href="{{ route('resources') }}" class="text-white">Resources</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-4">
            <p class="mb-0">{{ date('Y') }} all Right Reserved Term of use Rizzhoma</p>
        </div>
    </div>
</footer>