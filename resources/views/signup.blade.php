<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<h1 style="text-align: center;color: brown;">Welcome to the Sign Up Page</h1>
    <form action="" method="POST">
    @csrf
    <table style="border: 1px solid red; padding: 20px 20px; background-color: lightcyan; font-size: 18px; width: fit-content; margin: auto;">
        <tr>
            <td><label for="fullname">Full Name: </label> </td>
            <td><input type="text" placeholder="Full Name" id="fullname" name="fullname" required=""></td>
        </tr>
        <tr>
            <td><label for="email">Email: </label></td>
            <td><input type="email" placeholder="Email" id="email" name="email" required=""></td>
        </tr> 
        <tr>
            <td><label for="username">Username: </label></td>
            <td><input type="text" placeholder="Username" id="username" name="username" required=""></td>
        </tr> 
        <tr>
            <td><label for="pass">Password: </label></td>
            <td><input type="password" placeholder="Password" id="pass" name="pass" required=""></td>
        </tr>
        <tr>
            <td><label for="repass">Re-type Password: </label></td>
            <td><input type="password" placeholder="Re-Password" id="repass" name="repass" required=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Sign Up" name="sign" style="cursor: pointer; width: 100%;"></td>
        </tr>
        <tr>
            <td></td>
            <td><span style="font-size: 15px;">Have an account? <a href="{{url('/login')}}">Log In</a></span></td>
        </tr>
    </table>
    </form>
    <div style="font-size: 20px; font-style: italic; font-weight: bold; color: red; text-align: center;">{{$str}}</div>
</body>
</html>