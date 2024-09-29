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

        <h1>Edit Supplier</h1>
        <form action="{{ route('admin.suppliers.update', $supplier) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_supplier">Nama Supplier</label>
                <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" value="{{ old('nama_supplier', $supplier->nama_supplier) }}" required>
                @if($errors->has('nama_supplier'))
                    <div class="text-danger">
                        {{ $errors->first('nama_supplier') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" class="form-control" value="{{ old('no_telepon', $supplier->no_telepon) }}" required>
                @if($errors->has('no_telepon'))
                    <div class="text-danger">
                        {{ $errors->first('no_telepon') }}
                    </div>
                @endif
            </div>            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required>{{ $supplier->alamat }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" title="Edit">Edit</button>
            <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
            <a href="{{ route('admin.suppliers.index') }}" class="btn btn-secondary" title="Kembali">Kembali</a>
        </form>
    </div>
@endsection
