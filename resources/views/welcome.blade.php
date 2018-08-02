@extends('master')
@section('title')
Blogging World
@endsection
@section('content')
	<div class="row">
		<div class="col-md-6">
		<h2>Sign-Up</h2>
			<form action="{{route('signup')}}" method="post">
				<div class="form-group">
					<label for="email">Your E-mail</label>
					<input class="form-control" type="text" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="submit">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
		</div>
		<div class="col-md-6">
		<h2>Sign-In</h2>
			<form action="{{route('signin')}}" method="post">
				<div class="form-group">
					<label for="email">Your E-mail</label>
					<input class="form-control" type="text" name="email1" id="email1">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="password1" id="password1">
				</div>
				<input type="submit" class="btn btn-primary" name="submit" value="submit">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
		</div>
	</div>
	
@endsection