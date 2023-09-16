@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah User</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="">
                <h6 class="m-0 font-weight-bold text-primary">Ubah User</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.user.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.update', [$user]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama User</label>
                    </div>
                    <div class="col">
                        <input type="text" name="name" class="form-control @error('name')
                        is-invalid
                        @enderror" value="{{ $user->name }}">
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
                        <input type="text" name="email" class="form-control @error('email')
                        is-invalid
                        @enderror" value="{{ $user->email }}" readonly>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Role</label>
                    </div>
                    <div class="col">
                        <select name="role" id="role" class="form-control" multiple="multiple" required>
                            <option value="1"{{ ($user->role === 1)?'selected':'' }}>Admin</option>
                            <option value="0"{{ ($user->role === 0)?'selected':'' }}>User</option>
                            </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary">Ubah</button>
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