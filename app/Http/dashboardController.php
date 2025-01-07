<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Barang;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Pohon yang Tersedia
        $trees = Tree::all();

        // Barang yang Tersedia
        $barang = Barang::all();

        // Order yang Terkait dengan Pohon
        $treeOrders = Order::where('productType', 'pohon')
                          ->with('tree')
                          ->where('status', 'completed')
                          ->get();

        // Order yang Terkait dengan Barang
        $barangOrders = Order::where('productType', 'barang')
                             ->with('barang')
                             ->where('status', 'completed')
                             ->get();

        return view('dashboard', compact('trees', 'barang', 'treeOrders', 'barangOrders'));
    }
}
