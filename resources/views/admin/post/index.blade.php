@extends('layouts.master')
@section('title','post')

@section('content')
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/delete-post/')}}" method="post">
            @csrf
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="post_delete_id" id="post_id">
                <h5>Are you sure you want to delete this post.?</h5>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes Delete</button>
                </div>
        </form>
      </div>
    </div>
  </div>


<div class="container-fluid px-4">
       <div class="card mt-4">
        <div class="card-header">
    <h4>View Post
        <a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add Post</a>
    </h4>

        </div>
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success">

                {{session('status')}}
            </div>

            @endif

            {{-- table design --}}


             <table class="table table-bordered">
                 <thead>
                    <tr>

                        <th>Id</th>
                        <th>Post Title</th>
                        <th>Post Description</th>
                        <th>Post Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($post as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                         <img src="{{asset('public/Image/'.$item->image)}}"width="50px" height="50px" alt="Img">
                        </td>
                        <td>{{$item->status == 1 ? 'Hidden' : 'Shown'}}</td>
                        <td>
                            <a href="{{url('admin/edit-post/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        {{-- <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a> --}}
                           <button type="button" class="btn btn-danger deletePostBtn" value="{{$item->id}}">Delete</button>
                    </td>
                    </tr>
                    @endforeach
                 </tbody>
             </table>
        </div>
       </div>


</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function (){
    $(document).on('click','.deletePostBtn',function(e){
            e.preventDefault();
            var post_id = $(this).val();
            $('#post_id').val(post_id);
            $('#deleteModal').modal('show');

        });
    });
</script>

@endsection
