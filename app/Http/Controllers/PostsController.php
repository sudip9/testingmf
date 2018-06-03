<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()

    {
    	$posts = Post::latest()->get();
        //$posts = Post::orderBy('created_at', 'asc')->get();

    	return view ('posts.index',compact('posts'));
    }



      public function show($id)

    {
    	$post = Post::find($id);
    	return view ('posts.show',compact('post'));
    }



       public function create()

    {

    	return view ('posts.create');
    }



       public function store()

    {
    	$this->validate(request(), [

    		'title' => 'required',
    		'body'  => 'required'




    	]);

    	$post = new Post;

    	$post->title = request('title');
    	$post->body = request('body');
    	$post->save();

    	return redirect('/index');

    }
}
