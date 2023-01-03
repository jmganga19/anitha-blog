@extends('layouts.master')
@section('title','view user')

@section('content')
<div class="container-fluid px-4">
       <div class="card mt-4">
        <div class="card-header">
    <h4>View Users
        {{-- <a href="{{url('admin/add-post')}}" class="btn btn-primary btn-sm float-end">Add Post</a> --}}
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
                        <th>Username</th>
                        <th>Email</th>
                        <th>role as</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role_as == 1 ? 'Admin' : 'User'}}</td>
                        <td>
                            <a href="{{url('admin/users/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                 </tbody>
             </table>
        </div>
       </div>


</div>

@endsection
