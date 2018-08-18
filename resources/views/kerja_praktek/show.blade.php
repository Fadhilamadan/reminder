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
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $kerja_praktek->id }}</td>
                                <td>
                                    @foreach ($periode as $key2 => $value2)
                                        @if($kerja_praktek->periode_id == $value2->id)
                                            {{ $value2->nama_periode }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $kerja_praktek->title }}</td>
                                <td>
                                    @foreach ($mahasiswa as $key2 => $value2)
                                        @if($kerja_praktek->mahasiswa_satu_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($mahasiswa as $key2 => $value2)
                                        @if($kerja_praktek->mahasiswa_dua_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($dosen as $key3 => $value3)
                                        @if($kerja_praktek->dosen_pembimbing_id == $value3->id)
                                            {{ $value3->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if ($kerja_praktek->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $kerja_praktek->created_at }}</td>
                                <td>{{ $kerja_praktek->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection