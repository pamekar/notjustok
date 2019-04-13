<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title') - {{config('app.name')}}</title>
    <meta name="description" content="{{config('app.name')}}">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="{{config('app.name')}}">
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:description" content="{{config('app.name')}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="/png/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/png/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/png/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="/css/css1f05.css?family=Nunito+Sans:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="/css/dashmix.min-1.1.css">
    @yield('styles')
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'js/analytics.js', 'ga');
        ga('create', 'UA-16158021-6', 'auto');
        ga('send', 'pageview');</script>
</head>
<body>
<div id="page-container" class="enable-page-overlay side-scroll main-content-boxed">
    <aside id="side-overlay">
        <div class="bg-primary">
            <div class="content-header">
                <a class="img-link mr-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="/jpg/avatar2.jpg" alt="">
                </a>
                <div class="ml-2">
                    <a class="text-white font-w600" href="javascript:void(0)">{{Auth::user()->name}}</a>
                </div>
                <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout"
                   data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{route('home')}}">
                        <i class="nav-main-link-icon si si-cup"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Application</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('uploads.index')}}">
                        <i class="nav-main-link-icon si si-cloud-upload"></i>
                        <span class="nav-main-link-name">Uploads</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('uploads.create')}}">
                        <i class="nav-main-link-icon si si-plus"></i>
                        <span class="nav-main-link-name">New Upload</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('records.index')}}">
                        <i class="nav-main-link-icon si si-docs"></i>
                        <span class="nav-main-link-name">Records</span>
                    </a>
                </li>
                <li class="nav-main-heading">Personal</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('accounts')}}">
                        <i class="nav-main-link-icon si si-user"></i>
                        <span class="nav-main-link-name">Account</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('settings')}}">
                        <i class="nav-main-link-icon si si-settings"></i>
                        <span class="nav-main-link-name">Settings</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="nav-main-link-icon si si-arrow-left"></i>
                        <span class="nav-main-link-name">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    <header id="page-header">
        <div class="content-header">
            <div>
                <a class="link-fx font-size-lg text-dual" href="{{route('welcome')}}">
                    <span class="font-w700 text-dual">parse</span><span class="font-w300">isok</span>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-sm btn-dual d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i>
                </button>
                <form class="form-inline d-none d-md-inline-block mr-2"
                      action="{{route('search')}}" method="get">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-alt" placeholder="Search.."
                               id="page-header-search-input2" name="page-header-search-input2">
                        <div class="input-group-append">
                        <span class="input-group-text border-0 bg-body">
                            <i class="fa fa-fw fa-search"></i>
                        </span>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn btn-sm btn-dual" data-toggle="layout"
                        data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="javascript:void(0)" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" data-toggle="layout"
                                    data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin"></i>
                </div>
            </div>
        </div>
    </header>
    <main id="main-container">
        <div class="bg-body-light border-top border-bottom">
            <div class="content content-full py-1">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-sm text-uppercase font-w700 mt-2 mb-0 mb-sm-2">
                        <i class="fa fa-angle-right fa-fw text-primary"></i> Welcome {{Auth::user()->name}}
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3 font-size-sm" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <a class="block block-bordered text-center d-sm-none" href="javascript:void(0)" data-toggle="class-toggle"
               data-target=".js-classic-nav" data-class="d-none d-sm-block">
                <div class="block-content block-content-full text-center">
                    <div class="font-w600 text-uppercase">
                        <i class="fa fa-bars mr-1"></i> Navigation
                    </div>
                </div>
            </a>
            <div class="block block-bordered js-classic-nav d-none d-sm-block">
                <div class="block-content block-content-full">
                    <div class="row no-gutters border">
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                            <a class="block block-bordered block-link-pop text-center mb-0" href="{{route('home')}}">
                                <div class="block-content block-content-full text-center">
                                    <i class="fa fa-2x fa-home text-primary d-none d-sm-inline-block mb-3"></i>
                                    <div class="font-w600 text-uppercase">Home</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                            <a class="block block-bordered block-link-pop text-center mb-0"
                               href="{{route('uploads.index')}}">
                                <div class="block-content block-content-full text-center">
                                    <i class="fa fa-2x fa-cloud-upload-alt text-primary d-none d-sm-inline-block mb-3"></i>
                                    <div class="font-w600 text-uppercase">Uploads</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                            <a class="block block-bordered block-link-pop text-center mb-0"
                               href="{{route('uploads.create')}}">
                                <div class="block-content block-content-full text-center">
                                    <i class="fa fa-2x fa-upload text-primary d-none d-sm-inline-block mb-3"></i>
                                    <div class="font-w600 text-uppercase">New Upload</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
                            <a class="block block-bordered block-link-pop text-center mb-0"
                               href="{{route('records.index')}}">
                                <div class="block-content block-content-full text-center">
                                    <i class="fa fa-2x fa-database text-primary d-none d-sm-inline-block mb-3"></i>
                                    <div class="font-w600 text-uppercase">Records</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 invisible" data-toggle="appear">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <footer id="page-footer" class="bg-body-light border-top">
        <div class="content py-3">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600"
                                                                               href="https://github.com/pamekar"
                                                                               target="_blank">pamekar</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                    <a class="font-w600" href="{{route('welcome')}}" target="_blank">notjustok 1.1</a> &copy; <span
                            data-toggle="year-copy">{{date('Y')}}</span>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="/js/dashmix.core.min-1.1.js"></script>
<script src="/js/dashmix.app.min-1.1.js"></script>

@if(null!==session('notification'))
    <script src="/js/bootstrap-notify.min.js"></script>
    <script>
        jQuery(function () {
            Dashmix.helpers('notify', {
                type:    '{{session('notification')['type']}}',
                icon:    'fa fa-check mr-1',
                message: '{{session('notification')['message']}}'
            });
        });
    </script>
@endif
@yield('scripts')
</body>
</html>