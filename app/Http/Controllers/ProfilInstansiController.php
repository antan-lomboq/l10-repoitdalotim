<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilInstansi;

class ProfilInstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil_instansinya = ProfilInstansi::orderBy('nama_instansi', 'asc')->simplePaginate(5);
        return view('profil_instansi.index', compact('profil_instansinya'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
