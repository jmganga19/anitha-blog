@extends('layouts.master')
@section('title','post')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">

        <div class="card-header">
            <h4 class="">Edit Post</h4>
        </div>
        <div class="card-body">

         @include('alerts.error')

            <form method="post" action="{{url('admin/update-post/'.$post->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="mb-3">
                <label>Post Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
              </div>

              <div class="mb-3">
                <label>Post slug</label>
                <input type="text" name="slug" value="{{$post->slug}}" class="form-control">
              </div>

              <div class="mb-3">
                <label>Post Description</label>
                <textarea name="description" rows ='5' class="form-control">{{$post->description}}</textarea>
              </div>

              <div class="mb-3">
                <label>Post Image</label>
                <input type="file" name="image"  class="form-control">
              </div>

              <h6>SEO Tags</h6>

              <div class="mb-3">
                <label>Meta Title</label>
                <input type="text" name="meta_title" value="{{$post->meta_title}}" class="form-control">
              </div>

              <div class="mb-3">
                <label>Meta description</label>
                <textarea name="meta_description" rows='3' class="form-control">{{$post->meta_description}}</textarea>
              </div>

              <div class="mb-3">
                <label>Meta Keywords</label>
                <textarea name="meta_keyword" rows='3' class="form-control">{{$post->meta_keyword}}</textarea>
              </div>


            <h6> Status Mode</h6>
            <div class="col-md-1 mb-3">
                <label>status</label>
                <input type="checkbox" name="status" {{$post->status == 1 ? 'checked': ''}} class="form-control">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>

            </form>


        </div>
    </div>
</div>

@endsection
