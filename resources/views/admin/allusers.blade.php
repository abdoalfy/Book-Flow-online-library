@extends('layouts.admin')
@section('users')
active
@endsection
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 style="float: left" class="card-title col-md-4 mb-4 ">All Users</h5>
      <div style="float: right" class="col-md-6">
           <div class="form-group">   
            <form method="get" action="{{ route('search') }}">
        <div  class="input-group">
              <input class= "form-control" name="search" placeholder="Search">
              <button type="submit" class="btn btn-primary"> Search </button>
         </div>
             </form>
         </div>
       </div>
      </div>
          <table class="text-center table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">Borrowed Books</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($allusers as $alluser )
              <tr>
                <th scope="row">{{$alluser->id}}</th>
                <td>{{ $alluser->name }}</td>
                <td>{{ $alluser->email}}</td>
                <td>{{ $alluser->borrowed_books}}</td>
                <td>{{ $alluser->created_at->diffForHumans()}}</td>
                <td>{{ $alluser->updated_at->diffForHumans()}}</td>
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