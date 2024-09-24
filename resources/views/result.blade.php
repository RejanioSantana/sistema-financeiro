@extends('master')
@section('header')
    <h1>Planilha</h1>
@endsection
@section('main')
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Gastos mensais</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">

                      
                      <tbody>
                        <tr>
                            <th>RECEITAS FIXAS</th>

                        </tr>
                        @foreach ($report['RECEITA FIXA'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th>RECEITAS VARIAVÉIS</th>

                        </tr>
                        @foreach ($report['RECEITA VARIAVEL'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th>Total Receitas</th>
                            <th></th>
                            <th>{{$all['TR']}}</th>

                        </tr>
                        <tr>
                            <th>DESPESAS FIXAS</th>
                        </tr>
                        @foreach ($report['DESPESA FIXA'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th>DESPESAS VARIÁVEIS</th>
                        </tr>
                        @foreach ($report['DESPESA VARIAVEL'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th>Total Despesas</th>
                            <th></th>
                            <th>{{$all['TD']}}</th>

                        </tr>
                        <tr>
                            <th>Saldo</th>
                            <th></th>
                            <th>{{$all['SD']}}</th>

                        </tr>
                        
                        
                        
                    </tbody>

                    </table>
                </div><!-- /.box-body -->
              </div>
@endsection