@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Hosts DynDNS</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('dyndns_hosts.create') }}">Novo Host</a>
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
            <th>Cliente</th>
            <th>Host</th>
            <th>Data Inicial</th>
            <th>Data Final</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dyndns_hosts as $dyndns_host)
        <tr>
            <td>{{ $dyndns_host->client->name }}</td>
            <td>{{ $dyndns_host->host }}</td>
            <td>{{ $dyndns_host->date_initial }}</td>
            <td>{{ $dyndns_host->date_expire }}</td>
            <td>@if ($dyndns_host->active === 1)
                    <i class="fa fa-check fa-fw" style="color:#32cd32;"></i>
                @else
                    <i class="fa fa-times fa-fw" style="color:#ff0000;"></i>
                @endif
            </td>
            <td>
                <form action="{{ route('dyndns_hosts.destroy',$dyndns_host->id) }}" method="POST">


                    <a id="button-id" href="{{ route('dyndns_hosts.show',$dyndns_host->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>
                    <a id="button-id" href="{{ route('dyndns_hosts.edit',$dyndns_host->id) }}" title="Edit"><i class="glyphicon glyphicon-edit fa-fw"></i></a>

                    @csrf
                    @method('DELETE')

   
                    <!--<button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>


    {!! $dyndns_hosts->links() !!}


@endsection