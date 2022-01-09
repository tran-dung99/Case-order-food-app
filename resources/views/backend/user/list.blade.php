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
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Role</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$user["name"]}}</td>
        <td>{{$user["phone"]}}</td>
        <td>{{$user["email"]}}</td>
        <td>
            {{$user->role->name}}
        </td>
        <td><a href="{{route('users.show',$user->id)}}"><button type="button" class="btn btn-outline-info">Detail</button></a></td>
        <td><a href="{{route('users.edit',$user->id)}}"><button type="button" class="btn btn-outline-warning">Update</button></a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
