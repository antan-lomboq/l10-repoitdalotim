<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DokumenRequest;

class AdminDokumenController extends Controller
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
        return view('admin.dokumen.index', compact('master_dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategorinya = Kategori::get(['id', 'nama_kategori']);
        return view('admin.dokumen.create', compact('kategorinya'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DokumenRequest $request)
    {
        $request->validated();
        $file_upload = $request->file('file_upload');
        $file_upload->storeAs('public/dokumen', $file_upload->hashName());

        $dokuman = Dokumen::create([
            'nama_dokumen' => $request->nama_dokumen,
            'owner' => $request->owner,
            'author' => $request->author,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
            'kategori_id' => $request->kategori_id,
            'file_upload' => $request->file_upload->hashName(),
        ]);

        return redirect(route('admin.dokumen.index'))->with('success', 'Dokumen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_dokumen)
    {
        $dokuman = Dokumen::findOrFail($id_dokumen);
        return view('admin.dokumen.show', compact('dokuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_dokumen)
    {
        $dokuman = Dokumen::findOrFail($id_dokumen);
        $kategorinya = Kategori::get(['id', 'nama_kategori']);
        return view('admin.dokumen.edit', compact('dokuman', 'kategorinya'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DokumenRequest $request, string $id_dokumen)
    {
        $dokuman = Dokumen::findOrFail($id_dokumen);
        $params = $request->validated();

        if ($dokuman->update($params)) {
            return redirect(route('admin.dokumen.index'))->with('success', 'Dokumen berhasil diperbaharui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_dokumen)
    {
        $dokuman = Dokumen::findOrFail($id_dokumen);
        $dokuman->delete();
        return redirect(route('admin.dokumen.index'))->with('success', 'Dokumen berhasil dihapus');
    }

    public function search(Request $request)
    {
        if ($request->has('q')) {
            $master_dokumen = Dokumen::with('kategorinya')
                ->where('nama_dokumen', 'LIKE', '%' . $request->q . '%')
                ->orWhere('owner', $request->q)
                ->orWhere('author', $request->q)
                ->orWhere('tahun', $request->q)
                ->paginate(5);
        } else {
            $master_dokumen = Dokumen::with('kategorinya')->paginate(10);
        }
        return view('admin.dokumen.index', compact('master_dokumen'));
    }
}
