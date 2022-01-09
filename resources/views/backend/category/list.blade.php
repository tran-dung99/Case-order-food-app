@extends('backend.layout.master')
@section('title','Food Admin')
@section('foodList')
<div class="container">

    <table class="table table-striped" style="margin-left: 100px;color: black">

        <thead>
        <tr>
            <th colspan="3"><a type="button" class="btn btn-success" href="{{route("categories.showFormCreate")}}">Create</a></th>

        </tr>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)

            <tr class="category-{{$category->id}}">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td><button class="btn btn-warning delete-category" data-id="{{$category->id}}">Delete</button></td>
                <td><a href="{{route("categories.showFormUpdate",$category->id)}}">Update</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let baseUrl = origin;
        $("body").on("click",".delete-category",function () {
            if(confirm("Bạn có chắc muốn xóa danh mục này không ?")) {
            let id = $(this).attr("data-id");
            $.ajax({
                url: baseUrl + "/admin/foods/delete/"+id,
                type: "GET",
                success: function (res){
                    $(".category-"+id).hide()
                }
            })
            }
        })
    </script>
@endsection
