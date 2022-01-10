@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Add new user</h5>
            <div class="card-body">
                <form style= "color: #28284e" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                               class="form-control @error('name') is-invalid @enderror" placeholder="hello">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone"
                               class="form-control @error('phone') is-invalid @enderror" placeholder="+84">
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="hello@gmail.com">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="input-group mb-2">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="*******">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Role</label><br>
                        <select name="role_id" class="form-control">
                            <option value="1">Amin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <div>
                        <input type="file" name="image">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('users.list')}}" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection







