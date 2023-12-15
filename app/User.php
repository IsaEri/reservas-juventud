<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','dni','nombre','domicilio','cp','localidad','tlf',
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

    public function scopeSearch($query, $name){
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function salon()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function espejo()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function interior()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function exterior()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function informatica()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function estudio()
    {
        return $this->hasMany('App\User','id_usuario');
    }

    public function juego()
    {
        return $this->hasMany('App\User','id_usuario');
    }
    public function reunion()
    {
        return $this->hasMany('App\User','id_usuario');
    }
    

    public function exposicion()
    {
        return $this->hasMany('App\User','id_usuario');
    }
}
