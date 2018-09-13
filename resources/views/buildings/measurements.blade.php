
@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>{{ $building->name }}</h3>
            </div>

        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<style>

table .collapse.in {
    display:table-row;
}
</style>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


<table class="table table-responsive table-hover">
  <thead>
        <tr>
            <th>Piso</th>
            <th>Fracção</th>
            <th></th>
        </tr>
    </thead>
    @foreach ($floors as $floor)
    <tbody>
        <tr class="clickable" data-toggle="collapse" id="row1" data-target=".{{ $floor->id }}">
            <td>{{ $floor->piso }}</td>
            <td></td>
            <td><i class="glyphicon glyphicon-plus"></i></td>
        </tr>
        @foreach ($buildings->fractions as $fraction)
         @if ($fraction->floor_id == $floor->id)
        <tr class="collapse {{ $floor->id }}">
            <td>{{ $fraction->id }}</td>
            <td>{{ $fraction->fraccao }}</td>
            <td><a id="button-id" href="{{ route('fractions.measurements',$fraction->id) }}"  title="Floors"><i class="glyphicon glyphicon-eye-open text-grey"></i></a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
     @endforeach
</table>



@endsection