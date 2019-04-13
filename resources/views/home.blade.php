@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="block block-bordered">
        <div class="block-content">
            <div class="px-sm-3 pt-sm-3 clearfix" style="min-height: 260px;">
                <i class="fa fa-chart-line fa-2x text-gray-light float-right"></i>
                <p class="display-4 text-black font-w300 mb-2">
                    {{$records->count()}} <span class="font-size-h5 font-w600 text-muted">Rows of record</span>
                </p>
                <p class="text-muted w-75">
                    You've uploaded <strong>{{$uploads->count()}}</strong> files with a total of
                    <strong>{{$records->count()}}</strong> records. You
                    seem to be doing great, so keep it up!
                </p>
                <a class="btn btn-hero-sm btn-outline-primary btn-square mr-1 mb-1"
                   href="{{route('records.index')}}">
                    <i class="fa fa-list-alt fa-fw mr-1"></i> View Records
                </a>
                <a class="btn btn-hero-sm btn-outline-primary btn-square mr-1 mb-1"
                   href="{{route('uploads.create')}}">
                    <i class="fa fa-plus-square fa-fw mr-1"></i> New Upload
                </a>
            </div>
        </div>
        <div class="block-content p-1 overflow-hidden">
                    <span class="js-sparkline" data-type="line"
                          data-points="{{json_encode($uploads->pluck('row_count'))}}"
                          data-width="100%"
                          data-height="189px"
                          data-chart-range-min="320"
                          data-fill-color="rgba(6,101,208,.1)"
                          data-spot-color="transparent"
                          data-min-spot-color="transparent"
                          data-max-spot-color="transparent"
                          data-highlight-spot-color="#0665d0"
                          data-highlight-line-color="#0665d0"
                          data-tooltip-suffix="rows"></span>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/jquery.sparkline.min.js"></script>
    <script>
        jQuery(function () {
            Dashmix.helpers('sparkline');
        });
    </script>
@endsection