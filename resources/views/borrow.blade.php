@extends('layouts.app')
@section('details')
color: #c49b63;
@endsection
@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Your Borrow Books</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Your Borrows</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>
      
      <section  class="text-dark" class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table style="margin-top: 30px" class="table">
                          <thead class="thead-primary">
                            <tr class="text-dark" class="text-center">
                              <th>return</th>
                              <th>Image</th>
                              <th>Borrowed Book</th>
                              <th>Borroed At</th>
                           </tr>
                           @foreach ($books as $book )
                          </thead>
                          <tbody>
                            <tr class="text-center">
                              <td class="text-light" class="product-remove"><a style="text-decoration: none" href="{{ route('returnbook',$book->id) }}"><span class="icon-close"></span></a></td>

                              <td class="image-prod"><div class="img" style="background-image:url({{asset('assets/images/'.$book->image.'')}});"></div></td>
                              <td class="text-light" class="product-name">
                                  <h3>{{ $book->name }}</h3>
                                  <p class="text-light">{{ $book->description }}</p>
                              </td>
                              <td  style="width:150px" class="text-light">{{ $book->deleted_at->diffForHumans() }}</td>

                          </tr><!-- END TR--> 
                       </tbody>
                          @endforeach
                        </table> 
               </div>
              </div>
          </div>
          </div>
      </section>

{{-- 















      <section class="text-light" class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
            <div class="col-md-12 ftco-animate">
                <div  class="cart-list">
                    <table class="table">
                      
                      @foreach ($books as $book )
                        <thead class="thead-primary">
                          <tr  class="text-center">
                            <th>Return</th>
                            <th>Your Book</th>
                            <th>Image</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td class="product-remove"><a href="{{ route('returnbook',$book->id) }}"><span class="icon-close"></span></a></td>
                            <td class="product-name">
                                <h3 class="text-light">{{ $book->name }}</h3>
                                <p class="text-light">{{ $book->description }}</p>
                            </td>
                            <td style="width:100px" class="image-prod"><div class="img" style="background-image:url({{asset('assets/images/'.$book->image.'')}});"></div></td>
                            <td class="text-light" class="price">{{ $book->price }}</td>
                        </tr><!-- END TR-->
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <!--  <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>$20.60</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>$0.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>$3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>$17.60</span>
                    </p>
                </div>
                <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>-->
        </div>
        </div>
    </section> --}}
@endsection