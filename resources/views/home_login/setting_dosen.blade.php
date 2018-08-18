@extends('layouts.multi')

@section('content')
<div class="container">
    <section class="content-header">
        <h2 class="header-title">
            Settings
        </h2>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-9" style="margin-left: 23%; margin-top: 30px;">
                <form method="POST" class="form-horizontal col-md-9" role="form" action="{{ route('setting_dosen.update', $dosenOK->id) }}" enctype="multipart/form-data">
                        {{ method_field("PUT") }} {!! csrf_field() !!}
                        @if($dosenOK->intensitas_mahasiswa != null)
                            @php ($inten = $dosenOK->intensitas_mahasiswa)
                        @else
                            @php ($inten = 0)
                        @endif
                        <div class="form-group">
                            <label class="col-md-3 control-label">Batas Intensitas Keseluruhan Mahasiswa</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" value="{{ $inten }}" name="inten">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 30px;">
                            <label class="col-md-3 control-label">Jam Pengingat Kalender</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="hour" placeholder="hh" required>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="min" placeholder="mm" required>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="sec" placeholder="ss" required>
                            </div>
                        </div>
                        <input style="margin-top: 30px;" class="form-control btn-success" type="submit" value="SAVE">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection