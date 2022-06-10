<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    public function getFoto()
    {
        if(!$this->foto){
            return asset('images/default.png');
        }

        return asset('images/'.$this->foto);
    }

    public function getBukti()
    {
        return asset('pembayaran/'.$this->pembayaran);
    }

    public function user_r()
    {
        return $this->belongsTo('App\User','users');
    }

    public function kelas_r()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }

    // public function pelajaran_r()
    // {
    //     return $this->belongsToMany(Pelajaran::class)->withPivot(['nilai','status'])->withTimeStamps();
    // }

    public function pelajaran_r()
    {
        return $this->hasMany('App\Pelajaran', 'pelajaran_id');
    }

    public function nilai_r()
    {
        return $this->hasOne('App\Nilai')->withDefault(['nilai' => null, 'status' => null]);
    }

    
}

