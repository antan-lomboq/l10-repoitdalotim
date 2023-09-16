@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Profil Instansi</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Profil Inspektorat Daerah Kabupaten Lombok Timur</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.profil_instansi.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.profil_instansi.update',[$profil_instansi]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Instansi</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama_instansi" class="form-control @error('name')
                            is-invalid
                        @enderror" value="{{ $profil_instansi->nama_instansi }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Visi Misi</label>
                    </div>
                    <div class="col">
                        <input type="text" name="visi_misi" class="form-control @error('visi_misi')
                            is-invalid
                        @enderror" value="{{ $profil_instansi->visi_misi }}">
                        @error('visi_misi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Pimpinan</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama_pimpinan" class="form-control @error('nama_pimpinan')
                            is-invalid
                        @enderror" value="{{ $profil_instansi->nama_pimpinan }}">
                        @error('nama_pimpinan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">NIP Pimpian</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nip_pimpinan" class="form-control @error('nip')
                            is-invalid
                        @enderror" value="{{ $profil_instansi->nip_pimpinan }}">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Alamat Instansi</label>
                    </div>
                    <div class="col">
                        <textarea name="alamat_instansi" class="form-control @error('alamat')
                            is-invalid
                        @enderror" value="">{{ $profil_instansi->alamat_instansi }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Kontak Instansi</label>
                    </div>
                    <div class="col">
                        <input type="text" name="kontak" class="form-control @error('nip')
                            is-invalid
                        @enderror" value="{{ $profil_instansi->kontak }}">
                        @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>     
                
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection