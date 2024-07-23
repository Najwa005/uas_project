<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkul = MataKuliah::all();
        return view('admin.matkul.index', compact('matkul'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:255|unique:mata_kuliahs',
            'nama' => 'required|string|max:255',
        ]);

        MataKuliah::create($validated);

        return redirect('/matkul');
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $matkul)
    {
        return view('admin.matkul.show', compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $matkul)
    {
        return view('admin.matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $matkul)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:255|unique:mata_kuliahs,kode,' . $matkul->id,
            'nama' => 'required|string|max:255',
        ]);

        $matkul->update($validated);

        return redirect('/matkul');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $matkul)
    {
        $matkul->delete();
        return redirect('/matkul');
    }
}
