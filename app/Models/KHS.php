<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'mahasiswa_id',
        'semester',
        'tahun_akademik',
        'ips',
        'ipk',
    ];
}
