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
                                <h3 class="mb-0">Posts</h3>
                            </div>
                            <div class="col-4 text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Post</button>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Post title</th>
                                <th scope="col">User</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)

                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="mailto:{{$post->email}}">{{$post->email}}</a>
                                    </td>
                                    <td>{{$post->created_at}}</td>
                                    <td>@if($post->confirmed == 1)
                                            <button type="button" class="btn btn-sm btn-success">published</button>
                                        @elseif($post->confirmed == 0)
                                            <button type="button" class="btn btn-sm btn-warning">pending</button>
                                        @else
                                            <button type="button" class="btn btn-sm btn-danger">rejected</button>
                                        @endif
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('profile.edit')}}">Edit</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2 d-flex justify-content-center">
                        {{$posts}}

                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

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
                        <form method="post" enctype="multipart/form-data" action="{{Route('adm.posts.store')}}">
                            <div class="form-group">
                                @csrf
                                <label for="title" class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group ">
                                <label for="category" class="label">{{ __('Category') }}</label>

                                <select  id="category" name="category" type="email" class="form-control @error('month') is-invalid @enderror" required autocomplete="email">
                                    <option selected>Category</option>
                                    <option value="1">Culture</option>
                                    <option value="2">life</option>
                                    <option value="3">Solidarity</option>
                                </select>
                                @error('month')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="label"> {{__('Post Image')}}</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="label">Post Body: </label>

                                <textarea class="body" name="body"></textarea>
                                <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                                <script>
                                    tinymce.init({
                                        selector:'textarea.body',
                                    });
                                </script>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" >
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" >
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
