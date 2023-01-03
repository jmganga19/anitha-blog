<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $posts = Post::count();

        $users = User::where('role_as','0')->count();
        
        return view('admin.dashboard',compact('posts','users'));
    }
}
