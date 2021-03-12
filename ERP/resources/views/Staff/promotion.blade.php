@extends('layout.hr')

@section('main_content')
<h1>Promotion, {{ $user['first_name'] }} {{ $user['last_name'] }}</h1>
<center>
    <form method="post">
      @csrf
        <table>
            <tr>
                <td><label for="status">Status :</label></td>
                <td><select name="status" id="status" name="status">
                        <option value="Junior" @if($user['status']=='Junior' ) selected @endif>Junior</option>
                        <option value="Senior" @if($user['status']=='Senior' ) selected @endif>Senior</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Salary :
                </td>
                <td>
                    <input type="text" name="salary" value="{{$user['salary']}}">
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Save">
    </form>

</center>

@endsection