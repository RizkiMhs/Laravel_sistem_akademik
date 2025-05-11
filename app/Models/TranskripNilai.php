<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranskripNilai extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'khs_id',
        'mata_kuliah_id',
        'nilai_akhir',
        'grade',
    ];

    public function khs()
    {
        return $this->belongsTo(KHS::class, 'khs_id');
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }
}
