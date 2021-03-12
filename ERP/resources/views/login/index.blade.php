<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
</head>

<body>
    <h1>Login Page</h1>
    {{-- @csrf --}}
    {{--  {{csrf_field()}} --}}
    <form method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <p style="color: red; font-size: 15px;">{{ $errors->first('username') }}{{session('msg')}}</p>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <p style="color: red; font-size: 15px;">{{ $errors->first('password') }}{{session('msg')}}</p>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>

    </form>

</body>

</html>