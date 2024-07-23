<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::with('mataKuliah', 'dosen')->get();
        return view('admin.jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mataKuliahs = MataKuliah::all();
        $dosens = Dosen::all();
        return view('admin.jadwal.create', compact('mataKuliahs', 'dosens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'semester' => 'required|integer|min:1|max:8',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'hari' => 'required|string|max:10',
            'ruangan' => 'required|string|max:10',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'dosens_nip' => 'required|exists:dosens,nip',
        ]);

        Jadwal::create($validated);

        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $mataKuliahs = MataKuliah::all();
        $dosens = Dosen::all();
        return view('admin.jadwal.edit', compact('jadwal', 'mataKuliahs', 'dosens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'semester' => 'required|integer',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'hari' => 'required|string',
            'ruangan' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'dosen_nip' => 'required|exists:dosens,nip',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($validated);

        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect('/jadwal');
    }
}
