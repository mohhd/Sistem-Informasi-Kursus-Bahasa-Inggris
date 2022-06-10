<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';

    public function user_r()
    {
        return $this->belongsTo('App\User','users');
    }

    public function kelas_r()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }

    public function guru_r()
    {
        return $this->belongsTo('App\Guru','id');
    }
}
