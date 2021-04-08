@extends('layouts.app')

@section('content')
    <div class="content container">
        <h2 class="h2-home">
            Press release
        </h2>
        @guest()
        <div>
            <div class="alert alert-warning" role="alert">
                For sending press release please <a href="/login">login</a> or <a href="/register">register</a>
            </div>
        </div>
        @else
            <div>
                <form method="post" enctype="multipart/form-data" action="{{ route('posts.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="title" class="label">Post Title: </label>
                        <input type="text" name="title" class="form-control" required/>
                    </div>
                    <div class="form-group ">
                        <label for="category" class="label">{{ __('Category') }}</label>

                        <select  id="category" name="category" type="email" class="form-control @error('month') is-invalid @enderror" required autocomplete="email">
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
                        <script src="https://cdn.tiny.cloud/1/mg3s1y1vgbo93nd6stmcrda9ngjwicbn4stpfqqy7cj914p2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
        @endguest
    </div>
@endsection
