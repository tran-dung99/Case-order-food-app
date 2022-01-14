@extends('backend.layout.master')

@section('content')
    <form method="post" action="{{route("categories.create")}}">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tên Danh mục</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên Danh mục" >
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route("categories.index")}}" class="btn btn-primary">Cancel</a>
        </div>
    </form>
@endsection

