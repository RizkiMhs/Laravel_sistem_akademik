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

    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    public function dosenWali()
    {
        return $this->belongsTo(Dosen::class, 'dosen_wali_id');
    }

    public function krs()
    {
        return $this->hasMany(KRS::class, 'mahasiswa_id');
    }

    public function khs()
    {
        return $this->hasMany(KHS::class, 'mahasiswa_id');
    }

    public function bimbinganAkademik()
    {
        return $this->hasMany(BimbinganAkademik::class, 'mahasiswa_id');
    }
}
