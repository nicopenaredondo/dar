@extends('layout.login')
@section('title')
	Highly Succeed Ltd | DARTS v0.1
@stop
@section('container')
	<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">
            	DARTS v0.1
            </h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                {{ Form::open(array('to' => 'auth/login','class' => 'form-signin')) }}
                @include('notification')
                <div class="control-group {{ ($errors->has('username')) ? 'error' : '' }}" for="username">
                    <label class="control-label" for="username">Username</label>
                    <div class="controls">
                        <input type="text" name="username" id="username" value="{{ Request::old('username') }}" class="input-xlarge form-control" placeholder="Username">
                        {{ ($errors->has('username') ? $errors->first('username') : '') }}
                    </div>
                </div>

                 <div class="control-group {{ ($errors->has('password')) ? 'error' : '' }}" for="password">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" name="password" id="password" value="{{ Request::old('password') }}" class="form-control" placeholder="Password">
                        {{ ($errors->has('password') ? $errors->first('password') : '') }}
                    </div>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" name="rememberMe" value="rememberMe">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                {{ Form::close() }}
            </div>
            {{ HTML::link(URL::route('register'), 'Create an account', array('class'=> 'text-center new-account'), '') }}
        </div>
    </div>
@stop