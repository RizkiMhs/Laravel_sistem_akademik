<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'mahasiswa_id',
        'jadwal_id',
        'sks',
        'semester',
        'tahun_akademik',
        'status_krs',
    ];
}
