@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Novo Técnico</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('technicians.index') }}"> Voltar</a>
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


    <form class="form-horizontal" action="{{ route('technicians.store') }}" method="POST">
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
            <label class="control-label col-sm-2">Cartão Cidadão:</label>
            <div class="col-sm-4"> 
              <input type="text" name="cc" class="form-control" placeholder="Cartão Cidadão">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Nº Contribuinte:</label>
            <div class="col-sm-4"> 
              <input type="text" name="nif" class="form-control" placeholder="Nº Contribuinte">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Licença:</label>
            <div class="col-sm-4"> 
              <input type="text" name="license" class="form-control" placeholder="Licença">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>


@endsection