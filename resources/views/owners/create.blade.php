@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Novo Dono de Obra</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('owners.index') }}"> Voltar</a>
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


    <form class="form-horizontal" action="{{ route('owners.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-4"> 
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Morada:</label>
            <div class="col-sm-4"> 
              <input type="text" name="address" class="form-control" placeholder="Morada">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Cód. Postal:</label>
            <div class="col-sm-4"> 
              <input type="text" name="postcode" class="form-control" placeholder="Cód. Postal">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Localidade:</label>
            <div class="col-sm-4"> 
              <input type="text" name="locality" class="form-control" placeholder="Localidade">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>


@endsection