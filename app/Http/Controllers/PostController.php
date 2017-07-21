<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {	
    	$posts= Post::orderBy('id','desc')->get();
    	return view('posts.index')->with(['posts'=> $posts]);
    }
    public function show(Post $post)

    {
 
    	return view('posts.show')->with(['post'=> $post]);
    }

    public function crear()
    {
    	return view('posts.crear');
    }

    public function store(CreatePostRequest $request)
    {
    	/*$this->validate($request,[
    		'titulo'=>'required',
    		'url'=>'required|url']);*/


    	$post=Post::create($request->only('titulo','descripcion','url'));

  		return redirect()->route('posts_path');	
    }

}
