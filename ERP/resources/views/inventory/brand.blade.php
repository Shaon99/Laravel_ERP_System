@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">
 <div class="container"> 
 <div class="row">
      <div class="col-lg-12 mx-auto " style="padding:auto;">
        <p>
          <a href="{{route('addbrand')}}" class="btn btn-success "style="text-decoration: none;">ADD Brand</a>
          
        </p>
      
        <table class="table table-responsive" >
        <tr>
        <th>SL</th>
        <th>Brand Name</th>
        <th>Brand Logo</th>
        <th>Action</th>
        </tr>
        @foreach($brand as $row)
        <tr>
        <td><h4>{{$row->id}}</h4></td>
        <td><h4>{{$row->bname}}</h4></td>
        <td><img src="{{URL::to($row->image)}}" width="50" height="60"></td>
        <td>
        <a href="{{URL::to('edit/brand/' .$row->id)}}" class="btn btn-md btn-info">Edit</a>
        <a href="{{URL::to('delete/brand/' .$row->id)}}" class="btn btn-md btn-danger" id="delete" >Delete</a>

        </td>

        </tr>
        @endforeach
        </table>
        
      </div>
    </div>
</div>

@endsection()