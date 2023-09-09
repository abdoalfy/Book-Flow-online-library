@extends('layouts.admin')
@section('adminprofile')
active
@endsection
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Welcome Mr : {{ auth()->user()->name }}</h5>
          <table class="text-center table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Admin Name</th>
                <th scope="col">email</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{Auth::guard('admin')->user()->id}}</th>
                <td>{{ Auth::guard('admin')->user()->name }}</td>
                <td>{{ Auth::guard('admin')->user()->email}}</td>
                <td><a class="btn btn-success" href="{{ route('editeadmin' ,Auth::guard('admin')->user()->id) }}">Edit</a></td>
              </tr>
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"></script>
@endsection