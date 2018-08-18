@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Create <small>Kerja Praktek</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form New Kerja Praktek</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/kerja_praktek') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" placeholder="Title" required="true">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mahasiswa 1</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="mahasiswa_satu_id" style="width:100%;">
                                        @foreach ($mahasiswa as $key => $value)
                                            <option value="{{ $value->id }}">
                                                {{ $value->nrp . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mahasiswa 2</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="mahasiswa_dua_id" style="width:100%;">
                                        @foreach ($mahasiswa as $key => $value)
                                            <option value="{{ $value->id }}">
                                                {{ $value->nrp . ' - ' . $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Dosen</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="dosen_id" style="width:100%;">
                                        @foreach ($dosen as $key => $value)
                                            <option value="{{ $value->id }}">
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
                                            <option value="{{ $value->id }}">
                                                {{ $value->nama_periode }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="isActive" value="1">
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/kerja_praktek') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-plus"></span> Create
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/kerja_praktek') }}" style="color: inherit;">
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