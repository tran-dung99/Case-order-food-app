@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="col-12" style="color: #28284e">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="{{asset('storage/'.$food->image)}}" alt="Card image cap">
                        </div>
                        <div class="col-md-8">
                            <h2 class="card-title">{{$food->name}}</h2>
                            Giá:
                            <p class="card-text" style="color: orange; size: 20px">{{$food->price}}đ</p>
                            Danh mục:
                            <p class="card-text">{{$food->category->name}}</p>
                            Ghi chú:
                            <p class="card-text">{{$food->note}}</p>
                            Lượt xem:
                            <p class="card-text">{{$food->seen_time}}</p>
                            Tên nhà hàng:
                            <p class="card-text">{{$food->restaurant->name}}</p>
                            <p>Hoạt động: {{$food->restaurant->open_time}}-{{$food->restaurant->close_time}} </p>
                            <p>Thời gian giao hàng : {{$food->restaurant->ship_time}} phút </p>
                            <br>
                            <a href="{{route("foods.list")}}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
