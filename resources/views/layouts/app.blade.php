<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
{{--    <script src="{{ asset('js/aremeaScript.js') }}" ></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <style>
        .video_holder {
            height: 100%;
            min-height:100%;
            width: 100%;
            min-width: 100%;
        }
        html,
        body {
            height: 100%;
        }
        .main_background {
            background-color: #007bff!important;
        }
        .footer23 {
            left: 0;
            width: 100%;
        }
        .dropdown_custom {
            position: relative;
            display: inline-block;
        }

        .dropdown_content_custom {
            display: none;
            position: absolute;
            background-color: #007bff!important;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown_custom:hover .dropdown_content_custom {
            display: block;
        }
    </style>



    <style>
        @font-face {
            font-family: 'liberationsans';
            src: local('Liberation Sans'), local('LiberationSans'), url('http://159.89.224.208/fonts/liberationsans.woff2') format('woff2'), url('http://159.89.224.208/fonts/liberationsans.woff') format('woff'), url('http://159.89.224.208/fonts/liberationsans.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'liberationsans';
            src: local('Liberation Sans Italic'), local('LiberationSans-Italic'), url('http://159.89.224.208/fonts/liberationsansitalic.woff2') format('woff2'), url('http://159.89.224.208/fonts/liberationsansitalic.woff') format('woff'), url('http://159.89.224.208/fonts/liberationsansitalic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic;
        }
        @font-face {
            font-family: 'liberationsans';
            src: local('Liberation Sans Bold'), local('LiberationSans-Bold'), url('http://159.89.224.208/fonts/liberationsansbold.woff2') format('woff2'), url('http://159.89.224.208/fonts/liberationsansbold.woff') format('woff'), url('http://159.89.224.208/fonts/liberationsansbold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'liberationsans';
            src: local('Liberation Sans Bold Italic'), local('LiberationSans-BoldItalic'), url('http://159.89.224.208/fonts/liberationsansbolditalic.woff2') format('woff2'), url('http://159.89.224.208/fonts/liberationsansbolditalic.woff') format('woff'), url('http://159.89.224.208/fonts/liberationsansbolditalic.ttf') format('truetype');
            font-weight: 700;
            font-style: italic;
        }
        body {
            font-family: 'liberationsans'
        }
    </style>
</head>
<body style="min-height: 100%">
    <div id="app" style="min-height: 100%">
        <header role="banner" class="rwd-hidden main_background">
            <div class="header-wrapper ">
                <div class="aremae-container main_background">
                    <!-- header col-1 -->
                    <div class="" style="">
                        <div class="header " >
                            <a href="/" class="header-logo">
                                <img src="{{ asset('/images/SiteImgs/AllerVoirr.png') }}" width="280" height="190" alt="Aremae" class="header-logo-img">
                            </a>
                        </div>
                    </div>

                    <!-- header col-1 -->
                    <div class="col-10 header-col-2 main_background">
                            <div class="banner-nav">
                                <div class="nav d-flex justify-content-around">
                                    <div class="dropdown_custom"><div class="banner-nav-home"><b>watch & listen</b></div>
                                        <ul class="dropdown_content_custom nav">
                                            <li ><a href="/albums"><b>{{_('photo')}}</b></a></li>
                                            <li ><a href="/video"><b>{{_('video')}}</b></a></li>
                                            <li ><a href="/sound"><b>{{_('sound')}}</b></a></li>
                                        </ul>
                                    </div>

                                    <div class="dropdown_custom"><div class="banner-nav-home"><b>Reading</b></div>
                                        <ul class="dropdown_content_custom nav">
                                            <li ><a href="/showposts/culture"><b>Culture</b></a></li>
                                            <li ><a href="/showposts/life"><b>Life</b></a></li>
                                            <li ><a href="/showposts/solidarity"><b>Solidarity</b></a></li>                                        </ul>
                                    </div>
                                    <div class="dropdown_custom"><div  class="banner-nav-home"><b>Active Space</b></div>
                                        <ul class="dropdown_content_custom nav">
                                            <li><a href="/meetartists"><b>Meet artists</b></a></li>
{{--                                            <li><a href=""><b>Patites annonces</b></a></li>--}}
                                            <li><a href="/forum"><b>Forum</b></a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown_custom"><a href="/schedule" class="banner-nav-home"><b>Schedule</b></a></div>
                                    @guest
                                        <div class="banner-nav-home">
                                            <a href="{{ route('register') }}"> <i class="fa fa-id-card-o" aria-hidden="true"></i></a>
                                            /
                                            <a href="{{ route('login') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                        </div>
                                    @else
                                        <div class="dropdown_custom"><div  class="banner-nav-home">
                                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                            </div>
                                            <ul class="dropdown_content_custom nav">
                                                <li ><a href="/posts"><b>Add posts</b></a></li>
                                                <li><a  href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                </li>


                                            </ul>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>

                                    @endguest

                                </div>
                            </div>

                    </div>
                    <div class="" style="">
                        <div class="header" >
                            <a href="/about" class="header-logo">
                                <img src="{{ asset('/images/SiteImgs/AllerVoirLesAmis.png') }}" width="280" height="190" alt="Aremae" class="header-logo-img">
                            </a>
                        </div>
                    </div>

                </div>
            </div>


        </header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top rwd-show main_background not--logged">
            <a class="navbar-brand" href="/about">
                <img src="{{ asset('/images/SiteImgs/AllerVoir.png')}}" alt="Aremae" class="header-logo-rwd">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <div class="banner-tools">
{{--                    <a href="Les-Permanences" class="banner-tool"><img src="plugins/aremae/img/contact.svg" width="34" height="34" alt="Contact"></a>--}}
                    @guest
                        <div class="banner-nav-home">
                            <a href="{{ route('register') }}"> <i class="text-white fa fa-id-card-o" aria-hidden="true"></i></a>
                            <span class="text-white">/</span>
                            <a href="{{ route('login') }}"> <i class=" text-white fa fa-sign-in" aria-hidden="true"></i></a>
                        </div>
                    @else
                        <div class="dropdown_custom">
                            <div  class="banner-nav-home">
                                <i class="text-white fa fa-user-o pr-3" aria-hidden="true"></i>
                            </div>
                            <ul class="dropdown_content_custom nav">
                                <li ><a href="/posts">Add posts</a></li>
                                <li><a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                    @endguest
                </div>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            watch
                        </a>
                        <div class="dropdown-menu main_background" style="border: none" aria-labelledby="navbarDropdown">
                            <a class="nav-link " style="margin-left: 20px" href="/albums">Albums</a>
                            <a class="nav-link " style="margin-left: 20px" href="/video">Videos</a>
                            <a class="nav-link " style="margin-left: 20px" href="/sound">Sound</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reading
                        </a>
                        <div class="dropdown-menu main_background" style="border: none" aria-labelledby="navbarDropdown">
                            <a class="nav-link " style="margin-left: 20px" href="/culture">Culture</a>
                            <a class="nav-link " style="margin-left: 20px" href="/life">Life</a>
                            <a class="nav-link " style="margin-left: 20px" href="/solidarity">Solidarity</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Active Space
                        </a>
                        <div class="dropdown-menu main_background" style="border: none" aria-labelledby="navbarDropdown">
                            <a class="nav-link " style="margin-left: 20px" href="/meetartists">Meeting artists</a>
                            <a class="nav-link " style="margin-left: 20px" href="/forum">Forum</a>

                        </div>
                    </li>
                    <li class="nav-ite">
                        <a class="nav-link "  href="/schedule">Schedule</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-4 p-5 d-flex justify-content-center align-items-center">
              <i>  <b> <a href="/about">Go see</a>, the site that doesn't spy on you, doesn't let others do it and is entirely built with free open source software.</b>
              </i>
            </div>
        <div id="carouselExampleIndicators" class="carousel slide col-8 " data-ride="carousel">
            <div class="carousel-inner">
                @foreach( App\helpers::GetCarrouselItems() as $slide)
                <div class="carousel-item @if($loop->index === 0) active @endif">
                    <div class="slide ">
                        <div class="slide-img row col-lg-6" style="margin: 0!important; padding: 0!important;" >
                            <div style="background-image:url('{{asset($slide->img_url)}}')" class="col-12"></div>
                        </div>
                        <div class="slide-texte col-lg-6" style="background-color: #007bff!important">
                            <div class="text-white text-20 slide-texte-inner">
                                <p><b>TITLE: </b><i>{{$slide->title}}</i></p>
                                <p><b>DATE: </b><i>{{$slide->date}}</i></p>
                                <p><b>PLACE: </b><i>{{$slide->place_name}}</i></p>
                                <p><b>RESERVATION: </b><i>{{$slide->reservation}}</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="footer23 main_background">
            <footer class="footer main_background">
                <div class="container">

                    <!-- footer-row-1 -->
                    <!-- #footer-row-1 -->

                    <!-- footer-row-2 -->
                    <div class="row footer-row-2">
                        <div class="col-lg-12 footer-row-2-inner">
                            © Webapp 2021

                            | <a href="Mentions-legales">Made by Love</a>

                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>


