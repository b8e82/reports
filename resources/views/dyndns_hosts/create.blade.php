@extends('layouts.default')


@section('content')
 
  <link href="../bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">

  <script src="../bootstrap-datepicker/jquery.js"></script>

  <script src="../bootstrap-datepicker/bootstrap-datepicker.js"></script>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Novo Host</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dyndns_hosts.index') }}">Voltar</a>
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


    <form class="form-horizontal" action="{{ route('dyndns_hosts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2">Cliente:</label>
            <div class="col-sm-4">
              <select name="client_id" class="form-control" placeholder="Cliente">
                        <option value="" selected>Selecionar Cliente</option>
                      @foreach($clients as $client )
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Host:</label>
            <div class="col-sm-4"> 
              <input type="text" name="host" class="form-control" placeholder="Host">
            </div>
          </div>
          <div class="form-group">
             <label class="control-label col-sm-2">Início:</label>
             <div class="col-sm-4">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="date_initial" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            </div>
          <div class="form-group">
             <label class="control-label col-sm-2">Expira:</label>
             <div class="col-sm-4">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' name="date_expire" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Estado:</label>
            <div class="col-sm-4">
                    <select name="active" class="form-control">
                        <option value="" selected>Estado</option>
                        <option value="1">Activo</option>
                        <option value="0">Desactivo</option>
                    </select>
            </div>
          </div>
            <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
    </form>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  




@endsection