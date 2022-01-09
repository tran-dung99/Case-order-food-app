@extends('backend.layout.master')
@section('content')
<form method="post" enctype="multipart/form-data" action="">
    <input type="hidden" name="id" value="{{$user->id}}">
    <div class="col-12"  style= "color: #28284e" >
        <div class="card" style="margin-left:50px;">
            <div class="row">
                <div class="col-md-4">
                    <img width="40%" height="80%" class="card-img-top" src="{{asset('storage/'.$user->image)}}" alt="Card image cap">
                    <br>
                    <input type="file" name="image">
                </div>
                <div class="col-md-8">
                    @csrf
                    <div class="container">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Email</label>
                            <input type="text" name="email" class="form-control" id="email"  value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Password</label>
                            <input type="password" name="password"  class="form-control"  value="{{$user->password}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Role</label><br>
                            <input class="form-control" type="number" name="role_id" value="{{$user->role_id}}">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Save User</button>
                            <a href="{{route('users.list')}}" class="btn btn-primary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

