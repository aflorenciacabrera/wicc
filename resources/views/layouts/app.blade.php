<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Jornadas Argentinas de Didáctica de las Ciencias de la Computación (JADiCC2022)" />
    <meta property="og:description"
        content="Estas jornadas, propiciadas por la Iniciativa Program.AR de la Fundación Sadosky, tienen la finalidad de propiciar el encuentro de investigadores, investigadoras, docentes, estudiantes, funcionarios y funcionarias públicas que lleven adelante proyectos de investigación o de intervención educativa en la enseñanza de las Ciencias de la Computación." />
    <meta property="og:image" content="{{ asset('image/redes.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>JADICC 2022</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"
        integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('home')}}#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Qué es JADiCC 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#introduccion">Introducción</a>
                        </div>
                    </li>
                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Convocatoria
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}#plazos">Plazos y categorías de contribuciones</a>
                        </div>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Organización
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home')}}#chairs">Chairs</a>
                            <a class="dropdown-item" href="{{route('home')}}#comite">Comité Académico</a>
                            <a class="dropdown-item" href="{{route('home')}}#organizador">Comité Organizador</a>
                         </div>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Agenda
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('agenda')}}#talleres">Talleres</a>
                            <a class="dropdown-item" href="{{route('agenda')}}#conferencias">Conferencias</a>
                            {{-- <a class="nav-link disabled" href="#">Libro de Actas</a> --}}
                         </div>
                    </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Agenda</a>
                    </li> --}}
                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Keynotes
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#chairs">Resumen de cada Keynote</a>
                            <a class="dropdown-item" href="#comite">Video</a>
                         </div> 
                        
                    </li> --}}
                     <li class="nav-item">
                        <a class="nav-link disabled" href="#">Keynotes</a>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Contacto
                        </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#contacto">Email</a>
                            {{-- <a class="dropdown-item" href="#comite">Comité Académico</a> --}}
                            {{-- <a class="dropdown-item" href="#organizador">Comité Organizador</a> --}}
                         </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">&nbsp;</a>
                    </li>
                </ul>
              
            </div>
        </nav>

        <!-- Image and text -->

        <div class="container-fluid pt-5" style="background-color:#7777f0">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="col-md-12 col-12 text-center">
                        <img src="{{ asset('image/logos.png') }}" class="w-100 w-md-75" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light" style="background-color: white;"> --}}
        {{-- <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> --}}
        {{-- <a class="navbar-brand" href="#">
      
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('image/logos.png')}}" class="w-50" alt="">
                </div>
            </div>
     
      </a>
  </nav> --}}
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </nav> --}}


        <main class="">
            @yield('content')
        </main>
        @yield('script')
    </div>
</body>
<style>
    main {
        background-color: #7777f0;
        background-image: url("{{ asset('image/waves.png') }}");
        background-repeat: repeat-y;
        background-size: 20%;
    }
    .azul-oscuro{
        background-color: #333953;
    }

    .viole{
        background-color: #748bb4;
    }

    .celeste{
        background-color:  #85e4c4;
    }

    .clarito
    {
        background-color: #c2d1e4;
    }
    .azul{
        background-color: #789bdd !important;
    }

    .text-azul-oscuro{
            color: #333953;
        }

    .text-viole{
            color: #748bb4;
        }

    .text-celeste{
            color:  #85e4c4;
        }

    .text-clarito
    {
        color: #c2d1e4;
    }

    .poppins{
        font-family: 'Poppins';font-size: 22px;

    }

    .text-verde{

        color:#c7fb02;
    }

    .text-negro{
        color: #212529
    }
      .text-morado{
        color: #7777f0
    }
 .verde{
        background-color: #c7fb02 !important;
        color: black;
    }

    

    
</style>

</html>
