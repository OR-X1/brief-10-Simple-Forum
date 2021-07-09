@extends('layouts.app')

@section('content')

@push('card')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
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
                    <div class="container  d-flex justify-content-center mt-100">
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="product-wrapper mb-45 text-center">
                                    <div class="product-img"> 
                                        <a href="#" data-abc="true"> <img src="{{ asset('image/tL7ZE46.jpg') }}" alt=""> </a>
                                        <span><i class="fa fa-rupee"></i> 10-05-2021</span>
                                        <div class="product-action">
                                            <div class="product-action-style"> 
                                                <p class="mx-3 my-0">Game of Thronce Game </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-wrapper mb-45 text-center">
                                    <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('image/tL7ZE46.jpg') }}" alt=""> </a> <span class="text-center"><i class="fa fa-rupee"></i> 10-05-2021</span>
                                        <div class="product-action">
                                            <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-wrapper mb-45 text-center">
                                    <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('image/tL7ZE46.jpg') }}" alt=""> </a> <span><i class="fa fa-rupee"></i> 10-05-2021</span>
                                        <div class="product-action">
                                            <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-wrapper mb-45 text-center">
                                    <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('image/tL7ZE46.jpg') }}" alt=""> </a> <span><i class="fa fa-rupee"></i> 10-05-2021</span>
                                        <div class="product-action">
                                            <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
