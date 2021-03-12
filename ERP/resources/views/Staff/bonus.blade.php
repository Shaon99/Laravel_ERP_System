@extends('layout.hr')

@section('main_content')
<h1>Give bonus, {{ $user['first_name'] }} {{ $user['last_name'] }}, ID : {{ $user['user_id'] }}</h1>
<center>
    <form method="post">
      @csrf
      @foreach($errors->all() as $err)
        <p style="color: red; font-size: 15px;">{{$err}} <br></p>
        @endforeach
        <table>
            <tr>
                <td>
                    Bonus :
                </td>
                <td>
                    <input type="text" name="bonus" value="">
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Give bonus">
    </form>

</center>
@endsection