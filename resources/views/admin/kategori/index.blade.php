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
                <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Tambah Kategori
                </a>
            </div>
        </div>
        <div class="ml-auto">

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($kategorinya->count()>0)
                        @foreach ($kategorinya as $kategori)
                        <tr>
                            <td>{{ $kategori->id }}</td>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{ route('admin.kategori.edit', [$kategori]) }}" type="button" class="btn btn-warning" title="Ubah"> <i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin.kategori.destroy',[$kategori]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" title="Hapus"> <i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="text-center" colspan="3">Kategori Dokumen tidak ditemukan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $kategorinya->links() }}
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection