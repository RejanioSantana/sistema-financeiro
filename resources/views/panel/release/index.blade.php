@extends('master')
@section('header')
    <h1>Lista de Dados ({{$dados->total()}})</h1>
@endsection
@section('main')
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>data</th>
                        <th>Descrição</th>
                        <th>Tipo</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($dados as $index)
                        <tr>
                        <td>
                        @php
                        $aux = explode('-',$index->date);
                        $year = $aux[0];
                        $month = $aux[1];
                        $month = $months[$month -1];
                        $month = "$month/$year" ;
                        @endphp    
                        {{$month}}</td>
                        <td>{{$index->description}}(R${{$index->value}})</td>
                        <td>{{$index->type}}</td>
                        <td>
                          <form action="{{route('panel.release.destroy',$index->id)}}" method="post">
                              @csrf()
                              @method('delete')
                              <button type="submit" class="btn btn-danger">Deletar</button>
                          </form>
                        </td>
                        
                        </tr>
                        
                    @endforeach
                    </tbody>

                    </table>
                    {{$dados->links()}}
                </div><!-- /.box-body -->
              </div>
@endsection