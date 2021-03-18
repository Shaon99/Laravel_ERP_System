@extends('layout.hr')

@section('main_content')
<h1>Delete Staff, {{$user['$user_id']}}</h1>
<center>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>
                    <img src="{{asset('/upload')}}/{{$user['picture']}}" width="100px" height="100px">

                </td>
            </tr>
            <tr>
                <td>
                    User-name : {{$user['user_name']}}
                </td>

            </tr>
            <tr>
                <td>
                    First name : {{$user['first_name']}}
                </td>

            </tr>
            <tr>
                <td>
                    Last name : {{$user['last_name']}}
                </td>

            </tr>
            <tr>
                <td>
                    Home address : {{$user['home_address']}}
                </td>
            </tr>
            <tr>
                <td>
                    E-mail : {{$user['email']}}
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. : {{$user['phone']}}
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth : {{$user['birth_date']}}
                </td>

            </tr>
            <tr>
                <td>
                    Gender : {{$user['gender']}}
                </td>
            </tr>
            <tr>
                <td>
                    Marital status : {{$user['marital_status']}}
                </td>
            </tr>
            <tr>
                <td>Blood group : {{$user['blood']}}</td>
            </tr>
            <tr>
                <td>
                    Salary : {{$user['salary']}}
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Delete">
    </form>
</center>
@endsection