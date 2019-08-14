@extends('layouts.app')
<style type="text/css">
    .login-panel {
        font-family: "Poppins-Regular";
    padding: 150px 50px;
    color: #fff;

}
.form-group label{
        color: #fff!important;
}
.summary{
    text-align: center;
    position: absolute;
    top: 50%;
    padding: 0px 100px;
  transform: translate(0%, -50%);
}
</style>
@section('content')
<div class="container-fluid" style="height:100%; min-height:100%">
    <div class="row"  style="height:100%; min-height:100%">

        <div class="col-6" style="background: #d1d1d1;">
            <div class="summary">
            <img src="../img/logo.png">
            <p class="text-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </p>
        </div>
        </div>
        <div class="col-6" style="background: #303f9f; color:#fff;">
        <div class="panel panel-default login-panel">
                <h1 class="panel-heading">Login</h1>


                <div class="panel-body">
                    <div class="col-md-12">
                    <div class="row">
                     <div class="col-md-6"><a href="/patient/register" class="btn btn-white btn-border btn-round mr-2" style="width:100%;">Patient</a></div>
                     <div class="col-md-6"><a href="#" class="btn btn-secondary btn-round" style="width:100%;">Doctor</a></div>
                    </div>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
