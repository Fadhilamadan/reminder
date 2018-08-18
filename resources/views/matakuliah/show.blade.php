@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show
        <small>Matakuliah</small>
    </h2>
</section>

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-b-20 table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $matakuliah->id_matakuliah }}</td>
                                <td>{{ $matakuliah->name }}</td>
                                <td>
                                    @if ($matakuliah->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $matakuliah->created_at }}</td>
                                <td>{{ $matakuliah->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection