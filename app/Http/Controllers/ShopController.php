<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function index()
{
    try {
        $response = Http::get('http://localhost:3000/barang');
        
        if ($response->successful()) {
            $barang = $response->json();
            return view('shop', compact('barang'));
        }
        
        return response()->json([
            'error' => 'Failed to fetch data from API',
            'status' => $response->status(),
            'response' => $response->json()
        ], $response->status());

    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
}
}