<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class prodicontroller extends Controller
{
    public function index()
    {
        $data = ['nama' => "Najwa Fitriyani", 'foto' =>'najwa.jpg'];
        $prodi = DB::table('prodi')->get(); 
        return view('prodi', compact('data', 'prodi'));
    }
}