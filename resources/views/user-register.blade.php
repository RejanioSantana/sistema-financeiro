@extends('master-access')

@section('contant')
<div class="register-box-body">
        <p class="login-box-msg">Registro de usuário</p>
        <form action="{{route('login.store')}}" method="post">
        @csrf
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="fistname" placeholder="Nome"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lastname" placeholder="Sobrenome"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Senha"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
              <input type="password" class="form-control" name="confirm-password" placeholder="Confirme senha"/>
              <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password-admin" placeholder="Senha adiministrador"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registra</button>
            </div><!-- /.col -->
          </div>
        </form>        

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div> -->

        <!-- <a href="#" class="text-center">I already have a membership</a> -->
      </div><!-- /.form-box -->
@endsection