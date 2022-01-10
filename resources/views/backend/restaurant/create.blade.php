@extends('backend.layout.master')

@section('content')
    <form method="post" action="{{route("restaurants.create")}}">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tên Nhà Hàng</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên Nhà Hàng" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Giờ mở cửa</label>
                <input type="text" name="open_time" class="form-control" placeholder="8 : 00 AM" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Giờ đóng cửa</label>
                <input type="text" name="close_time" class="form-control"  placeholder="22 : 00 PM" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Thời gian giao hàng dự kiến</label>
                <input class="form-control"  type="text" name="ship_time" placeholder="Phút">
            </div>
            <input class="form-control"  type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route("restaurants.index")}}" class="btn btn-primary">Cancle</a>
        </div>
    </form>

@endsection

