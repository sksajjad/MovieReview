<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Manage</title>
</head>
<body>
<table border="1px">
    <tr bgcolor="#ffe4c4">
        <th>ID</th>
        <th>Poster</th>
        <th>Title</th>
        <th>Year</th>
        <th>Genre</th>
        <th>Actors</th>
        <th>Director</th>
        <th>Created at</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    @foreach($list as $l)
        <tr>
            <td>{{$l->id}}</td>
            <td><img src="{{url('uploads/'.$l->poster)}}" alt="img" width="100px"></td>
            <td>{{$l->title}}</td>
            <td>{{$l->year}}</td>
            <td>{{$l->genre}}</td>
            <td>{{$l->actors}}</td>
            <td>{{$l->director}}</td>
            <td>{{$l->created_at}}</td>
            <td><a href="{{url("/home")}}?id={{$l->id}}">Edit</a></td>
            <td><a href="{{url("/homelist")}}?id={{$l->id}}">Delete</a></td>
        </tr>
    @endforeach

</table>
</body>
</html>