@extends('layouts.admin')
@section('index')
active
@endsection
@section('content')
<style>
  .tttt:hover{
     opacity: 0.5;
     }
</style>
<div class="row text-center">

    <div class="col-md-3 tttt">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a style="text-decoration: none; color:black" href="{{ route('allboks') }}">Avilable Books</a></h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text"><a style="text-decoration: none; color:black" href="{{ route('allboks') }}">Number Of Avilable Books : {{ $books }}</a></p>
        </div>
      </div>
    </div>

    <div  class="col-md-3 tttt">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a style="text-decoration: none; color:black" href="{{ route('borrowedbookss') }}">Borrowed Books</a></h5>
          <p class="card-text"><a style="text-decoration: none; color:black" href="{{ route('borrowedbookss') }}">number of Borrowed Books : {{ $results  }}</a></p>
        </div>
      </div>
    </div>

    <div  class="col-md-3 tttt">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a style="text-decoration: none; color:black" href="{{ route('allusers') }}">Users</a></h5>
          <p class="card-text"><a style="text-decoration: none; color:black" href="{{ route('allusers') }}">number of Users : {{ $users }}</a></p>
        </div>
      </div>
    </div>

    <div  class="col-md-3 tttt">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><a style="text-decoration: none; color:black" href="{{ route('alladmins') }}">Admins</a></h5>
          <p class="card-text"><a style="text-decoration: none; color:black" href="{{ route('alladmins') }}">number of Admins : {{ $admins }}</a></p>
        </div>
      </div>
    </div>

  </div>
@endsection