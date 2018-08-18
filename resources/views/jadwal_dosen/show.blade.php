@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show <small>Jadwal Dosen</small>
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
                            <th>Dosen</th>
                            <th>Mata Kuliah</th>
                            <th>Periode</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $jadwal_dosen->id }}</td>
                                <td>
                                    @foreach ($dosen as $key3 => $value3)
                                        @if($jadwal_dosen->dosen_id == $value3->id)
                                            {{ $value3->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($matakuliah as $key2 => $value2)
                                        @if($jadwal_dosen->matakuliah_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($periode as $key2 => $value2)
                                        @if($jadwal_dosen->periode_id == $value2->id)
                                            {{ $value2->nama_periode }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $jadwal_dosen->created_at }}</td>
                                <td>{{ $jadwal_dosen->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection