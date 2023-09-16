<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\View;
// use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $usernya = User::all();
        $jumlah_user = User::count();
        $jumlah_kategori = Kategori::count();
        $jumlah_dokumen = Dokumen::count();

        return view('admin.dashboard', compact('jumlah_user', 'jumlah_kategori', 'jumlah_dokumen'));
    }
}
