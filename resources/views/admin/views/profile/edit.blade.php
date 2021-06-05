@extends('admin.views.layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('admin.views.users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])
    {{$user}}

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <a class="mx-2" href="{{route('home')}}">
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Posts') }}</span>
                                    </a>
                                    <a class="mx-2" href="{{route('home')}}">
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </a>
                                    <a class="mx-2" href="{{route('home')}}">
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, 27</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Profile info') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label mr-2" for="input-name">{{ __('Name') }}</label>
                                    {{auth()->user()->name}}

                                </div>
                                <div class="form-group">
                                    <label class="mr-2 form-control-label" for="input-email">{{ __('Email') }}</label>
                                    {{auth()->user()->email}}
                                </div>
                                <div class="form-group">
                                    <label class="mr-2 form-control-label" for="input-email">{{ __('Birth Date') }}</label>
                                    {{auth()->user()->birth_day . '-'. auth()->user()->birth_month .'-'.auth()->user()->birth_year }}
                                </div>

                            </div>
                        </div>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>

        @include('admin.views.layouts.footers.auth')
    </div>
@endsection
