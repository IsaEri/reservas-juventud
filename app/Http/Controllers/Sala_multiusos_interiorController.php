<?php

namespace App\Http\Controllers;

use App\Sala_multiusos_interior;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Sala_multiusos_interiorController extends Controller
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
        $sala_multiusos_interiors=Sala_multiusos_interior::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        return view("sala_multiusos_interiors.index",compact('sala_multiusos_interiors'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $sala_multiusos_interiors=Sala_multiusos_interior::all();
          $users=User::all();
         return view("sala_multiusos_interiors.create",compact('sala_multiusos_interiors','users'));
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
            $c=Sala_multiusos_interior::create($input);
        }
        return redirect()->route('sala_multiusos_interiors.index');
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
         $c=Sala_multiusos_interior::find($id);
         $users=User::all();
         return view("sala_multiusos_interiors.edit",compact('c','users'));
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
        Sala_multiusos_interior::find($id)->update($datos);
        return redirect()->route('sala_multiusos_interiors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sala_multiusos_interior::find($id)->delete();
        return redirect()->route('sala_multiusos_interiors.index');
    }
}
