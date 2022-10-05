@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Colors</h1>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="text-right">
                    <a href="{{ route('colors.create') }}"><button type="button" class="btn btn-maden">Add Color</button></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>English Name</th>
                                    <th>Arabic Name</th>
                                    <th>Hex Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Red</td>
                                    <td>Red</td>
                                    <td>
                                        <span class="color-box" style="background-color:red"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Green</td>
                                    <td>Green</td>
                                    <td>
                                        <span class="color-box" style="background-color:green"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Blue</td>
                                    <td>Blue</td>
                                    <td>
                                        <span class="color-box" style="background-color:blue"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>Gray</td>
                                    <td>Gray</td>
                                    <td>
                                        <span class="color-box" style="background-color:gray"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Blue</td>
                                    <td>Blue</td>
                                    <td>
                                        <span class="color-box" style="background-color:blue"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Red</td>
                                    <td>Red</td>
                                    <td>
                                        <span class="color-box" style="background-color:red"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Green</td>
                                    <td>Green</td>
                                    <td>
                                        <span class="color-box" style="background-color:green"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Gray</td>
                                    <td>Gray</td>
                                    <td>
                                        <span class="color-box" style="background-color:gray"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Blue</td>
                                    <td>Blue</td>
                                    <td>
                                        <span class="color-box" style="background-color:blue"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Red</td>
                                    <td>Red</td>
                                    <td>
                                        <span class="color-box" style="background-color:red"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Gray</td>
                                    <td>Gray</td>
                                    <td>
                                        <span class="color-box" style="background-color:gray"></span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('colors.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-styles')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('page-script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@stop