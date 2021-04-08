@extends('layouts.app')

@section('content')
    <div class="content container">
        <h2 class="h2-home">Ads price
            <button onclick="ShowAd('Magazine','site')" class="ml-1 btn btn-lg btn-primary">Magazine</button>
            <button onclick="ShowAd('site','Magazine')" class="btn btn-lg btn-primary">Site</button>
        </h2>
        <div  id="Magazine">
            <div class="alert alert-primary mb-2" role="alert">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam deleniti dolore doloribus est et eum incidunt, iusto magni molestiae natus, nisi quae
            </div>
        <img src="{{asset('images/SiteImgs/gazad.png')}}" alt="">
        </div>
        <div style="display: none" id="site">
            <div class="alert alert-primary mb-2" role="alert">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam deleniti dolore doloribus est et eum incidunt, iusto magni molestiae natus, nisi quae
            </div>
            asddddddddddddddddddddddddddd
        </div>
    </div>
    <script>
        function ShowAd(Show,hide) {
            document.getElementById(Show).style = 'display: block';
            document.getElementById(hide).style = 'display: none';
        }
    </script>
@endsection
