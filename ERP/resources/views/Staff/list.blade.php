@extends('layout.hr')

@section('main_content')
<h1>Staff details</h1>
<center>
    <form>
        <input type="text" placeholder="enter employee ID">
        <button>Search</button> <br> <br>
        <table border="1">
            <tr>
                <th>User ID</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Promotion</th>
                <th>Bonus</th>
                <th>Profile picture</th>
                <th>User name</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Status</th>
                <th>Address</th>
                <th>E-mail</th>
                <th>Contact no.</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Joining date</th>
                <th>Marital status</th>
                <th>Blood group</th>
                <th>Salary</th>
                <th>Bonus</th>

            </tr>
            @for($i=0; $i < count($list); $i++) <tr>
                <td>{{$list[$i]['user_id']}}</td>

                <td> <a href="{{ route('Staff.edit', [$list[$i]['user_id']]) }}">Edit</a></td>
                <td> <a href="{{ route('Staff.delete', [$list[$i]['user_id']]) }}">Delete</a></td>
                <td> <a href="{{ route('Staff.promotion', [$list[$i]['user_id']]) }}">Promotion</a></td>
                <td> <a href="{{ route('Staff.bonus', [$list[$i]['user_id']]) }}">Give bonus</a></td>
                <td><img src="{{asset('/upload')}}/{{$list[$i]['picture']}}" width="100px" height="100px"></td>
                <td>{{$list[$i]['user_name']}}</td>
                <td>{{$list[$i]['first_name']}}</td>
                <td>{{$list[$i]['last_name']}}</td>
                <td>{{$list[$i]['status']}}</td>
                <td>{{$list[$i]['home_address']}}</td>
                <td>{{$list[$i]['email']}}</td>
                <td>{{$list[$i]['phone']}}</td>
                <td>{{$list[$i]['gender']}}</td>
                <td>{{$list[$i]['birth_date']}}</td>
                <td>{{$list[$i]['joining_date']}}</td>
                <td>{{$list[$i]['marital_status']}}</td>
                <td>{{$list[$i]['blood']}}</td>
                <td>{{$list[$i]['salary']}}</td>
                @if ($list[$i]['bonus'] != 0)
                <td>{{$list[$i]['bonus']}}</td>
                @endif
                </tr>
                @endfor
        </table>
    </form>
</center>
@endsection