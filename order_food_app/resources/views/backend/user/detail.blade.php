@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="col-12" style="color: #28284e">
            <div class="card">
                <div class="card-body">
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
                            <p class="card-text">@if($user->role == 1)Admin
                                @else
                                    User
                                @endif
                            </p>
                            <a href="{{route('users.list')}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
