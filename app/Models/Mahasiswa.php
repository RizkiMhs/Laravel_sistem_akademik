<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //

    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'alamat',
        'email',
        'password',
        'no_telepon',
        'angkatan',
        'foto',
        'program_studi_id',
        'dosen_wali_id',
    ];
}
