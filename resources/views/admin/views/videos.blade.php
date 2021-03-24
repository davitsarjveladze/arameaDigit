@extends('admin.views.layouts.app')

@section('content')
    @include('admin.views.layouts.headers.guest')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Videos</h3>
                            </div>
                            <div class="col-4 text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add vidoes</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                       <tr>
                                     <th scope="col">Name</th>
                                <th scope="col">Image category</th>
                                <th scope="col">status</th>
                                <th scope="col">Gallery Img</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Video as $gall)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <div data-toggle="modal" data-target=".222" onclick="myFunction({{asset($gall->video_url)}})" class="mb-0 text-sm">{{$gall->tittle}}</div>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    {{$gall->category}}
                                </td>
                                <td>
                                    @if($gall->status == 1)
                                        <button type="button" class="btn btn-sm btn-success">published</button>
                                    @elseif($gall->status == 0)
                                        <button type="button" class="btn btn-sm btn-warning">pending</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-danger">rejected</button>
                                    @endif
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder"
                                                 src="{{asset($gall->img_url)}}"
                                                 class="rounded-circle">
                                        </a>
                                    </div>

                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                           <button class="dropdown-item" type="button" href="/adm/gallerydetail/{{$gall->id}}" >Show</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="modal fade 222"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="container2">
{{--                                        <video  controls>--}}
{{--                                            <source id="2222" src="" type="video/mp4">--}}
{{--                                        </video>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function myFunction(url) {
                                var expandImg = document.getElementById("2222");
                                expandImg.src = url;
                            }
                        </script>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="...">
                            {{$Video}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.views.layouts.footers.auth')

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="{{Route('adm.video.store')}}">
                            <div class="form-group">
                                @csrf
                                <label for="title" class="label">Video title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="category" class="label">Video category: </label>
                                <input type="text" name="category" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="galleryName" class="label">gallery Name: </label>
                                <input type="text" name="galleryName" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label"> {{__('Video Image')}}</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="label"> {{__('Video')}}</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            {{--                            <div class="form-group">--}}
                            {{--                                <input type="submit" class="btn btn-success" >--}}
                            {{--                            </div>--}}
                            <div class="form-group">
                                <label for="NON">{{__('For now')}}</label>
                                <input type="checkbox" name="NON" id="NON">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" >
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
