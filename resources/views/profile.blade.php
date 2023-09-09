@extends('layouts.app')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Your Profile </h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profile</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <form  method="Post" action="{{ route('updateprofile') }}" class="billing-form ftco-bg-dark p-3 p-md-5">
            @csrf
            @method('PUT')
              <h3  class="mb-4 text-light billing-heading">Update Your Profile</h3>
                <div class="row align-items-end">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">New Name</label>
                            <input id="name" value="{{$user->name}}" type="text" class="form-control" name="name"  required  autofocus>
                        </div>
                      </div>
                    <div class="col-md-12">
                  <div class="form-group">
                      <label for="Email">New Email</label>
                      <input id="email" value="{{ $user->email }}" type="email" class="form-control"  name="email" required autofocus>
                  </div>
                </div>
               
                <div class="col-md-12">
                  <div class="form-group">
                      <label for="Password">New Password</label>
                      <input id="password" type="password" class="form-control" name="password" required>
                 </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group mt-4">
                          <div class="radio">
                              <button name="submit" style="margin-left:500px" type="submit" class="btn btn-primary py-3 px-4">Update Profile</button>
                          </div>
                  </div>
              </div>  
            </form><!-- END -->
        </div> <!-- .col-md-8 -->
        </div>
      </div>
    </div>
  </section> <!-- .section -->
@endsection