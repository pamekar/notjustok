@extends('layouts.app')
@section('title','Javascript Records')
@section('styles')
    <link rel="stylesheet" href="/css/datatables.bootstrap4.css">
    <link rel="stylesheet" href="/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
    <script>
        const ajaxURL = "{{route('uploads.json')}}";
        const columns = [
            {name: 'id'},
            {name: 'batch_code'},
            {name: 'title'},
            {name: 'description'},
            {name: 'row_count'},
            {name: 'created_at'}
        ];
        const serverSide = true;
    </script>
@endsection
@section('content')
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Uploads</h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons display responsive">
                <thead>
                <tr>
                    <th class="text-center" style="width: 80px;">#</th>
                    <th>Batch Code</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Row Count</th>
                    <th>Created At</th>
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