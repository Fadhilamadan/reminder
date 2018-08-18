@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Create <small>Dosen</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form New Dosen</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ URL::to('/dosen') }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-3 control-label">NPK</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="npk" placeholder="NPK" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Photo</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/*" class="filestyle" data-buttonname="btn-default" name="photo">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Accept KP / TA</label>
                                <div class="col-md-9">
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1" name="acceptKP" checked>
                                        <label for="inlineCheckbox1">Kerja Praktek</label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option1" name="acceptTA" checked>
                                        <label for="inlineCheckbox2">Tugas Akhir</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="isActive" value="1">
                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/dosen') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-plus"></span> Create
                                        </button>
                                    </a>
                                    <a href="{{ URL::to('/dosen') }}" style="color: inherit;">
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