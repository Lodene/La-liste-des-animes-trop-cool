<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <script src="https://kit.fontawesome.com/834a2a8e7b.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"/> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>   

    </head>

    <body>

        <header>
            @section('nav')
            <div id="premiereSectionHeader">
                <div> {{--logo--}}
                    <img src="{{asset('img/logo.png')}}" alt="logo" id="logoHeader">
                </div> 
                <div id="barDeRechercherHeader"> {{-- bar de recherche --}}
                    <form action="get">
                        <a href="#"><i class="fas fa-search"></i></a>
                        <input type="text" placeholder="Tg sale pute ?">
                        
                    </form>
                </div> 
            </div>
            <div id="deuxiemeSectionHeader">
                <a href="#">
                    <div>
                            <i class="fas fa-home"></i>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <i class="fab fa-wpexplorer"></i>
                    </div>
                </a>
                <a href="#">
                    <div>
                        <i class="fas fa-newspaper"></i>
                    </div>
                </a>
            </div>
            <div id="troisiemeSectionHeader">
                <div class="premiere section">
                    <a href="#">
                        <div class="troisiemeSectionHeaderTexte">
                            Connexion 
                        </div>
                    </a>
                </div>
                
                <div class="deuxieme section">
                    <a href="#">
                        <div class="troisiemeSectionHeaderTexte">
                            Inscription 
                        </div>
                    </a>
                </div>
            </div>
                
            @show
        </header>

        <div class="container">
            @yield('content')   
        </div>


    </body>
    <script src="{{asset('js/header.js')}}"></script>
</html>