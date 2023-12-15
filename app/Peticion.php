<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','id_usuario','fecha','actividad','asistentes','sala','h_ini','h_fin'];


    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }
    
}
