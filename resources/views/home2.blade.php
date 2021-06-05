@extends('layouts.app')

@section('content')
{{--    {{$config = App\helpers::getManu()}}--}}
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="content container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="h2-home text"> Don't forget to go and see</h2> </div>
                </div>
                <div class="row ">
                    <div class=" row col-lg-12">
                        @foreach($lastPosts as $post)
                            <div class="col-lg-4 mb-5">
                                <div class="card-event h-100">
                                    <div class="card-event-top">
                                        <div class="card-event-img">
                                            <img src="{{asset($post->img_url)}}" class="no_logo" width="1042" height="1042" alt="">
                                        </div>
                                        <div class="card-event-keyword">
                                            <a href="/posts/show/{{$post->id}}" class="card-event-keyword-link">
                                                <span>{{ $post->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-event-body">
                                        <div class="card-event-date">
                                           {{$post->created_at}}
                                        </div>
                                        <div class="card-event-titre">
                                            <a href="/posts/show/{{$post->id}}">{{ $post->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-md-4 mb-5">
                                <div class="card-event h-100">
                                    <div class="card-event-top">
                                        <div class=" card-event-img"> <img src="{{asset($post->img_url)}}" class="customers-img no_logo" width="677" height="677" alt=""> </div>
                                        <div class="card-event-keyword"> <a href="Publications.html" class="card-event-keyword-link">
                                                <img src="{{asset($post->user_img)}}" class="rounded-circle" alt="{{$post->name}}" width="40" height="40">
                                                <span>{{ $post->name }}</span>
                                            </a> </div>
                                    </div>
                                    <div class="card-event-body">
                                        <div class="card-event-date " style="color: #D90115 "> {{$post->created_at}} </div>
                                        <div class="card-event-titre"> <a href="/posts/show/{{$post->id}}"> {{ $post->title }} </a> </div>
                                    </div>
                                </div>
                            </div>--}}
                            @if($loop->index === 1)
                                <div class="col-lg-4">
                                    <div class=" mb-5" id="login">
                                        <div class="card-event h-100">
                                            <div class="card-body">
                                                <div class="ajax"> @guest
                                                        <h5 class="card-title">Se connecter</h5>
                                                        <div class="card-slot"></div>
                                                        <p class="card-text"> Pour commencer, utilisez vos Pour commencer, utilisez vos Pour commencer, utilisez vos Pour commencer, utilisez vos </p>
                                                        <form method="POST" action="{{ route('login') }}"> @csrf
                                                            <div class="form-group ">
                                                                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                                                <div class="">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email') <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="password" class="">{{ __('Password') }}</label>
                                                                <div class="">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password') <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span> @enderror </div>
                                                            </div>
                                                            <div class="form-group row pl-2 mb-0">
                                                                <div class=" ml-2">
                                                                    <button type="submit" class="btn btn-primary"> {{ __('Login') }} </button> {{-- @if (Route::has('password.request'))--}} {{-- <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                                                    {{--                                                            {{ __('Forgot Your Password?') }}--}}
                                                                    {{--                                                        </a>--}} {{-- @endif--}} </div>
                                                            </div>
                                                        </form> @else
                                                        <h5 class="card-title">Filtter & search</h5>
                                                        <div class="card-slot"></div>
                                                        <form action="" method="get"> <span><b>Search by title</b></span>
                                                            <br>
                                                            <div class="form-group">
                                                                <label for="seachtitle"></label>
                                                                <input type="text" class="form-control" id="seachtitle" name="searchtitle" placeholder="Enter title"> </div> <span><b>Filter by Date from - to </b></span>
                                                            <br>
                                                            <div class=" form-group">
                                                                <input id="mindate" class="form-control" name="mindate" type="date"> </div>
                                                            <div class="form-group">
                                                                <input class="form-control" id="maxdate" name="maxdate" type="date"> </div>
                                                            <div class="text-right">
                                                                <button class="btn btn-primary"> Go </button>
                                                            </div>
                                                        </form> @endguest </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($loop->index === 3)
                                <div class="col-lg-4 mb-5">
                                    <div class="card-event h-100">
                                        <div class="card-event-top">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <video controls width="400px">
                                                    <source src="{{asset('videos/francmusic.mp4')}}" type="video/mp4">
                                                    <!-- MP4 для Safari, IE9, iPhone, iPad, Android, и Windows Phone 7 -->
                                                    <object data="video.swf" type="application/x-shockwave-flash">
                                                        <!-- добавляем видеоконтент для устаревших браузеров, в которых нет поддержки элемента video -->
                                                        <param name="movie" value="video.swf"> </object>
                                                </video>
                                            </div>
                                        </div>
                                        <div class="card-event-body">
                                            <div class="card-event-titre"> <b>Title:</b> text
                                                <hr> <b>Place:</b> text
                                                <hr> <b>Booking:</b> text
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if($loop->index === 5)
                                <div class="col-lg-4">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="mb-5">
                                                    <div class="card-event h-100">
                                                        <div class="card-event-top">
                                                            <div class=" card-event-img">
                                                                <img src="https://via.placeholder.com/350x250" class="customers-img no_logo" width="677" height="677" alt="">
                                                            </div>
                                                            <div class="card-event-keyword"> <a href="Publications.html" class="card-event-keyword-link">
                                                                    <img src="https://via.placeholder.com/350x350" class="rounded-circle" alt="test test " width="40" height="40">
                                                                    <span>test test</span>
                                                                </a> </div>
                                                        </div>
                                                        <div class="card-event-body">
                                                            <div class="card-event-titre">
                                                                <b>date:</b> text <hr>
                                                                <b>Place:</b> text <hr>
                                                                <b>Booking:</b> text
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="mb-5">
                                                    <div class="card-event h-100">
                                                        <div class="card-event-top">
                                                            <div class="card-event-img">
                                                                <img src="https://via.placeholder.com/350x250" class="customers-img no_logo" width="677" height="677" alt="">
                                                            </div>
                                                            <div class="card-event-keyword"> <a href="Publications.html" class="card-event-keyword-link">
                                                                    <img src="https://via.placeholder.com/350x350" class="rounded-circle" alt="test test " width="40" height="40">
                                                                    <span>test test</span>
                                                                </a> </div>
                                                        </div>
                                                        <div class="card-event-body">
                                                            <div class="card-event-titre"> <b>Date:</b> text
                                                                <hr> <b>Place:</b> text
                                                                <hr> <b>Booking:</b> text
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class=" mb-5">
                                                    <div class="card-event h-100">
                                                        <div class="card-event-top">
                                                            <div class=" card-event-img">
                                                                <img src="https://via.placeholder.com/350x250" class="customers-img no_logo" width="677" height="677" alt="">
                                                            </div>
                                                            <div class="card-event-keyword"> <a href="Publications.html" class="card-event-keyword-link">
                                                                    <img src="https://via.placeholder.com/350x350" class="rounded-circle" alt="test test " width="40" height="40">
                                                                    <span>test test</span>
                                                                </a> </div>
                                                        </div>
                                                        <div class="card-event-body">
                                                            <div class="card-event-titre">
                                                                <b>Date:</b> text
                                                                <hr> <b>Place:</b> text
                                                                <hr> <b>Booking:</b> text
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @if(count($lastPosts) === 0)
                            <h3>No post to show</h3>
                                <a href="/" class="">
                                    <button class="btn btn-primary">reset filter</button>
                                </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="home-row-2">
                <div class="content container">
                    <div class="row row-cols-1 row-cols-md-3">
                        <!-- card 1 : connecter -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/contact" class="card-title-link crayon selections_contenu-titre-3 ">Contact</a>
                                    </h5>
                                    <div class="card-slot"></div>
                                    <div class="card-text crayon selections_contenu-descriptif-3 ">
                                        <p></p>
                                    </div> <a href="/contact" class="btn btn-primary">Send message</a> </div>
                            </div>
                        </div>
                        <!-- card: Propositions de lecture -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/pressrelease" class="card-title-link crayon selections_contenu-titre-4 ">press release</a>
                                    </h5>
                                    <div class="card-slot"></div> <a href="/pressrelease" class="btn btn-primary">send</a> </div>
                            </div>
                        </div>
                        <!-- card: Les Permanences -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/adbuy" class="card-title-link crayon selections_contenu-titre-5 ">Place ad</a>

                                    </h5>
                                    <div class="card-slot"></div> <a href="/adbuy" class="btn btn-primary">buy ad</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
