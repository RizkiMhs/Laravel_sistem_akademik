<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'nidn',
        'nama_lengkap',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'email',
        'password',
        'foto',
        'program_studi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'dosen_id');
    }

    public function mahasiswaBimbingan()
    {
        return $this->hasMany(Mahasiswa::class, 'dosen_wali_id');
    }

    public function bimbinganAkademik()
    {
        return $this->hasMany(BimbinganAkademik::class, 'dosen_id');
    }
}
