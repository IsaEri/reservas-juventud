<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','nombre','dni','domicilio','cp','localidad','tlf','email'];
    
    
}
