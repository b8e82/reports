@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Alterar {{ $device->name }} {{ $device->model }}</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('devices.index') }}">Voltar</a>
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


    <form class="form-horizontal" action="{{ route('devices.update',$device->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Cliente:</label>
            <div class="col-sm-4">
              <select name="client_id" class="form-control" placeholder="Cliente">
                        <option value="{{ $device->client->id }}" selected>{{ $device->client->name }}</option>
                        
                        <option value="{{ $device->client->id }}">{{ $device->client->name }}</option>
                      
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Dispositivo:</label>
            <div class="col-sm-4">
              <select name="name" class="form-control" placeholder="Cliente">
                        <option value="{{ $device->name }}" selected>{{ $device->name }}</option>
                        
                        @foreach($types as $type )
                        <option value="{{ $type->type }}">{{ $type->type }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Modelo:</label>
            <div class="col-sm-4"> 
              <input type="text" name="model" class="form-control" value="{{ $device->model }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Nº Série:</label>
            <div class="col-sm-4"> 
              <input type="text" name="serial_number" class="form-control" value="{{ $device->serial_number }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Endereço IP:</label>
            <div class="col-sm-4"> 
              <input type="text" name="ip" class="form-control" value="{{ $device->ip }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Utilizador:</label>
            <div class="col-sm-4"> 
              <input type="text" name="login_user" class="form-control" value="{{ $device->login_user }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-4"> 
              <input type="text" name="login_pass" class="form-control" value="{{ $device->login_pass }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Notas:</label>
            <div class="col-sm-4"> 
              <input type="text" name="notes" class="form-control" value="{{ $device->notes }}">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>
         <!--<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cliente:</strong>
                    <input type="text" name="client_id" value="{{ $device->client->name }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dispositivo:</strong>
                    <input type="text" name="name" value="" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="text" name="model" value="{{ $device->model }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nº Série:</strong>
                    <input type="text" name="serial_number" value="{{ $device->serial_number }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Endereço IP:</strong>
                    <input type="text" name="ip" value="{{ $device->ip }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="login_user" value="{{ $device->login_user }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="login_pass" value="{{ $device->login_pass }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Notas:</strong>
                    <input type="text" name="notes" value="{{ $device->notes }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>-->

    </form>


@endsection