@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Usuarios</b>
                
                
                 
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Nombre</th>
                            <th>email</th>
                            <th>dni</th>
                            <th>domicilio</th>
                            <th>Telefono</th>
                            <th>Tipo</th>
                            <th></th>
                            <th></th>
                        </tr>
                        
                    @foreach($users as $socio)
                        <tr>
                            <td>{{$socio->name}}</td>
                            <td>{{$socio->email}}</td>
                            <td>{{$socio->dni}}</td>
                            <td>{{$socio->domicilio}}</td>
                            <td>{{$socio->tlf}}</td>
                            @if($socio->is_admin == 2)
                                <td>Autorizado</td>
                            @elseif($socio->is_admin == 1)
                                <td>Admin</td>
                            @else
                                <td>Basico</td>
                            @endif
                            <td><a href='{{route('users.edit',['id'=>$socio->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                            <td>
                                <form method="post" action="{{route('users.destroy',['id'=>$socio->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $users -> links() }}
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