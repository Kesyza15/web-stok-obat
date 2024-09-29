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
                            <li class="breadcrumb-item active">Obat</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <h1>Edit Nama Obat</h1>

        <form action="{{ route('admin.obat.update', $obat) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" name="nama_obat" id="nama_obat" class="form-control" value="{{ $obat->nama_obat }}" required>
            </div>
            <div class="form-group">
                <label for="jenis_id">Jenis Obat</label>
                <select name="jenis_id" id="jenis_id" class="form-control" required>
                    @foreach($jenis as $jeni)
                        <option value="{{ $jeni->id }}" {{ $jeni->id == $obat->jenis_id ? 'selected' : '' }}>
                            {{ $jeni->nama_jenis }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary" title="Edit">Edit</button>
            <button type="reset" class="btn btn-danger" title="Reset">Reset</button>
            <a href="{{ route('admin.obat.index') }}" class="btn btn-secondary" title="Kembali">Kembali</a>
        </form>
    </div>
@endsection
