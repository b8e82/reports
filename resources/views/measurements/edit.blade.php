@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Alterar medida</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fractions.measurements',$measurement->fraction_id) }}"> Sair</a>
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





<form class="form-horizontal" action="{{ route('measurements.update',$measurement->id) }}" method="POST">
        @csrf
        @method('PUT')
          <input type="hidden" name="fraction_id" value="{{ $measurement->fraction_id }}">
          <div class="form-group">
           <input type="hidden" name="fibra" value="{{ $measurement->fibra }}">
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATI - ATE:</label>
            <div class="col-sm-2"> 
              <input type="text" name="atiate1310" class="form-control" placeholder="1310" value="{{ $measurement->atiate1310 }}">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="atiate1550" class="form-control" placeholder="1550" value="{{ $measurement->atiate1550 }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATE - ATI:</label>
            <div class="col-sm-2"> 
              <input type="text" name="ateati1310" class="form-control" placeholder="1310" value="{{ $measurement->ateati1310 }}">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="ateati1550" class="form-control" placeholder="1550" value="{{ $measurement->ateati1550 }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ATI - ZAP:</label>
            <div class="col-sm-2"> 
              <input type="text" name="atizap1310" class="form-control" placeholder="1310" value="{{ $measurement->atizap1310 }}">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="atizap1550" class="form-control" placeholder="1550" value="{{ $measurement->atizap1550 }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">ZAP - ATI:</label>
            <div class="col-sm-2"> 
              <input type="text" name="zapati1310" class="form-control" placeholder="1310" value="{{ $measurement->zapati1310 }}">
            </div>
            <div class="col-sm-2"> 
              <input type="text" name="zapati1550" class="form-control" placeholder="1550" value="{{ $measurement->zapati1550 }}">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>
  

@endsection