<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geografiya</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
    @yield('header')
</head>
<body>
    
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ route('categories') }}" class="waves-effect waves-light">Geografiýa sapaklar</a></li>
        <li><a href="{{ route('quizes') }}" class="waves-effect waves-light">Testler</a></li>
        <li><a href="{{ route('flag-game') }}" class="waves-effect waves-light">Baýdak oýny</a></li>
        <li><a href="{{ route('capital-game') }}" class="waves-effect waves-light">Paýtagt oýny</a></li>
        <li><a href="{{ route('maps') }}" class="waves-effect waves-light">Karta</a></li>
        <li><a href="{{ route('countries') }}" class="waves-effect waves-light">Ýurtlar</a></li>
        <li><a href="{{ route('library') }}" class="waves-effect">Kitaphana</a></li>
        <li><a href="{{ route('facts') }}" class="waves-effect">Gyzykly maglumatlar</a></li>
    </ul>
    <nav class="grey lighten-5 z-depth-0">
        <div class="container">
            <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="brand-logo grey-text text-darken-1">Bilimli nesil</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse grey-text text-darken-1"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="grey-text text-darken-1" href="{{ route('home') }}">Baş sahypa</a></li>
                    <li><a class="dropdown-button grey-text text-darken-1" href="#!" data-activates="dropdown1">Bölümler<i class="material-icons right">arrow_drop_down</i></a></li>
                    @if (Auth::user())
                        <li><a class="grey-text text-darken-1" href="{{ url('/admin/logout') }}">Çyk</a></li>
                    @endif
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{ route('home') }}" class="waves-effect waves-darken">Baş sahypa</a></li>
                    <li class="no-padding">
                        <ul data-collapsible="accordion" class="collapsible collapsible-accordion">
                            <li class="active">
                                <a href="#" class="waves-effect collapsible-header active">Bölümler</a>
                                <div class="collapsible-body" style="display: block;">
                                    <ul>
                                        <li><a href="{{ route('categories') }}" class="waves-effect">Geografiýa sapaklar</a></li>
                                        <li><a href="{{ route('quizes') }}" class="waves-effect">Testler</a></li>
                                        <li><a href="{{ route('flag-game') }}" class="waves-effect">Baýdak oýny</a></li>
                                        <li><a href="{{ route('capital-game') }}" class="waves-effect">Paýtagt oýny</a></li>
                                        <li><a href="{{ route('maps') }}" class="waves-effect">Karta</a></li>
                                        <li><a href="{{ route('countries') }}" class="waves-effect">Ýurtlar</a></li>
                                        <li><a href="{{ route('library') }}" class="waves-effect">Kitaphana</a></li>
                                        <li><a href="{{ route('facts') }}" class="waves-effect">Gyzykly maglumatlar</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>j
                    @if (Auth::user())
                        <li><a class="waves-effect waves-darken" href="{{ url('/admin/logout') }}">Çyk</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script>
        $(document).ready(function() {
            $(".button-collapse").sideNav();

            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: false
            });

            $('select').material_select();

            var list = document.querySelectorAll("div[data-image]");

            for (var i = 0; i < list.length; i++) {
                var url = list[i].getAttribute('data-image');
                list[i].style.backgroundImage="url('" + url + "')";
            }
        });
    </script>
    @yield('footer')
</body>
</html>
