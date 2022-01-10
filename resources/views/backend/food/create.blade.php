@extends('backend.layout.master')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">Add New Food</h5>
            <div class="card-body">
                <form style="color: #28284e" action="{{route('foods.create')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên món ăn">
                        @error('name')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="restaurant">Nhà hàng</label>
                        <select class="form-control" id="restaurant" name="restaurant">
                            @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                            @endforeach
                        </select>
                        @error('restaurant')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <select class="form-control" id="category" name="category">
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ghi chú</label>
                        <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('note')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Giá</label>
                        <input class="form-control" type="number" name="price" placeholder="Nhập giá món ăn">
                        @error('price')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div>
                        Hình ảnh <br>
                        <input type="file" name="image">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{route("foods.list")}}" class="btn btn-primary">Cancle</a>
                </form>
            </div>
        </div>
    </div>
@endsection
