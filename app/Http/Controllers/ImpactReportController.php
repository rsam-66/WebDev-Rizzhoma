<?php

namespace App\Http\Controllers;

use App\Models\Pohon;
use Illuminate\Http\Request;

class ImpactReportController extends Controller
{
    public function index()
    {
        // Ambil data pohon untuk Impact Report
        $pohons = Pohon::all(); // Sesuaikan jika ada filter tertentu
        return view('impact-report', compact('pohons'));
    }
}
