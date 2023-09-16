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
                <h6 class="m-0 font-weight-bold text-primary">Ubah Dokumen</h6>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.dokumen.index') }}" class="btn btn-primary"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.dokumen.update',[$dokuman]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama Dokumen</label>
                    </div>
                    <div class="col">
                        <input type="text" name="nama_dokumen" class="form-control @error('nama_dokumen')
                            is-invalid
                        @enderror" value="{{ $dokuman->nama_dokumen }}">
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
                        <select name="owner" id="owner" class="form-control" required>
                        <option value="--Pilih Owner--"{{($dokuman->owner === '--Pilih Owner--')?'selected':''}}>--Pilih Owner--</option>
                        <option value="Inspektur"{{ ($dokuman->owner === 'Inspektur')?'selected':'' }}>Inspektur</option>
                        <option value="Sekretaris"{{ ($dokuman->owner === 'Sekretaris')?'selected':'' }}>Sekretaris</option>
                        <option value="Sekretariat"{{ ($dokuman->owner === 'Sekretariat')?'selected':'' }}>Sekretariat</option>
                        <option value="Perencanaan"{{ ($dokuman->owner === 'Perencanaan')?'selected':'' }}>Perencanaan</option>
                        <option value="Irban I"{{ ($dokuman->owner === 'Irban I')?'selected':'' }}>Irban I</option>
                        <option value="Irban II"{{ ($dokuman->owner === 'Irban II')?'selected':'' }}>Irban II</option>
                        <option value="Irban III"{{ ($dokuman->owner === 'Irban III')?'selected':'' }}>Irban III</option>
                        <option value="Irban IV"{{ ($dokuman->owner === 'Irban IV')?'selected':'' }}>Irban IV</option>
                        <option value="Irban V"{{ ($dokuman->owner === 'Irban V')?'selected':'' }}>Irban V</option>
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
                        @enderror" value="{{ $dokuman->author }}">
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
                        <select name="tahun" id="tahun" class="form-control" required>
                            <option value="--Pilih Tahun--">--Pilih Tahun--</option>
                            <option value="2018"{{($dokuman->tahun ===2018)?'selected':'' }}>2018</option>
                            <option value="2019"{{ ($dokuman->tahun===2019)?'selected':'' }}>2019</option>
                            <option value="2020"{{ ($dokuman->tahun===2020)?'selected':'' }}>2020</option>
                            <option value="2021"{{ ($dokuman->tahun===2021)?'selected':'' }}>2021</option>
                            <option value="2022"{{ ($dokuman->tahun===2022)?'selected':'' }}>2022</option>
                            <option value="2023"{{ ($dokuman->tahun===2023)?'selected':'' }}>2023</option>
                            
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
                        @enderror" value="">{{ $dokuman->deskripsi }}</textarea>
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
                        <select name="kategori_id" id="kategori_id" class="form-control" required>
                            <option value="--Pilih Kategori--">--Pilih Kategori--</option>
                            @foreach ($kategorinya as $kategori)
                            <option {{ $dokuman->kategori_id == $kategori->id ? 'selected': null}} value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">File Upload</label>
                    </div>
                    <div class="col">
                        <input type="file" name="file_upload" id="file_upload" class="form-control @error('file_upload') 
                            is-invalid
                        @enderror" value="{{ $dokuman->file_upload }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button class="btn btn-primary">Ubah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection