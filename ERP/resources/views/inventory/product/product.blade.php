@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">

<div class="row">
      <div class="col-lg-12 mx-auto" style="padding:auto;">
        <p>
          <a href="{{route('addproduct')}}" class="btn btn-success"style="text-decoration: none;">Add Product</a>
        </p>
        <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search by product name category brand" />
     </div>
        <table class="table table-responsive">
        <tr>
        <th>SL</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Purchase Price</th>
        <th>Sale Price</th>
        <th>WholeSale Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Action</th>
        </tr>
        @foreach($product as $row)

        <tr>
        <td style="font-weight: bold;">{{$row->id}}</td>
        <td style="font-weight: bold;">{{$row->product_name}}</td>
        <td><img src="{{URL::to($row->image)}}" width="50" height="60"></td>
        <td style="font-weight: bold;">{{$row->purchase_price}}</td>
        <td style="font-weight: bold;">{{$row->sale_price}}</td>
        <td style="font-weight: bold;">{{$row->wholesale_price}}</td>
        <td style="font-weight: bold;">{{$row->quantity}}</td>
        <td style="font-weight: bold;">{{$row->description}}</td>
        <td style="font-weight: bold;">{{$row->name}}</td>
        <td style="font-weight: bold;">{{$row->bname}}</td>
        <td>
        <a href="{{URL::to('edit/product/' .$row->id)}}" class="btn btn-sm btn-info">Edit</a>
        <a href="" class="btn btn-sm btn-danger" id="delete" >Delete</a>
        </td>

        </tr>
        @endforeach
        </table>

</script>
      </div>
    </div>
</div>



@endsection()