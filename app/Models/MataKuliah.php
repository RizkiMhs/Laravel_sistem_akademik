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
    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
