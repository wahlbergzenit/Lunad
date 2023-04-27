<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lunad Maps</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="script.js"></script>
    <script src="./Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
</head>
<body id="body-pd" oncontextmenu="return false" class="snippet-body body-pd">
    <div id="app">
    <!-- Navbar -->
    <header class="header navbar-expand-md body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="navbar-nav gap-2 align-middle me-4 ms-auto">
            <button type="button" href="/ride/0" class="btn btn-primary btn-sm fw-bold mt-2  h-25 px-auto rounded-pill shadow map-select {{request()->is('tricycle') ? 'active' : ''}}">
                <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/tricy.png')}}" width="20"></img>
                Tricycle</button>
            <button type="button" href="/ride/1" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('jeepney') ? 'active' : ''}}">
                <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/jeepney.png')}}" width="20"></img>
                Jeepney</button>
            <button type="button" href="/ride/2" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('pedicab') ? 'active' : ''}}">
                <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/pedicab.png')}}" width="20"></img>
                Pedicab</button>
            <button type="button" href="/ride/3" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('bus') ? 'active' : ''}}">
                <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/bus.png')}}" width="20"></img>
                Bus</button>
            <button type="button" href="/ride/4" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('van') ? 'active' : ''}}">
                <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/van.png')}}" width="20"></img>
                Van</button>
        </div>
    </header>
<!--<nav class="navbar navbar-expand-md">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav gap-2 align-middle me-4 ms-auto">
                    <button type="button" href="/ride/0" class="btn btn-primary btn-sm fw-bold mt-2  h-25 px-auto rounded-pill shadow map-select {{request()->is('tricycle') ? 'active' : ''}}">
                        <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/tricy.png')}}" width="20"></img>
                        Tricycle</button>
                    <button type="button" href="/ride/1" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('jeepney') ? 'active' : ''}}">
                        <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/jeepney.png')}}" width="20"></img>
                        Jeepney</button>
                    <button type="button" href="/ride/2" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('pedicab') ? 'active' : ''}}">
                        <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/pedicab.png')}}" width="20"></img>
                        Pedicab</button>
                    <button type="button" href="/ride/3" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('bus') ? 'active' : ''}}">
                        <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/bus.png')}}" width="20"></img>
                        Bus</button>
                    <button type="button" href="/ride/4" class="btn btn-primary btn-sm fw-bold mt-2 h-25 px-auto rounded-pill shadow map-select {{request()->is('van') ? 'active' : ''}}">
                        <img class="v-icon mx-1" src="{{asset('img/Icons/Vehicle Icons/van.png')}}" width="20"></img>
                        Van</button>
                </div>
            </div>
        </div>
    </nav>
    </div> -->
    <!-- Sidebar -->
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Lunad</span> </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Route Map</span> </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Saved Routes</span> </a>
                </div>
            </div>
            <a href="#" class="nav_link">
                <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    
    <!--Container Main end-->
</body>
</html>
