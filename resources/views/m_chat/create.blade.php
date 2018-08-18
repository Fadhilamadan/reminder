@extends('layouts.mahasiswa')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Form New Gudang</div>

                    <div class="panel-body">
    					<form class="col-sm-10 col-sm-offset-2" method="POST" action="{{ URL::to('/gudang') }}">
    						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                            <div class="form-group row">
                                <label class="col-sm-3 text-right">Name :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right">Jumlah Kapasitas :</label>
                                <div class="col-sm-5">
                                    <input type="number" class="form-control form-control-lg" name="jumlah_kapasitas" placeholder="Jumlah Stock">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right"></label>
                                <div class="col-sm-5">
                                    <a href="{{ URL::to('/gudang') }}" style="color: inherit;"><input type="submit" value="Create"/></a>
                                    <a href="{{ URL::to('/gudang') }}" style="color: inherit;"><input type="button" value="Cancel"/></a>
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