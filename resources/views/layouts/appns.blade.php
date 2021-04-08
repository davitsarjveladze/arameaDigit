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

    <!-- Styles -->
    <link
            href="https://unpkg.com/video.js@7/dist/video-js.min.css"
            rel="stylesheet"
    />

    <!-- City -->
    <link
            href="https://unpkg.com/@videojs/themes@1/dist/city/index.css"
            rel="stylesheet"
    />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <style>

        html,
        body {
            height: 100%;
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
            background-color: #006EC7;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown_custom:hover .dropdown_content_custom {
            display: block;
        }
    </style>




</head>
<body style="min-height: 100%">

<div id="app" style="min-height: 100%">
    <header role="banner" class="rwd-hidden">
        <div class="header-wrapper">
            <div class="aremae-container">
                <!-- header col-1 -->
                <div class="col-2" style="">
                    <div class="header" >
                        <a href="/about" class="header-logo">
                            <img src="{{ asset('/images/SiteImgs/AllerVoir.png') }}" width="280" height="190" alt="Aremae" class="header-logo-img">
                        </a>
                    </div>
                </div>

                <!-- header col-1 -->
                <div class="col-8 header-col-2 not--logged">
                    <div class="header-col-2-inner">
                        <div title="Association des Retraités du Ministère des&nbsp;Affaires&nbsp;Étrangères" class="banner-title text-nowrap text-break">
                            Association des Retraités du Ministère des&nbsp;Affaires&nbsp;Étrangères
                        </div>
                        <div class="banner-nav">
                            <div class="nav">
                                <div class="dropdown_custom"><div href="L-association" class="banner-nav-home">watch & listen</div>
                                    <ul class="dropdown_content_custom nav">
                                        <li ><a href="/albums">Albums</a></li>
                                        <li ><a href="/video">Videos</a></li>
                                        <li ><a href="banner-nav-home">Voices</a></li>
                                    </ul>
                                </div>

                                <div class="dropdown_custom"><div href="Activites" class="banner-nav-home">Reading</div>
                                    <ul class="dropdown_content_custom nav">
                                        <li ><a href="/showposts/culture">Culture</a></li>
                                        <li ><a href="/showposts/life">Life</a></li>
                                        <li ><a href="/showposts/solidarity">Solidarity</a></li>                                        </ul>
                                </div>

                                <div class="dropdown_custom"><div href="L-Aremae-vous-propose" class="banner-nav-home">Active Space</div>
                                    <ul class="dropdown_content_custom nav">
                                        <li ><a href="/meetartists">Meeting aritsts</a></li>
                                        <li ><a href="/">little announce</a></li>
                                        <li ><a href="/schedule">Schedule</a></li>                                                 </ul>
                                </div>
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
                                            <li ><a href="/posts">Add posts</a></li>
                                            <li ><a href="/">Add photo</a></li>
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

                </div>
                <div class="col-2" style="">
                    <div class="header" >
                        <a href="/lesamis" class="header-logo">
                            <img src="{{ asset('/images/SiteImgs/AllerVoirLesAmis.png') }}" width="280" height="190" alt="Aremae" class="header-logo-img">
                        </a>
                    </div>
                </div>

            </div>
        </div>


    </header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top rwd-show not--logged">
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
                            <li ><a href="/">Add photo</a></li>
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
                    <div class="dropdown-menu bg-primary" style="border: none" aria-labelledby="navbarDropdown">
                        <a class="nav-link " style="margin-left: 20px" href="/albums">Albums</a>
                        <a class="nav-link " style="margin-left: 20px" href="/video">Videos</a>
                        <a class="nav-link " style="margin-left: 20px" href="/composition">Voices</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reading
                    </a>
                    <div class="dropdown-menu bg-primary" style="border: none" aria-labelledby="navbarDropdown">
                        <a class="nav-link " style="margin-left: 20px" href="/culture">Culture</a>
                        <a class="nav-link " style="margin-left: 20px" href="/life">Life</a>
                        <a class="nav-link " style="margin-left: 20px" href="/solidarity">Solidarity</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Active Space
                    </a>
                    <div class="dropdown-menu bg-primary" style="border: none" aria-labelledby="navbarDropdown">
                        <a class="nav-link " style="margin-left: 20px" href="/meetartists">Meeting artists</a>
                        <a class="nav-link " style="margin-left: 20px" href="/">little announce</a>
                        <a class="nav-link " style="margin-left: 20px" href="/schedule">Schedule</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
    <div class="footer23">
        <footer class="footer">
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


