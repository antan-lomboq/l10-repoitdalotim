<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $jumlah_dokumen = Dokumen::count();
        return view('dashboard', compact('jumlah_dokumen'));
    }
}
