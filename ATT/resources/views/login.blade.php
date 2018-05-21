<!doctype html>
<head><title>LOGIN</title></head>
<body>
	<div class="container box">
		<h3 align="center">LOGIN</h3>
		@if(isset(Auth::user()->username))
			<script>window.location="/login/successlogin"</script>
		@endif

		@if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<strong> {{ $message }} </strong>
		</div>
		@endif
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{ url('/login/checklogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label> Enter Username </label>
				<input type="text" name="username" class="form-control"></input>
			</div>
			<div class="form-group">
				<label> Enter Password </label>
				<input type="password" name="password" class="form-control"></input>
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-primary" value="Login"></input>
			</div>
		</form>


	</div>
</body>
</html>