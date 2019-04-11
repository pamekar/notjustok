@extends('layouts.auth')
@section('title','Sign In')
@section('content')
    <div class="col-md-6 order-md-1 bg-white">
        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="mb-2 text-center">
                <a class="link-fx font-w700 font-size-h1" href="{{url('/')}}">
                    <span class="text-dark">not</span><span class="text-primary">justok</span>
                </a>
                <p class="text-uppercase font-w700 font-size-sm text-muted">@yield('title')</p>
            </div>
            <form class="js-validation-signin" action="https://demo.pixelcave.com/dashmix/be_pages_auth_all.html" method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-alt" id="login-username" name="login-username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-alt" id="login-password" name="login-password" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-hero-primary">
                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                    </button>
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
                        Amazing framework with tons of options! It helped us build our project!
                    </p>
                    <a class="text-white-75 font-w600" href="javascript:void(0)">Jesse Fisher, Web Developer</a>
                </div>
            </div>
        </div>
    </div>
@endsection
