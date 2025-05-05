<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    public function prodi()
    {
        return $this->hasMany(Prodi::class, 'fakultas_id', 'id');
    }
}
