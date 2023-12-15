@extends('layouts.apps')

@section('content')


	<div class="container">

		<div class="texto">
			
		<div class="cardss">
		@if( Auth::user()->is_admin == 1) 
                    <div>

					
			
				<a class="enlaces" href='{{route('salon_actos.index')}}'>Salón de actos-7</a><br>
				<a class="enlaces" href='{{route('galeria_exposiciones.index')}}'>Galería Alta</a><br>
				<a class="enlaces" href='{{route('galeria_exposicione_bajas.index')}}'>Galería Baja</a><br>
				<a class="enlaces" href='{{route('sala_espejos.index')}}'>Sala de espejos-31</a><br>
				<a class="enlaces" href='{{route('sala_estudios.index')}}'>Sala de estudios-28</a><br>
				<a class="enlaces" href='{{route('sala_32estudios.index')}}'>Sala de estudios-32</a><br>
				<a class="enlaces" href='{{route('sala_informaticas.index')}}'>Sala de informatica-33</a><br>
				<a class="enlaces" href='{{route('sala_juegos.index')}}'>Sala de juegos-29</a><br>
				<a class="enlaces" href='{{route('sala_corchos.index')}}'>Sala de corchos-30</a><br>
				<a class="enlaces" href='{{route('sala_asociaciones.index')}}'>Sala de asociaciones-34</a><br>
				
			
			</div>
                          <div>
			
			<a class="enlaces" href='{{route('users.index')}}'>Usuarios</a><br> 
			<a class="enlaces" href='{{route('registros.index')}}'>Registro diario</a><br> 
			<a class="enlaces" href='{{route('peticions.index')}}'>Peticiones</a><br> 
			<a class="enlaces" href='{{route('peticions.create')}}'>Crear petición</a><br> 
			<br> 
			<a class="enlaces" href='{{route('sala_multiusos_exteriors.index')}}'>Sala multiusos exterior-18</a><br>
				<a class="enlaces" href='{{route('sala_multiusos_interiors.index')}}'>Sala multiusos interior-22</a><br>
				<a class="enlaces" href='{{route('sala_3reuniones.index')}}'>Sala de reuniones-3</a><br>
				<a class="enlaces" href='{{route('sala_4reuniones.index')}}'>Sala de reuniones-4</a><br>
				<a class="enlaces" href='{{route('sala_reuniones.index')}}'>Sala de reuniones-13</a><br>
			
			</div>
			@elseif( Auth::user()->is_admin == 2) 
			<div>

					
			
			    <a class="enlaces" href='{{route('salon_actos.index')}}'>Salón de actos-7</a><br>
				<a class="enlaces" href='{{route('galeria_exposiciones.index')}}'>Galería Alta</a><br>
				<a class="enlaces" href='{{route('sala_espejos.index')}}'>Sala de espejos-31</a><br>
				<a class="enlaces" href='{{route('sala_estudios.index')}}'>Sala de estudios-28</a><br>
				<a class="enlaces" href='{{route('sala_informaticas.index')}}'>Sala de informatica-33</a><br>
				<a class="enlaces" href='{{route('sala_juegos.index')}}'>Sala de juegos-29</a><br>
				<a class="enlaces" href='{{route('sala_multiusos_exteriors.index')}}'>Sala multiusos exterior-18</a><br>
				<a class="enlaces" href='{{route('sala_multiusos_interiors.index')}}'>Sala multiusos interior-22</a><br>
				<a class="enlaces" href='{{route('sala_reuniones.index')}}'>Sala de reuniones-13</a><br>
			
			</div>
                          <div>
			
			<a class="enlaces" href='{{route('registros.index')}}'>Registro diario</a><br> 
			<a class="enlaces" href='{{route('peticions.create')}}'>Crear petición</a><br> 
			
			</div>
			@else

			<div>

					
			
			<a class="enlaces" href='{{route('salon_actos.index')}}'>Salón de actos-7</a><br>
				<a class="enlaces" href='{{route('galeria_exposiciones.index')}}'>Galería Alta</a><br>
				<a class="enlaces" href='{{route('sala_espejos.index')}}'>Sala de espejos-31</a><br>
				<a class="enlaces" href='{{route('sala_estudios.index')}}'>Sala de estudios-28</a><br>
				<a class="enlaces" href='{{route('sala_informaticas.index')}}'>Sala de informatica-33</a><br>
				<a class="enlaces" href='{{route('sala_juegos.index')}}'>Sala de juegos-29</a><br>
				<a class="enlaces" href='{{route('sala_multiusos_exteriors.index')}}'>Sala multiusos exterior-18</a><br>
				<a class="enlaces" href='{{route('sala_multiusos_interiors.index')}}'>Sala multiusos interior-22</a><br>
				<a class="enlaces" href='{{route('sala_reuniones.index')}}'>Sala de reuniones-13</a><br>

			</div>
					<div>
			<a class="enlaces" href='{{route('peticions.create')}}'>Crear petición</a><br> 

</div>

			@endif
                    
					</div>
		
		
		</div>
	</div>


@endsection
