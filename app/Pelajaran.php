<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    protected $table = 'pelajaran';
    protected $fillable = ['nama', 'tingkat'];

    public function siswa_r()
    {
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai','status']);
    }
}
