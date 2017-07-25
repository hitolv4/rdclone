<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {	
    	$posts= Post::orderBy('id','desc')->paginate(5);
    	return view('posts.index')->with(['posts'=> $posts]);
    }
    public function show(Post $post)

    {
 
    	return view('posts.show')->with(['post'=> $post]);
    }

    public function crear()

    {
        $post= new Post;
    	return view('posts.crear')->with(['post'=> $post]);
    }

    public function store(CreatePostRequest $request)
    {
    	/*$this->validate($request,[
    		'titulo'=>'required',
    		'url'=>'required|url']);*/


    	$post=Post::create($request->only('titulo','descripcion','url'));

  		
        session()->flash('message', 'Post Creado!!!');

        return redirect()->route('posts_path');	
    }

    public function edit(Post $post)




    {
        return view('posts.edit')->with(['post'=> $post]);



    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        $post->update(
        $request->only('titulo','descripcion','url')
        );
        session()->flash('message', 'Post editado!!!');
        return redirect()->route('post_path', ['post'=> $post->id ]);

    }

    public function delete(Post $post)
    {
        $post->delete();

        session()->flash('message', 'Post Eliminado!!!');

        return redirect()->route('posts_path');


    }

}
