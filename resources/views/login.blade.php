@extends('layouts.app')

@section('content')

<div class="login-section">
	<div class="container">
		<div class="login-form">
			<h2>Login</h2>
		</div>
		
		<div class="form">
			<form name="login_form" id="login_form" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 ">
                                <div class="checkbox" name="remember_me" >
                                    <input type="checkbox" id="checkbox" name="remember" value=""/><span class="checkbox"> Remember me</span>
                                    <!--
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                	-->

                                </div>
                            </div>
                        	


                            <div class="col-md-6 ">
                                <div class="forget"><a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a></div>
                            </div>
                        </div>

						<span class="button">
							<input name="submit" value="Login" type="submit">
						</span>

                        <span class="hr"><h5>or</h5></span>
						<div class="social-btn">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
							<a class="google" href="#"><i class="fa fa-google" aria-hidden="true"></i>Login With Google</a>
						</div>


                    </form>
		<!--
			<form name="login_form" id="login_form" method="post" action="">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="email" name="email" placeholder="Email or username" required="true">
				<input type="password" name="password" placeholder="Password" required="true">
				<input type="checkbox" id="checkbox" name="remember_me" value="" required="false"/><span class="checkbox"> Remember me</span>
				<div class="forget"><a href="#">Forgot your password?</a></div>
				<span class="button">
					<input name="submit" value="Login" type="submit">
				</span>
				<span class="hr"><h5>or</h5></span>
				<div class="social-btn">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
					<a class="twiter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Login With Twitter</a>
				</div>
			</form>
		-->

			<p class="sgin">Not a member yet? <span><a href="{{ URL:: asset('/signup') }}">SignUp</a></span></p>
		</div>

	</div>
</div>



@endsection