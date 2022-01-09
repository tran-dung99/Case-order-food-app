@extends('backend.layout.master')
@section('content')
<div class="col-8" style= "color: #28284e">
    <div class="card" style="margin-left:50px;">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top" src="{{asset('storage/'.$user->image)}}" alt="Card image cap">
            </div>
            <div class="col-md-8">
                <h3 class="card-title">{{$user->name}}</h3>
                Phone:
                <p class="card-text">{{$user->phone}}</p>
                Email:
                <p class="card-text">{{$user->email}}</p>
                Role:
                <p class="card-text">{{$user->role->name}}</p>
                <a href="{{route('users.list')}}" class="btn btn-primary">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection
