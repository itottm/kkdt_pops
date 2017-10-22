<?php

namespace App\Http\Controllers\Dashbord;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index() {
        // $posts = \App\Post::all();
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
//        $posts = Post::latest()->get();
        // $posts = [];
        // dd($posts->toArray()); // dump die
        // return view('posts.index', ['posts' => $posts]);
//        return view('posts.index')->with('posts', $posts);
        return view('dashbord.index');
    }

    // public function show($id) {
    public function upload() {
        // $post = Post::find($id);
        // $post = Post::findOrFail($id);
//        return view('posts.show')->with('post', $post);
        return view('dashbord.upload');
    }
}
