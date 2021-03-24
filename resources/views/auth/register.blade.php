@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
