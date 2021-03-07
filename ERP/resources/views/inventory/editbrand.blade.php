@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">

<div class="row">
      <div class="col-lg-12 mx-auto" style="padding:auto;"style="text-decoration: none;">
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
        <form action="{{ url('update/brand/'.$brand->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Brand Name</label>
              <input type="text" class="form-control " style="font-size:20px;   font-weight: bold;" value="{{$brand->bname}}" name="name" >
            </div>
</div>
<div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">New Image</label>
              <input type="file" class="form-control" name="logo"><br>
             <h4 class="text-danger">Old Image:</h4><img src="{{URL::to($brand->image)}}" height="100px;" width="100px;" >
              <input type="hidden" name="old_photo" value="{{ $brand->image}}"><br>

            </div>
            </div>

         
          <button type="submit" class="btn btn-success" >Update</button>
</div>
        </form>
      </div>
    </div>
</div>

@endsection()