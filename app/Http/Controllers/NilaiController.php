<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilai = Nilai::with('mahasiswa', 'dosen', 'mataKuliah')->get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();
        return view('nilai.create', compact('mahasiswas', 'dosens', 'mataKuliahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'mahasiswa_nim' => 'required|exists:mahasiswa,nim',
            'dosens_nip' => 'required|exists:dosens,nip',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        Nilai::create($validated);

        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        return view('nilai.show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        $mahasiswas = Mahasiswa::all();
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();
        return view('nilai.edit', compact('nilai', 'mahasiswas', 'dosens', 'mataKuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'mahasiswa_nim' => 'required|exists:mahasiswa,nim',
            'dosen_nip' => 'required|exists:dosens,nip',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai' => 'required|integer|min:0|max:100',
        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->update($validated);

        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();
        return redirect('/nilai');
    }
}
