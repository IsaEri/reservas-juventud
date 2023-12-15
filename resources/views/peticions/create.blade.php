@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Insertar petición</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('peticions.store')}}">
                        @csrf
                         @if(count($errors))
			<div class="alert alert-danger">
				
					@foreach($errors->all() as $error)
					{{ $error }}
					<br>
					@endforeach
			
			</div>
		@endif
                        
                        <input id="id_usuario" type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id }}" required  autofocus>

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
                            <label for="h_ini" class="col-sm-4 col-form-label text-md-right">Hora inicio:</label>
                            <div class="col-md-6">
                                <input id="h_ini" type="time" class="form-control" name="h_ini" value="{{old('h_ini')}}" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="h_fin" class="col-sm-4 col-form-label text-md-right">Hora fin:</label>
                            <div class="col-md-6">
                                <input id="h_fin" type="time" class="form-control" name="h_fin" value="{{old('h_fin')}}" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sala" class="col-sm-4 col-form-label text-md-right">Sala:</label>
                            <div class="col-md-6">
                            <select class="form-control" id="sala" name="sala" autofocus required>
                            <option value="Sala de espejos">Sala de espejos</option> 
                            <option value="Salon de actos">Salón de actos</option> 
                            <option value="Sala de asociaciones">Sala de asociaciones</option> 
                            <option value="Sala de corcho">Sala de corcho</option> 
                            <option value="Sala de estudios">Sala de estudios</option> 
                            <option value="Galería Alta">Galería Alta</option> 
                            <option value="Galería baja">Galería baja</option> 
                            <option value="Sala de informática">Sala de informática</option> 
                            <option value="Sala de juegos">Sala de juegos</option> 
                            <option value="Multiusos exterior">Multiusos exterior</option> 
                            <option value="Multiusos interior">Multiusos interior</option> 
                            <option value="Sala de reuniones">Sala de reuniones</option> 
                            </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="actividad" class="col-sm-4 col-form-label text-md-right">Actividad:</label>
                            <div class="col-md-6">
                                <input id="actividad" type="text" class="form-control" name="actividad" value="{{old('actividad')}}"  autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="asistentes" class="col-sm-4 col-form-label text-md-right">Asistentes:</label>
                            <div class="col-md-6">
                                <input id="asistentes" type="number" class="form-control" name="asistentes" value="{{old('asistentes')}}"  autofocus required>
                            </div>
                        </div>
                        
                        
                      
                        <button type="submit" class="btn btn-primary">Guardar petición</button>

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