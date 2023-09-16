@extends('layouts.app')

@section('content')
@csrf
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dokumen</h1>

    <!-- DataTales Example -->
    <form action="{{ route('admin.dokumen.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <div class="">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Dokumen</h6>
                </div>
                <div class="ml-auto">
                    <a href="{{ route('admin.dokumen.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Dokumen</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama_dokumen" class="form-control @error('nama_dokumen')
                        is-invalid
                        @enderror" value="{{ old('nama_dokumen') }}">
                        @error('nama_dokumen')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Owner</label>
                    </div>
                    <div class="col">
                        <select type="text" name="owner" id="owner" required class="form-control @error('owner')
                        is-invalid
                        @enderror" value="{{ old('owner') }}">
                        @error('owner')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <option {{ old('owner') == '--Pilih Owner--' ? 'selected' : null }} value="--Pilih Owner--">--Pilih Owner--</option>
                        <option {{ old('owner') == 'Inspektur' ? 'selected' : null }} value="Inspektur">Inspektur</option>
                        <option {{ old('owner') == 'Sekretaris' ? 'selected' : null }} value="Sekretaris">Sekretaris</option>
                        <option {{ old('owner') == 'Sekretariat' ? 'selected' : null }} value="Sekretariat">Sekretariat</option>
                        <option {{ old('owner') == 'Perencanaan' ? 'selected' : null }} value="Perencanaan">Perencanaan</option>
                        <option {{ old('owner') == 'Irban I' ? 'selected' : null }} value="Irban I">Irban I</option>
                        <option {{ old('owner') == 'Irban II' ? 'selected' : null }} value="Irban II">Irban II</option>
                        <option {{ old('owner') == 'Irban III' ? 'selected' : null }} value="Irban III">Irban III</option>
                        <option {{ old('owner') == 'Irban IV' ? 'selected' : null }} value="Irban IV">Irban IV</option>
                        <option {{ old('owner') == 'Irban V' ? 'selected' : null }} value="Irban V">Irban V</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Author</label>
                    </div>
                    <div class="col">
                        <input type="text" name="author" class="form-control @error('author')
                        is-invalid
                        @enderror"  value="{{ old('author') }}">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Tahun</label>
                    </div>
                    <div class="col">
                        <select name="tahun" id="tahun" required class="form-control @error('tahun')
                        is-invalid
                        @enderror" value="{{ old('tahun') }}">
                        @error('tahun')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                            <option {{ old('tahun') == '--Pilih Tahun--' ? 'selected' : null }} value="--Pilih Tahun--">--Pilih Tahun--</option>
                            <option {{ old('tahun') == '2018' ? 'selected' : null }} value="2018">2018</option>
                            <option {{ old('tahun') == '2019' ? 'selected' : null }} value="2019">2019</option>
                            <option {{ old('tahun') == '2020' ? 'selected' : null }} value="2020">2020</option>
                            <option {{ old('tahun') == '2021' ? 'selected' : null }} value="2021">2021</option>
                            <option {{ old('tahun') == '2022' ? 'selected' : null }} value="2022">2022</option>
                            <option {{ old('tahun') == '2023' ? 'selected' : null }} value="2023">2023</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Deskripsi</label>
                    </div>
                    <div class="col">
                        <textarea name="deskripsi" class="form-control @error('deskripsi')
                        is-invalid
                        @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Kategori Dokumen</label>
                    </div>
                    <div class="col">
                        <select name="kategori_id" id="kategori_id" class="form-control" value="{{ old('kategori_id') }}">
                            <option value="--Pilih Kategori--">--Pilih Kategori--</option>
                            @foreach ($kategorinya as $kategori)
                            <option {{ old("kategori")==$kategori->id?'selected':null}} value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">File Upload</label>
                    </div>
                    <div class="col">
                        <input type="file" name="file_upload" id="file_upload" title="Pilih File" class="form-control @error('file_upload') 
                            is-invalid
                        @enderror" value="{{ old('file_upload') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary" title="Submit">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
            
       </form>
</div>
<!-- /.container-fluid -->

@endsection