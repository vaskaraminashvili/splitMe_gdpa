<x-layouts.login>

<!-- Teachers Area section -->
<section class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="{{route('login')}}" method="post" class="learnpro-register-form text-center">
                    @csrf
					<p class="lead">Welcome Back</p>
					<div class="form-group">
					  	<input autocomplete="off" class="required form-control" placeholder="Email *" name="email" type="email">
					</div>
					<div class="form-group">
					  	<input class="required form-control" placeholder="Password *" name="password" type="password">
					</div>
					<div class="form-group register-btn">
					 	<button type="submit" class="btn btn-primary btn-lg">Register</button>
					</div>
					<a href="forgot_password.html"><strong>Forgot password?</strong></a>
					<p>Not a member? <a href="register.html"><strong>Join today</strong></a></p>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->
</x-layouts.login>
