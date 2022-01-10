@extends('backend.layout.master')
@section('title','Food Admin')
@section('content')


    <table class="table table-bordered" style="color: black; width: 50%; margin-left: 300px">

        <thead>
        @can('update_edit_category')
        <tr>
            <th colspan="4"><a type="button" class="btn btn-success" href="{{route("categories.showFormCreate")}}">Create</a></th>

        </tr>
        @endcan
        <tr style="width: 50px">
            <th>Id</th>
            <th>Name</th>
            @can('update_edit_category')
            <th colspan="2">Action</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)

            <tr class="category-{{$category->id}}" style="width: 50px">
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                @can('update_edit_category')
                <td><a type="button" class="btn btn-primary" href="{{route("categories.showFormUpdate",$category->id)}}">Update</a></td>
                <td><button class="btn btn-danger delete-category" data-id="{{$category->id}}">Delete</button></td>
                @endcan
            </tr>
        @endforeach
        </tbody>
    </table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        let baseUrl = origin;
        $("body").on("click",".delete-category",function () {
            if(confirm("Bạn có chắc muốn xóa danh mục này không ?")) {
            let id = $(this).attr("data-id");
            $.ajax({
                url: baseUrl + "/api/category/delete/"+id,
                type: "GET",
                success: function (res){
                    $(".category-"+id).hide()
                }
            })
            }
        })
    </script>
@endsection
