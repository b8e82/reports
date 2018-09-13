@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Dispositivos</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('devices.create') }}">Novo Dispositivo</a>
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
            <th>Dispositivo</th>
            <th>modelo</th>
            <th>sn</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($devices as $device)
        <tr>
            <td>{{ $device->client->name }}</td>
            <td>{{ $device->name }}</td>
            <td>{{ $device->model }}</td>
            <td>{{ $device->serial_number }}</td>
            <td>
                <form action="{{ route('devices.destroy',$device->id) }}" method="POST">


                    <!--<a class="btn btn-info" href="{{ route('devices.show',$device->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('devices.edit',$device->id) }}">Edit</a>-->
                    <a id="button-id" href="{{ route('devices.show',$device->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>
                    <a id="button-id" href="{{ route('devices.edit',$device->id) }}" title="Edit"><i class="glyphicon glyphicon-edit fa-fw"></i></a>

                    @csrf
                    @method('DELETE')

   
                    <!--<button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>


    {!! $devices->links() !!}


@endsection