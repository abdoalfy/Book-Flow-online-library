@extends('layouts.app')
@section('active')
active
@endsection
@section('content')
<section class="home-slider owl-carousel">

    
    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">The Best Online Library Experience</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('borrowedbooks') }}" style="font-weight: 600" class="btn btn-primary p-3 px-xl-4 py-xl-3">Your Borrow Books</a> <a href="{{ route('allbook') }}" style="font-weight: 600" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View All Books</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url({{ asset('assets/images/bg_2.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">Amazing Books &amp; Beautiful Poems</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('borrowedbooks') }}" style="font-weight: 600" class="btn btn-primary p-3 px-xl-4 py-xl-3">Your Borrow Books</a> <a href="{{ route('allbook') }}" style="font-weight: 600" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View All Books</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">Reading Will Help U To Be Yourself</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('borrowedbooks') }}" style="font-weight: 600" class="btn btn-primary p-3 px-xl-4 py-xl-3">Your Borrow Books</a> <a href="{{ route('allbook') }}" style="font-weight: 600" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View All Books</a></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section style="margin-top:150px;" class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpg')}});"></div>
      <div class="one-half ftco-animate">
          <div class="overlap">
          <div class="heading-section ftco-animate ">
              <span class="subheading">Discover</span>
            <h2 style="color:#6d4400" class="mb-4">Our Story</h2>
          </div>
          <div>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                </div>
            </div>
      </div>
  </section>


  <section class="ftco-section">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6 pr-md-5">
                  <div class="heading-section text-md-right ftco-animate">
                <span class="subheading">Discover</span>
              <h2 style="color:#6d4400" class="mb-4">Our Menu</h2>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="{{ route('allbook')}}" class="btn btn-primary btn-outline-primary px-4 py-3">View All Books</a></p>
            </div>
              </div>
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="menu-entry">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-1.jpg') }});"></a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry mt-lg-4">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-2.jpg') }});"></a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry">
                              <a href="#" class="img" style="background-image:  url({{ asset('assets/images/menu-3.jpg') }});"></a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry mt-lg-4">
                              <a href="#" class="img" style="background-image:  url({{ asset('assets/images/menu-4.jpg') }});"></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
  <!-- <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="100">0</strong>
                        <span>Coffee Branches</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="85">0</strong>
                        <span>Number of Awards</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="10567">0</strong>
                        <span>Happy Customer</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="900">0</strong>
                        <span>Staff</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div> -->  
  </section>

@endsection
