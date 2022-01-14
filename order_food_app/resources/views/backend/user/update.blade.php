@extends('backend.layout.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="">
        <div class="container">
        <input type="hidden" name="id" value="{{$user->id}}">
            <div class="col-12" style="color: #28284e">
                <div class="card" style="margin-left:50px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="40%" height="80%" class="card-img-top" src="{{asset('storage/'.$user->image)}}"
                                 alt="Card image cap">
                            <br>
                            <input type="file" name="image">
                        </div>
                        <div class="col-md-8">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                                @error('name')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone"
                                       value="{{$user->phone}}">
                                @error('phone')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Email</label>
                                <input readonly type="text" name="email" class="form-control" id="email"
                                       value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Password</label>
                                <input readonly type="password" name="password" class="form-control" value="{{$user->password}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Role</label><br>
                                <select name="role_id" class="form-control">
                                    @foreach(\App\Models\Role::all() as  $role)
                                        @if($role->id == $user->role_id)
                                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                        @else
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
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

