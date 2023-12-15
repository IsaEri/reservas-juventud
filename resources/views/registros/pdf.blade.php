<style>
        @page { 
            margin-top:    120px; 
            margin-bottom:  80px;
            margin-left:    55px;
            margin-right:   55px;
        }  
        
        body {
            text-align: justify;
            text-justify: inter-word;
            line-height:25px;
            font-family: Arial, Helvetica, sans-serif;
        }  
        
        header { position: fixed; top: -110px; left: 0px; right: 0px; height: 80px; }
        footer { position: fixed; bottom: -40px; left: 0px; right: 0px; height: 40px; }
       
       th{
           background-color: #C5E8E5;
       }
       
        td,th{
            border: 1px solid #999999;
            padding: 2px 10px 2px 10px;

        }
        

        table {
           border-collapse: collapse;
        }
        
        table tr th td{
            page-break-inside: avoid;
        }
        
        
  </style>
<table class="table table-bordered" style="border: 1px solid black;">
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
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala espejos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}} </td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($galeria_exposiciones as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Galería de exposiciones</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_estudios as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala de estudios</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>ç
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_informaticas as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala de informatica</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_juegos as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala de juegos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_multiusos_exteriors as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala multiusos exterior</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_multiusos_interiors as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala multiusos interior</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($sala_reuniones as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Sala de reuniones</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach

                    @foreach($salon_actos as $socio)
                    @if($socio->fecha == $date) 
                        <tr>
                            <td>Salón de actos</td>
                            <td>{{$socio->fecha}}</td>
                            <td>{{$socio->h_ini}}-{{$socio->h_fin}}</td>
                            <td>{{$socio->actividad}}</td>
                            <td>{{$socio->asistentes}}</td>
                            <td>{{$socio->user['name']}}</td>
                            <td>{{$socio->user['tlf']}}</td>
                        </tr>
                        @endif
                    @endforeach
                    </table>