<?php

namespace App\Http\Controllers;

use App\Salon_acto;
use App\Galeria_exposicione;
use App\Galeria_exposicione_baja;
use App\Sala_espejo;
use App\Sala_asociacione;
use App\Sala_corcho;
use App\Sala_estudio;
use App\Sala_32estudio;
use App\Sala_informatica;
use App\Sala_juego;
use App\Sala_multiusos_exterior;
use App\Sala_multiusos_interior;
use App\sala_reunione;
use App\sala_4reunione;
use App\sala_3reunione;
use App\User;
use Carbon\Carbon;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use PDF;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
     
    public function index(Request $request)
    {
        $salon_actos=Salon_acto::all();
        $galeria_exposiciones=Galeria_exposicione::all();
        $galeria_exposicione_bajas=Galeria_exposicione_baja::all();
        $sala_espejos=Sala_espejo::all();
        $sala_estudios=Sala_estudio::all();
        $sala_32estudios=Sala_32estudio::all();
        $sala_informaticas=Sala_informatica::all();
        $sala_juegos=Sala_juego::all();
        $sala_multiusos_exteriors=Sala_multiusos_exterior::all();
        $sala_multiusos_interiors=Sala_multiusos_interior::all();
        $sala_reuniones=sala_reunione::all();
        $sala_3reuniones=sala_3reunione::all();
        $sala_4reuniones=sala_4reunione::all();
        $sala_asociaciones=sala_asociacione::all();
        $sala_corchos=Sala_corcho::all();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view("registros.index",compact('salon_actos','galeria_exposiciones','galeria_exposicione_bajas','sala_espejos','sala_estudios','sala_32estudios','sala_informaticas','sala_juegos','sala_multiusos_exteriors','sala_multiusos_interiors','sala_reuniones','sala_3reuniones','sala_4reuniones','sala_asociaciones','sala_corchos','date'));  //Carga la vista index.blade.php
    }

    public function pdf(){
        $salon_actos=Salon_acto::all();
        $galeria_exposiciones=Galeria_exposicione::all();
        $galeria_exposicione_bajas=Galeria_exposicione_baja::all();
        $sala_espejos=Sala_espejo::all();
        $sala_estudios=Sala_estudio::all();
        $sala_32estudios=Sala_32estudio::all();
        $sala_informaticas=Sala_informatica::all();
        $sala_juegos=Sala_juego::all();
        $sala_multiusos_exteriors=Sala_multiusos_exterior::all();
        $sala_multiusos_interiors=Sala_multiusos_interior::all();
        $sala_reuniones=sala_reunione::all();
        $sala_3reuniones=sala_3reunione::all();
        $sala_4reuniones=sala_4reunione::all();
        $sala_asociaciones=sala_asociacione::all();
        $sala_corchos=Sala_corcho::all();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $pdf = PDF::loadView('registros.pdf', compact('salon_actos','galeria_exposiciones','galeria_exposicione_bajas','sala_espejos','sala_estudios','sala_32estudios','sala_informaticas','sala_juegos','sala_multiusos_exteriors','sala_multiusos_interiors','sala_reuniones','sala_3reuniones','sala_4reuniones','sala_asociaciones','sala_corchos','date'));
        return $pdf->download('dia.pdf');
    }

    public function create()
    {
        $salon_actos=Salon_acto::all();
        $galeria_exposiciones=Galeria_exposicione::all();
        $galeria_exposicione_bajas=Galeria_exposicione_baja::all();
        $sala_espejos=Sala_espejo::all();
        $sala_estudios=Sala_estudio::all();
        $sala_32estudios=Sala_32estudio::all();
        $sala_informaticas=Sala_informatica::all();
        $sala_juegos=Sala_juego::all();
        $sala_multiusos_exteriors=Sala_multiusos_exterior::all();
        $sala_multiusos_interiors=Sala_multiusos_interior::all();
        $sala_reuniones=sala_reunione::all();
        $sala_3reuniones=sala_3reunione::all();
        $sala_4reuniones=sala_4reunione::all();
        $sala_asociaciones=sala_asociacione::all();
        $sala_corchos=Sala_corcho::all();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         return view("registros.create",compact('salon_actos','galeria_exposiciones','galeria_exposicione_bajas','sala_espejos','sala_estudios','sala_32estudios','sala_informaticas','sala_juegos','sala_multiusos_exteriors','sala_multiusos_interiors','sala_reuniones','sala_3reuniones','sala_4reuniones','sala_asociaciones','sala_corchos','date'));
        
    }

    
}
