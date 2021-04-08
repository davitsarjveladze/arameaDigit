@extends('layouts.app')

@section('content')
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">Posts</h2>

                <!-- card event 42 -->
                <div class="row row-cols-1 row-cols-md-3">
                    <!-- card event 42 -->
                    @foreach($posts as $post)
                    <div  class="col-sm-6 mb-5">
                        <div class="card-event h-100">
                            <div class="card-event-top">
                                <div class=" card-event-img">
                                    <img src="{{asset($post->img_url)}}" class="customers-img no_logo" width="677" height="677" alt="">
                                </div>
                                <div class="card-event-keyword">
                                    <a href="Publications.html" class="card-event-keyword-link">
                                        <img src="{{asset($post->user_img)}}" class="rounded-circle" alt="{{$post->name}}" width="40" height="40">
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
                    @endforeach
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
            {{ $posts->links() }}
        </nav>
@endsection
