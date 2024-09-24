
@extends('master')

@section('header')
    <h1>
    Utimos 30 dias
      <small>Version 1.0</small>
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
            <span class="info-box-text">Gastos</span>
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
            <span class="info-box-text">Renda</span>
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

  @endsection