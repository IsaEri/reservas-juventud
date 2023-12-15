@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Salón de actos</b>
                 @if( Auth::user()->is_admin == 1) 
                 <a href='{{route('salon_actos.create')}}' class="btn btn-success btn-sm">Crear reserva</a>
                 <br><br>
                 <!-- Buscador -->
                 {!! Form::open([ 'route' => 'salon_actos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                     <div class="input-group">
                         {!! Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'Buscar por fecha yyyy-mm-dd', 'aria-describedby' => 'search']) !!}
                         <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"  width='40px'></span></span>
                     </div>
                     {!! Form::close() !!}
                     <!-- Fin buscador -->

                     <!-- Buscador 
                 {!! Form::open([ 'route' => 'salon_actos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                     <div class="input-group">
                         {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre', 'aria-describedby' => 'search']) !!}
                         <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"  width='40px'></span></span>
                     </div>
                     {!! Form::close() !!}
                     Fin buscador -->

                 @endif
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Fecha</th>
                            <th>Actividad</th>
                            <th>Asistentes</th>
                            <th>Horario</th>
                            <th>Usuario</th>
                            @if( Auth::user()->is_admin == 1)
                            <th></th>
                            <th></th>
                            @endif
                        </tr>
                        @if( Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2 ) 
                    @foreach($salon_actos as $socio)
                        <tr>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->user['name']}}</td>
                            @if( Auth::user()->is_admin == 1) 
                            <td><a href='{{route('salon_actos.edit',['id'=>$socio->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                            <td>
                                <form method="post" action="{{route('salon_actos.destroy',['id'=>$socio->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                            @endif
                        </tr>
                    @endforeach
                    @endif

                    @if( Auth::user()->is_admin == 0 ) 
                    @foreach($salon_actos as $socio)
                    @if( Auth::user()->id == $socio->user['id'] )
                        <tr>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->user['name']}}</td>
                        </tr>
                        @endif
                    @endforeach
                    
@endif




                    </table>
                    
                     {{ $salon_actos -> links() }}
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