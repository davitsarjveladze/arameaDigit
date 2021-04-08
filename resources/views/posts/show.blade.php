@extends('layouts.app')

@section('content')
    <div class="content container" style="width: auto; background-color:white">
        <div class="row">
            <!-- content-main -->
            <div class="col-md-8 content-main">
                <!-- accesskey -->
                <a name="contenu" accesskey="2"></a>
                <!-- article-body  -->
                <div class="article-body">
                    <!-- ariane -->
                    <div class="ariane">
                        <ul>

                             <li class="home"><a href="/showposts/{{$post->category}}">
                                    {!! $post ->category!!}
                                </a>  <span>/</span></li>
                        </ul>
                    </div>
                    <div class="article-header">
                        <div class="article-event-date">
                            {{$post->created_at}}
                        </div>
                        <h1 class="crayon article-titre-49 article-h1">{{$post->title}}</h1>
                        <div class="article-slot"></div>
                    </div>
                    <div class="">
                        {!!$post->body  !!}
                    </div>
                </div>
                <!-- #article-body  -->
            </div>
            <!-- #content-main -->
            <!-- content-side -->
            <div class="col-md-4 content-sidebar">
                <div class="content-sidebar-wrapper" style="padding-left: 0rem;">
                    <div class="content-sidebar-portfolio">
                        <figure class="myportfolio-item">
                            <img src="{{asset($post->img_url)}}" width="800" height="800">
                        </figure>
                    </div>
                </div>
            </div>
            <!-- #content-side -->
        </div>
        <hr>
        <h4>Comments</h4>
        @guest
            <div class="banner-nav-home">
                For adding  comments  <a href="{{ route('login') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i> <b> sing-in</b> </a> or
                <a href="{{ route('register') }}"> <i class="fa fa-id-card-o" aria-hidden="true"></i><b> Register</b></a>
            </div>
        @else
            @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

            <hr />
            <h4>Add comment</h4>
            <form method="post" action="{{ route('comments.store'   ) }}">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="body"></textarea>
                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Add Comment" />
                </div>
            </form>

        @endguest

    </div>
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h3 class="text-center">{{ $post->title }}</h3>--}}
{{--                        <br/>--}}
{{--                        {!! $post->body !!}--}}
{{--                        <hr />--}}
{{--                        <h4>Comments</h4>--}}

{{--                        @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])--}}

{{--                        <hr />--}}
{{--                        <h4>Add comment</h4>--}}
{{--                        <form method="post" action="{{ route('comments.store'   ) }}">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea class="form-control" name="body"></textarea>--}}
{{--                                <input type="hidden" name="post_id" value="{{ $post->id }}" />--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="submit" class="btn btn-success" value="Add Comment" />--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
