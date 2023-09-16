@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profil Inspektorat Daerah Kabupaten Lombok Timur</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Profil Inspektorat Daerah Kabupaten Lombok Timur</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ url('dashboard') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            
            @foreach ($profil_instansinya as $profil_instansi)
                
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nama Instansi </label>
                </div>
                <div class="col">
                    <input type="text" name="nama_instansi" class="form-control" value="{{ $profil_instansi->nama_instansi }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Visi Misi</label>
                </div>
                <div class="col">
                    <input type="text" name="visi_misi" class="form-control" value="{{ $profil_instansi->visi_misi }}" readonly>
                </select>
            </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nama Pimpinan</label>
                </div>
                <div class="col">
                    <input type="text" name="nama_pimpinan" class="form-control" value="{{ $profil_instansi->nama_pimpinan }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">NIP Pimpinan</label>
                </div>
                <div class="col">
                    <input type="text" name="nip_pimpinan" class="form-control" value="{{ $profil_instansi->nip_pimpinan }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Alamat Instansi</label>
                </div>
                <div class="col">
                    <textarea name="alamat_instansi" class="form-control" readonly>{{ $profil_instansi->alamat_instansi }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Kontak Instansi</label>
                </div>
                <div class="col">
                    <input type="text" name="kontak" class="form-control" value="{{ $profil_instansi->kontak }}" readonly>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection