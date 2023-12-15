@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modificar reserva</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('sala_espejos.update',['id'=> $c->id])}}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="id_usuario" class="col-sm-4 col-form-label text-md-right">Usuario:</label>
                            <div class="col-md-3">
                            <select class="form-control" id="id_usuario" name="id_usuario">
                                    <option value="{{$c->id_usuario}}">{{$c->user['name']}} {{$c->user['dni']}}</option>                                         
                                @foreach($users as $usuario)
                                @if($usuario->id != $c->id_usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}} {{$usuario->dni}}</option>   
                                @endif
                                @endforeach
                            </select>
                            </div>
                         </div>
                        
                         <div class="form-group row">
                            <label for="fecha" class="col-sm-4 col-form-label text-md-right">Fecha de solicitud:</label>
                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{$c->fecha}}" required  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="actividad" class="col-sm-4 col-form-label text-md-right">Actividad:</label>
                            <div class="col-md-6">
                                <input id="actividad" type="text" class="form-control" name="actividad" value="{{$c->actividad}}"  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asistentes" class="col-sm-4 col-form-label text-md-right">Asistentes:</label>
                            <div class="col-md-6">
                                <input id="asistentes" type="number" class="form-control" name="asistentes" value="{{$c->asistentes}}"  autofocus>
                            </div>
                        </div>
                        
                        
                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar reserva</button>

                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small cyan darken-3 mt-4">

  <div class="footer-copyright text-center py-3"><a href="https://www.safecreative.org/work/1903290449735-gestion-de-ludoteca" target="_blank"> 
<span>Gestión de ludoteca</span> - 
<span>CC by-nc 4.0</span> - 
<span>Isabel Rodríguez Perez</span> 
</a>
  
  </div>


</footer>
@endsection