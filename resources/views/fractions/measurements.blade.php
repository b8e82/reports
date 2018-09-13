@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Medidas</h3>
                @foreach ($fractions as $fraction)
                <h4>
                    <a href="{{ route('buildings.floors', $building->id) }}">{{ $building->name }}</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <a href="{{ route('floors.measurements', $floor->id) }}">{{ $floor->piso }}</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>{{ $fraction->fraccao }}
                </h4>
                @endforeach
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fractions.addmeasurements',$fraction->id) }}">Novo</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-hover">
        <thead>
        <tr>
            <th>Fracção</th>
            <th>Fibra</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($measurements as $measurement)
        <tr>
            <td>{{ $fraction->fraccao }}</td>
            <td>{{ $measurement->fibra }}</td>
            
            
            <td>
                <td><a id="button-id" href="{{ route('measurements.show',$measurement->id) }}"  title="Medições"><i class="glyphicon glyphicon-eye-open"></i></a>
                <a id="button-id" href="{{ route('measurements.edit',$measurement->id) }}"  title="Alterar"><i class="glyphicon glyphicon-edit"></i></a></td>

            </td>
        </tr>
        @endforeach
        <tbody>
    </table>




@endsection