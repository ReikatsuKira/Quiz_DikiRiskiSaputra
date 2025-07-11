<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class BiodataSiswaController extends Controller
{
    public function index()
    {
        $biodatas = BiodataSiswa::with('user')->get();
        return view('biodata.index', compact('biodatas'));
    }

    public function create()
    {
        $users = User::doesntHave('biodataSiswa')->get();
        return view('biodata.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|unique:biodata_siswas,user_id',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'nisn' => 'required|string|max:20|unique:biodata_siswas,nisn',
        ]);

        BiodataSiswa::create($request->all());
        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil ditambahkan.');
    }

    public function show(BiodataSiswa $biodataSiswa)
    {
        return view('biodata.show', compact('biodataSiswa'));
    }

    public function edit(BiodataSiswa $biodataSiswa)
    {
        $users = User::all();
        return view('biodata.edit', compact('biodataSiswa', 'users'));
    }

    public function update(Request $request, BiodataSiswa $biodataSiswa)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id|unique:biodata_siswas,user_id,' . $biodataSiswa->id,
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'nisn' => 'required|string|max:20|unique:biodata_siswas,nisn,' . $biodataSiswa->id,
        ]);

        $biodataSiswa->update($request->all());
        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil diperbarui.');
    }

    public function destroy(BiodataSiswa $biodataSiswa)
    {
        $biodataSiswa->delete();
        return back()->with('success', 'Biodata berhasil dihapus.');
    }
}
