@extends('layouts.mahasiswa')

@section('content')
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
	                <div class="panel-heading">Manage Gudang</div>

	                <div class="panel-body">
	                    <form method="POST" action="{{ url('/gudang', $gudang->id) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="_method" value="PUT">
		                    <table class="table table-striped">
		                        <thead>
		                            <tr>
		                                <th>ID</th>
		                                <th>Name</th>
		                                <th>Quantity</th>
		                                <th>Action</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                			<tr>
		                				<td> {{ $gudang->id }} </td>
										<td> <input type="text" name="name" value="{{ $gudang->name }}" placeholder="{{ $gudang->name }}"/> </td>
										<td> <input type="text" name="jumlah_kapasitas" value="{{ $gudang->jumlah_kapasitas }}" placeholder="{{ $gudang->jumlah_kapasitas }}"/> </td>
									    <td>
									    	<a href="{{ URL::to('/gudang') }}" style="color: inherit;"><input type="submit" value="Update"/></a>
                                    		<a href="{{ URL::to('/gudang') }}" style="color: inherit;"><input type="button" value="Cancel"/></a>
                                    	</td>
									</tr>
		                        </tbody>
		                    </table>
						</form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
@endsection