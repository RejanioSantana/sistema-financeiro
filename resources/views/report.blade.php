@extends('master')
@section('header')
    
<h1>Emissão de Relatório</h1>
@endsection

@section('main')
<div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Escolha o período de visulização:</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" name="formulario" method="post" action="{{route('pdf')}}">
            @csrf
            <div class="box-body">
            <div class="form-group">
                <label>
                    <label>Mês
                      <select class="form-control" name="month-1">
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
                </label>
                <label>
                    <label for="exampleInputEmail1">Ano
                    <input type="text" class="form-control" name="year-1" id="exampleInputEmail1" 
                    value="{{$date}}" pattern="^\d{4,}$"
                    size="4" maxlength="4">
                    </label>
                </label>
            </div>
            <hr>
            <h5>Até</h5>
            <hr>
            <div class="form-group">
                <label>
                    <label>Mês
                      <select class="form-control" name="month-2">
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
                </label>
                <label>
                    <label for="exampleInputEmail1">Ano
                    <input type="text" class="form-control" name="year-2" id="exampleInputEmail1" 
                    value="{{$date}}" pattern="^\d{4,}$"
                    size="4" maxlength="4">
                    </label>
                </label>
            </div>


            </div><!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Gerar</button>
            </div>
        </form>
    </div>
@endsection 