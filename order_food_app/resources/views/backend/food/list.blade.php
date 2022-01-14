@extends('backend.layout.master')
@section('name-list',"Danh sách món ăn")
@section('title','Food Admin')
@section('content')
<div class="container">
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
        toastr.success("{{ session('message') }}");
        @endif
    </script>
    <br>
    <table class="table table-bordered" style="color: #28284e" >
        <thead>
        <tr>
            <th colspan="6"><a type="button" class="btn btn-success" href="{{route("foods.showFormCreate")}}">Create</a>
            </th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Restaurant</th>
            <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foods as $food)

            <tr class="food-{{$food->id}}">
                <td>{{$food->name}}</td>
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
