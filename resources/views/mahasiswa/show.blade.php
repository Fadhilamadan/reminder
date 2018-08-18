@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show <small>Mahasiswa</small>
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
                            <th>NRP</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $mahasiswa->nrp }}</td>
                                <td>{{ $mahasiswa->name }}</td>
                                <td style="text-align: center;">
                                    @if($mahasiswa->photo)
                                        <image src="{{ asset('uploads/' . $mahasiswa->nrp . '.' . $mahasiswa->photo) }}" style="width:150px; height:100px;">
                                    @else
                                        <image src="{{ asset('uploads/unknown.jpg') }}" style="width:150px; height:100px;">
                                    @endif
                                </td>
                                <td>
                                    @if ($mahasiswa->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $mahasiswa->created_at }}</td>
                                <td>{{ $mahasiswa->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection