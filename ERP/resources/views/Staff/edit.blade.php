<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit staff</title>
</head>

<body>
<h1>Edit Staff, {{$user['$id']}}</h1>
    <form method="post">
        @csrf
        <table>
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
                    <input type="password" name="password" value="{{$user['password']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm password :
                </td>
                <td>
                    <input type="password" name="Cpassword" value="">
                </td>
            </tr>
            <tr>
                <td>
                    Home address :
                </td>
                <td>
                    <input type="text" name="address" value="{{$user['address']}}">
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
                    <input type="date" name="birth" value="{{$user['birth']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Joining date :
                </td>
                <td>
                    <input type="date" name="joining" value="{{$user['joining']}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="marriage">Marital status</label>
                </td>
                <td>
                    <input type="radio" name="marriage" value="Married">
                    <label>Married</label>
                </td>
                <td>
                    <input type="radio" name="marriage" value="Unmarrird">
                    <label>Unmarried</label>
                </td>
            </tr>
            <tr>
                <td><label for="blood_group">Blood group :</label></td>
                <td><select name="blood_group" id="blood_group" name="blood_group">
                        <option> </option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Salary :
                </td>
                <td>
                    <input type="text" name="salary" value="">
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Save">
    </form>
    @foreach($errors->all() as $err)
    {{$err}} <br>
    @endforeach
</body>

</html>