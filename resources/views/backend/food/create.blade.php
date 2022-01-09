@extends('backend.layout.master')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{route('foods.create')}}" style="color: black">
    @csrf
    <div class="container">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên món ăn">
    </div>
    <div class="form-group">
        <label for="restaurant">Nhà hàng</label>
        <select class="form-control" id="restaurant" name="restaurant">
            @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
            @endforeach
        </select>
    </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Nhập địa chỉ">
        </div>
        <div class="form-group">
            <label for="category">Danh mục</label>
            <select class="form-control" id="category" name="category">
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="category">Người dùng</label>
            <select class="form-control" id="category" name="user">
                @foreach(\App\Models\User::all() as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Ghi chú</label>
        <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Giá</label>
            <input class="form-control"  type="number" name="price" placeholder="Nhập giá món ăn">
        </div>
            <div>
        Hình ảnh <br>
        <input type="file" name="image">
            </div>
        <div style="text-align: center">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{route("foods.index")}}" class="btn btn-primary">Cancle</a>
        </div>
    </div>
</form>

    @endsection
