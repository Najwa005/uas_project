<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_nim',
        'dosens_nip',
        'mata_kuliah_id',
        'nilai',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_nim', 'nim');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosens_nip', 'nip');
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

}
