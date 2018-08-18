@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Edit <small>Periode</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form Edit Periode</div>
                    <div class="panel-body">

                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/periode', $periode->id) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="PUT">
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama_periode" value="{{ $periode->nama_periode }}" placeholder="{{ $periode->nama_periode }}" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date Start</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date_start" value="{{ $periode->date_start }}" placeholder="{{ $periode->date_start }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date End</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date_end" value="{{ $periode->date_end }}" placeholder="{{ $periode->date_end }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Active</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="isActive" style="width:100%;">
                                        <option
	                                        @if ($periode->isActive == 1)
	                                                selected="selected" value="1">Active
	                                        @else
	                                        	value="1">Active
	                                       	@endif
                                       	</option>
                                       	<option
	                                        @if ($periode->isActive == 0)
	                                                selected="selected" value="0">Non-active
	                                        @else
	                                        	value="0">Non-active
	                                       	@endif
                                       	</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/periode') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-ok"></span> Update
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