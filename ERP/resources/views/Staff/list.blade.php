@extends('layout.hr')

@section('main_content')
    <h1>Staff details</h1>
    <input type="text" placeholder="enter employee ID">
    <button>Search</button> <br> <br>
    <table border="1">
        <tr>
            <th>User ID</th>
            <th>User name</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Contact no.</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Joining date</th>
            <th>Marital status</th>
            <th>Blood group</th>
            <th>Salary</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @for($i=0; $i < count($list); $i++) <tr>
            <td>{{$list[$i]['user_id']}}</td>
            <td>{{$list[$i]['user_name']}}</td>
            <td>{{$list[$i]['first_name']}}</td>
            <td>{{$list[$i]['last_name']}}</td>
            <td>{{$list[$i]['home_address']}}</td>
            <td>{{$list[$i]['email']}}</td>
            <td>{{$list[$i]['phone']}}</td>
            <td>{{$list[$i]['gender']}}</td>
            <td>{{$list[$i]['birth_date']}}</td>
            <td>{{$list[$i]['joining_date']}}</td>
            <td>{{$list[$i]['marital_status']}}</td>
            <td>{{$list[$i]['blood']}}</td>
            <td>{{$list[$i]['salary']}}</td>
            <td> <a href="{{ route('Staff.edit', [$list[$i]['user_id']]) }}">Edit</a></td>
            <td> <a href="{{ route('Staff.delete', [$list[$i]['user_id']]) }}">Delete</a></td>
            </tr>
            @endfor
    </table>
@endsection