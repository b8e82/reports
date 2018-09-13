@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Clientes</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}">Novo Cliente</a>
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
            <th>Responsável</th>
            <th>Telefone</th>
            <th>Telemóvel</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->address }}</td>
            <td>{{ $client->responsible }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->mobile }}</td>
            <td>
                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

                    <a id="button-id" href="{{ route('devices.display',$client->id) }}" title="Devices"><i class="fa fa-desktop fa-fw"></i></a>
                    <a id="button-id" href="{{ route('clients.show',$client->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>
                    <a id="button-id" href="{{ route('clients.edit',$client->id) }}" title="Edit"><i class="glyphicon glyphicon-edit fa-fw"></i></a>

                    

                    @csrf
                    @method('DELETE')

                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>


    {!! $clients->links() !!}


@endsection