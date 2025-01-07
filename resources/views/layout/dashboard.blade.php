@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Dashboard</h1>

    <!-- Data Pohon -->
    <h2>Pohon</h2>
    <div class="row">
        @foreach ($trees as $tree)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $tree->gambar) }}" class="card-img-top" alt="{{ $tree->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $tree->title }}</h5>
                    <p class="card-text">{{ $tree->desc }}</p>
                    <p><strong>Stock:</strong> {{ $tree->stock }}</p>
                    <p><strong>Harga:</strong> Rp{{ number_format($tree->harga, 2) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Data Barang -->
    <h2>Barang</h2>
    <div class="row">
        @foreach ($barang as $item)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <p><strong>Stock:</strong> {{ $item->stock }}</p>
                    <p><strong>Harga:</strong> Rp{{ number_format($item->harga, 2) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Orders -->
    <h2>Orders</h2>
    <h3>Pohon</h3>
    <ul>
        @foreach ($treeOrders as $order)
        <li>{{ $order->tree->title }} - {{ $order->quantity }} pcs - {{ $order->totalPrice }}</li>
        @endforeach
    </ul>

    <h3>Barang</h3>
    <ul>
        @foreach ($barangOrders as $order)
        <li>{{ $order->barang->title }} - {{ $order->quantity }} pcs - {{ $order->totalPrice }}</li>
        @endforeach
    </ul>
</div>
@endsection
