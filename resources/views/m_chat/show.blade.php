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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $gudang->id }}</td>
                                    <td>{{ $gudang->name }}</td>
                                    <td>{{ $gudang->jumlah_kapasitas }}</td>
                                    <td>{{ $gudang->created_at }}</td>
                                    <td>{{ $gudang->updated_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection