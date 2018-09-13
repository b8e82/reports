@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Novo Cliente</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Voltar</a>
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


    <form class="form-horizontal" action="{{ route('clients.store') }}" method="POST">
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
            <label class="control-label col-sm-2">Responsável:</label>
            <div class="col-sm-4"> 
              <input type="text" name="responsible" class="form-control" placeholder="Responsável">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Telefone:</label>
            <div class="col-sm-4"> 
              <input type="text" name="phone" class="form-control" placeholder="Telefone">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Telemóvel:</label>
            <div class="col-sm-4"> 
              <input type="text" name="mobile" class="form-control" placeholder="Telemóvel">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">E-Mail:</label>
            <div class="col-sm-4"> 
              <input type="text" name="email_contact" class="form-control" placeholder="E-mail">
            </div>
          </div>
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>


@endsection