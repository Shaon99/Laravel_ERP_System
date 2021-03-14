@extends('layout.hr')

@section('main_content')
<h1>{{$user[0]->first_name}} {{$user[0]->last_name}}'s profile :</h1>

<center>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>
                    User-name :
                </td>
                <td>{{ $user[0]->user_name }}</td>

            </tr>
            <tr>
                <td>
                    First name :
                </td>
                <td> {{$user[0]->first_name}}</td>

            </tr>
            <tr>
                <td>
                    Last name :
                </td>
                <td>{{$user[0]->last_name}}</td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>{{$user[0]->home_address}}</td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>{{$user[0]->email}}</td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>{{$user[0]->phone}}</td>
            </tr>
            <tr>
                <td>
                    Date of birth :
                </td>
                <td>{{$user[0]->birth_date}}</td>
            </tr>
            <tr>
                <td>
                    Gender :
                </td>
                <td>{{$user[0]->gender}}</td>
            </tr>
            <tr>
                <td>
                    Marital status :
                <td>{{$user[0]->marital_status}}
                </td>
                </td>
            </tr>
            <tr>
                <td>Blood group : </td>
                <td>{{$user[0]->blood}}</td>
            </tr>
            <tr>
                <td>
                    Salary :
                </td>
                <td>{{ $user[0]->salary }}</td>
            </tr>
        </table>
    </form>
</center>
@endsection