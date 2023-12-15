<?php

namespace App\Http\Controllers;

use App\Sala_corcho;
use App\User;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class Sala_corchoController extends Controller
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
        
        $sala_corchos=Sala_corcho::search($request->fecha)->orderBy("fecha","desc")->paginate(20);
        return view("sala_corchos.index",compact('sala_corchos'));  //Carga la vista index.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $sala_corchos=Sala_corcho::all();
          $users=User::all();
         return view("sala_corchos.create",compact('sala_corchos','users'));
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
            $c=Sala_corcho::create($input);
        }
        return redirect()->route('sala_corchos.index');
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
         $c=Sala_corcho::find($id);
         $users=User::all();
         return view("sala_corchos.edit",compact('c','users'));
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
        Sala_corcho::find($id)->update($datos);
        return redirect()->route('sala_corchos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sala_corcho::find($id)->delete();
        return redirect()->route('sala_corchos.index');
    }
}
