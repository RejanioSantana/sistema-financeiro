
@extends('master')

@section('header')
    @php
       setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    @endphp
    <h1>
    Este mês de {{strftime('%B', strtotime('today'));}}
      {{-- <small>Version 1.0</small> --}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
@endsection
@section('main')


    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class=""></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Movimento</span>
            <span class="info-box-number">{{$relatorio['GR']}}</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class=""></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Despesas</span>
            <span class="info-box-number">{{$relatorio['DG']}}</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class=""></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Rendas</span>
            <span class="info-box-number">{{$relatorio['RG']}}</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-orege"><i class=""></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Lucros</span>
            <span class="info-box-number">{{$relatorio['LC']}}</span>
          </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
      </div><!-- /.col -->
      <div class="content" style="display: flex;">

        <div id="donutchart" style="width: 100%; height: 40vh;"></div>
      
      </div>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Rendas',     <?=$relatorio['RG']?>],
          ['Despesas',      <?=$relatorio['DG']?>],
          // ['Movimento',  ],
          // ['Watch TV', 2],
          // ['Sleep',    7]
        ]);

        var options = {
          title: 'Receitas e Despesas',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  @endsection