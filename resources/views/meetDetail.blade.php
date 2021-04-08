@extends('layouts.app')

@section('content')
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">Meet artists</h2>
                <!-- card event 42 -->
                <div class="">
                    <b>Name: </b> linus torvalds <br>
                    <b>Date: </b> 2021-10-10 <br>
                    <b>Place: </b> Paris louvre  <br>
                    <b>Description : </b> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias amet autem commodi, consequatur corporis culpa dolorem dolores est impedit laborum nisi nulla officia quas quo, quod sunt tempora voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia quia rem similique voluptas voluptatem voluptatibus? Aliquid dicta, earum eius illo impedit molestias mollitia natus praesentium qui sed soluta suscipit!
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
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/LinuxCon_Europe_Linus_Torvalds_03_%28cropped%29.jpg"></a>
                            <div class=" text-center ">
                                <b><i>linus torvalds </i></b>
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
