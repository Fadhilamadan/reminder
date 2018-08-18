@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Edit <small>Matakuliah</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form Edit Matakuliah</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/matakuliah', $matakuliah->id) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Matakuliah ID</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="id_matakuliah" value="{{ $matakuliah->id_matakuliah }}">
                                    <input type="text" disabled class="form-control" value="{{ $matakuliah->id_matakuliah }}">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" value="{{ $matakuliah->name }}" placeholder="{{ $matakuliah->name }}" required="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Active</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="isActive" style="width:100%;">
                                        <option
	                                        @if ($matakuliah->isActive == 1)
	                                                selected="selected" value="1">Active
	                                        @else
	                                        	value="1">Active
	                                       	@endif
                                       	</option>
                                       	<option
	                                        @if ($matakuliah->isActive == 0)
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
                                    <a href="{{ URL::to('/matakuliah') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-ok"></span> Update
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/matakuliah') }}" style="color: inherit;">
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