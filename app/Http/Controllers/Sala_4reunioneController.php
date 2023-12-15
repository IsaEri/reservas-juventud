<?php

namespace App\Http\Controllers;

use App\sala_4reunione;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class sala_4reunioneController extends Controller
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
        $sala_4reuniones=sala_4reunione::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        return view("sala_4reuniones.index",compact('sala_4reuniones'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $sala_4reuniones=sala_4reunione::all();
          $users=User::all();
         return view("sala_4reuniones.create",compact('sala_4reuniones','users'));
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
            $c=sala_4reunione::create($input);
        }
        return redirect()->route('sala_4reuniones.index');
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
         $c=sala_4reunione::find($id);
         $users=User::all();
         return view("sala_4reuniones.edit",compact('c','users'));
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
        sala_4reunione::find($id)->update($datos);
        return redirect()->route('sala_4reuniones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sala_4reunione::find($id)->delete();
        return redirect()->route('sala_4reuniones.index');
    }
}
