@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('posts.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="title" class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group ">
                                <label for="category" class="label">{{ __('Category') }}</label>

                                    <select  id="category" name="category" type="email" class="form-control @error('month') is-invalid @enderror" required autocomplete="email">
                                        <option selected>Category</option>
                                        <option value="culture">Culture</option>
                                        <option value="life">life</option>
                                        <option value="solidarity">Solidarity</option>
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
                </div>
            </div>
        </div>
    </div>

@endsection
