<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home List</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url("D:/111.jpg");
    }

    .navbar {
        background-color: navy;
        width: 100%;
        padding: 5px 0px;
        text-align: center;
    }

    .title {
        text-decoration: none;
        color: yellow;
        font-weight: bold;
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .pro {
        text-align: right;
    }

    .aut {
        background-color: lightgreen;
        color: black;
        padding: 3px 5px;
        cursor: pointer;
    }

    .bdr {
        border: 1px dashed black;
    }

    .rating input {
        display: none;
    }

    .rating label {
        color: gold;
        padding: 0px 5px;
    }

    .rating input + label {
        font-size: 30px;
        text-shadow: 1px 1px 0px blue;
        cursor: pointer;
    }

    .rating input:checked + label ~ label {
        color: black;
    }
</style>

<body style="margin: 100px 0px 0px 0px;">
<nav style="position: fixed; display: flex; top: 0; left: 0; width: 100%; height: 60px;">
    <div class="navbar">
        <i class='bx bx-menu menu'></i>
        <a href="#" class="title" style="">Movie List</a>
        <span class="pro">
            <ul class="lists">
                <li class="list">
                    @if(isset($user))
                        <span id="logout" class="aut"><a href="{{url('/logout')}}" style="text-decoration: none;">Log Out</a> </span>
                    @else
                        <span class="aut"><a href="{{url('/login')}}" style="text-decoration: none;">Log In</a></span>
                        <span class="aut"><a href="{{url('/signup')}}" style="text-decoration: none;">Sign Up</a></span>
                    @endif
                </li>
            </ul>
        </span>
        @if(isset($user))
            <span
                style="font-size: 20px; font-style: italic; background-color: lightpink; margin: 1px 0px; display: block;">Welcome... <span
                    style="font-style: normal; font-weight: bold;">{{$user->name}}</span></span>
        @endif
    </div>
</nav>
<content>

    @foreach ($list as $l)
        <table style="margin: 5px 5px">
            <tr class="bdr" style="border: 1px dashed green">
                <td rowspan='8'><img src="{{url('uploads/'.$l->poster)}}" alt="img"></td>
                <td class="bdr" style="font-weigh: bolder; font-size: 25px;">{{$l->title}}</td>
            </tr>
            <tr>
                <td class="bdr"><span style="font-weight: bold">Year: </span>{{$l->year}}</td>
            </tr>
            <tr>
                <td class="bdr"><span style="font-weight: bold">Genre: </span>{{$l->genre}}</td>
            </tr>
            <tr>
                <td class="bdr"><span style="font-weight: bold">Actors: </span>{{$l->actors}}</td>
            </tr>
            <tr>
                <td class="bdr"><span style="font-weight: bold">Director: </span>{{$l->director}}</td>
            </tr>
            <tr>
                <td><h1>...</h1></td>
            </tr>

            @if(isset($user))

                <tr>
                    <td>
                    <span class="rating">
                      <input type="radio" id="rate1" name="rating" value="1"/>
                      <label for="rate1">&#9733;</label>
                      <input type="radio" id="rate2" name="rating" value="2"/>
                      <label for="rate2">&#9733;</label>
                      <input type="radio" id="rate3" name="rating" value="3"/>
                      <label for="rate3">&#9733;</label>
                      <input type="radio" id="rate4" name="rating" value="4"/>
                      <label for="rate4">&#9733;</label>
                      <input type="radio" id="rate5" name="rating" value="5"/>
                      <label for="rate5">&#9733;</label>
                    </span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a style="text-decoration: none;" href="{{url('/ratings')}}?MovID={{$l->id}}">
                        <input type="submit" value="Rate >>" style="width: 100px; font-size: 15px; padding: 5px 0px; cursor: pointer; margin: 0px 0px 10px 10px;" />
                        </a>
                    </td>
                </tr>
                @endif
        </table>
    @endforeach

</content>
</body>
</html>
