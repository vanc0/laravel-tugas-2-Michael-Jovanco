<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = [
        'nama_fakultas',
        'singkatan',
        'dekan',
        'wakil_dekan',
    ];

    public function prodi()
    {
        return $this->hasMany(Prodi::class, 'fakultas_id', 'id');
    }
}
