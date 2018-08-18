@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show <small>Jadwal Mahasiswa</small>
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
                            <th>Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Periode</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $jadwal_mahasiswa->id }}</td>
                                <td>
                                    @foreach ($mahasiswa as $key3 => $value3)
                                        @if($jadwal_mahasiswa->mahasiswa_id == $value3->id)
                                            {{ $value3->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($matakuliah as $key2 => $value2)
                                        @if($jadwal_mahasiswa->matakuliah_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($periode as $key2 => $value2)
                                        @if($jadwal_mahasiswa->periode_id == $value2->id)
                                            {{ $value2->nama_periode }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $jadwal_mahasiswa->created_at }}</td>
                                <td>{{ $jadwal_mahasiswa->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection