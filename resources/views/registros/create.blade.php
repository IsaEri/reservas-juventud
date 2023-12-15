@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Registro</b>
                 <a href="{{url('/registros/pdf')}}" class="btn btn-success">PDF</a>
                 </div>
                 <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Sala</th>
                            <th>Fecha</th>
                            <th>Horario</th>
                            <th>Actividad</th>
                            <th>Asistentes</th>
                            <th>Usuario</th>
                            <th>Telefono</th>
                        </tr>
                    @foreach($sala_espejos as $socio)
                    
                        <tr>
                            <td>Sala espejos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}} </td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($galeria_exposiciones as $socio)
                    
                        <tr>
                            <td>Galería de exposiciones alta</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($galeria_exposicione_bajas as $socio)
                    
                        <tr>
                            <td>Galería de exposiciones baja</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_estudios as $socio)
                    
                        <tr>
                            <td>Sala de estudios 28</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>ç
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_32estudios as $socio)
                    
                        <tr>
                            <td>Sala de estudios 32</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>ç
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_informaticas as $socio)
                    
                        <tr>
                            <td>Sala de informatica</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_juegos as $socio)
                    
                        <tr>
                            <td>Sala de juegos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_multiusos_exteriors as $socio)
                    
                        <tr>
                            <td>Sala multiusos exterior</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_multiusos_interiors as $socio)
                    
                        <tr>
                            <td>Sala multiusos interior</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_reuniones as $socio)
                    
                        <tr>
                            <td>Sala de reuniones 13</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_3reuniones as $socio)
                    
                        <tr>
                            <td>Sala de reuniones 3</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_4reuniones as $socio)
                    
                        <tr>
                            <td>Sala de reuniones 4</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_asociaciones as $socio)
                    
                        <tr>
                            <td>Sala de asociaciones</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($sala_corchos as $socio)
                    
                        <tr>
                            <td>Sala de corchos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        
                    @endforeach

                    @foreach($salon_actos as $socio)
                        <tr>
                            <td>Salón de actos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small cyan darken-3 mt-4">




</footer>

@endsection