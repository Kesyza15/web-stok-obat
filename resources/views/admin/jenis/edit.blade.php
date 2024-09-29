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
                            <li class="breadcrumb-item active">Jenis Obat</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <h1>Edit Jenis Obat</h1>

        <form action="{{ route('admin.jenis.update', $jeni) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_jenis">Nama Jenis</label>
                <input type="text" name="nama_jenis" id="nama_jenis" class="form-control" value="{{ $jeni->nama_jenis }}" required>
            </div>
            <button type="submit" class="btn btn-primary" title="Edit">Edit</button>
            <button type="reset" class="btn btn-danger"  title="Reset">Reset</button>
            <a href="{{ route('admin.jenis.index') }}" class="btn btn-secondary" title="Kembali">Kembali</a>
        </form>
    </div>
@endsection
