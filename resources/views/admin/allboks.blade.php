@extends('layouts.admin')
@section('allboks')
active
@endsection 
@section('content')
<div class="row">
    <div class="col">
      <div class="container" style="width: 100%">
        @if(Session::has('success'))
        <p class="alert {{Session::get('alert-class','alert-info') }}">{{ Session::get('success') }}</p>
        @endif
    </div>
    <div class="container">
      @if(Session::has('delete'))
      <p class="alert {{Session::get('alert-class','alert-info') }}">{{ Session::get('delete') }}</p>
      @endif
  </div>
  <div class="container" style="width: 100%">
    @if(Session::has('Updated'))
    <p class="alert {{Session::get('alert-class','alert-info') }}">{{ Session::get('Updated') }}</p>
    @endif
</div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Avilable Books</h5>
         <a  href="{{ route('addbook') }}" class="btn btn-dark mb-4 text-center float-right">Add New Book</a>
          <table style="width:100%" class="text-center table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Book name</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">category</th>
               <th class="text-center" colspan="2" scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
   
                @foreach ($allbooks as $allbook )
                <tr>
                <td>{{$allbook->id}}</td>
                <td>{{ $allbook->name }}</td>
                <td style="width:20%">{{ $allbook->description}}</td>
                <td><img width="200px" src="{{asset('assets/images/'. $allbook->image .'')}}"></td>
                <td>{{ $allbook->category}}</td>
                <td><a class="btn btn-warning" style="text-decoration: none; color:black" href="{{route('editbook',$allbook->id)}}">Update</a></td>      
                <td><a class="btn btn-danger" style="text-decoration: none; color:black" href="{{route('deletebook',$allbook->id)}}">Delete</a></td>      
              </tr>
              @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"></script>
@endsection