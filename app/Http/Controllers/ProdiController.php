<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('prodi', 'data'));
    }

    public function create()
    {
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        return view('prodi.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kaprodi' => 'required',
            'jurusan' => 'required',
        ]);

        Prodi::create($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Prodi $prodi)
    {
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        return view('prodi.edit', compact('prodi', 'data'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'nama' => 'required',
            'kaprodi' => 'required',
            'jurusan' => 'required',
        ]);

        $prodi->update($request->all());

        return redirect()->route('prodi.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
    $prodi = Prodi::findOrFail($id);

    if ($prodi->mahasiswa()->count() > 0) {
        return redirect()->route('prodi.index')->with('error', 'Data tidak bisa dihapus karena masih digunakan oleh mahasiswa.');
    }

    $prodi->delete();
    return redirect()->route('prodi.index')->with('success', 'Data berhasil dihapus.');
    }
}