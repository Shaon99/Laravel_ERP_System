@extends('layout.supply_chain_manager')

@section('main_content')
    <h1>Delete Staff, {{$user['$user_id']}}</h1>
    <form method="post">
        @csrf
        <table>
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
                    <label for="gender">Gender : {{$user['gender']}}</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="marriage">Marital status : {{$user['marital_status']}}</label>
                </td>
            </tr>
            <tr>
                <td><label for="blood_group">Blood group : {{$user['blood']}}</label></td>
            </tr>
            <tr>
                <td>
                    Salary : {{$user['salary']}}
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Delete" >
    </form>

@endsection