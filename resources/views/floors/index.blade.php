@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Pisos</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" >Novo Piso</a>
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
            <th>id</th>
            <th>Piso</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($floors as $floor)
        <tr>
            <td>{{ $floor->id }}</td>
            <td>{{ $floor->piso }}</td>
            <td>
              
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection