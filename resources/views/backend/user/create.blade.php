@extends('backend.layout.master')
@section('content')


    <div class="container-fluid">

        <div class="card">
            <h5 class="card-header">Add new user</h5>
            <div class="card-body">
                <form style= "color: #28284e" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{ old('name') }}" name="name"
                               class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone"
                               class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                        >
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="input-group mb-2">
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Role</label><br>
                        <select name="role_id">
                            @foreach(\App\Models\Role::all() as  $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div>
                        <input type="file" name="image">
                    </div><br>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection









{{--<form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Name"><br>--}}
{{--    <input type="text" name="email" placeholder="Email"><br>--}}
{{--    <input type="password" name="password" placeholder="Password"><br>--}}
{{--    <input type="number" name="phone" placeholder="Phone"><br>--}}
{{--    <input type="number" name="role_id" placeholder="Role"><br>--}}
{{--    <input type="file" name="image"><br>--}}
{{--    @foreach($roles as $role)--}}
{{--        <input  name="roles[{{$role->id}}]" type="checkbox"--}}
{{--                value="{{$role->id}}" id="roleCheck{{$role->id}}"> {{ $role->name }}--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    <button type="submit">Nhập vào</button>--}}
{{--</form>--}}
