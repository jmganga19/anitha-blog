<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        
        $posts =  Post::all();

        return view('frontend.blog',compact('posts'));
    }

    public function show($id) {

        $post = Post::find($id);

        return view('frontend.blog', compact('post'));
    }
}


