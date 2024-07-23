<?php

namespace App\Http\Controllers;

use App\Events\DosenCreated;
use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|string|max:255|unique:dosens',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);
        $validated['password'] = Hash::make($validated['nip']);
        $dosen = Dosen::create($validated);

        // Trigger event DosenCreated
        event(new DosenCreated($dosen));
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('admin.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'nip' => 'required|max:255',
            'nama' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);
        $validated['password'] = Hash::make($validated['nip']);
        $dosen->update($validated);

        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen');
    }

    public function simpan(Request $request)
    {
        // Validasi dan simpan dosen
        $dosen = Dosen::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'password' => Hash::make($request->password),
        ]);

        // Pemicu event untuk membuat user
        event(new DosenCreated($dosen));

        // Redirect atau response sesuai kebutuhan
    }
}
