<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'kode_prodi',
        'nama_prodi',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'program_studi_id');
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'program_studi_id');
    }

    public function mataKuliah()
    {
        return $this->hasMany(MataKuliah::class, 'program_studi_id');
    }
}
