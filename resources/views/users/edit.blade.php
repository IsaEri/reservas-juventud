@extends('layouts.apps')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Modificar usuario</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update',['id'=> $c->id])}}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$c->name}}" required  autofocus>
                            </div>
                         </div>
                        
                         <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Email:</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{$c->email}}" required  autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="dni" class="col-sm-4 col-form-label text-md-right">DNI:</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{$c->dni}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="domicilio" class="col-sm-4 col-form-label text-md-right">Domicilio:</label>
                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control" name="domicilio" value="{{$c->domicilio}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tlf" class="col-sm-4 col-form-label text-md-right">Telefono:</label>
                            <div class="col-md-6">
                                <input id="tlf" type="number" class="form-control" name="tlf" value="{{$c->tlf}}" required  autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                           <label for="is_admin" class="col-sm-4 col-form-label text-md-right">Admin:</label>
                               <div class="col-md-6">
                                    <select class="form-control" id="is_admin" name="is_admin">
                                        @if($c->is_admin==1)
                                        <option value="1" selected>Admin</option>                                                      
                                        <option value="0">Basico</option> 
                                        <option value="2">Autorizado</option> 
                                        @elseif($c->is_admin==2)
                                        <option value="2" selected>Autorizado</option> 
                                        <option value="1">Admin</option>                                                      
                                        <option value="0">Basico</option>
                                        @else                                                  
                                        <option value="0" selected>Basico</option> 
                                        <option value="1">Admin</option> 
                                        <option value="2">Autorizado</option>
                                        @endif
                                    </select>
                                </div>
                        </div>
                        
                        
                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar usuario</button>

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