@extends('master')
@section('header')
<h1>Controle de gastos mensais</h1>
@endsection

@section('main')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Inserção de {{$data[0][1]}}</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" name="formulario" method="post" action="{{route('panel.release.store')}}">
            @csrf
            <input type="hidden" name="tipo" value="{{$data[0][0]}}">
            <div class="box-body">

            <div class="form-group">
                
                <label>

                    <input type="radio" name="description" value="new" checked>
                    <label for="new">Nova</label>
                    <input type="text" class="form-control" name="new_description" id="new"
                    onclick="javascript:formulario.description[0].checked=true">
                
                </label>
                <label>

                    <input type="radio" name="description"  value="exist" >
                    <label for="exist">Existente</label>
                      <select class="form-control"  name="exist_description" 
                      onclick="javascript:formulario.description[1].checked=true">

                        @foreach ( $data[1] as $description )
                        
                        <option>{{$description}}</option>

                        @endforeach
                      </select>
                
                </label>
                
            </div>
            <div class="form-group">
                <label>
                    <label>Mês</label>
                      <select class="form-control" name="month">
                        <?php 
                            $currentMonth = date('n'); // Obtém o número do mês atual (1-12)
                            $months = [
                                1 => 'Jan', 2 => 'Fev', 3 => 'Mar', 4 => 'Abr', 5 => 'Mai', 
                                6 => 'Jun', 7 => 'Jul', 8 => 'Ago', 9 => 'Set', 10 => 'Out', 
                                11 => 'Nov', 12 => 'Dez'
                            ];

                            foreach ($months as $value => $name) {
                                $selected = ($value == $currentMonth) ? 'selected' : ''; // Verifica se é o mês atual
                                echo "<option value=\"$value\" $selected>$name</option>";
                            }
                        ?>
                      </select>
                
                </label>
                <label>
                    <label for="exampleInputEmail1">Ano</label>
                    <input type="text" class="form-control" name="year" id="exampleInputEmail1" 
                    value="{{$data[2]}}" pattern="^\d{4,}$"
                    size="4" maxlength="4">
                
                </label>
            
            </div>
            <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="text" class="form-control" name="value" pattern="^\d+([.,]\d+)?$" required>
            </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection