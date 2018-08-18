@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2 class="header-title">
        Edit <small>Dosen</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">Form Edit Dosen</div>
                    <div class="panel-body">
                        <form method="POST" class="form-horizontal" role="form" action="{{ route('dosen.update', $dosen->id) }}" enctype="multipart/form-data">
                            {{ method_field("PUT") }} {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-3 control-label">NPK</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="npk" value="{{ $dosen->npk }}">
                                    <input type="text" disabled class="form-control" value="{{ $dosen->npk }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" placeholder="{{ $dosen->name }}" value="{{ $dosen->name }}" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <?php 
                                        $password = $dosen->password;
                                        $cryptKey = 'qJB0rGtIn5UB1xG03efyCp';
                                        $password = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $password ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
                                    ?>
                                    <input type="password" class="form-control" name="password" placeholder="<?php echo $password ?>" value="<?php echo $password ?>" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Active</label>
                                <div class="col-md-9">
                                    <select class="btn btn-default dropdown-toggle" data-toggle="dropdown" name="isActive" style="width:100%;">
                                        <option
	                                        @if ($dosen->isActive == 1)
	                                                selected="selected" value="1">Active
	                                        @else
	                                        	value="1">Active
	                                       	@endif
                                       	</option>
                                       	<option
	                                        @if ($dosen->isActive == 0)
	                                                selected="selected" value="0">Non-active
	                                        @else
	                                        	value="0">Non-active
	                                       	@endif
                                       	</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Photo</label>
                                <div class="col-md-9">
                            		@if($dosen->photo)
                                    	<image src="{{ asset('uploads/' . $dosen->npk . '.' . $dosen->photo) }}" style="width:300px; height:300px;">
                            		@else
                            			<image src="{{ asset('uploads/unknown.jpg') }}" style="width:300px; height:300px;">
                                	@endif
                                	<br/><br/>
                                    <input type="file" accept="image/*" class="form-control filestyle" name="photo">
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-3 control-label">Accept KP / TA</label>
                                <div class="col-md-9">
                                    <label class="checkbox-inline"><input type="checkbox" name="acceptKP" 
                                    @if($dosen->acceptKP == 1)
                                    	checked>
                                   	@else
                                   		>
                                   	@endif
                                   		KP</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="acceptTA"
                                    @if($dosen->acceptTA == 1)
                                    	checked>
                                   	@else
                                   		>
                                   	@endif
                                   		TA</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{ URL::to('/dosen') }}" style="color: inherit;">
                                        <button type="submit" class="btn btn-success preview-add-button">
                                            <span class="glyphicon glyphicon-ok"></span> Update
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