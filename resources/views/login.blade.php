<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<h1 style="text-align: center; color: brown;">Welcome to login page</h1>
    <form action="" method ="POST">
        @csrf
        <table style="padding: 20px 20px; border: 1px solid red; background-color: lightcyan; font-size: 20px;text-align: center; width: fit-content; margin: auto;">
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" placeholder="Username" id="username" name="username" required=""></td>
            </tr>
            <tr>
                <td><label for="pass">Password: </label></td>
                <td><input type="password" placeholder="Password" id="pass" name="pass" required=""></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Log In" name="log" style="width: 100%; cursor: pointer;"></td>
            </tr>
            <tr>
                <td></td>
                <td style="font-size: 15px">Not an Account? <a href="{{url('/signup')}}">Sign Up</a></td>
            </tr>
        </table>
    </form>
    <div style="font-size: 20px; font-style: italic; font-weight: bold; color: red; text-align: center;">{{$msg}}</div>
</body>
</html>