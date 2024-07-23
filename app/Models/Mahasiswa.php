<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $keyType = 'string';
    public $incrementing = false; // Nonaktifkan incrementing
    


    protected $fillable = [
        'nim',
        'nama',
        'no_hp',
        'alamat',
        'foto',
        'password',
        'prodi_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
