<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'npm',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'asal_sma',
        'prodi_id',
        'foto',
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');

}
}
