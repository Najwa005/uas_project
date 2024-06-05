<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $data = ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg'];
        $mahasiswa = DB::table('mahasiswa')->get(); 
        return view('mahasiswa.index', compact('data', 'mahasiswa'));
    }
    public function create()
    {
        $data = ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg'];
        return view('mahasiswa.create', compact('data'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama' => 'required|unique:mahasiswa|max:255'
            ],
        );
        Mahasiswa::create($validateData);
        return redirect('/mahasiswa');
    }    

    public function welcome()
    {
        return view ('welcome');
    }

};
