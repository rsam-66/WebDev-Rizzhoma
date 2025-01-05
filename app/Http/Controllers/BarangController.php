<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function getAllBarang() {
        $barang = Barang::all(); // ambil semua data barang
        return view('best-selling', compact('barang')); // kirim data ke view
    }
    // Display all barang for Best Selling Plants
    public function index()
    {
        // Menampilkan view index.blade.php
        return view('index');
    }

    // Show single barang details (optional)
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
    
}
