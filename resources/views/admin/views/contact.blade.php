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
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Gallery</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">subject</th>
                                <th scope="col">send</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="mb-0 text-sm">{{$contact->name}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td>
                                        {{$contact->email}}
                                    </td>
                                    <td>
                                        {{$contact->subject}}
                                    </td>
                                    <td>
                                        {{$contact->created_at}}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                <a class="dropdown-item" href="/adm/contact/{{$contact->id}}" >Show</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="...">
                            {{$contacts}}
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
                        <form method="post" enctype="multipart/form-data" action="{{Route('adm.gallery.store')}}">
                            <div class="form-group">
                                @csrf
                                <label for="title" class="label">Gallery title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label for="category" class="label">Gallery category: </label>
                                <input type="text" name="category" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label"> {{__('Post Image')}}</label>
                                <input type="file" name="image" class="form-control">
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
