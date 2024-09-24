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
        <form role="form" name="formulario" method="post" action="{{route('insert')}}">
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
                        <option value="1">Jan</option>
                        <option value="2">Fev</option>
                        <option value="3">Mar</option>
                        <option value="4">Abr</option>
                        <option value="5">Mai</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Ago</option>
                        <option value="9">Set</option>
                        <option value="10">Out</option>
                        <option value="11">Nov</option>
                        <option value="12">Dez</option>
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