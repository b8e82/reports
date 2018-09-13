@extends('layouts.default')


@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Medições MATV</h3>
            </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

 <div class="container">   
<table class="table table-hover">
        <thead>
        <tr>
            <th>Tomada</th>
            <th>Frequência</th>
            <th>POWER</th>
            <th>MER</th>
            <th>VBER</th>
        </tr>
        </thead>
        <tbody>

@foreach ($xmlContent->TEST as $index => $data)
	@foreach ($data as $point)
		@foreach ($point as $channel)
			@if (isset($channel->CHANNEL))
				@foreach ($channel->CHANNEL[0]->MEASUREMENTS as $measurements)
					@foreach ($measurements as $measures)
					<tr>
						<td>{{$point->attributes()->name}}</td>
						<td>{{$channel->CHANNEL[0]->attributes()->frequency}}</td>
						<td>{{$measures->MEASURES[0]->POWER->attributes()}}</td>
						<td>{{$measures->MEASURES[0]->MER->attributes()->value}}</td>
						<td>{{$measures->MEASURES[0]->VBER->attributes()->value}}</td>
					</tr>
					@endforeach
				@endforeach
			@endif
		@endforeach
	@endforeach
@endforeach
        </tbody>
    </table>
</div>
@endsection




