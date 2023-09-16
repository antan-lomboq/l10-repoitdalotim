<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $master_dokumen = Dokumen::with('kategorinya')->orderBy('dibuat_pada', 'asc')->paginate(10);
        $kategorinya = Kategori::get(['id', 'nama_kategori']);

        // filter by nama_dokumen, owner, tahun, dan kategori_id
        if ($request->has('nama_dokumen')) {
            $master_dokumen = Dokumen::with('kategorinya')
                ->where('nama_dokumen', 'LIKE', '%' . $request->nama_dokumen . '%')
                ->where('owner', 'LIKE', '%' . $request->owner . '%')
                ->where('tahun', 'LIKE', '%' . $request->tahun . '%')
                ->where('kategori_id', 'LIKE', '%' . $request->kategori_id . '%')
                ->paginate(5);
        } else {
            $master_dokumen = Dokumen::with('kategorinya')->paginate(10);
        }
        return view('dokumen.index', compact('master_dokumen'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_dokumen)
    {
        $dokuman = Dokumen::findOrFail($id_dokumen);
        return view('dokumen.show', compact('dokuman'));
    }

    // public function search(Request $request)
    // {
    //     if ($request->has('nama_dokumen')) {
    //         $master_dokumen = Dokumen::with('kategorinya')
    //             ->where('nama_dokumen', 'LIKE', '%' . $request->nama_dokumen . '%')
    //             ->orWhere('owner', $request->nama_dokumen)
    //             ->orWhere('author', $request->nama_dokumen)
    //             ->orWhere('tahun', $request->nama_dokumen)
    //             ->paginate(5);
    //     } else {
    //         $master_dokumen = Dokumen::with('kategorinya')->paginate(10);
    //     }
    //     return view('dokumen.index', compact('master_dokumen'));
    // }
}
