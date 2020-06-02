@extends('layouts.app', ['page' => __('Login Page')])

@section('content')
    {{--<div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.</h3>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="{{ asset('black') }}/img/card-primary.png" alt="">
                    <h1 class="card-title">{{ __('Log in') }}</h1>
                </div>
                <div class="card-body">
                    --}}{{--<p class="text-dark mb-2">Sign in with <strong>admin@black.com</strong> and the password <strong>secret</strong></p>--}}{{--
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Login') }}</button>
                    --}}{{--<div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot password?') }}</a>
                        </h6>
                    </div>--}}{{--
                </div>
            </div>
        </form>
    </div>--}}
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" action="{{route('login')}}" method="POST">
                    @csrf

                    <span class="login100-form-title p-b-32">
						@lang('ACCOUNT LOGIN')
					</span>

                    @if(!$errors->isEmpty())
                        <span class="txt1 p-b-11 text-danger">
						@lang('Էլեկտրոնային հասցեն/ծածկանունը սխալ է')
					</span>
                    @endif

                    <span class="txt1 p-b-11">
						@lang('Email')
					</span>
                    <div class="wrap-input100 validate-input m-b-36">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        @lang('Password')
					</span>
                    <div class="wrap-input100 validate-input m-b-12">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48">

                    </div>
                    @if(!$errors->isEmpty())
                        <div class="fstx"></div>
                    @endif
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            @lang('Login')
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
