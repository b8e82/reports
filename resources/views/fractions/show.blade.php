@extends('layouts.default')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>{{ $fraction->fraccao }}</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>
    @foreach ($measurements as $measurement)
        @if ($measurement->fraction_id == $fraction->id)
        {{ $measurement->id }}
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>{{ $measurement->fibra }}:</strong>
                
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>&nbsp;</strong>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATI-ATE 1310:</strong>
                {{ $measurement->atiate1310 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATI-ATE 1550:</strong>
                {{ $measurement->atiate1550 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATE-ATI 1310:</strong>
                {{ $measurement->ateati1310 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATE-ATI 1550:</strong>
                {{ $measurement->ateati1550 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATI-ZAP 1310:</strong>
                {{ $measurement->atizap1310 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ATI-ZAP 1550:</strong>
                {{ $measurement->atizap1550 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ZAP-ATI 1310:</strong>
                {{ $measurement->zapati1310 }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>ZAP-ATI 1550:</strong>
                {{ $measurement->zapati1550 }}
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-rigth">
                <button type="button" class="btn btn-info">Info</button>
                <a class="btn btn-primary" href="{{ route('measurements.edit',$measurement->id) }}">Alterar</a>
            </div>
        </div>
    </div>
    </div>
    <hr>
@endif
@endforeach



@endsection