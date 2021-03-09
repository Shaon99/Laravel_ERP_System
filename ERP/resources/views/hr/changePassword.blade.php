@extends('layout.hr')

@section('main_content')
    <h1>Delete Staff, {{$user['$user_id']}}</h1>
    <form method="post">
        @csrf
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
        <br><input type="submit" name="submit" value="Save" >
    </form>

@endsection