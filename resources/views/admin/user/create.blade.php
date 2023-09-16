@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Tambah User Baru</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.user.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama User</label>
                    </div>
                    <div class="col">
                        <input type="text" name="name" class="form-control @error('name')
                        is-invalid
                        @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Email User</label>
                    </div>
                    <div class="col">
                        <input type="email" name="email" class="form-control @error('email')
                        is-invalid
                        @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Password</label>
                    </div>
                    <div class="col">
                        <input type="password" name="password" class="form-control @error('password')
                        is-invalid
                        @enderror" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Role</label>
                    </div>
                    <div class="col">
                        
                        <select name="role" id="role" class="form-control @error('name')
                        is-invalid
                        @enderror" value="{{ old('name') }}" multiple="multiple">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                            </select>
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