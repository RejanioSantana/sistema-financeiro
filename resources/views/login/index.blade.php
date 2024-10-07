@extends('master-access')

@section('contant')
<div class="login-box-body">
        <p class="login-box-msg">Entre para iniciar sua sessão</p>
        <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password"  placeholder="Senha"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="login-box-msg">
            <p>{{$errors->first('email')}}</p>
            <p>{{$errors->first('password')}}</p>

            @if (session()->has('error_login'))
                {{session()->get('error_login')}}
            @endif

          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <!-- <input type="checkbox"> Lembre-me -->
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <!-- <a href="#">Esqueci minha senha.</a><br> -->
        <a href="{{route('login.create')}}" class="text-center">Cadastra-se.</a>

      </div><!-- /.login-box-body -->
@endsection