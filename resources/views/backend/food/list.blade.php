@extends('backend.layout.master')
@section('name-list',"Danh sách món ăn")
@section('title','Food Admin')
@section('foodList')
<div class="container">
<a type="button" class="btn btn-success" href="{{route("foods.showFormCreate")}}">Create</a>
    <table class="table" style="color: #28284e" >
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Restaurant</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foods as $food)

            <tr class="food-{{$food->id}}">
                <td>{{$food->name}}</td>
                <td>{{$food->address}}</td>
                <td>{{$food->restaurant->name}}</td>
                <td>{{$food->price}}</td>
                <td><a type="button" class="btn btn-warning" href="{{route("foods.detail",$food->id)}}">Detail</a></td>
                <td><a type="button" class="btn btn-primary" href="{{route("foods.showFormUpdate",$food->id)}}">Update</a></td>
                <td><button class="btn btn-danger delete-food" data-id="{{$food->id}}">Delete</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let baseUrl = origin;
        $("body").on("click",".delete-food",function () {
            if(confirm("Bạn có chắc muốn xóa món ăn này không ?")) {
            let id = $(this).attr("data-id");
            $.ajax({
                url: baseUrl + "/admin/foods/delete/"+id,
                type: "GET",
                success: function (res){
                    $(".food-"+id).hide()
                }
            })
            }
        })
    </script>
@endsection
