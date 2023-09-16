@extends('layouts.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kategori Dokumen</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Detil Daftar Kategori</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.kategori.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nama Kategori</label>
                </div>
                <div class="col">
                    <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}" readonly>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection