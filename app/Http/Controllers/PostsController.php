<?php

namespace App\Http\Controllers;

//use DB;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {
    	//$posts = DB::table('posts')->get(); 
    	$posts = Post::all();
    	return view('posts.index', compact('posts'));
    }

    /*public function show($id)
    {
    	$post = Post::find($id);
    	//return $post;
    	return view('posts.post ', compact('post'));
    }*/

    public function show(Post $post)
    {
    	return view('posts.post ', compact('post'));
    }
}
