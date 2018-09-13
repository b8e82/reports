@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fractions.measurements',$measurement->fraction_id) }}"">Voltar</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fracção:</strong>
                {{ $measurement->fraction_id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fibra:</strong>
                {{ $measurement->fibra }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATI-ATE 1310:</strong>
                {{ $measurement->atiate1310 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATI-ATE 1550:</strong>
                {{ $measurement->atiate1550 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATE-ATI 1310:</strong>
                {{ $measurement->ateati1310 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATE-ATI 1550:</strong>
                {{ $measurement->ateati1550 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ZAP-ATI 1310:</strong>
                {{ $measurement->zapati1310 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ZAP-ATI 1550:</strong>
                {{ $measurement->zapati1550 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATI-ZAP 1310:</strong>
                {{ $measurement->atizap1310 }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ATI-ZAP 1550:</strong>
                {{ $measurement->zapati1550 }}
            </div>
        </div>
    </div>
@endsection