@extends('layouts.app')

@section('content')


    <div class="content container">
        <div class="row">
            <div class=" col-md-12" >
                <h2 class="h2-home"><a href="/albums">Photos</a></h2>
                <!-- The four columns -->
                @if(count($photos) !== 0)
                <div class="row">
                    @foreach($photos as $photo)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <img src="{{asset($photo->img_url)}}" alt="Author: {{$photo->author}}" data-toggle="modal" data-target=".bd-example-modal-lg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    @endforeach
                </div>
                @else
                <h2>No photo</h2>
                @endif
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="container2">
                                <img id="expandedImg" style="width:100%">
                                <div id="imgtext"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    function myFunction(imgs) {
                        var expandImg = document.getElementById("expandedImg");
                        var imgText = document.getElementById("imgtext");
                        expandImg.src = imgs.src;
                        imgText.innerHTML = imgs.alt;
                        expandImg.parentElement.style.display = "block";
                    }
                </script>

            </div>
        </div>
    </div>
@endsection
<style>

    /* The grid: Four equal columns that floats next to each other */
    .column2 {
        float: left;
        width: 25%;
        padding: 10px;
    }

    /* Style the images inside the grid */
    .column2 img {
        opacity: 0.8;
        cursor: pointer;
    }

    .column2 img:hover {
        opacity: 1;
    }

    /* Clear floats after the columns */
    .row2:after {
        content: "";
        display: table;
        clear: both;
    }

    /* The expanding image container */
    .container2 {
        position: relative;
        display: none;
    }

    /* Expanding image text */
    #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
    }

    /* Closable button inside the expanded image */

</style>
