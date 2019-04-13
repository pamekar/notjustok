@extends('layouts.app')
@section('title','Records')
@section('styles')
    <link rel="stylesheet" href="/css/datatables.bootstrap4.css">
    <link rel="stylesheet" href="/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
    <script>
        const ajaxURL = "{{route('records.json')}}";
        const columns = [
            {name: 'id'},
            {name: 'upload.batch_code'},
            {name: 'isrc'},
            {name: 'artist'},
            {name: 'product_title'},
            {name: 'container_title'},
            {name: 'label'},
            {name: 'country'},
            {name: 'total_plays'},
            {name: 'revenue'},
            {name: 'start_at'},
            {name: 'end_at'},
        ];
        const serverSide = true;
    </script>
@endsection
@section('content')
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Records</h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons display responsive">
                <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">#</th>
                    <th>Batch Code</th>
                    <th>ISRC</th>
                    <th>Artist</th>
                    <th>Product Title</th>
                    <th>Container Title</th>
                    <th>Label</th>
                    <th>Country</th>
                    <th>Total Plays</th>
                    <th>Revenue</th>
                    <th>Start At</th>
                    <th>End At</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/jquery.datatables.min.js"></script>
    <script src="/js/datatables.bootstrap4.min.js"></script>
    <script src="/js/datatables.buttons.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.flash.min.js"></script>
    <script src="/js/buttons.colvis.min.js"></script>
    <script src="/js/dataTables.responsive.min.js"></script>
    <script src="/js/responsive.bootstrap4.min.js"></script>
    <script src="/js/be_tables_datatables.min.js"></script>
@endsection