@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">
<div class="container">
<div class="row">
      <div class="col-lg-12 mx-auto" style="padding;auto;">
        <p>
          
          <a href="{{route('product')}}" class="btn btn-success"style="text-decoration: none;">All Product</a>
          
        </p>
        <hr>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('storeproduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Product Name</label>
              <input type="text" class="form-control" placeholder="name" name="name"  >
            </div>
            </div>

<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Image</label>
              <input type="file" class="form-control" name="image">
            </div>
            </div>



<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Purchase Price</label>
              <input type="text" class="form-control" placeholder="price" name="price"  >
            </div>
</div>
<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Sale Price</label>
              <input type="text" class="form-control" placeholder="price" name="sprice"  >
            </div>
</div>
<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">WholeSale Price</label>
              <input type="text" class="form-control" placeholder="price" name="wprice"  >
            </div>
</div>
<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Quantity</label>
              <input type="text" class="form-control" placeholder="quantity" name="quantity"  >
            </div>
</div>
<div class="form-group floating-label-form-group controls">
              <label class="text-info">Catagory</label>
              <select class="form-control" name="category_id">
              @foreach($category as $row)
                <option value="{{ $row->id }}">{{$row->name}}</option>
                @endforeach
            
            </select>
           
            </div>
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Brand</label>
              <select class="form-control" name="brand_id">
              
              @foreach($brand as $row)
                <option value="{{ $row->id }}">{{$row->bname}}</option>
                @endforeach
            
            </select>
           
            </div>
         
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Description</label>
              <textarea rows="5" class="form-control" placeholder="Description" name="description" ></textarea>            
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-success" id="sendMessageButton">Submit</button>
</div>
        </form>
      </div>
    </div>
</div>

@endsection()