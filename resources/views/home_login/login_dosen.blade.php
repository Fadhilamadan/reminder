@extends('layouts.multi')

@section('content')
<div class="container">
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('message') }} </p>
    @endif
    <section class="content-header">
        <h2 class="header-title">
            Calendar
        </h2>
    </section>
    <div class="row">
        <div class="col-lg-12">
            <div class="m-t-10">
                <div class="row m-b-30">
                    <div class="col-md-12">
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                        <div id="calendar"></div>
                        <br/>                       
                        <div class="row pull-right">                        
                            <div class="col-sm-12">
                                <h5>Keterangan:</h5>
                                <div>
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
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create Event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection