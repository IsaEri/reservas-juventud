<?php

namespace App\Http\Controllers;

use App\Salon_acto;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Sala_actoController extends Controller
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
        $users=User::search($request->name)->orderBy("name")->paginate(20);
        $salon_actos=Salon_acto::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        
        return view("salon_actos.index",compact('salon_actos'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salon_actos=Salon_acto::all();
        $users=User::all();
         return view("salon_actos.create",compact('salon_actos','users'));
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
            $c=Salon_acto::create($input);
        }
        return redirect()->route('salon_actos.index');
        
      /* $c=Salon_acto::create($request->all());
       return redirect()->route('salon_actos.index');
       */
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
         $c=Salon_acto::find($id);
         $users=User::all();
         return view("salon_actos.edit",compact('c','users'));
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
        Salon_acto::find($id)->update($datos);
        return redirect()->route('salon_actos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Salon_acto::find($id)->delete();
        return redirect()->route('salon_actos.index');
    }
}
