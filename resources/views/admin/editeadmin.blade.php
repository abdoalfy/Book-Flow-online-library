@extends('layouts.admin')
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
          <h5 class="card-title mb-5 d-inline">Edit My Profile</h5>
          <form method="POST" action="{{ route('updateadmin',$admin->id) }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
                <label for="exampleFormControlTextarea1">Admin Name</label>
              <input type="text" value="{{ $admin->name }}" name="name" id="form2Example1" class="form-control" placeholder="name" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Book Email</label>
                <input type="text" value="{{ $admin->email }}" name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
              </div>
            <br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-success  mb-4 text-center">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
@endsection