@extends('layout.supply_chain_manager')

@section('main_content')
<h1>Cancelled orders</h1>
<center>
    <form>
        <table border="1">
            <tr>
                <th>ORDER ID</th>
                <th>Vendor name</th>
                <th>Vendor phone</th>
                <th>Vendor address</th>
                <th>Product ID</th>
                <th>Product name</th>
                <th>Unit price</th>
                <th>quantity</th>
                <th>Total price</th>
                <th>Sold date</th>
                <th>Payment method</th>
                <th>Status</th>
            </tr>
            <tr>
                @for($i=0; $i < count($orders); $i++) </tr>
                <td>{{ $orders[$i]->order_id }}</td>
                    <td>{{ $orders[$i]->vendor_name }}</td>
                    <td>{{ $orders[$i]->vendor_phone }}</td>
                    <td>{{ $orders[$i]->vendor_address }}</td>
                    <td>{{ $orders[$i]->product_id }}</td>
                    <td>{{ $orders[$i]->product_name }}</td>
                    <td>{{ $orders[$i]->unit_price }}</td>
                    <td>{{ $orders[$i]->quantity }}</td>
                    <td>{{ $orders[$i]->total_price }}</td>
                    <td>{{ $orders[$i]->date_sold }}</td>
                    <td>{{ $orders[$i]->payment_type }}</td>
                    <td>{{ $orders[$i]->status }}</td>
                    @endfor
            </tr>
        </table>
    </form>
</center>
@endsection