@extends('layouts.app')

@section('content')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">Forum</h2>
                <div>

                </div>
                <!-- card event 42 -->
                <div class="">
                    <!-- card event 42 -->
                    <div class="card mb-3">
                        <h5 class="card-header">culture</h5>
                        <div class="card-body">
                            <h5 class="card-title">Forum for people interested in culture</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="/forum/1" class="btn btn-primary">Show forum</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <h5 class="card-header">life</h5>
                        <div class="card-body">
                            <h5 class="card-title">Forum for people interested in life</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="/forum/2" class="btn btn-primary">Show forum</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <h5 class="card-header">solidarity</h5>
                        <div class="card-body">
                            <h5 class="card-title">Forum for people interested in solidarity</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="/forum/3" class="btn btn-primary">Show forum</a>
                        </div>
                    </div>

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
