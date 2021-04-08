@extends('layouts.app')

@section('content')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">Sounds</h2>
                <div>

                </div>
                <!-- card event 42 -->
                <div class="row row-cols-1 row-cols-md-3">
                    <div  class="col-sm-6 mb-5">
                        <div class="card-event h-100">
                            <div class="card-event-top">
                                <div class=" card-event-img">
                                    <img src="https://via.placeholder.com/350x350" class="customers-img no_logo" width="677" height="677" alt="">
                                </div>
                                <div class="card-event-keyword">
                                    <a href="/sound/album" class="card-event-keyword-link">
                                        <img src="https://via.placeholder.com/350x350" class="rounded-circle" alt="album" width="40" height="40">
                                        <span>{{ 'songs' }}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card-event-body">
                                <div class="card-event-date">
                                    12-12-2020
                                </div>
                                <div class="card-event-titre">
                                    <a href="/sound/album">text text text</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- card event 42 -->
{{--                    @foreach($Gallery as $Gall)--}}
{{--                        <div  class="col-sm-6 mb-5">--}}
{{--                            <div class="card-event h-100">--}}
{{--                                <div class="card-event-top">--}}
{{--                                    <div class=" card-event-img">--}}
{{--                                        <img src="{{asset($Gall->img_url)}}" class="customers-img no_logo" width="677" height="677" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="card-event-keyword">--}}
{{--                                        <a href="Publications.html" class="card-event-keyword-link">--}}
{{--                                            <img src="{{asset($Gall->img_url)}}" class="rounded-circle" alt="{{$Gall->category}}" width="40" height="40">--}}
{{--                                            <span>{{ $Gall->category }}</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-event-body">--}}
{{--                                    <div class="card-event-date">--}}
{{--                                        {{$Gall->created_at}}--}}
{{--                                    </div>--}}
{{--                                    <div class="card-event-titre">--}}
{{--                                        <a href="/Gallery/show/{{$Gall->id}}">{{ $Gall->tittle }}</a>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>
            </div>

            <div class=" col-md-4">
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- card event 42 -->
                    <!-- card event 42 -->
                    <h2 class="h2-home"></h2>

                    <div  class="col-12 mb-5">
                        <div class="card-event ">
                            <a href="https://placeholder.com"><img src="https://via.placeholder.com/350x430"></a>        <div class="row">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- card event 42 -->
                    <!-- card event 42 -->
                    <h2 class="h2-home"></h2>

                    <div  class="col-12 mb-5">
                        <div class="card-event ">
                            <a href="https://placeholder.com"><img src="https://via.placeholder.com/350x430"></a>        <div class="row">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- card event 42 -->
                    <!-- card event 42 -->
                    <h2 class="h2-home"></h2>

                    <div  class="col-12 mb-5">
                        <div class="card-event ">
                            <a href="https://placeholder.com"><img src="https://via.placeholder.com/350x430"></a>        <div class="row">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <nav class="d-flex justify-content-center">
{{--        {{ $Gallery->links() }}--}}
    </nav>
@endsection
