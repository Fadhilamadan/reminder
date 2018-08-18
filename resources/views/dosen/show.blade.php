@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show <small>Dosen</small>
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
                            <th>NPK</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th>Accept KP</th>
                            <th>Accept TA</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $dosen->npk }}</td>
                                <td>{{ $dosen->name }}</td>
                                <td style="text-align: center;">
                                    @if($dosen->photo)
                                        <image src="{{ asset('uploads/' . $dosen->npk . '.' . $dosen->photo) }}" style="width:150px; height:100px;">
                                    @else
                                        <image src="{{ asset('uploads/unknown.jpg') }}" style="width:150px; height:100px;">
                                    @endif</td>
                                <td>
                                    @if ($dosen->acceptKP == 1)
                                        Accept
                                    @else
                                        Reject
                                    @endif
                                </td>
                                <td>
                                    @if ($dosen->acceptTA == 1)
                                        Accept
                                    @else
                                        Reject
                                    @endif
                                </td>
                                <td>
                                    @if ($dosen->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $dosen->created_at }}</td>
                                <td>{{ $dosen->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection