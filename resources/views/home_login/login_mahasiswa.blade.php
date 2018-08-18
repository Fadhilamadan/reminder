@extends('layouts.mahasiswa')

@section('content')
<div class="container">
    <section class="content-header">
        <h2 class="header-title">
            Calendar
        </h2>
    </section>
    @php ($parameter = '')
    @if($param != 'a')
        @php($parameter = $param)
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="m-t-10">
                <div class="row m-b-30">
                    <div class="col-md-3">
                        <section class="content-header">
                            <div class="card-box">
                                <section class="content-header">
                                    <h4 class="header-title">
                                        Mata Kuliah
                                    </h4>
                                </section>
                                @php ($checkAllData = false)
                                @php ($checkNameTemp = '')
                                <select class="form-control select2" onchange="location=this.value;">
                                    <option disabled selected style="display: none;">Select Matakuliah</option>
                                    @foreach($matkulMhs as $valueZ)
                                        @if($valueZ->mahasiswa_id == Auth::user()->owner_id)
                                            @foreach($matakuliah as $key => $value)
                                                @if($value->id == $valueZ->matakuliah_id)
                                                    <optgroup label="<?php echo $value->name; ?>">
                                                        @foreach($matkulDosen as $key2 => $value2)
                                                            @if($value2->matakuliah_id == $value->id)
                                                                @foreach($dosen as $key3 => $value3)
                                                                    @if($value3->id == $value2->dosen_id)
                                                                        @if(!$checkAllData)
                                                                            @php ($checkAllData = true)
                                                                            @if($myDosen != 'a')
                                                                                @php($checkNameTemp = $myDosen)
                                                                            @else
                                                                                @php($checkNameTemp = $value3->npk . ' - ' .$value3->name)
                                                                            @endif
                                                                            <?php
                                                                                $requestDosenKu = $value3->id;
                                                                            ?>
                                                                        @endif
                                                                        <option value="<?php echo $parameter.'../slotMhs/'.$value3->id .'/show'?>">{{ $value3->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </optgroup>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="card-box">
                                <section class="content-header">
                                    <h4 class="header-title">
                                        Tugas Akhir
                                    </h4>
                                </section>
                                <div class="list-group">
                                    <?php $checkTA = false; ?>
                                    @foreach($tugas_akhir as $key => $value)
                                        @if($value->mahasiswa_id == Auth::user()->owner_id)
                                            @if($value->isActive == 1)
                                                @foreach($dosen as $key2 => $value2)
                                                    @if($value2->id == $value->dosen_satu_id || $value2->id == $value->dosen_dua_id)
                                                        <?php $checkTA = true; ?>
                                                        @if (!$checkAllData)
                                                            @php ($checkAllData = true)
                                                            @if($myDosen != 'a')
                                                                @php($checkNameTemp = $myDosen)
                                                            @else
                                                                @php($checkNameTemp = $value3->npk . ' - ' .$value3->name)
                                                            @endif
                                                        @endif
                                                        <a href="<?php echo $parameter.'../slotMhs/'.$value2->id .'/show'?>" class="list-group-item">
                                                            <div class="col-xs-12 col-sm-3">
                                                                @if($value2->photo != "")
                                                                    <img src="{{ asset('uploads/' . $value2->npk . '.' . $value2->photo) }}" alt="{{ $value2->name }}" class="img-responsive img-circle"/>
                                                                @else
                                                                    <img src="{{ asset('uploads/unknown.jpg') }}" alt="{{ $value2->name }}" class="img-responsive img-circle"/>
                                                                @endif
                                                            </div>
                                                            <div class="col-xs-12 col-sm-9">
                                                                <span class="name">{{ $value2->npk }}</span><br/>
                                                                <span class="name">{{ $value2->name }}</span><br/>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                    @if(!$checkTA)
                                        <a href="#" class="list-group-item">
                                            <div class="col-xs-12 col-sm-3">
                                                <img src="{{ asset('uploads/unknown.jpg') }}" alt="None" class="img-responsive img-circle"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <span class="name">None</span><br/>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="col-xs-12 col-sm-3">
                                                <img src="{{ asset('uploads/unknown.jpg') }}" alt="None" class="img-responsive img-circle"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <span class="name">None</span><br/>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="card-box">
                                <section class="content-header">
                                    <h4 class="header-title">
                                        Kerja Praktek
                                    </h4>
                                </section>
                                <?php $checkKP = false; ?>
                                <div class="list-group">
                                    @foreach($kerja_praktek as $key => $value)
                                        @if($value->mahasiswa_satu_id == Auth::user()->owner_id || $value->mahasiswa_dua_id == Auth::user()->owner_id)
                                            @if($value->isActive == 1)
                                                @foreach($dosen as $key2 => $value2)
                                                    @if($value2->id == $value->dosen_pembimbing_id)
                                                        <?php $checkKP = true; ?>
                                                        @if (!$checkAllData)
                                                            @php ($checkAllData = true)
                                                            @if($myDosen != 'a')
                                                                @php($checkNameTemp = $myDosen)
                                                            @else
                                                                @php($checkNameTemp = $value3->npk . ' - ' .$value3->name)
                                                            @endif
                                                        @endif
                                                        <a href="<?php echo $parameter.'../slotMhs/'.$value2->id .'/show'?>" class="list-group-item">
                                                            <div class="col-xs-12 col-sm-3">
                                                                @if($value2->photo != "")
                                                                    <img src="{{ asset('uploads/' . $value2->id . '.' . $value2->photo) }}" alt="{{ $value2->name }}" class="img-responsive img-circle"/>
                                                                @else
                                                                    <img src="{{ asset('uploads/unknown.jpg') }}" alt="{{ $value2->name }}" class="img-responsive img-circle"/>
                                                                @endif
                                                            </div>
                                                            <div class="col-xs-12 col-sm-9">
                                                                <span class="name">{{ $value2->npk }}</span><br/>
                                                                <span class="name">{{ $value2->name }}</span><br/>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach

                                    @if(!$checkKP)
                                        <a href="#" class="list-group-item">
                                            <div class="col-xs-12 col-sm-3">
                                                <img src="{{ asset('uploads/unknown.jpg') }}" alt="None" class="img-responsive img-circle"/>
                                            </div>
                                            <div class="col-xs-12 col-sm-9">
                                                <span class="name">None</span><br/>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-9">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label" style="font-size: 18px; margin-left: 15px;" name='dosenCalendarShow'><?php echo $checkNameTemp; ?></label>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        @if($checkAllData)
                            <div id="calendar"></div>
                        @else

                        @endif
                        <br/>
                        <div class="row pull-right">                        
                            <div class="col-sm-12">
                                <h5>Keterangan:</h5>
                                <div class="">
                                    <span class="label label-primary">Mata Kuliah</span>
                                    <span class="label label-success">Kerja Praktek</span>
                                    <span class="label label-danger">Tugas Akhir</span>
                                    <span class="label label-warning">Free</span>
                                    <span class="label label-dark">Request</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Konsultasi</h4>
                        </div>
                        <div class="modal-body p-20"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Request Event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Cancel Request</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection