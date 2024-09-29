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
                            <li class="breadcrumb-item active">Edit Stok Keluar</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <h1>Edit Stok Keluar</h1>

        <form action="{{ route('admin.s_keluar.update', $s_keluar) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tanggal_keluar">Tanggal Keluar</label>
                <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="form-control" value="{{ $s_keluar->tanggal_keluar }}" required>
            </div>
            <div class="form-group">
                <label for="obat_id">Obat</label>
                <select name="obat_id" id="obat_id" class="form-control" required>
                    @foreach($obats as $obat)
                        <option value="{{ $obat->id }}" {{ $obat->id == $s_keluar->obat_id ? 'selected' : '' }}>
                            {{ $obat->nama_obat }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="qty">Jumlah</label>
                <input type="number" name="qty" id="qty" class="form-control" value="{{ $s_keluar->qty }}" required min="1">
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a href="{{ route('admin.s_keluar.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
