@extends('layouts.default')
 

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Alterar {{ $owner->name }}</h3>
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


    <form action="{{ route('owners.update',$owner->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-4"> 
              <input type="text" name="name" class="form-control" value="{{ $owner->name }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Morada:</label>
            <div class="col-sm-4"> 
              <input type="text" name="address" class="form-control" value="{{ $owner->address }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Cód. Postal:</label>
            <div class="col-sm-4"> 
              <input type="text" name="postcode" class="form-control" value="{{ $owner->postcode }}">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Localidade:</label>
            <div class="col-sm-4"> 
              <input type="text" name="locality" class="form-control" value="{{ $owner->locality }}">
            </div>
          </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>


    </form>


@endsection