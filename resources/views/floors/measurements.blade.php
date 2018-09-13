@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Fracções</h3>
                
                <h4>
                    <a href="{{ route('buildings.floors', $building->id) }}">{{ $building->name }}</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    {{ $floor->piso }}
                </h4>
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" >Novo</a>
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
            
        </tr>
        </thead>
        <tbody>
        @foreach ($fractions as $fraction)
        <tr>
            <td>{{ $fraction->fraccao }}</td>
            
            
            <td>
                <td><a id="button-id" href="{{ route('fractions.measurements',$fraction->id) }}"  title="Floors"><i class="glyphicon glyphicon-align-justify"></i></a></td>

            </td>
        </tr>
        @endforeach
        <tbody>
    </table>




@endsection