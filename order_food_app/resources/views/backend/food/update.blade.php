@extends('backend.layout.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('foods.update')}}" style="color: black">
        <input type="hidden" name="id" value="{{$food->id}}">
        <div class="container">
            <div class="col-12">
                <div class="card" style="margin-left:50px;">
                    <div class="row">
                        <div class="col-md-4">
                            <img width="60%" height="40%" class="card-img-top" src="{{asset('storage/'.$food->image)}}"
                                 alt="Card image cap">
                            <br>
                            <input type="file" name="image">
                        </div>
                        <div class="col-md-8">
                            @csrf
                            <div class="container">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Nhập tên món ăn" value="{{$food->name}}">
                                    @error('name')
                                    <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="restaurant">Nhà hàng</label>
                                    <select class="form-control" id="restaurant" name="restaurant">
                                        @foreach(\App\Models\Restaurant::all() as  $restaurant)
                                            @if($restaurant->id == $food->restaurant_id)
                                                <option value="{{ $restaurant->id }}"
                                                        selected>{{ $restaurant->name }}</option>
                                            @else
                                                <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                                            @endif
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
                                            @if($category->id == $food->category_id)
                                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Ghi chú</label>
                                    <textarea name="note" class="form-control" id="exampleFormControlTextarea1"
                                              rows="3">{{$food->note}}</textarea>
                                    @error('note')
                                    <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Giá</label>
                                    <input class="form-control" value="{{$food->price}}" type="number" name="price"
                                           placeholder="Nhập giá món ăn">
                                    @error('price')
                                    <p style="color: red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{route("foods.list")}}" class="btn btn-primary">Cancle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
