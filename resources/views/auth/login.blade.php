@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest', ['infoLogin' => 1])

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="card-header mx-auto" align="center">
                            <span> <img src="{{ asset('argon') }}/img/brand/myaims-login-logo-red.png" class="w-75" alt="Logo"> </span><br/>
                            <span class="logo_title mt-5"> Sign In to MyAIMS </span><br>
                            <span class="logo_title mt-0"> <small><em>*For Registered User Only & Not For Student </em></small></span>
                            <!--            <h1>--><?php //echo $message?><!--</h1>-->

                        </div>

                        {{--<div class="text-muted text-center mt-2 mb-3"><small>{{ __('Sign in with') }}</small></div>--}}
                        {{--<div class="btn-wrapper text-center">--}}
                            {{--<a href="#" class="btn btn-neutral btn-icon">--}}
                                {{--<span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/github.svg"></span>--}}
                                {{--<span class="btn-inner--text">{{ __('Github') }}</span>--}}
                            {{--</a>--}}
                            {{--<a href="#" class="btn btn-neutral btn-icon">--}}
                                {{--<span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>--}}
                                {{--<span class="btn-inner--text">{{ __('Google') }}</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>
                                                <strong>{{ $error }}</strong>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    {{-- <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Email') }}" type="email" name="email"
                                           value="" required autofocus> --}}
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Email') }}" name="email"
                                           value="" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Sign in') }}</button>
                                <a href="/sso" class="btn btn-primary my-4">SSO</a>
                            </div>
                        </form>
                    </div>
                </div>
{{--                <div class="row mt-3">--}}
{{--                    <div class="col-6">--}}
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a href="{{ route('password.request') }}" class="text-light">--}}
{{--                                <small>{{ __('Forgot password?') }}</small>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="col-6 text-right">--}}
{{--                        <a href="{{ route('register') }}" class="text-light">--}}
{{--                            <small>{{ __('Create new account') }}</small>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
