@extends('backend.layout.master')
@section('title','Food Admin')
@section('content')
    <div class="container">
        <table class="table table-bordered" style="color: black">
            <thead>
            <tr>
                <th colspan="5"><a type="button" class="btn btn-success" href="{{route("restaurants.showFormCreate")}}">Create</a></th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Open</th>
                <th>Close</th>
                @can('update_edit_category')
                    <th>Action</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($restaurants as $restaurant)

                <tr class="category-{{$restaurant->id}}">
                    <td>{{$restaurant->id}}</td>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->open_time}}</td>
                    <td>{{$restaurant->close_time}}</td>
                    @can('update_edit_category')
                        <td><button class="btn btn-danger delete-category" data-id="{{$restaurant->id}}">Delete</button></td>
                    @endcan
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

