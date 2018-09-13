@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Fracções</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fractions.create') }}">Nova</a>
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
            <th>Piso</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($buildings->fractions as $fraction)
        
        <tr>
            <td>{{ $buildings->name }}</td>
            <td>{{ $fraction->floor_id }}</td>
            
            <td>{{ $fraction->fraccao }}</td>
            <td>
                <form action="{{ route('fractions.destroy',$fraction->id) }}" method="POST">

                    <a id="button-id" href="{{ route('fractions.show',$fraction->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>

                    @csrf
                    @method('DELETE')

                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>

        @endforeach
        <tbody>
    </table>





@endsection


