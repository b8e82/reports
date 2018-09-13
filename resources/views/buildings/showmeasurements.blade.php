
@extends('layouts.default')


@section('content')
    <div class="row"><a href="{{ route('generate-pdf',['Download'=>'pdf']) }}">Download PDF</a>
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3 align="center">Ficha de Registo e de verificação de conformidade ITED</h3>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<h3 align="center">{{ $building->name }}</h3>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Localização do Edifício</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Morada:</strong></div>
        <div class="col-md-1 text-left">{{ $building->address }}</div>   
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-2 text-right"><strong>Cód. Postal:</strong></div>
        <div class="col-md-1">{{ $building->postcode }}</div>
        <div class="col-md-2 text-right"><strong>Localidade:</strong></div>
        <div class="col-md-1">{{ $building->locality }}</div>
        <div class="col-md-2 text-right"><strong>Coordenadas GPS:</strong></div>
        <div class="col-md-1">{{ $building->gps }}</div>
    </div>
	</div>
</div>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Caracterização do Edificio</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Nº Fogos:</strong></div>
        <div class="col-md-1 text-left">{{ $building->nfogos }}</div>   
    </div>
    <div class="row">
    	<div class="col-md-2 text-right"><strong>Nº Pisos:</strong></div>
        <div class="col-md-1">{{ $building->npisos }}</div>
    </div>
    <div class="row">
    	<div class="col-md-2 text-right"><strong>Inserido em ITUR:</strong></div>
        <div class="col-md-1">{{ $building->in_itur }}</div>
    </div>
    <div class="row">
    	<div class="col-md-2 text-right"><strong>aaa:</strong></div>
        <div class="col-md-1"> </div>
    </div>
	</div>
</div>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Identificação do Instalador</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Nome:</strong></div>
        <div class="col-md-1 text-left">{{ $installer->name }}</div>   
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-2 text-right"><strong>Morada:</strong></div>
        <div class="col-md-1">{{ $installer->address }}</div>
        <div class="col-md-2 text-right"><strong>Cód. Postal:</strong></div>
        <div class="col-md-1">{{ $installer->postcode }}</div>
        <div class="col-md-2 text-right"><strong>Localidade:</strong></div>
        <div class="col-md-1">{{ $installer->locality }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right"><strong>Cartão Cidadão:</strong></div>
        <div class="col-md-1">{{ $installer->cc }}</div>
        <div class="col-md-2 text-right"><strong>NIF:</strong></div>
        <div class="col-md-1">{{ $installer->nif }}</div>
        <div class="col-md-2 text-right"><strong>Licença:</strong></div>
        <div class="col-md-1">{{ $installer->license }}</div>
    </div>
	</div>
</div>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Identificação do Técnico</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Nome:</strong></div>
        <div class="col-md-1 text-left">{{ $technician->name }}</div>   
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-2 text-right"><strong>Morada:</strong></div>
        <div class="col-md-1">{{ $technician->address }}</div>
        <div class="col-md-2 text-right"><strong>Cód. Postal:</strong></div>
        <div class="col-md-1">{{ $technician->postcode }}</div>
        <div class="col-md-2 text-right"><strong>Localidade:</strong></div>
        <div class="col-md-1">{{ $technician->locality }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right"><strong>Cartão Cidadão:</strong></div>
        <div class="col-md-1">{{ $technician->cc }}</div>
        <div class="col-md-2 text-right"><strong>NIF:</strong></div>
        <div class="col-md-1">{{ $technician->nif }}</div>
        <div class="col-md-2 text-right"><strong>Licença:</strong></div>
        <div class="col-md-1">{{ $technician->license }}</div>
    </div>
	</div>
</div>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Identificação do Projectista</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Nome:</strong></div>
        <div class="col-md-1 text-left">{{ $designer->name }}</div>   
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-2 text-right"><strong>Morada:</strong></div>
        <div class="col-md-1">{{ $technician->address }}</div>
        <div class="col-md-2 text-right"><strong>Cód. Postal:</strong></div>
        <div class="col-md-1">{{ $technician->postcode }}</div>
        <div class="col-md-2 text-right"><strong>Localidade:</strong></div>
        <div class="col-md-1">{{ $technician->locality }}</div>
    </div>
    <div class="row">
        <div class="col-md-2 text-right"><strong>Cartão Cidadão:</strong></div>
        <div class="col-md-1">{{ $technician->cc }}</div>
        <div class="col-md-2 text-right"><strong>NIF:</strong></div>
        <div class="col-md-1">{{ $technician->nif }}</div>
        <div class="col-md-2 text-right"><strong>Licença:</strong></div>
        <div class="col-md-1">{{ $technician->license }}</div>
    </div>
	</div>
</div>
<br><br>
<div class="form-style-2">
<div class="form-style-2-heading">Identificação do Dono de Obra ou Administração</div>
	<div class="container">
    <div class="row">
        <div class="col-md-2 text-right"><strong>Nome:</strong></div>
        <div class="col-md-1 text-left">{{ $owner->name }}</div>   
    </div>
    <div class="row">
        <div class="col-md-12"></div>
        <div class="col-md-2 text-right"><strong>Morada:</strong></div>
        <div class="col-md-1">{{ $owner->address }}</div>
        <div class="col-md-2 text-right"><strong>Cód. Postal:</strong></div>
        <div class="col-md-1">{{ $owner->postcode }}</div>
        <div class="col-md-2 text-right"><strong>Localidade:</strong></div>
        <div class="col-md-1">{{ $owner->locality }}</div>
    </div>
	</div>
</div>
<br><br><br><br>


@foreach ($floors as $floor)
<h3>{{ $floor->piso }}</h3><br><br>
@foreach ($buildings->fractions as $fraction)
         
@if ($fraction->floor_id == $floor->id)
         	<h3>{{ $fraction->fraccao }}</h3><br>
         
<div class="table-responsive">
<table class="table">
  <col>
  <colgroup span="2"></colgroup>
  <colgroup span="2"></colgroup>
  <tr>
    <td rowspan="2"></td>
    <th colspan="2" scope="colgroup">ATI - ATE</th>
    <th colspan="2" scope="colgroup">ATE - ATI</th>
    <th colspan="2" scope="colgroup">ATI - ZAP</th>
    <th colspan="2" scope="colgroup">ZAP - ATI</th>
  </tr>

  <tr>
    <th scope="col">1310nm</th>
    <th scope="col">1550nm</th>
    <th scope="col">1310nm</th>
    <th scope="col">1550nm</th>
    <th scope="col">1310nm</th>
    <th scope="col">1550nm</th>
    <th scope="col">1310nm</th>
    <th scope="col">1550nm</th>
  </tr>
  <tbody>
  @foreach ($measurements as $measurement)
         		@if ($measurement->fraction_id == $fraction->id)
  <tr>
    <th scope="row">{{ $measurement->fibra }}</th>
    <td>{{ $measurement->atiate1310 }}</td>
    <td>{{ $measurement->atiate1550 }}</td>
    <td>{{ $measurement->ateati1310 }}</td>
    <td>{{ $measurement->ateati1550 }}</td>
    <td>{{ $measurement->atizap1310 }}</td>
    <td>{{ $measurement->atizap1550 }}</td>
    <td>{{ $measurement->zapati1310 }}</td>
    <td>{{ $measurement->zapati1550 }}</td>
  </tr>
  @endif
@endforeach
  </tbody>
</table>
</div><br>

@endif
@endforeach
@endforeach


@endsection