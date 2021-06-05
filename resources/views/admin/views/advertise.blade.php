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
                                <h3 class="mb-0">Adverts</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row col-lg-12">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">watch & listen photo</h5>
                                <p class="card-text">text for <a href="/adbuy">advertise page</a></p>
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bd-modal-lg-about">Change text</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">watch & listen sound</h5>
                                <p class="card-text">Add carousel items for text</p>
                                <a href="/adm/carousel" class="btn btn-sm btn-primary">add items</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title" >watch & listen video</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="/add/advertise" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-center" aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.views.layouts.footers.auth')
    </div>
    <script src="https://cdn.tiny.cloud/1/mg3s1y1vgbo93nd6stmcrda9ngjwicbn4stpfqqy7cj914p2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <div class="modal fade bd-modal-lg-about" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add advertise text</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="{{Route('adm.conf.about')}}">
                        <div class="form-group">
                            @csrf
                        </div>
                        <div class="form-group">
                            <label class="label">magazine alert text</label>
                            <textarea class="body3"  name="magazine_alert"></textarea>
                            <script>
                                tinymce.init({
                                    selector:'textarea.body3',
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="label">site alert text</label>
                            <textarea class="body2"  name="site_alert"></textarea>
                            <script>
                                tinymce.init({
                                    selector:'textarea.body2',
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label class="label">site advert text  </label>
                            <textarea class="body"  name="site_text"></textarea>
                            <script>
                                tinymce.init({
                                    selector:'textarea.body',
                                });
                            </script>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
