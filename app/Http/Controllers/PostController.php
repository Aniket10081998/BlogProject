<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function getDashboard()
		{
			$posts=Post::all();
			return view('dashboard' , ['posts'=>$posts]);
		}
	public function postCreatePost(Request $request)
	{
	

		$post = new Post();
		$post->body = $request['body'];
		$request->user()->posts()->save($post);
	
		return redirect()->route('dashboard');
	}
	public function getDeletePost($post_id)
	{
		
		$post=Post::where('id',$post_id)->first();
		$post->delete();
		return redirect()->route('dashboard');
	}
}