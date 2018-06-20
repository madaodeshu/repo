<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'email', 'password', 'name', 'tgl_lahir', 'alamat', 'pekerjaan', 'no_hp', 'gender', 'nik', 'direkrut_oleh'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin(){
        return $this->belongsTo('App\AdminUser');
    }

    public function archiever(){
        return $this->hasMany('App\Archiever');
    }
}
