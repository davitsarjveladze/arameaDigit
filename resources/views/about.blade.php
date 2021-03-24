@extends('layouts.app')

@section('content')
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    <div class="content container">
        <div class="row">
            <div class=" col-md-8" style="border-right: #0a0c0d 1px dashed">
                <h2 class="h2-home">About</h2>
                <div>

                </div>
                <!-- card event 42 -->
                <div class="row row-cols-1 row-cols-md-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi corporis dignissimos, distinctio eaque earum excepturi facilis fuga fugit in laborum, magnam perspiciatis quo recusandae repudiandae, saepe vitae voluptates voluptatum!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta dolorum eos eveniet ex explicabo, hic impedit laborum mollitia, natus numquam perferendis placeat quibusdam quisquam recusandae sit totam, vel voluptate!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda atque aut culpa dicta eaque et expedita illum ipsa iure magni minima mollitia perferendis porro quibusdam, quis quo recusandae vel?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur deleniti dolore ea, eaque eum fugit impedit iure, laboriosam libero natus porro provident qui, quidem reprehenderit repudiandae sequi soluta sunt.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate libero, maiores modi nemo obcaecati optio quos reiciendis. Aliquid beatae corporis dolore ducimus id in modi officia reiciendis saepe sint?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequuntur cupiditate deserunt eaque non, quos suscipit ut. Corporis, maxime modi molestiae molestias officia optio praesentium ratione repellat reprehenderit, tenetur voluptatum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum eum fuga impedit ipsum minima molestiae nihil optio, perferendis provident quod repudiandae rerum saepe sapiente sint sunt tempore temporibus voluptatibus?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi minima, odio qui quia sapiente sequi voluptas. Architecto, aspernatur blanditiis dolor explicabo facere maiores necessitatibus quos repellendus sunt, ullam veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur corporis debitis error esse fugit incidunt ipsum itaque iure nihil odit placeat possimus quia quod repellendus reprehenderit repudiandae saepe, sit vel.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, asperiores aspernatur, consectetur consequuntur distinctio eos est et facere molestiae necessitatibus non odit quae quam quasi quia ratione repellendus vero.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, consectetur consequuntur cum deleniti dolore dolorum exercitationem illum incidunt ipsum natus necessitatibus nisi perferendis saepe tempora veniam veritatis voluptatum. Amet, doloremque.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda culpa dolores enim esse ex id laudantium libero magni provident quae quis recusandae saepe sit temporibus tenetur ullam, ut veritatis.

                    <!-- card event 42 -->
                    {{--                    @foreach($Gallery as $Gall)--}}
                    {{--                        <div  class="col-sm-6 mb-5">--}}
                    {{--                            <div class="card-event ">--}}
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
                            <a href="https://placeholder.com">
                                <img src="https://i.pinimg.com/736x/84/12/71/8412715b792dc8e26f384ce8d26e8304.jpg"></a>
                            <div class=" ml-5 row">
                                <span>name lastname</span>
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
