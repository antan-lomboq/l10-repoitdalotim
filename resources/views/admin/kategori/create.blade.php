@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori Dokumen</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Daftar Kategori</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.kategori.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.kategori.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Kategori</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori')
                        is-invalid
                        @enderror" value="{{ old('nama_kategori') }}">
                        @error('nama_kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection