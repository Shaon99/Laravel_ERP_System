@extends('welcome')
@section('content')
<div class="content-page">
                <!-- Start content -->
 <div class="content">
 <div class="container"> 
 <div class="row">
      <div class="col-lg-12 mx-auto " style="padding:auto;">
        <p>
          <a href="{{route('addcategory')}}" class="btn btn-success "style="text-decoration: none;">ADD Category</a>
          
        </p>
      
        <table class="table table-responsive" >
        <tr>
        <th>SL</th>
        <th>Category Name</th>
        <th>Action</th>
        </tr>
        @foreach($category as $row)
        <tr>
        <td><h4>{{$row->id}}</h4></td>
        <td><h4>{{$row->name}}</h4></td>
        
        <td>
        <a href="{{ URL::to('edit/category/' .$row->id)}}" class="btn btn-md btn-info">Edit</a>
        <a href="{{ URL::to('delete/category/' .$row->id)}}" class="btn btn-md btn-danger" id="delete" >Delete</a>

        </td>

        </tr>
        @endforeach
        </table>
        
      </div>
    </div>
</div>

@endsection()