@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="page-header">
                <h3>Novo edificio</h3>
            </div>
          
        </div>
    </div>

    <form class="form-horizontal" action="{{ route('buildings.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2">Nome:</label>
            <div class="col-sm-4"> 
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2">Pisos:</label>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="my_checkbox[]" value="R/Chão">R/Chão</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso01">Piso 1</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso02">Piso 2</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso03">Piso 3</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso04">Piso 4</label><br>
                </div>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso05">Piso 5</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso06">Piso 6</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso07">Piso 7</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso08">Piso 8</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso09">Piso 9</label><br>
                </div>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso10">Piso 10</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso11">Piso 11</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso12">Piso 12</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso13">Piso 13</label><br>
                    <label><input type="checkbox" name="my_checkbox[]" value="Piso14">Piso 14</label><br>
                </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2">Fracções:</label>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção01">Fracção 1</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção02">Fracção 2</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção03">Fracção 3</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção04">Fracção 4</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção05">Fracção 5</label><br>
                </div>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção06">Fracção 6</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção07">Fracção 7</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção08">Fracção 8</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção09">Fracção 9</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção10">Fracção 10</label><br>
                </div>
                <div class="checkbox col-sm-2">
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção11">Fracção 11</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção12">Fracção 12</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção13">Fracção 13</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção14">Fracção 14</label><br>
                    <label><input type="checkbox" name="fr_checkbox[]" value="Fracção15">Fracção 15</label><br>
                </div>
          </div>

         
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </div>

    </form>


@endsection