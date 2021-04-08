@extends('layouts.app')

@section('content')
    <div class="content container" style="width: auto; background-color:white">
        <div class="row">
            <div class=" col-md-12" style="border-right: #0a0c0d 1px dashed">
        @include('posts.commentsDisplay', ['comments' => $Data['comment'], 'post_id' => $Data['id']])
            @guest
                    <hr />

                    <div class="banner-nav-home">
                        For adding  comments  <a href="{{ route('login') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i> <b> sing-in</b> </a> or
                        <a href="{{ route('register') }}"> <i class="fa fa-id-card-o" aria-hidden="true"></i><b> Register</b></a>

                    </div>
                @else
                    <hr />
                    <h4>Add comment</h4>
                    <form method="post" action="{{ route('forum.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ 1 }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Add Comment" />
                        </div>
                    </form>

                @endguest
            </div>

        </div>
    </div>
    <nav class="d-flex justify-content-center">
        {{--        {{ $Gallery->links() }}--}}
    </nav>
@endsection
