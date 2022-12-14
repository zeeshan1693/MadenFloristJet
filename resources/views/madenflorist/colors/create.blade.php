@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Add Color</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name in English</label>
                                    <input type="text" name="name_en" class="form-control" placeholder="Enter the name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name in Arabic</label>
                                    <input type="text" name="name_ar" class="form-control" placeholder="Enter the name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Hex Color</label>
                                    <input class="form-control" type="color" name="head" value="#e66465">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('colors.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                            <button type="Submit" class="btn btn-maden">Add Color</button>
                        </div>
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