@extends('layouts.appns')

@section('content')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <div class="content container">
            <div >
                <h2 class="h2-home">Paris and musicans</h2>
                <div>

                </div>
                <div>
                <!-- card event 42 -->
                    <video controls controlsList="nodownload">
                        <source src="{{asset('videos/francmusic.mp4')}}" type="video/mp4">
                        Your browser does not support HTML video.
                    </video>
                </div>
            </div>
            
    </div>
    <nav class="d-flex justify-content-center">
{{--        {{ $Gallery->links() }}--}}
    </nav>
@endsection
<style>
    video {
        width: 100%;
        height: 60%;
    }
</style>