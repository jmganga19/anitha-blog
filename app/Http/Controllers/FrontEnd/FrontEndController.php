<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function index(){

        $posts =  Post::all();
        
        return view('frontend.index',compact('posts'));

    }
}
