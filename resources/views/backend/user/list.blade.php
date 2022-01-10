@extends('backend.layout.master')
@section('content')
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
<table class="table table-bordered" style= "color: #28284e">
    <thead>
    <tr>
        <th colspan="8"><a type="button" class="btn btn-success" href="{{route('users.create')}}">Create</a></th>
    </tr>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Role</th>
        @can('crud-user')
        <th colspan="3">Action</th>
        @endcan
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
    <tr id="delete-{{$user->id}}">
        <td>{{$key+1}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>
            @if($user->role == 1)
                admin
            @else
               user
            @endif
        </td>
        @can('crud-user')
        <td><a href="{{route('users.show',$user->id)}}"><button type="button" class="btn btn-warning">Detail</button></a></td>
            <td><a href="{{route('users.edit',$user->id)}}"><button type="button" class="btn btn-primary">Update</button></a></td>
            <td><button data-id="{{$user->id}}" class="btn btn-danger delete-user">Delete</button></td>
        @endcan
    </tr>
    @endforeach
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('my.js')}}" ></script>
@endsection
