<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class PostController extends Controller
{
   public function index(){
    $post =  Post::all();

    return view('admin.post.index',compact('post'));

   }
   public function create(){
    return view('admin.post.create');
   }
   public function store(PostRequest $request){

    $data = $request->validated();
    $post = new Post();
    $post->title = $data['title'];
    $post->slug = $data['slug'];
    $post->description = $data['description'];
    if($request->hasfile('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $post->image = $filename;
    }
    $post->meta_title = $data['meta_title'];
    $post->meta_description = $data['meta_description'];
    $post->meta_keyword = $data['meta_keyword'];
    $post->status = $request->status == true ? '1' : '0';
    $post->created_by = Auth::user()->id;
    $post->save();

    return redirect('admin/post')->with('status','post created succesfully');
   }

    public function edit($post_id){

        $post= Post::find($post_id);

        return view('admin.post.edit',compact('post'));
    }


  public function update(PostRequest $request, $post_id){

    $data = $request->validated();

    $post = Post::find($post_id);

    $post->title = $data['title'];

    $post->slug = $data['slug'];

    $post->description = $data['description'];

    if($request->hasfile('image')){

       //for image that exist
        $destination = 'public/Image/'.$post->image;

        if(File::exists($destination)){

            File::delete($destination);
        }

        $file= $request->file('image');

        $filename= date('YmdHi').$file->getClientOriginalName();

        $file-> move(public_path('public/Image'), $filename);

        $post->image = $filename;
    }

    $post->meta_title = $data['meta_title'];

    $post->meta_description = $data['meta_description'];

    $post->meta_keyword = $data['meta_keyword'];

    $post->status = $request->status == true ? '1' : '0';

    $post->created_by = Auth::user()->id;

    $post->update();

    return redirect('admin/post')->with('status','post Updated succesfully');


  }

   public function destroy(Request $request){

    $post = Post::find($request->post_delete_id);

    if($post){
        //to delete image

        $destination = 'public/Image/'.$post->image;

        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $post->delete();

        return redirect('admin/post')->with('status','post deleted succesfully');

    }else{
        
        return redirect('admin/post')->with('status','No post Id Found');
    }


   }

}
