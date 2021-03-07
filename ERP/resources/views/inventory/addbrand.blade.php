@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">
<div class="row">
      <div class="col-lg-12 mx-auto " style="padding:auto;">
        <p>
          <a href="{{route('brand')}}" class="btn btn-success"style="text-decoration: none;">All Brand</a>

        </p>
    
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('storebrand')}}" method="POST" enctype="multipart/form-data">
       @csrf
       
    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Brand Name</label>
              <input type="text" class="form-control"style="font-size:20px;font-weight: bold;" placeholder="Brand" name="name" >
            </div>          
  </div>
  <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Brand Logo</label>
              <input type="file" class="form-control" name="logo" >
            </div>          
  </div>
  
          
          <button type="submit" class="btn btn-success" >Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection()