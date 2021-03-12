@extends('layout.hr')

@section('main_content')
<h1>Edit Staff, {{ $user['user_id'] }}</h1>
<center>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>
                    User-name :
                </td>
                <td>
                    <input type="text" name="user_name" value="{{$user['user_name']}}">
                </td>
            </tr>
            <tr>
                <td>
                    First name :
                </td>
                <td>
                    <input type="text" name="first_name" value="{{$user['first_name']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Last name :
                </td>
                <td>
                    <input type="text" name="last_name" value="{{$user['last_name']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" value="{{$user['password']}}" disabled>
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                    <input type="text" name="address" value="{{$user['home_address']}}">
                </td>
            </tr>
            <tr>
                <td>
                    E-mail :
                </td>
                <td>
                    <input type="text" name="email" value="{{$user['email']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Contact no. :
                </td>
                <td>
                    <input type="text" name="phone" value="{{$user['phone']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth :
                </td>
                <td>
                    <input type="date" name="birth" value="{{$user['birth_date']}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender :</label>
                </td>
                <td>
                    <input type="radio" name="gender" value="Male" @if($user['gender']=='Male' ) checked @endif>
                    <label>Male</label>

                    <input type="radio" name="gender" value="Female" @if($user['gender']=='Female' ) checked @endif>
                    <label>Female</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="marriage">Marital status</label>
                </td>
                <td>
                    <input type="radio" name="marriage" value="Married" @if($user['marital_status']=='Married' ) checked
                        @endif>
                    <label>Married</label>
                    <input type="radio" name="marriage" value="Unmarried" @if($user['marital_status']=='Unmarried' )
                        checked @endif>
                    <label>Unmarried</label>
                </td>
            </tr>
            <tr>
                <td><label for="blood_group">Blood group :</label></td>
                <td><select name="blood_group" id="blood_group" name="blood_group">
                        <option value="A+" @if($user['blood']=='A+' ) selected @endif> A+</option>
                        <option value="A-" @if($user['blood']=='A-' ) selected @endif>A-</option>
                        <option value="B+" @if($user['blood']=='B+' ) selected @endif>B+</option>
                        <option value="B-" @if($user['blood']=='B-' ) selected @endif>B-</option>
                        <option value="O+" @if($user['blood']=='O+' ) selected @endif>O+</option>
                        <option value="O-" @if($user['blood']=='O-' ) selected @endif>O-</option>
                        <option value="AB+" @if($user['blood']=='AB+' ) selected @endif>AB+</option>
                        <option value="AB-" @if($user['blood']=='AB-' ) selected @endif>AB-</option>
                    </select>
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Save">
    </form>
</center>
@foreach($errors->all() as $err)
{{$err}} <br>
@endforeach

@endsection