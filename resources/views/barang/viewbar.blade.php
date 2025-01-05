<section class="best-selling mt-5">
    <div class="container">s
        <h2>Best Selling Plants</h2>
        <div class="row">
            @foreach ($barang as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $item->gambar }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ $item->harga }}</p>
                        <p class="card-text"><strong>Stock:</strong> {{ $item->stock }}</p>
                        <a href="{{ route('barang.show', $item->id) }}" class="btn btn-success">Buy Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
