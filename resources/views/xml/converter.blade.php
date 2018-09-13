@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Alterar medida</h3>
            </div>
            <div class="pull-right">
                
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






	<form class="form-horizontal" action="{{ route('xml.store') }}" method="POST">
        @csrf
        

    
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Edificio:</label>
            <div class="col-sm-4">
              <select name="building_id" class="form-control" placeholder="Cliente">
                        <option value="" selected>Selecionar Edificio</option>
                      @foreach($buildings as $building )
                        <option value="{{ $building->id }}">{{ $building->name }}</option>
                      @endforeach
                    </select>
            </div>
          </div>
       
          @foreach ($xmlContent->TEST as $index => $data)
	@foreach ($data as $point)
		@foreach ($point as $channel)
			@if (isset($channel->CHANNEL))
				@foreach ($channel->CHANNEL[0]->MEASUREMENTS as $measurements)
					@foreach ($measurements as $measures)
					<div class="form-group">
			            <label class="control-label col-sm-2">Tomada:</label>
			            <div class="col-sm-2"> 
			              <input type="text" name="tomada[]" class="form-control" value="{{ $point->attributes()->name }}">
			            </div>
		          	</div>
		          	<div class="form-group">
			            <label class="control-label col-sm-2">Frequência:</label>
			            <div class="col-sm-2"> 
			              <input type="text" name="freq[]" class="form-control" value="{{ $channel->CHANNEL[0]->attributes()->frequency }}">
			            </div>
			            <label class="control-label col-sm-2">Power:</label>
			            <div class="col-sm-2"> 
			              <input type="text" name="pwr[]" class="form-control" value="{{ $measures->MEASURES[0]->POWER->attributes() }}">
			            </div>
		          	</div>
		          	
		          	<div class="form-group">
			            <label class="control-label col-sm-2">MER:</label>
			            <div class="col-sm-2"> 
			              <input type="text" name="mer[]" class="form-control" value="{{ $measures->MEASURES[0]->MER->attributes()->value }}">
			            </div>
			            <label class="control-label col-sm-2">VBER:</label>
			            <div class="col-sm-2"> 
			              <input type="text" name="vber[]" class="form-control" value="{{ $measures->MEASURES[0]->VBER->attributes()->value }}">
			            </div>
		          	</div>

		          	<hr>
       
   
@endforeach
				@endforeach
			@endif
		@endforeach
	@endforeach
@endforeach
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    </div>
     </form>
@endsection