@extends('layout.supply_chain_manager')

@section('main_content')
<h1>All productions</h1>
<center>
    <form>
        <table border="1">
            <tr>
                <th>product ID</th>
                <th>Picture</th>
                <th>product name</th>
                <th>Quantity</th>
                <th>Status</th>
            </tr>
            @for($i = 0; $i < count($products); $i++) <tr>
                <td>{{ $products[$i]['product_id'] }}</td>
                <td><img src="{{asset('/upload')}}/{{$products[$i]['profile_picture']}}" width="100px" height="100px"></td>
                <td>{{ $products[$i]['product_name'] }}</td>
                <td>{{ $products[$i]['quantity'] }}</td>
                <td>{{ $products[$i]['status'] }}</td>
            @endfor
            </tr>
        </table>
    </form>
</center>
@endsection