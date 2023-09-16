<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategorinya = Kategori::orderBy('nama_kategori', 'asc')->simplePaginate(5);
        return view('admin.kategori.index', compact('kategorinya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        $params = $request->validated();
        if ($kategorinya = Kategori::create($params)) {
            return redirect(route('admin.kategori.index'))->with('success', 'Kategori Dokumen berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, string $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        $params = $request->validated();
        if ($kategori->update($params)) {
            return redirect(route('admin.kategori.index'))->with('success', 'Kategori Dokumen berhasil diperbaharui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_kategori)
    {
        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->delete();
        return redirect(route('admin.kategori.index'))->with('success', 'Kategori Dokumen berhasil dihapus');
    }
}
