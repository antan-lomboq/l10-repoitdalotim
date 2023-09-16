@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Detail Dokumen</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.dokumen.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nama Dokumen</label>
                </div>
                <div class="col">
                    <input type="text" name="nama_dokumen" class="form-control" value="{{ $dokuman->nama_dokumen }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Owner</label>
                </div>
                <div class="col">
                    <input type="text" name="name" class="form-control" value="{{ $dokuman->owner }}" readonly>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Author</label>
                </div>
                <div class="col">
                    <input type="text" name="author" class="form-control" value="{{ $dokuman->author }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Tahun</label>
                </div>
                <div class="col">
                    <input type="text" name="tahun" class="form-control" value="{{ $dokuman->tahun }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Deskripsi</label>
                </div>
                <div class="col">
                    <textarea name="deskripsi" class="form-control" readonly>{{ $dokuman->deskripsi }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Kategori Dokumen</label>
                </div>
                <div class="col">
                    <input type="text" name="kategori_id" class="form-control" value="{{ ($dokuman->kategorinya !=null) ? $dokuman->kategorinya->nama_kategori : '' }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">File Upload</label>
                </div>
                <div class="col">
                    <img src="{{ url('storage/dokumen',$dokuman->file_upload) }}" width="200" srcset="">
                    <a href="{{ url('storage/dokumen', $dokuman->file_upload) }}" class="btn btn-primary"> <i class="fas fa-file-download"></i> View/Download</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection