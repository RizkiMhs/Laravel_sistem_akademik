<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalMataKuliah extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'kelas_id',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'ruangan',
    ];
}
