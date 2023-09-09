@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mt-5">Admin Login</h5>
          <form method="POST" class="p-auto" action="{{ route('checkadminlogin') }}">
            @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                
              </div>
              <!-- Submit button -->
              <button style="margin-left: 650px;"  type="submit" name="submit" class="btn btn-group-lg btn-success  mb-4 text-center">Login</button>
            </form>
        </div>
   </div>
 </div>
</div>
@endsection