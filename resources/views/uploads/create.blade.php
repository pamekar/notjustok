@extends('layouts.app')
@section('title','New Upload')
@section('styles')
    <link rel="stylesheet" href="/css/datatables.bootstrap4.css">
    <link rel="stylesheet" href="/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/responsive.bootstrap4.min.css">
    <script>
        const ajaxURL = null;
        const columns = null;
        const serverSide = false;
    </script>
@endsection
@section('content')
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Upload
                <small>(xls, xlsx, csv, tsv only)</small>
            </h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('uploads.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-5">
                        <p class="text-muted">
                            Pleas select a file you wish to upload.<br>The only accepted file formats are xls, xlsx,
                            csv, tsv. Any other file format will not be accepted.<br>
                            <strong><em>Make sure the column data are arranged in the right order and format. See the
                                    table below for an illustration.</em><br>Feel free to copy or download the example
                                as a structure for your upload.</strong>
                        </p>
                        <p class="text-muted">
                            <strong>
                                If the <em>First row is header</em> checkbox is checked, make sure the header are same
                                with the table below.<br> If the <em>First row is header</em> checkbox is not checked,
                                make sure the columns are arranged in the same order as the table below.<br>
                                <small>Do these, and errors will be far from you :)</small>
                            </strong>
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label for="text-input">File Title</label>
                            <input class="form-control" id="text-input" name="title" placeholder="Text Input"
                                   type="text">
                        </div>
                        <div class="form-group">
                            <label>Select File
                                <small class="text-muted">xls, xlsx, csv, tsv</small>
                            </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                       id="file-input-custom" name="records" accept=".csv, .tsv, .xls, .xlsx">
                                <label class="custom-file-label" for="file-input-custom">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textarea-input">Description</label>
                            <textarea class="form-control" id="textarea-input" name="description" rows="4" placeholder="Describe the file here..."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="checkbox-custom1" name="first_row_header"
                                       type="checkbox" checked>
                                <label class="custom-control-label" for="checkbox-custom1">First row is header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-8 table-responsive">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons-upload">
                        <thead>
                        <tr>
                            <th class="text-center">ISRC</th>
                            <th class="text-center">Artist</th>
                            <th class="text-center">Product Title</th>
                            <th class="text-center">Container Title</th>
                            <th class="text-center">Label</th>
                            <th class="text-center">Country</th>
                            <th class="text-center">Total Plays</th>
                            <th class="text-center">Revenue</th>
                            <th class="text-center">Start At</th>
                            <th class="text-center">End At</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>QZ2GW1600363</td>
                            <td>Skales</td>
                            <td>Temper</td>
                            <td>Temper</td>
                            <td>Baseline Music</td>
                            <td>ZA</td>
                            <td>27</td>
                            <td>0</td>
                            <td>2018-12-01</td>
                            <td>2019-05-09</td>
                        </tr>
                        <tr>
                            <td>QZ2GW1600363</td>
                            <td>Skales</td>
                            <td>Temper</td>
                            <td>Temper</td>
                            <td>Baseline Music</td>
                            <td>ZA</td>
                            <td>325</td>
                            <td>1</td>
                            <td>2018-12-19</td>
                            <td>2019-06-09</td>
                        </tr>
                        <tr>
                            <td>QZ2GW1800281</td>
                            <td>B Red, Duncan Mighty</td>
                            <td>Uju (Remix)</td>
                            <td>Uju (Remix)</td>
                            <td>HKN Music</td>
                            <td>US</td>
                            <td>11</td>
                            <td>0</td>
                            <td>2018-11-01</td>
                            <td>2019-02-11</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 table-responsive">
                    <table class="table">
                        <tr>
                            <th>ISRC</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Artist</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Product Title</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Container Title</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Label</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Total Plays</th>
                            <td>Number</td>
                        </tr>
                        <tr>
                            <th>Revenue</th>
                            <td>Number</td>
                        </tr>
                        <tr>
                            <th>Start At</th>
                            <td>Date</td>
                        </tr>
                        <tr>
                            <th>End At</th>
                            <td>Date</td>
                        </tr>
                    </table>
                </div>
            </div>
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