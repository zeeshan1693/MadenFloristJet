@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Categories</h1>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="text-right">
                    <a href="{{ route('categories.create') }}"><button type="button" class="btn btn-maden">Add New Category</button></a>
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
                                    <th>Seperate</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches11" checked>
                                            <label class="custom-control-label" for="customSwitches11">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>Flower Bouquet</td>
                                    <td>Flower Bouquet</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches10">
                                            <label class="custom-control-label" for="customSwitches10">Banned</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Flower Boxes</td>
                                    <td>Flower Boxes</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches1" checked>
                                            <label class="custom-control-label" for="customSwitches1">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>New Arrivals</td>
                                    <td>New Arrivals</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches2" checked>
                                            <label class="custom-control-label" for="customSwitches2">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Test Category</td>
                                    <td>Test Category</td>
                                    <td>Yes</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches3" checked>
                                            <label class="custom-control-label" for="customSwitches3">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches4" checked>
                                            <label class="custom-control-label" for="customSwitches4">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches5" checked>
                                            <label class="custom-control-label" for="customSwitches5">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>08</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches6" checked>
                                            <label class="custom-control-label" for="customSwitches6">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>09</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches7" checked>
                                            <label class="custom-control-label" for="customSwitches7">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches8" checked>
                                            <label class="custom-control-label" for="customSwitches8">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
                                            <a href="#"><button type="button" class="btn btn-outline-dark"><i class="fa fa-trash-alt text-danger" aria-hidden="true"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Flower Vases</td>
                                    <td>Flower Vases</td>
                                    <td>No</td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches9" checked>
                                            <label class="custom-control-label" for="customSwitches9">Allowed</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('categories.edit',1) }}"><button type="button" class="btn btn-outline-dark"><i class="fa fa-pencil-alt custom-text-info" aria-hidden="true"></i></button></a>&nbsp;
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