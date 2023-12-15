<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reservas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
body {
	background-color: #2CBCFF;
	/* background-image: url(https://adnfriki.com/wp-content/uploads/2012/09/fondos-android-pikachu-3.jpg); */
	background-repeat: no-repeat;
	background-size: cover;
}



.enlaces{
    color: white;
    
}
.enlaces:hover{
    color:red;
}
.mimenu > li {
   float: left;
}

li{
	list-style: none;
    text-decoration: none;
}



.mimenu li a:hover {
    
    color: black;
}
.mimenu li ul {
    display: none;
    
}

.mimenu li:hover > ul {
    display: block;


}

.mimenu li ul li {
    position: relative;
    
}
.texto{
    font-size: 50px;
}

.card{
    width:60vw;
}
.cardss{
    width:60vw;
    display:flex;
    justify-content: space-between;
}
.cardss > div:nth-of-type(2){
    text-align: center;
}
</style>

</head>
<body>
    
    <div id="app">
        
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
		<h5 class="my-0 mr-md-auto font-weight-normal">     <a class="nav-link" href="{{ route('home') }}">Reservas</a></h5>
		<nav class="my-2 my-md-0 mr-md-3">
<!--<ul class="mimenu">
			
			<li><a class="p-2 text-dark" href="campanas">Campañas</a></li>
			<li>	<a class="p-2 text-dark" href="jugador">Jugadores</a></li>
		</ul>-->
		</nav>
		@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           <!-- <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li> -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
	</div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
