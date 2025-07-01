<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Event\Code\Test;
use Symfony\Contracts\Service\Attribute\Required;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        $mahasiswa = Mahasiswa::with('prodi')->get();
        // dd($mahasiswa);
        return view('mahasiswa.index', compact('data', 'mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('test');
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        $prodi = Prodi::all();
        // dd($prodi);
        return view('mahasiswa.create', compact('data', 'prodi'));
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nim' => 'required|unique:mahasiswa|max:10',
                'password' => 'required',
                'nama' => 'required|max:100',
                'tanggal_lahir' => 'required',
                'email' => 'required|max:100',
                'telp' => 'required|max:20',
                'foto' => 'image|file|max:2048'
            ],
            [
                'nim.required' => 'NIM harus diisi',
                'nim.unique' => 'NIM sudah terdaftar',
                'nim.max' => 'NIM maksimal 18 karakter',
                'password.required' => 'Password wajib diisi',
                'nama.required' => 'Nama wajib diisi',
                'nama.max' => 'Nama maksimal 100 karakter',
                'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
                'telp.required' => 'Nomor telepon wajib diisi',
                'email.required' => 'Email wajib diisi',
            ]
        );
        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('images');
        }
        $validateData['password'] = Hash::make($validateData['password']);
        $data = array_merge($validateData, $request->only(['id_prodi']));
        $data = $request->except('_token');
        Mahasiswa::create($data);
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // dd('coba');
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png'];
        $mahasiswa = Mahasiswa::find($id);
        $prodi = Prodi::all();
        // dd($prodi);
        return view('mahasiswa.edit', compact('data', 'mahasiswa', 'prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate(
            [

              
                'nama' => 'required|max:100',
                'tanggal_lahir' => 'required',
                'email' => 'required|max:100',
                'telp' => 'required|max:20',
                'foto' => 'image|file|max:2048'
            ],
            [
                'nama.required' => 'Nama wajib diisi',



            ]
        );
        $mahasiswa = Mahasiswa::find($id);
        if ($request->file('foto')) {
            if ($mahasiswa->foto) {
                Storage::delete($mahasiswa->foto);
            }
            $validateData['foto'] = $request->file('foto')->store('images');
        }
        if ($request->input('password')) {
        $validateData['password'] = Hash::make($validateData['password']);
        }
        $data = array_merge($validateData, $request->only(['id_prodi']));
        $mahasiswa::where('nim', $id)->update($data);
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        if ($mahasiswa->foto) {
            Storage::delete($mahasiswa->foto);
        }
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa');
    }
}
