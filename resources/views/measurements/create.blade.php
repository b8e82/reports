@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Nova medida</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('measurements.index') }}"> Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form class="form-horizontal" action="{{ route('measurements.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2">Fracção:</label>
            <div class="col-sm-4"> 
              <input type="text" name="fraction_id" class="form-control" placeholder="fraccao">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Fibra:</label>
            <div class="col-sm-4"> 
              <input type="text" name="fibra" class="form-control" placeholder="fibra">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATI - ATE:</label>
            <div class="col-sm-2"> 
              <input type="text" name="atiate1310" class="form-control" placeholder="1310">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="atiate1550" class="form-control" placeholder="1550">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATE - ATI:</label>
            <div class="col-sm-2"> 
              <input type="text" name="ateati1310" class="form-control" placeholder="1310">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="ateati1550" class="form-control" placeholder="1550">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATI - ZAP:</label>
            <div class="col-sm-2"> 
              <input type="text" name="atizap1310" class="form-control" placeholder="1310">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="atizap1550" class="form-control" placeholder="1550">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ZAP - ATI:</label>
            <div class="col-sm-2"> 
              <input type="text" name="zapati1310" class="form-control" placeholder="1310">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="zapati1550" class="form-control" placeholder="1550">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>


@endsection