@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Alterar {{ $dyndns_host->host }}</h3>
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


    <form class="form-horizontal" action="{{ route('dyndns_hosts.update',$dyndns_host->id) }}" method="POST">
        @csrf
        @method('PUT')


          <div class="form-group">
            <label class="control-label col-sm-2">Cliente:</label>
            <div class="col-sm-4">
              <select name="client_id" class="form-control" placeholder="Cliente">
                        <option value="" selected>{{ $dyndns_host->client->name }}</option>
                      @foreach($clients as $client )
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Host:</label>
            <div class="col-sm-4"> 
              <input type="text" name="host" class="form-control" value="{{ $dyndns_host->host }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Inicio:</label>
            <div class="col-sm-4"> 
              <input type="text" name="date_initial" class="form-control" value="{{ $dyndns_host->date_inicial }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Expira:</label>
            <div class="col-sm-4"> 
              <input type="text" name="date_expire" class="form-control" value="{{ $dyndns_host->expire }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Estado:</label>
            <div class="col-sm-4">
                    <select name="active" class="form-control">
                        <option value="" selected>{{ $dyndns_host->active }}</option>
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


@endsection