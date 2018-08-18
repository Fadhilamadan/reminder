@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Edit <small>Tugas Akhir</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form Edit Tugas Akhir</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/tugas_akhir', $tugas_akhir->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="{{ $tugas_akhir->title }}" placeholder="{{ $tugas_akhir->title }}" required="true">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mahasiswa</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="mahasiswa_satu_id" style="width:100%;">
                                        @foreach ($mahasiswa as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($tugas_akhir->mahasiswa_id == $value->id)
	                                                selected="selected">
	                                        @else
	                                        	>
	                                       	@endif
                                                {{ $value->nrp . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Dosen 1</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="mahasiswa_dua_id" style="width:100%;">
                                        @foreach ($dosen as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($tugas_akhir->dosen_satu_id == $value->id)
	                                                selected="selected">
	                                        @else
	                                        	>
	                                       	@endif
                                                {{ $value->npk . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Dosen 2</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="dosen_id" style="width:100%;">
                                        @foreach ($dosen as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($tugas_akhir->dosen_dua_id == $value->id)
	                                                selected="selected">
	                                        @else
	                                        	>
	                                       	@endif
                                                {{ $value->npk . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Periode</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="periode_id" style="width:100%;">
                                        @foreach ($periode as $key => $value)
                                            <option value="{{ $value->id }}"
                                            @if ($tugas_akhir->periode_id == $value->id)
	                                                selected="selected">
	                                        @else
	                                        	>
	                                       	@endif
                                                {{ $value->nama_periode }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Active</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="isActive" style="width:100%;">
                                        <option
	                                        @if ($tugas_akhir->isActive == 1)
	                                                selected="selected" value="1">Active
	                                        @else
	                                        	value="1">Active
	                                       	@endif
                                       	</option>
                                       	<option
	                                        @if ($tugas_akhir->isActive == 0)
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
                                    <a href="{{ URL::to('/tugas_akhir') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-ok"></span> Update
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/tugas_akhir') }}" style="color: inherit;">
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