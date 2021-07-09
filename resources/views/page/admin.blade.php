@extends('layouts.app')

@section('content')

@push('details')
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endpush

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   

                    
<section class="py-lg-7">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card overflow-hidden mb-5">
            <div class="row">
              <div class="col-lg-7">
                <form role="form" class="" id="contact-form" method="post">
                  <div class="card-header px-4 py-sm-2">
                    <h2>add group </h2>
                    <p class="lead"> We'd like to talk with you.</p>
                  </div>
                  <div class="card-body pt-1">
                    <div class="row">
                      <div class="col-md-12 pe-2 mb-3">
                        <label>My name is</label>
                        <input class="form-control" placeholder="Full Name" type="text">
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <label>I'm looking for</label>
                        <input class="form-control" placeholder="What you love" type="text">
                      </div>
                      <div class="col-md-12 pe-2 mb-3">
                        <label>image</label>
                        <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg  png " />
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                            <label class="form-check-label" for="flexSwitchCheckDefault">a public group</label>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 text-right ms-auto">
                        <button type="submit" class="btn btn-round bg-gradient-info mb-0">Send Message</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('./images/curved5.jpg')">
                <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                  <img src="./images/wave-1.svg" class="h-100 ms-n2">
                </div>
                <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                  <div class="mask bg-gradient-info opacity-9"></div>
                  <div class="p-5 ps-sm-8 position-relative text-left my-auto z-index-2">
                    <h3 class="text-white">add group</h3>
                    <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum voluptates commodi esse amet a veritatis, voluptate in enim repudiandae laudantium corporis? Dolorum excepturi ipsum, vitae laborum atque illo reiciendis a nesciunt laboriosam. Illum laboriosam ipsam dicta inventore itaque quia a? Repudiandae nostrum veniam magni adipisci iusto, ipsam aliquid asperiores ea..</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection




