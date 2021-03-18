@extends('layout.hr')

@section('main_content')
<h1>Change password</h1>
<center>
    <form method="post">
        @csrf
        @foreach($errors->all() as $err)
        <p style="color: red; font-size: 15px;">{{$err}} <br></p>
        @endforeach
        <p style="color: red; font-size:15px">{{ session('msg') }}</p>
        <table>
            <tr>
                <td>
                    Old Password :
                </td>
                <td>
                    <input type="password" name="Opassword" value="">
                </td>
            </tr>
            <tr>
                <td>
                    New Password :
                </td>
                <td>
                    <input type="password" name="Npassword" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm new password :
                </td>
                <td>
                    <input type="password" name="CNpassword" value="">
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Change password">
    </form>
</center>
@endsection