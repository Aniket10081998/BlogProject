@extends('master')
@section('content')
	<div>
		<h1>Your blog</h1>
		<br><br>
		<form action="{{route('post.create')}}" method="post">
		<div>
		<textarea class="form-control" name="body" id="blog" placeholder="enter your text here" rows="15"></textarea>
		<br><br>
		</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Post Blog"> 
		<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form> 
	</div>
	<br><br>
	<h1>Here you can see everyone's blog</h1>
	<br><br>
	<div>
	@foreach($posts as $post)
	<article class="post">
	<p>{{$post->body}}</p>
	<div class="interaction">
	<a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete This Post</a>

	</div>
	<br><br>
	</article>
	@endforeach
	</div>
	 
@endsection