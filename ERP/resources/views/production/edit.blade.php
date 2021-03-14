@extends('layout.supply_chain_manager')

@section('main_content')
<h1>Edit production status :</h1>
<center>
    <form method="post">
    @csrf <!-- {{ csrf_field() }} -->
        <table>
            <tr>
                <td>
                    Status:
                </td>
                <td><select name="status" id="status" name="status">
                        <option value="upcoming" @if($product['status']=='upcoming' ) selected @endif>Upcoming</option>
                        <option value="ready" @if($product['status']=='ready' ) selected @endif>Ready</option>

                    </select>
                </td>
            </tr>
        </table>
        <br><input type="submit" name="submit" value="Save">
    </form>
</center>
@endsection