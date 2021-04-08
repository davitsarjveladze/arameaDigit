@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Translation <span class="btn btn-primary">{{ $id }}</span></div>

                    <div class="card-body">
                        <SiteHeader
                                :translation_id="{{ $id }}"
                        ></SiteHeader>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection