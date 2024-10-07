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
                        @forelse ($report['RECEITA FIXA'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td></td>
                            </tr>
                            
                        @endforelse
                        <tr>
                            <th>RECEITAS VARIAVÉIS</th>

                        </tr>

                        @forelse ($report['RECEITA VARIAVEL'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td></td>
                            </tr>
                            
                        @endforelse

                        <tr>
                            <th>Total Receitas</th>
                            <th></th>
                            <th>{{$all['TR']}}</th>

                        </tr>
                        <tr>
                            <th>DESPESAS FIXAS</th>
                        </tr>
                        @forelse ($report['DESPESA FIXA'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td></td>
                            </tr>
                            
                        @endforelse
                        
                        <tr>
                            <th>DESPESAS VARIÁVEIS</th>
                        </tr>
                        
                        @forelse ($report['DESPESA VARIAVEL'] as $index)
                            <tr>
                            <td>{{$index[0]}}</td>
                            <td>{{$index[1]}}</td>
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td></td>
                            </tr>
                            
                        @endforelse

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
                <button class="btn btn-primary"><a href="{{route('panel.report.index')}}" style="color:white"> Voltar</a></button>
              
@endsection