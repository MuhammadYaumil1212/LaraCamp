@extends('layouts.app')
@section('content')
    <section class="checkout">
      <div class="container">
          <div class="row text-center pb-70">
              <div class="col-lg-12 col-12 header-wrap">
                  <p class="story">
                      YOUR FUTURE CAREER
                  </p>
                  <h2 class="primary-header">
                      Start Invest Today
                  </h2>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-9 col-12">
                  <div class="row">
                      <div class="col-lg-5 col-12">
                          <div class="item-bootcamp">
                              <img src="/assets/images/item_bootcamp.png" alt="" class="cover">
                              <h1 class="package">
                                  {{$camp->title}}
                              </h1>
                              <p class="description">
                                  Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                              </p>
                          </div>
                      </div>
                      <div class="col-lg-1 col-12"></div>
                      <div class="col-lg-6 col-12">
                          <form action="{{route('checkout.store', $camp->id)}}" method="post" class="basic-form">
                                @csrf
                              <div class="mb-4">
                                  <label class="form-label">Full Name</label>
                                  <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="exampleInputEmail1" value={{Auth::User()->name}}>
                                  @if ($errors->has('name'))
                                      <p class="text-danger">{{$errors->first('name')}}</p>
                                  @endif
                              </div>
                              <div class="mb-4">
                                  <label class="form-label">Email Address</label>
                                  <input type="text" name="email" class="form-control  {{$errors->has('email') ? 'is-invalid' : ''}}" id="exampleInputEmail1" value={{Auth::User()->email}}>
                                  @if ($errors->has('email'))
                                      <p class="text-danger">{{$errors->first('email')}}</p>
                                  @endif
                              </div>
                              <div class="mb-4">
                                  <label class="form-label">Occupation</label>
                                  <input type="text" name="occupation" class="form-control  {{$errors->has('occupation') ? 'is-invalid' : ''}}" id="exampleInputEmail1" value={{old('occupation') ?: Auth::User()->occupation}}>
                                  @if ($errors->has('occupation'))
                                  <p class="text-danger">{{$errors->first('occupation')}}</p>
                              @endif
                              </div>
                              <div class="mb-4">
                                  <label class="form-label">phone</label>
                                  <input type="number" name="phone" class="form-control  {{$errors->has('phone') ? 'is-invalid' : ''}}" id="exampleInputEmail1" value={{old('phone') ?: Auth::User()->phone}}>
                                  @if ($errors->has('phone'))
                                  <p class="text-danger">{{$errors->first('phone')}}</p>
                              @endif
                              </div>
                              <div class="mb-4">
                                  <label class="form-label">address</label>
                                  <input type="text" name="address" class="form-control  {{$errors->has('address') ? 'is-invalid' : ''}}" id="exampleInputEmail1" value={{old('address') ?: Auth::User()->address}}>
                                  @if ($errors->has('address'))
                                  <p class="text-danger">{{$errors->first('address')}}</p>
                              @endif
                              </div>
                              </div>
                              <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                              <p class="text-center subheader mt-4">
                                  <img src="/assets/images/ic_secure.svg"> Your payment is secure and encrypted.
                              </p>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  @endsection