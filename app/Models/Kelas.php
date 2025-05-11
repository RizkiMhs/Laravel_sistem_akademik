<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //

    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'nama_kelas',
        'mata_kuliah_id',
        'dosen_id',
    ];

    public function matkul()
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    public function jadwal()
    {
        return $this->hasMany(JadwalMataKuliah::class, 'kelas_id');
    }
}
