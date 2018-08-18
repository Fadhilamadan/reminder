@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Current <small>Kerja Praktek</small>
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
                            <th>Periode</th>
                            <th>Title</th>
                            <th>Mahasiswa 1</th>
                            <th>Mahasiswa 2</th>
                            <th>Dosen</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th style='width: 115px'>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($kerja_praktek as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>
                                    @foreach ($periode as $key2 => $value2)
                                        @if($value->periode_id == $value2->id)
                                            {{ $value2->nama_periode }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $value->title }}</td>
                                <td>
                                    @foreach ($mahasiswa as $key2 => $value2)
                                        @if($value->mahasiswa_satu_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($mahasiswa as $key2 => $value2)
                                        @if($value->mahasiswa_dua_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($dosen as $key3 => $value3)
                                        @if($value->dosen_pembimbing_id == $value3->id)
                                            {{ $value3->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>  
                                    @if ($value->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $value->created_at }}</td>
                                <td>{{ $value->updated_at }}</td>
                                <td>
                                    <a class="btn btn-warning fa fa-pencil-square-o" href="{{ URL::to ('kerja_praktek/' . $value->id . '/edit') }}"></a>
                                    <a class="btn btn-info fa fa-eye" href="{{ URL::to ('kerja_praktek/' . $value->id . '/show') }}"></a>
                                    <a class="btn btn-danger fa fa-trash" href="{{ URL::to ('kerja_praktek/' . $value->id . '/destroy') }}"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection