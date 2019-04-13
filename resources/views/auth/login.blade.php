@extends('layouts.auth')
@section('title','Sign In')
@section('content')
    <div class="col-md-6 order-md-1 bg-white">
        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="mb-2 text-center">
                <a class="link-fx font-w700 font-size-h1" href="{{url('/')}}">
                    <span class="text-dark">parse</span><span class="text-success">IsOK</span>
                </a>
                <p class="text-uppercase font-w700 font-size-sm text-muted">@yield('title')</p>
            </div>
            <form class="js-validation-signin" action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <input id="email" type="email"
                           class="form-control-alt{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                           placeholder="Email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password"
                           class="form-control-alt{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password"
                           required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="remember" name="remember" type="checkbox"  {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-hero-primary">
                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                    </button>
                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                        @if (Route::has('password.request'))
                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1"
                               href="{{route('password.request')}}">
                                @endif
                                <i class="fa fa-exclamation-triangle text-muted mr-1"></i> Forgot password
                            </a>
                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{route('register')}}">
                                <i class="fa fa-plus text-muted mr-1"></i> New Account
                            </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="media">
                <a class="img-link mr-3" href="javascript:void(0)">
                    <img class="img-avatar img-avatar-thumb" src="/jpg/avatar15.jpg" alt="">
                </a>
                <div class="media-body">
                    <p class="text-white font-w600 mb-1">
                        Get your fingers busy typing your details. There's much to see beyond here. :)
                    </p>
                    <a class="text-white-75 font-w600" href="javascript:void(0)">Jane Doe, Web Developer</a>
                </div>
            </div>
        </div>
    </div>
@endsection
