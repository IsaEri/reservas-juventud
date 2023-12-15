<?php

namespace App\Http\Controllers;

use App\Galeria_exposicione_baja;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Galeria_exposicione_bajaController extends Controller
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
        $galeria_exposicione_bajas=Galeria_exposicione_baja::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        return view("galeria_exposicione_bajas.index",compact('galeria_exposicione_bajas'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $galeria_exposicione_bajas=Galeria_exposicione_baja::all();
          $users=User::all();
         return view("galeria_exposicione_bajas.create",compact('galeria_exposicione_bajas','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $l = $request->fecha;
        $input = $request->except('fecha');
        //print_r($input);
        $s = count($l);
        for ($i = 0; $i < $s; $i++){
            
            $input['fecha'] = $l[$i];
            print_r($input);
            $c=Galeria_exposicione_baja::create($input);
        }
        return redirect()->route('galeria_exposicione_bajas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $c=Galeria_exposicione_baja::find($id);
         $users=User::all();
         return view("galeria_exposicione_bajas.edit",compact('c','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=$request->all();
        Galeria_exposicione_baja::find($id)->update($datos);
        return redirect()->route('galeria_exposicione_bajas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeria_exposicione_baja::find($id)->delete();
        return redirect()->route('galeria_exposicione_bajas.index');
    }
}
