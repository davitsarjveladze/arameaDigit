@extends('admin.views.layouts.app')

@section('content')
    @include('admin.views.layouts.headers.guest')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3 class="mb-0">Contact</h3>
                            </div>
                            <div class="col-lg-6 ">
                                <b>subject: </b>{{$contact[0]->subject}}
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <b>Name:</b>{{$contact[0]->name}}
                            </div>
                            <div class="col-lg-6 text-end">
                                <b>date</b> {{$contact[0]->created_at}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <b>Email </b>{{$contact[0]->email}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <p>{{$contact[0]->text}}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        @include('admin.views.layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
