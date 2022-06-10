<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    public function pelajaran_r()
    {
        return $this->belongsTo('App\Pelajaran','pelajaran_id');
    }

    public function siswa_r()
    {
        return $this->belongsTo('App\Siswa','siswa_id');
    }
}
