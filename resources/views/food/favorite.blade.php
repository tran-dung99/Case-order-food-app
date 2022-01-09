@extends('backend.layout.master')
@section('content')
    <body>

    <h2 class="text-center">Danh sách món ăn đã chọn</h2>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed" style= "color: #28284e">
            <thead>
            <tr>
                <th style="width:21%">Ảnh</th>
                <th style="width:40%">Tên món ăn</th>
                <th style="width:17%">Giá</th>
                <th style="width:10%">Số lượng</th>
                <th style="width:5%">Tổng</th>
                <th style="width:7%">Xóa</th>
                {{--            <th style="width:11%" class="text-center">Thành tiền</th>--}}
                {{--            <th style="width:10%"> </th>--}}
            </tr>
            </thead>

            <tbody>
            <p style="display: none">{{$sum=0}}</p>

            @foreach($foods as $food)

                <tr>
                    {{--                    <td><img width="30%" height="30%" src="{{asset('storage/'.$food['image'])}}"></td>--}}
                    <td><img width="50%" height="50%" src="https://vcdn1-ngoisao.vnecdn.net/2015/03/07/dui-ga-nuong-mat-ong-3657-1425699789.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=bn0kkwSCvPzWCj12E0HuSw"></td>
                    <td>{{ $food['name'] }}</td>
                    <td>{{ $food['price'] }}</td>
                    <td>
                        <a href="{{ route('foods.addToFavorite',$food['id'])}}"><i class="far fa-plus-square"></i></a>
                        {{ $food['quantity'] }}  <a href="{{ route('deleteFavorite',$food['id'])}}"><i class="far fa-minus-square"></i></a>

                    </td>
                    <td>{{ $food['price']*$food['quantity']}}</td>
                    <p style="display: none">{{$sum+=$food['price']*$food['quantity']}}</p>
                    <td class="actions" data-th="">
                        <label >
                            <button class="btn btn-danger"><a href="{{ route('deleteFavorite2',$food['id'])}}"><i class="fa fa-trash-o"></i></a>
                            </button>
                        </label>
                    </td>
                </tr>

            @endforeach

            </tbody><tfoot>

            <tr>
                <td><a href="{{ route('home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong>Tổng tiền {{$sum}}</strong>
                </td>
                <td><a href="https://bill.payoo.vn/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td>
            </tr>



            </tfoot>
        </table>
    </div>

    </body>
@endsection









{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <script src="https://kit.fontawesome.com/aba694960b.js" crossorigin="anonymous"></script>--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<table border="1px" cellpadding="5" cellspacing="0">--}}
{{--    <thead>--}}
{{--    <tr>--}}

{{--        <th>Name</th>--}}
{{--        <th>Image</th>--}}
{{--        <th>Price</th>--}}
{{--        <th>Quantity</th>--}}
{{--        <th>Action</th>--}}


{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}

{{--    @foreach($foods as $food)--}}
{{--        <tr>--}}
{{--            <td>{{ $food['id'] }}</td>--}}
{{--            <td>{{ $food['name'] }}</td>--}}
{{--            <td>{{ $food['image'] }}</td>--}}
{{--            <td>{{ $food['price'] }}</td>--}}
{{--            <td>{{ $food['quantity'] }}--}}
{{--            <a href="{{ route('deleteFavorite',$food['id'])}}"><i class="far fa-minus-square"></i></a>--}}
{{--            <a href="{{ route('foods.addToFavorite',$food['id'])}}"><i class="far fa-plus-square"></i></a></td>--}}
{{--            <td>--}}
{{--                <a href="{{ route('deleteFavorite2',$food['id'])}}">Delete</a>--}}
{{--            </td>--}}
{{--        </tr>--}}

{{--    @endforeach--}}

{{--    </tbody>--}}
{{--</table>--}}

{{--</body>--}}
{{--</html>--}}
