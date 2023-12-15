@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Insertar reserva</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('sala_multiusos_exteriors.store')}}">
                        @csrf
                         @if(count($errors))
			<div class="alert alert-danger">
				
					@foreach($errors->all() as $error)
					{{ $error }}
					<br>
					@endforeach
			
			</div>
		@endif
        <div class="form-group row">
                            <label for="id_usuario" class="col-sm-4 col-form-label text-md-right">Usuario:</label>
                            <div class="col-md-3">
                            <select class="form-control" id="id_usuario" name="id_usuario" required>
                                                                                       
                                @foreach($users as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}} {{$usuario->dni}}</option>   
                                @endforeach
                            </select>
                            </div>
                         </div>

                         <div class="form-group row">
                            <label for="tipo" class="col-sm-4 col-form-label text-md-right">Tipo:</label>
                            <div class="col-md-3">
                            <select class="form-control" id="tipo" name="tipo" required>
                                                                                       
                                
                                    <option value="Partícular">Partícular</option>   
                                    <option value="Colectivo">Colectivo</option>
                                
                            </select>
                            </div>
                         </div>
                        
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-4 col-form-label text-md-right">Nombre del colectivo:</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{old('nombre')}}"  autofocus>
                            </div>
                        </div>
                        
                         <div class="form-group row">
                            <label for="fecha" class="col-sm-4 col-form-label text-md-right">Fecha de solicitud:</label>
                            <div class="col-md-6" id="mas">
                                <input id="fecha" type="date" class="form-control" name="fecha[]" value="{{old('fecha')}}" required  autofocus><br>
                                
                            </div>
                            <div>
                                <button class="btn btn-success btn-sm" class="max" onclick="myfuncion(this)">Más</button>
                                </div>
                            
                        </div>

                        

                        <div class="form-group row">
                            <label for="h_ini" class="col-sm-4 col-form-label text-md-right">Hora de inicio:</label>
                            <div class="col-md-6">
                                <input id="h_ini" type="time" class="form-control" name="h_ini" value="{{old('h_ini')}}" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="h_fin" class="col-sm-4 col-form-label text-md-right">Hora de fin:</label>
                            <div class="col-md-6">
                                <input id="h_fin" type="time" class="form-control" name="h_fin" value="{{old('h_fin')}}" required  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="actividad" class="col-sm-4 col-form-label text-md-right">Actividad:</label>
                            <div class="col-md-6">
                                <input id="actividad" type="text" class="form-control" name="actividad" value="{{old('actividad')}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asistentes" class="col-sm-4 col-form-label text-md-right">Asistentes:</label>
                            <div class="col-md-6">
                                <input id="asistentes" type="number" class="form-control" name="asistentes" value="{{old('asistentes')}}"  required autofocus>
                            </div>
                        </div>
                        
                        
                      
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

<script>
function myfuncion(b){
    document.getElementById("mas").innerHTML += "<input id='fecha' type='date' class='form-control' name='fecha[]' value='{{old('fecha')}}' required  autofocus><br>";
}
</script>
@endsection