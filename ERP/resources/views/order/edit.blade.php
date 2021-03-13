@extends('layout.hr')

@section('main_content')
<h1>Edit Orders, {{ $order['order_id'] }}</h1>
<center>
    <form method="post">
        @csrf
        @foreach($errors->all() as $err)
        {{$err}} <br>
        @endforeach
        <table>
            <tr>
                <td>
                    product name :
                </td>
                <td>
                    <input type="text" name="product_name" value="{{$order['product_name']}}">
                </td>
            </tr>
            <tr>
                <td>
                    quantity :
                </td>
                <td>
                    <input type="text" name="quantity" value="{{$order['quantity']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Unit Price:
                </td>
                <td>
                    <input type="text" name="unit_price" value="{{$order['total_price']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Total Price:
                </td>
                <td>
                    <input type="text" name="total_price" value="{{$order['total_price']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Product ID:
                </td>
                <td>
                    <input type="text" name="product_id" value="{{$order['product_id']}}" >
                </td>
            </tr>
            <tr>
                <td>
                    Vendor Name:
                </td>
                <td>
                    <input type="text" name="vendor_name" value="{{$order['vendor_name']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Vendor Address:
                </td>
                <td>
                    <input type="text" name="vendor_address" value="{{$order['vendor_address']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Vendor phone No.:
                </td>
                <td>
                    <input type="text" name="vendor_phone" value="{{$order['vendor_phone']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Date of sold:
                </td>
                <td>
                    <input type="date" name="date_sold" value="{{$order['date_sold']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Payment Type:
                </td>
                <td><select name="payment_type" id="payment_type" name="payment_type">
                        <option value="cash" @if($order['payment_type']=='cash' ) selected @endif>Cash</option>
                        <option value="card" @if($order['payment_type']=='card' ) selected @endif>Card</option>
                        <option value="due" @if($order['payment_type']=='due' ) selected @endif>Due</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Payment amount:
                </td>
                <td>
                    <input type="text" name="payment_amount" value="{{$order['payment_amount']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Due amount:
                </td>
                <td>
                    <input type="text" name="due_amount" value="{{$order['due_amount']}}">
                </td>
            </tr>
            <tr>
                <td>
                    Status:
                </td>
                <td><select name="status" id="status" name="status">
                        <option value="complete" @if($order['status']=='complete' ) selected @endif>Complete</option>
                        <option value="complete" @if($order['status']=='sold' ) selected @endif>Sold</option>
                        <option value="cancelled" @if($order['status']=='cancelled' ) selected @endif>Cancel</option>
                        <option value="running" @if($order['status']=='running' ) selected @endif>Running</option>
                    </select>
                </td>
            </tr>

        </table>
        <br><input type="submit" name="submit" value="Save">
    </form>
</center>

@endsection