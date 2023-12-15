@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Peticiones</b>
                
                
                 
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Sala</th>
                            <th>Fecha</th>
                            <th>Hora inicio</th>
                            <th>Hora fin</th>
                            <th>Actividad</th>
                            <th>Asistentes</th>
                            <th>Usuario</th>
                            <th></th>
                        </tr>
                        
                    @foreach($peticions as $socio)
                        <tr>
                            <td>{{$socio->sala}}</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}</td>
                            <td>{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>
                                <form method="post" action="{{route('peticions.destroy',['id'=>$socio->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $peticions -> links() }}
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