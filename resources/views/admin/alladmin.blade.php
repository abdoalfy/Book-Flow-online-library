@extends('layouts.admin')
@section('admins')
active
@endsection
@section('content')
<div class="row">
    <div class="col">
      <div class="container" style="width: 100%">
        @if(Session::has('adminupdated'))
        <p class="alert {{Session::get('alert-class','alert-info') }}">{{ Session::get('adminupdated') }}</p>
        @endif
    </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">All Admins</h5>
         <a  href="{{ route('createadmin') }}" class="btn btn-primary mb-4 text-center float-right">Create New Admin</a>
          <table class="text-center table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($alladmins as $alladmin )
              <tr>
                <th scope="row">{{$alladmin->id}}</th>
                <td>{{ $alladmin->name }}</td>
                <td>{{ $alladmin->email}}</td>
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