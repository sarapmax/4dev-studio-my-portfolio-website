@extends('backoffice.layout.master')

@section('master-content')


<div style="max-width: 800px;margin: 0 auto;padding: 100px 20px 20px 20px;" class="loginColums animated fadeInDown">

<div style="background: #fff;padding:20px;" class="middle-box text-center loginscreen">
    <div>
        <div>
        	<img style="width:150px;" src="{{ asset('img/4dev-logo.png') }}">
        </div>
        <p>Welcome to 4Dev Studio</p>
        @if(Session::has('error-login'))
        <div class="alert alert-danger">
        	{{ Session::get('error-login') }}
        </div>
        @endif
        <form class="m-t" role="form" action="{{ url('backoffice/login') }}" method="POST">
        	{{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email" name="email">
                @if($errors->has('email'))
				<span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                @if($errors->has('password'))
				<span class="help-block">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember_token"> Remember me
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b"><i class="fa fa-sign-in"> </i> Login</button>
        </form>
    </div>
</div>
	
</div>

@endsection