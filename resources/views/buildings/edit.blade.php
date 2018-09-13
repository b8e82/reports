@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>{{ $building->name }}</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('buildings.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

<form action="{{ route('buildings.update',$building->id) }}" method="POST"> 
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>id:</strong>
                <input type="text" name="id" value="{{ $building->id }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" value="{{ $building->name }}" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Instalador:</label>
            <div class="col-sm-4">
              <select name="installer_id" class="form-control" placeholder="Cliente">
                        <option value="" selected>Selecionar Instalador</option>
                      @foreach($installers as $installer )
                        <option value="{{ $installer->id }}">{{ $installer->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Dono de Obra:</label>
            <div class="col-sm-4">
              <select name="owner_id" class="form-control" placeholder="Cliente">
                        <option value="" selected>Selecionar Dono de Obra</option>
                      @foreach($owners as $owner )
                        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Técnico:</label>
            <div class="col-sm-4">
              <select name="technician_id" class="form-control" placeholder="Técnico">
                        <option value="" selected>Selecionar Técnico</option>
                      @foreach($technicians as $technician )
                        <option value="{{ $technician->id }}">{{ $technician->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Morada:</strong>
                <input type="text" name="address" value="{{ $building->address }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cód. Postal:</strong>
                <input type="text" name="postcode" value="{{ $building->postcode }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Localidade:</strong>
                <input type="text" name="locality" value="{{ $building->locality }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Coordenadas GPS:</strong>
                <input type="text" name="gps" value="{{ $building->gps }}" class="form-control">
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nº Fogos:</strong>
                <input type="text" name="nfogos" value="{{ $building->nfogos }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nº pisos:</strong>
                <input type="text" name="nfloors" value="{{ $building->nfloors }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Inserido em ITUR:</strong>
                <input type="text" name="in_itur" value="{{ $building->in_itur }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>aaaa:</strong>
                <input type="text" name="name" value="{{ $building->type }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>image:</strong>
                <input type="text" name="path_image" value="{{ $building->path_image }}" class="form-control">
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    </div>
     </form>
@endsection