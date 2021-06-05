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
                                    <h3 class="mb-0">Galleries</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add photo</button>
                                </div>
                            </div>
                        </div>



                        <div class="table-responsive">
                            <div class="container">
                                <hr class="mt-2 mb-2">
                                <div class="row text-center text-lg-left">
                                    @foreach($photos as $photo)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div>
                                            <b><i class="ni ni-circle-08 "></i> </b>{{$photo->author}}
                                            <button type="button" onclick="event.preventDefault();
                                                     document.getElementById('d{{$photo->id}}').submit();" class="btn btn-sm btn-outline-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <a href="#" class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="{{asset($photo->img_url)}}" alt="">
                                        </a>
                                    </div>
                                        <form id="d{{$photo->id}}" action="{{ route('adm.photo.delete') }}" method="POST" style="display: none;">
                                            @csrf
                                            <input type="hidden" value="{{$photo->id}}" name="id">
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-center" aria-label="...">

                                {{$photos}}

                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="{{Route('adm.photo.store')}}">
                            <div class="form-group">
                                @csrf
                                <label for="title" class="label">Author name </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <input type="hidden" value="{{Request::segment(3)}}" name="gallery_id">

                            <div class="form-group">
                                <label class="label"> {{__('Post Image')}}</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            {{--                            <div class="form-group">--}}
                            {{--                                <input type="submit" class="btn btn-success" >--}}
                            {{--                            </div>--}}
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
    @include('admin.views.layouts.footers.auth')

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script >
        function DeletePhoto(id) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", '/adm/photo/delete', true);
            xhr.send("id="+id);
        }
    </script>
@endpush
