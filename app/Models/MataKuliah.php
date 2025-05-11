<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    //

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'program_studi_id',
    ];
    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'mata_kuliah_id');
    }

    public function transkripNilai()
    {
        return $this->hasMany(TranskripNilai::class, 'mata_kuliah_id');
    }
}
