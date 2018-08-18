@extends('layouts.admin')

@section('content')
<section class="content-header">
    <h2 class="header-title">
        Show <small>Tugas Akhir</small>
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
                            <th>Dosen 1</th>
                            <th>Dosen 2</th>
                            <th>Mahasiswa</th>
                            <th>Active</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $tugas_akhir->id }}</td>
                                <td>
                                    @foreach ($periode as $key2 => $value2)
                                        @if($tugas_akhir->periode_id == $value2->id)
                                            {{ $value2->nama_periode }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $tugas_akhir->title }}</td>
                                <td>
                                    @foreach ($dosen as $key2 => $value2)
                                        @if($tugas_akhir->dosen_satu_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($dosen as $key2 => $value2)
                                        @if($tugas_akhir->dosen_dua_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($mahasiswa as $key2 => $value2)
                                        @if($tugas_akhir->mahasiswa_id == $value2->id)
                                            {{ $value2->name }}
                                            @break
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @if ($tugas_akhir->isActive == 1)
                                        Active
                                    @else
                                        Non-active
                                    @endif
                                </td>
                                <td>{{ $tugas_akhir->created_at }}</td>
                                <td>{{ $tugas_akhir->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection