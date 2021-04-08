@extends('layouts.app')

@section('content')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">About</h2>
                <!-- card event 42 -->
                <div class="row row-cols-1 row-cols-md-3">
                    {!!  $About[0]->text !!}
                </div>
                <div class="alert alert-light" role="alert">
                    source code you can look <a href="#">here</a>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="row row-cols-1 row-cols-md-3">

                    <!-- card event 42 -->
                    <!-- card event 42 -->
                    <h2 class="h2-home"></h2>

                    <div  class="col-12 mb-5">
                        <div class="card-event ">
                            <a href="https://placeholder.com">
                                <img src="{{asset($About[0]->img_url)}}"></a>
                            <div class=" ml-5 row">
                                <span>{{$About[0]->img_title}}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    {{--    <nav class="d-flex justify-content-center">--}}
    {{--        {{ $Gallery->links() }}--}}
    {{--    </nav>--}}
@endsection
