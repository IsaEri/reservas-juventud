<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala_reunione extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','id_usuario','fecha','actividad','asistentes','h_ini','h_fin','tipo','nombre'];

    

    public function user()
    {
        return $this->belongsTo('App\User','id_usuario');
    }

    public function scopeSearch($query, $fecha){
        return $query->where('fecha', 'LIKE', "%$fecha%");
    }
}
