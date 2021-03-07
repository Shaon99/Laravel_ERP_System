@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">

<div class="row">
      <div class="col-lg-12 mx-auto" style="padding:auto;"style="text-decoration: none;">
      <p>
          <a href="{{route('category')}}" class="btn btn-success"style="text-decoration: none;">All Category</a>

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
        <form action="{{ url('update/category/'.$category->id)}}" method="POST">
          @csrf
    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label class="text-info">Catagory Name</label>
              <input type="text" class="form-control " style="font-size:20px;   font-weight: bold;" value="{{$category->name}}" name="name" >
            </div>
</div>
<br>

         
          <button type="submit" class="btn btn-success" >Update</button>
</div>
        </form>
      </div>
    </div>
</div>

@endsection()