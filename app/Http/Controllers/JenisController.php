<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        $jenis = Jenis::all();
        return view('admin.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('admin.jenis.create');
    }

    public function store(Request $request)
    {
        // Validasi input dengan tambahan validasi unique untuk nama_jenis
        $request->validate([
            'nama_jenis' => 'required|string|max:255|unique:jenis,nama_jenis',
        ], [
            'nama_jenis.required' => 'Nama jenis obat wajib diisi.',
            'nama_jenis.unique' => 'Nama jenis obat sudah ada, silakan gunakan nama yang lain.',
        ]);

        Jenis::create($request->all());

        return redirect()->route('admin.jenis.index')->with('success', 'Jenis Obat berhasil ditambahkan.');
    }

    public function edit(Jenis $jenis)
    {
        return view('admin.jenis.edit', compact('jenis'));
    }

    public function update(Request $request, Jenis $jenis)
    {
        // Validasi input dengan pengecualian untuk ID yang sedang diedit
        $request->validate([
            'nama_jenis' => 'required|string|max:255|unique:jenis,nama_jenis,' . $jenis->id,
        ], [
            'nama_jenis.required' => 'Nama jenis obat wajib diisi.',
            'nama_jenis.unique' => 'Nama jenis obat sudah ada, silakan gunakan nama yang berbeda.',
        ]);

        $jenis->update($request->all());

        return redirect()->route('admin.jenis.index')->with('warning', 'Jenis Obat berhasil diperbarui.');
    }

    public function destroy(Jenis $jenis)
    {
        $jenis->delete();

        return redirect()->route('admin.jenis.index')->with('danger', 'Jenis Obat berhasil dihapus.');
    }
}
