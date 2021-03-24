@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="content container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h2-home">Last Posts</h2>
                    </div>
                </div>
                <div class="row ">
            @foreach($lastPosts  as $post)
                <div  class="col-md-4 mb-5">
                    <div class="card-event ">
                        <div class="card-event-top">
                            <div class=" card-event-img">
                                <img src="{{asset($post->img_url)}}" class="customers-img no_logo" width="677" height="677" alt="">
                            </div>
                            <div class="card-event-keyword">
                                <a href="Publications.html" class="card-event-keyword-link">
                                    <img src="{{asset($post->user_img)}}" class="rounded-circle" alt="{{$post->name}}" width="40" height="40">
                                    <span>{{ $post->name }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-event-body">
                            <div class="card-event-date">
                                {{$post->created_at}}
                            </div>
                            <div class="card-event-titre">
                                <a href="/posts/show/{{$post->id}}">{{ $post->title }}</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
                </div>
            </div>
            <div class="home-row-2">
                <div class="content container">

                    <div class="row row-cols-1 row-cols-md-3">
                        <!-- card 1 : connecter -->
                        <div class="col-lg-4 mb-4" id="login">
                            <div class="card h-100">
                                <div class="card-body">

                                    <div class="ajax">
                                        <h5 class="card-title">Se connecter</h5>
                                        <div class="card-slot"></div>
                                        <p class="card-text">
                                            Pour commencer, utilisez vos identifiants LOGIN ET MOT DE PASSE
                                        </p>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group ">
                                                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                                <div class="">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label for="password" class="">{{ __('Password') }}</label>

                                                <div class="">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <div class="offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row pl-2 mb-0">
                                                <div class=" ">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>

                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- card: Notre ministère -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="Nos-Ministres.html" class="card-title-link crayon selections_contenu-titre-1 ">Advertisement</a>
                                    </h5>
                                    <div class="card-slot"></div>
                                    <div class="card-text crayon selections_contenu-descriptif-1 "><p> Order advertising with us in many places you can text text for mass more text text ro appear how it looks great text for many textad vertising with us in many places you can text text for mass more text text ro appear how it looks gadvertising with us in many places you can text text for mass more text text ro appear how it looks g need more and more</p></div>
                                    <a href="Nos-Ministres.html" class="btn btn-primary">Order</a>
                                </div>
                            </div>
                        </div>

                        <!-- card: Nos bénévoles -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="Le-Conseil-d-administration-Le-Bureau.html" class="card-title-link crayon selections_contenu-titre-2 ">Nos bénévoles</a>

                                    </h5>
                                    <div class="card-slot"></div>
                                    <div class="card-text crayon selections_contenu-descriptif-2 "><p>Registration<br class="autobr">
                                            To register you can quickly press the button and fill in the fields
                                            To register you can quickly press the button and fill in the fields
                                            To register you can quickly press the button and fill in the fields
                                            To register you can quickly press the button and fill in the fields
                                            Text text for mass more text text ro appear how it looks great text for a lot of text need more and more</p></div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Registration
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Register') }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf

                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="birth_day" class="col-md-4 col-form-label text-md-right">{{ __('Birth Day') }}</label>

                                                            <div class="col-md-6">
                                                                <select  id="birth_day" type="email" class="form-control @error('email') is-invalid @enderror" name="birth_day" required autocomplete="email" >
                                                                    <option selected>Day...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="1">5</option>
                                                                    <option value="1">6</option>
                                                                    <option value="1">7</option>
                                                                    <option value="1">8</option>
                                                                    <option value="1">9</option>
                                                                    <option value="1">10</option>
                                                                    <option value="1">11</option>
                                                                    <option value="1">12</option>
                                                                    <option value="1">13</option>
                                                                    <option value="1">14</option>
                                                                    <option value="1">15</option>
                                                                    <option value="1">16</option>
                                                                    <option value="1">17</option>
                                                                    <option value="1">18</option>
                                                                    <option value="1">19</option>
                                                                    <option value="1">20</option>
                                                                    <option value="1">21</option>
                                                                    <option value="1">22</option>
                                                                    <option value="1">23</option>
                                                                    <option value="1">24</option>
                                                                    <option value="1">25</option>
                                                                    <option value="1">26</option>
                                                                    <option value="1">27</option>
                                                                    <option value="1">28</option>
                                                                    <option value="1">29</option>
                                                                    <option value="1">30</option>
                                                                    <option value="1">31</option>
                                                                </select>
                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="birth_month" class="col-md-4 col-form-label text-md-right">{{ __('Birth month') }}</label>

                                                            <div class="col-md-6">
                                                                <select  id="birth_month" type="email" class="form-control @error('month') is-invalid @enderror" name="birth_month" required autocomplete="email">
                                                                    <option selected>Month...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                                @error('month')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="birth_year" class="col-md-4 col-form-label text-md-right">{{ __('Birth year') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="birth_year" type="number" class="form-control @error('month') is-invalid @enderror" name="birth_year" value="{{ old('birth_year') }}" required autocomplete="email">

                                                                @error('month')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Register') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="Devenir-adherent.html" class="card-title-link crayon selections_contenu-titre-3 ">Bulletin d’adhésion</a>

                                    </h5>
                                    <div class="card-slot"></div>
                                    <div class="card-text crayon selections_contenu-descriptif-3 "><p>Pour adhérer à notre association</p></div>
                                    <a href="Devenir-adherent.html" class="btn btn-primary">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <!-- card: Propositions de lecture -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="nos-propositions-de-lecture.html" class="card-title-link crayon selections_contenu-titre-4 ">Propositions de lecture</a>

                                    </h5>
                                    <div class="card-slot"></div>

                                    <a href="nos-propositions-de-lecture.html" class="btn btn-primary">En savoir plus</a>
                                </div>
                            </div>
                        </div>

                        <!-- card: Les Permanences -->
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="Les-Permanences.html" class="card-title-link crayon selections_contenu-titre-5 ">Les Permanences</a>

                                    </h5>
                                    <div class="card-slot"></div>

                                    <a href="Les-Permanences.html" class="btn btn-primary">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                            </div>


                        <!-- card: Bulletin d&#8217;adhésion -->







                </div>
                    </div>

                </div>
            </div>
{{--            <home-midll></home-midll>--}}
{{--            <Contact></Contact>--}}
        </div>
</div>
@endsection
