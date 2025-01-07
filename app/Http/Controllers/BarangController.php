<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // Display all barang for Best Selling Plants
    public function index()
    {
        // Ambil semua data barang dari model Barang
        $barang = Barang::all(); 
        
        // Kirim data barang ke view index
        return view('index', compact('barang'));
    }

    // Display all barang for another purpose
    public function getAllBarang()
    {
        $barang = Barang::all(); // Ambil semua data barang
        return view('best-selling', compact('barang')); // Kirim data ke view
    }

    // Show single barang details (optional)
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
}
