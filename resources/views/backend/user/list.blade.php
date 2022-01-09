@extends('backend.layout.master')
@section('content')
<table class="table table-bordered" style= "color: #28284e">
    <thead>
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
    <tr>
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
        <td><a href="{{route('users.show',$user->id)}}"><button type="button" class="btn btn-outline-info">Detail</button></a></td>
            <td><a href="{{route('users.edit',$user->id)}}"><button type="button" class="btn btn-outline-warning">Update</button></a></td>
        @endcan

    </tr>
    @endforeach
    </tbody>
</table>
@endsection
