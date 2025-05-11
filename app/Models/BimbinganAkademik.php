<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BimbinganAkademik extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'dosen_id',
        'tanggal_bimbingan',
        'topik_bimbingan',
        'catatan',
        'status',
    ];
}
