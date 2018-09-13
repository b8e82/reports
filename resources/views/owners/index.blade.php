@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Donos de Obra</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('owners.create') }}">Novo</a>
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
            <th>Morada</th>
            <th>Cód. Postal</th>
            <th>Localidade</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($owners as $owner)
        <tr> 
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->address }}</td>
            <td>{{ $owner->postcode }}</td>
            <td>{{ $owner->locality }}</td>
            <td>
                <form action="{{ route('owners.destroy',$owner->id) }}" method="POST">

                    <a id="button-id" href="{{ route('owners.show',$owner->id) }}" title="Show"><i class="fa fa-eye fa-fw"></i></a>
                    <a id="button-id" href="{{ route('owners.edit',$owner->id) }}" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>

                    

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

