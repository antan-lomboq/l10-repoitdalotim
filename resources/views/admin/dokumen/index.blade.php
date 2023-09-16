@extends('layouts.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Dokumen</h1>
    <div class="">
        <a href="{{ route('admin.dokumen.create') }}" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Tambah Dokumen</a>
    </div>
    <br>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <div class="row">
                <div class="col">
                    {{-- <h6 class="m-0 font-weight-bold text-primary">Data Master Dokumen</h6> --}}
                    <form action="{{ route('admin.dokumen.index') }}" method="get">
                    @csrf
                        <div class="row">
                            <div class="col">
                                <input name="nama_dokumen" id="nama_dokumen" type="text" class="form-control" placeholder="Nama Dokumen" value="{{request('nama_dokumen')}}">
                             </div>
                            <div class="col">
                                <select name="owner" id="owner" class="form-control" value="{{ old('owner') }}">
                                    <option {{ old('owner') == '-' ? 'selected' : null }} value="">--Pilih Owner--</option>
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
                            <div class="col">
                                <select name="tahun" class="form-control" value="{{ old('tahun') }}">
                                    <option {{ old('tahun') == '-' ? 'selected' : null }} value="">--Pilih Tahun--</option>
                                    <option {{ old('tahun') == '2018' ? 'selected' : null }} value="2018">2018</option>
                                    <option {{ old('tahun') == '2019' ? 'selected' : null }} value="2019">2019</option>
                                    <option {{ old('tahun') == '2020' ? 'selected' : null }} value="2020">2020</option>
                                    <option {{ old('tahun') == '2021' ? 'selected' : null }} value="2021">2021</option>
                                    <option {{ old('tahun') == '2022' ? 'selected' : null }} value="2022">2022</option>
                                    <option {{ old('tahun') == '2023' ? 'selected' : null }} value="2023">2023</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="kategori_id" id="kategori_id" class="form-control" value="{{ old('kategori_id') }}">
                                    <option {{ old('kategori_id') == '' ? 'selected' : null }} value="">--Pilih Kategori--</option>
                                    @foreach ($master_dokumen as $dokuman)
                                    <option {{ old('kategori_id') == '$dokuman->kategorinya->nama_kategori' ? 'selected' : null }} value="{{ $dokuman->kategori_id }}">{{ $dokuman->kategorinya->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ml-auto">
                <a href="{{ route('admin.dokumen.index') }}" class="btn btn-primary"> <i class="fas fa-broom"></i> Clear</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dokumen</th>
                        <th>Owner</th>
                        <th>Author</th>
                        <th>Tahun</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($master_dokumen->count()>0)
                    @foreach ($master_dokumen as $dokuman)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dokuman->nama_dokumen }}</td>
                        <td>{{ $dokuman->owner }}</td>
                        <td>{{ $dokuman->author }}</td>
                        <td>{{ $dokuman->tahun }}</td>
                        <td>{{ $dokuman->kategorinya->nama_kategori }}</td>
                        <td>
                            <div class="btn btn-group">
                                <a href="{{ route('admin.dokumen.show', [$dokuman]) }}" type="button" class="btn btn-secondary" title="Detail"> <i class="fas fa-eye"></i> </a>
                                <a href="{{ route('admin.dokumen.edit', [$dokuman]) }}" type="button" class="btn btn-warning" title="Ubah"> <i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.dokumen.destroy',[$dokuman]) }}" method="POST" type="button" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
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
                        <td class="text-center" colspan="7">Dokumen tidak ditemukan</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            {{ $master_dokumen->links() }}
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection