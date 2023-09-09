<?php
define('CUSTOM_SERVER_NAME', 'mycustomservername');
?>
@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Book's Details</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Book Detail</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-5 ftco-animate">
                  <a href="{{ asset('assets/images/'.$book->image.'')}}" class="image-popup"><img style="width:400px; margin-left:100px;" src="{{asset('assets/images/'.$book->image.'')}}" class="img-fluid" alt="Colorlib Template"></a>
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3 class="text-light">{{ $book->name }}</h3>
                  <p>{{$book->description}}</p>
                  <p style="margin-top:25px"><a href="{{ route('allborrows', $book->id)}}" class="btn btn-primary py-3 px-5">Borrow it</a></p>
                </div>
              </div>
          </div>
      </div>
  </section>

  <section style="margin-top:-80px" class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
          <h2 class="mb-4">Related products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        @foreach ($relatedBooks as $relatedBook)
        <?php
        $descriptions=substr($relatedBook->description,0,150);
        ?>
          <div class="col-md-3">
              <div class="menu-entry">
                      <a href="{{ route('details', $relatedBook->id)}}" class="img" style="background-image: url({{ asset('assets/images/'.$relatedBook->image.'')}});"></a>
                      <div class="text text-center pt-4">
                          <h3><a href="#">{{ $relatedBook->name }}</a></h3>
                          <p>{{ $descriptions }}.</p>
                          <p><a href="{{ route('details', $relatedBook->id)}}" class="btn btn-primary btn-outline-primary">details</a></p>
                      </div>
                  </div>
          </div>
          @endforeach
      </div>
      </div>
  </section>
@endsection