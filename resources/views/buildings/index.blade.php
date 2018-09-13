@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Edificios</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('buildings.create') }}">Novo Edificio</a>
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
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($buildings as $building)
        <tr> 
            <td>{{ $building->name }}</td>
            <td>{{ $building->address }}</td>
            <td>{{ $building->postcode }}</td>
            <td>{{ $building->locality }}</td>
            <td>
                
                    <a id="button-id" href="{{ route('buildings.floors',$building->id) }}" title="Pisos"><i class="fa fa-building-o fa-fw"></i></a>
                    <a id="button-id" href="{{ route('buildings.showmeasurements',$building->id) }}" title="Medidas"><i class="glyphicon glyphicon-th-large"></i></a>
                    <a id="button-id" href="{{ route('buildings.show',$building->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>
                    <a id="button-id" href="{{ route('buildings.edit',$building->id) }}" title="Edit"><i class="glyphicon glyphicon-edit fa-fw"></i></a>
                    

            </td>
        </tr>
        @endforeach
        <tbody>
    </table>



@endsection

