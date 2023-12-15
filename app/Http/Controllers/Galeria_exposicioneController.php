<?php

namespace App\Http\Controllers;

use App\Galeria_exposicione;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Galeria_exposicioneController extends Controller
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
        $galeria_exposiciones=Galeria_exposicione::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        return view("galeria_exposiciones.index",compact('galeria_exposiciones'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $galeria_exposiciones=Galeria_exposicione::all();
          $users=User::all();
         return view("galeria_exposiciones.create",compact('galeria_exposiciones','users'));
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
            $c=Galeria_exposicione::create($input);
        }
        return redirect()->route('galeria_exposiciones.index');
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
         $c=Galeria_exposicione::find($id);
         $users=User::all();
         return view("galeria_exposiciones.edit",compact('c','users'));
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
        Galeria_exposicione::find($id)->update($datos);
        return redirect()->route('galeria_exposiciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Galeria_exposicione::find($id)->delete();
        return redirect()->route('galeria_exposiciones.index');
    }
}
