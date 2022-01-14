@extends('backend.layout.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('categories.update')}}" style="color: black">
        <div class="col-12">
            @csrf
            <div class="container">
                <div class="form-group">
                    <input type="hidden" value="{{$category->id}}" name="id">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên món ăn"
                           value="{{$category->name}}">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route("categories.index")}}" class="btn btn-primary">Cancel</a>
            </div>
        </div>
    </form>
@endsection

