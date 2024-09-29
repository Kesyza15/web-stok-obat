@extends('home')

@section('isi')
    <div class="container">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Beranda</a></li>
                            <li class="breadcrumb-item active">Supplier</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <h1>Tambah Supplier</h1>
        <form action="{{ route('admin.suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier</label>
                <input type="text" name="nama_supplier" id="nama_supplier" 
                    class="form-control @error('nama_supplier') is-invalid @enderror" 
                    value="{{ old('nama_supplier') }}" required>
                @error('nama_supplier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" 
                    class="form-control @error('no_telepon') is-invalid @enderror" 
                    value="{{ old('no_telepon') }}" required>
                @error('no_telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" title="Simpan">Simpan</button>
            <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
            <a href="{{ route('admin.suppliers.index') }}" class="btn btn-secondary" title="Kembali">Kembali</a>
        </form>
    </div>
@endsection
