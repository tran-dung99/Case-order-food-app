<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <input class="form-control mr-sm-2 input-search" name="result" type="search" placeholder="Search" aria-label="Search" >
        {{--        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
    </form>
</nav>
<a href="{{route('foods.index')}}">All</a> <br>
<a href="{{route('foods.getByCom')}}">Cơm</a>
<a href="{{route('foods.getByPho')}}">Phở</a>
<a href="{{route('foods.getByDouong')}}">Đồ uống</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>address</th>
        <th>category</th>
        <th>price</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody class="body-food">

    @foreach($foods as $food)
        <tr>
            <td>{{$food->name}}</td>
            <td>{{$food->address}}</td>
            <td>{{$food->category}}</td>
            <td>{{$food->price}}</td>
            <td>
                <a type="button" class="btn btn-danger" href="{{route("foods.detail",$food->id)}}">Detail</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('assets/food.js')}}"></script>
</html>
