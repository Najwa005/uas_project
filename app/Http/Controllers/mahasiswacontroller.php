<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $data = ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg'];
        $mahasiswa = DB::table('mahasiswa')->get(); 
        return view('mahasiswa', compact('data', 'mahasiswa'));
    }
}
