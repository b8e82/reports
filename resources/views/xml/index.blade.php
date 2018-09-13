@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Instaladores</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('installers.create') }}">Novo Instalador</a>
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
            <th>Edifício</th>
            <th>Frequencia</th>
            <th>Power</th>
            <th>MER</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($matvmeasures as $matvmeasure)
        <tr> 
            <td>{{ $matvmeasure->building_id }}</td>
            <td>{{ $matvmeasure->freq }}</td>
            <td>{{ $matvmeasure->pwr }}</td>
            <td>{{ $matvmeasure->mer }}</td>
            <td>
                <form action="" method="POST">

                    <a id="button-id" href="" title="Show"><i class="fa fa-eye fa-fw"></i></a>
                    <a id="button-id" href="" title="Edit"><i class="fa fa-pencil-square-o fa-fw"></i></a>

                    

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

