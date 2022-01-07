<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role_id</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$user["name"]}}</td>
        <td style="width: 250px; height: 180px"><img  src="img/{{$user->image}}" alt=""></td>
        <td>{{$user["phone"]}}</td>
        <td>{{$user["email"]}}</td>
        <td>{{$user["password"]}}</td>
        <td>
            @if($user->role_id)
                <p>{{$user->role->name}}</p>
            @else
                <p>Chưa phân loại role</p>
            @endif
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
