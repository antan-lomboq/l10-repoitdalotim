<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProfilInstansi;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilInstansiRequest;

class AdminProfilInstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $profil_instansinya = ProfilInstansi::orderBy('nama_instansi', 'asc')->simplePaginate(5);
        return view('admin.profil_instansi.index', compact('profil_instansinya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_instansi)
    {
        $profil_instansi = ProfilInstansi::findOrFail($id_instansi);
        return view('admin.profil_instansi.show', compact('profil_instansi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_instansi)
    {
        $profil_instansi = ProfilInstansi::findOrFail($id_instansi);
        return view('admin.profil_instansi.edit', compact('profil_instansi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfilInstansiRequest $request, string $id_instansi)
    {
        $profil_instansi = ProfilInstansi::findOrFail($id_instansi);
        $params = $request->validated();
        if ($profil_instansi->update($params)) {
            return redirect(route('admin.profil_instansi.index'))->with('success', 'Profil Instansi berhasil diperbaharui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
