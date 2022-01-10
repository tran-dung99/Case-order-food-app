@extends('backend.layout.master')

@section('content')
    <form method="post" action="{{route("categories.create")}}">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tên Danh mục</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên Danh mục" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route("foods.index")}}" class="btn btn-primary">Cancle</a>
        </div>
    </form>

@endsection

