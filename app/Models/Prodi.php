<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $fillable = [
        'nama',
        'singkatan',
        'kaprodi',
        'sekretaris',
        'fakultas_id',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id', 'id');
    }
    public function mata_kuliah()
    {
        return $this->hasMany(Mata_Kuliah::class, 'prodi_id', 'id');
    }
}
