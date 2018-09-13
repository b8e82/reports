@extends('layouts.default')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3></h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

   

    <form class="form-horizontal" action="{{ route('measurements.update',$measurement->id) }}" method="POST">

        @csrf
        @method('PUT')

    
 
    <div class="container">
  		<h3>{{ $measurement->fibra }}:</h3>
  		<input type="hidden" name="fibra" value="{{ $measurement->fibra }}">
    <div class="form-group">
      <label class="col-sm-2 control-label">ATI-ATE 1310:</label>
      <div class="col-sm-1">
        <input class="form-control" name="atiate1310" type="text" value="{{ $measurement->atiate1310 }}">
      </div>
      <label class="col-sm-2 control-label">ATI-ATE 1550:</label>
      <div class="col-sm-1">
        <input class="form-control" name="atiate1550" type="text" value="{{ $measurement->atiate1550 }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">ATE-ATI 1310:</label>
      <div class="col-sm-1">
        <input class="form-control" name="ateati1310" type="text" value="{{ $measurement->ateati1310 }}">
      </div>
      <label class="col-sm-2 control-label">ATE-ATI 1550:</label>
      <div class="col-sm-1">
        <input class="form-control" name="ateati1550" type="text" value="{{ $measurement->ateati1550 }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">ATI-ZAP 1310:</label>
      <div class="col-sm-1">
        <input class="form-control" name="atizap1310" type="text" value="{{ $measurement->atizap1310 }}">
      </div>
      <label class="col-sm-2 control-label">ATI-ZAP 1550:</label>
      <div class="col-sm-1">
        <input class="form-control" name="atizap1550" type="text" value="{{ $measurement->atizap1550 }}">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">ZAP-ATI 1310:</label>
      <div class="col-sm-1">
        <input class="form-control" name="zapati1310" type="text" value="{{ $measurement->zapati1310 }}">
      </div>
      <label class="col-sm-2 control-label">ZAP-ATI 1550:</label>
      <div class="col-sm-1">
        <input class="form-control" name="zapati1550" type="text" value="{{ $measurement->zapati1550 }}">
      </div>
    </div>
  </form>
   
<div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
</div>
</div>

@endsection