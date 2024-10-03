<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td><label for="title">Title:</label></td>
            <td><input type="text" name="title" id="title" value="{{$data->title}}" required=""></td>
        </tr>
        <tr>
            <td><label for="year">Year:</label></td>
            <td><input type="number" name="year" id="year" value="{{$data->year}}" required=""></td>
        </tr>
        <tr>
            <td><label for="genre">Genre:</label></td>
            <td><input type="text" name="genre" id="genre" value="{{$data->genre}}" required=""></td>
        </tr>
        <tr>
            <td><label for="actors">Actors:</label></td>
            <td><input type="text" name="actors" id="actors" value="{{$data->actors}}" required=""></td>
        </tr>
        <tr>
            <td><label for="director">Director:</label></td>
            <td><input type="text" name="director" id="director" value="{{$data->director}}" required=""></td>
        </tr>
        <tr>
            <td><label for="poster">Poster:</label></td>
            <td><input type="file" name="poster" id="poster"></td>

        </tr>
        <input type="hidden" value="{{$data->id}}" name="id">
        <tr>
            <td></td>
            <td><input type="submit" value="Post"></td>
        </tr>
    </table>
</form>
</body>
</html>
