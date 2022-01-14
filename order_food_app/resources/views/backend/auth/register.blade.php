<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('backend/./css/style.css')}}" rel="stylesheet">
</head>
<body class="h-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign up your account</h4>
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Username</strong></label>
                                        <input type="name" class="form-control" name="name" placeholder="username" value="{{old('name')}}">
                                        @error("name")
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Phone</strong></label>
                                        <input type="phone" class="form-control" name="phone" placeholder="+84" value="{{old('phone')}}">
                                        @error("phone")
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" name="email" placeholder="hello@example.com" value="{{old('email')}}">
                                        @error("email")
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
                                        @error("password")
                                        <p style="color: red">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Role</strong></label><br>
                                        <select name="role_id" id="">
                                            <option value="1">Admin</option>
                                            <option value="2">User</option>
                                        </select>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="{{route('admin.showFormLogin')}}">Sign in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend/./vendor/global/global.min.js')}}"></script>
<script src="{{asset('backend/./js/quixnav-init.js')}}"></script>
<!--endRemoveIf(production)-->
</body>

</html>
