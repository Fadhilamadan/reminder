@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Create <small>Periode</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form New Periode</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/periode') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama_periode" placeholder="Name" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date Start</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date_start" value="<?php echo date("Y-m-d");?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date End</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date_end" value="<?php echo date("Y-m-d");?>">
                                </div>
                            </div>
                            <input type="hidden" name="isActive" value="1">
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/periode') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-plus"></span> Create
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/periode') }}" style="color: inherit;">
                                        <button type="button" class="btn btn-warning preview-add-button">
                                            <span class="glyphicon glyphicon-remove"></span> Cancel
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection