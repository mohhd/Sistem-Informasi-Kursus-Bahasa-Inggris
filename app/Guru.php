<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    public function absen_r()
    {
        return $this->hasMany(Absensi::class);
    }
}
