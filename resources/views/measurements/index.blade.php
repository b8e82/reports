@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Medidas</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('measurements.create') }}">Novo</a>
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
            <th>fraccao</th>
            <th>Fibra</th>
            <th>ATI-ATE 1310</th>
            <th>ATI-ATE 1550</th>
            <th>ATE-ATI 1310</th>
            <th>ATE-ATI 1550</th>
            <th>ATI-ZAP 1310</th>
            <th>ATI-ZAP 1550</th>
            <th>ZAP-ATI 1310</th>
            <th>ZAP-ATI 1550</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($measurements as $measurement)
        <tr>
            <td>{{ $measurement->fraction_id }}</td>
            <td>{{ $measurement->fibra }}</td>
            <td>{{ $measurement->atiate1310 }}</td>
            <td>{{ $measurement->atiate1550 }}</td>
            <td>{{ $measurement->ateati1310 }}</td>
            <td>{{ $measurement->ateati1550 }}</td>
            <td>{{ $measurement->atizap1310 }}</td>
            <td>{{ $measurement->atizap1550 }}</td>
            <td>{{ $measurement->zapati1310 }}</td>
            <td>{{ $measurement->zapati1550 }}</td>
            <td>
                <form action="{{ route('measurements.destroy',$measurement->id) }}" method="POST">

                    <a id="button-id" href="{{ route('measurements.show',$measurement->id) }}" title="Show"><i class="glyphicon glyphicon-eye-open fa-fw"></i></a>
                    <a id="button-id" href="{{ route('measurements.edit', $measurement->id) }}" title="Edit"><i class="glyphicon glyphicon-edit fa-fw"></i></a>

                    @csrf
                    @method('DELETE')

   
                    <!--<button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>




@endsection