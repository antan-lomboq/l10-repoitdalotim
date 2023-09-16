@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Kelola User</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.user.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Tambah User
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
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email User</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($usernya->count()>0)
                        @foreach ($usernya as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="btn btn-group">
                                    <a href="{{ route('admin.user.show', [$user]) }}" type="button" class="btn btn-secondary" title="Detail"> <i class="fas fa-eye"></i> </a>
                                    <a href="{{ route('admin.user.edit', [$user]) }}" type="button" class="btn btn-warning" title="Ubah"> <i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin.user.destroy',[$user]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user?')">
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
                            <td class="text-center" colspan="3">user Dokumen tidak ditemukan</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $usernya->links() }}
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection