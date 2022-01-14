@extends('backend.layout.master')
@section('content')
    <form method="post" enctype="multipart/form-data" action="{{route('restaurants.update')}}" style="color: black">
        <div class="container">
        <input type="hidden" name="id" value="{{$restaurant->id}}">
        <div class="col-12">
            <div class="card" style="margin-left:50px;">
                <div class="row">
                    <div class="col-md-4">
                        <br>
                        <input type="file" name="image">
                    </div>
                    <div class="col-md-8">

                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{$restaurant->name}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Open</label>
                                <input type="text" name="open_time" class="form-control" id="name" value="{{$restaurant->open_time}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Close</label>
                                <input type="text" name="close_time" class="form-control" id="name" value="{{$restaurant->close_time}}">
                            </div>
                            <div class="form-group">
                                <label for="name">Thời gian giao hàng dự kiến</label>
                                <input type="text" name="ship_time" class="form-control" id="name" value="{{$restaurant->ship_time}}">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{route("restaurants.index")}}" class="btn btn-primary">Cancle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
