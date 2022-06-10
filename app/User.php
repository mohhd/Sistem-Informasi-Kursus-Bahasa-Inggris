<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_verifikasi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function siswa_r()
    {
        return $this->hasOne('App\Siswa','users', 'id')->withDefault(['no_hp' => null, 'alamat' => null]);
    }

    public function guru_r()
    {
        return $this->hasOne('App\Guru','users','id');
    }

    public function absen_r()
    {
        return $this->hasMany(Absensi::class);
    }

    


}
