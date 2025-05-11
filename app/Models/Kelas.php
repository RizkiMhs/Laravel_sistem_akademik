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
}
