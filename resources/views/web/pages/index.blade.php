@extends('web.layout.app')
@section('content')
<div class="main-wrapper">
    <!-- Hero Section Start -->
    <div class="hero-slider hero-slider-one"> 
      <!-- Single Slide Start -->

      <div class="single-slide" style="background-image: url({{ asset('public/assets/images/slider/slide-bg-1.jpg') }})">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
          <div class="row">
            <div class="col-lg-10 col-md-10">
              <div class="slider-text-info">
              <h2>Banner 1</h2>
                <!--  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>-->
                <div class="hero-btn"> <a href="javascript:void(0)" class="slider-btn uppercase"><span>SHOP NOW</span></a> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Hero Content One End -->
      </div>

        <div class="single-slide" style="background-image: url({{ asset('public/assets/images/slider/slide-bg-2.jpg') }})">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider-text-info">
                            <h2>Banner 2</h2>

                            <!--  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>-->
                            <div class="hero-btn"> <a href="javascript:void(0)" class="slider-btn uppercase"><span>SHOP NOW</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>

        <div class="single-slide" style="background-image: url({{ asset('public/assets/images/slider/slide-bg-3.jpg') }})">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider-text-info">
                            <h2>Banner 3</h2>
                            <!--  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words...</p>-->
                            <div class="hero-btn"> <a href="javascript:void(0)" class="slider-btn uppercase"><span>SHOP NOW</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>

        <!-- Single Slide End -->
    </div>
    <!-- Start Product Area -->
    <!-- Start Product End -->
    <!-- Start Product Area -->
    <div class="porduct-area section-pb mt-30">
      <div class="container box-shadow">
        <div class="col-lg-12 row">
          <div class="section-title mt-20 col-md-12 border-bottom">
            <div class=" row">
              <h4 class="col-md-9">Products</h4>
              <a class="col-md-3 text-right green-color" href="{{ route('shop') }}">VIEW ALL</a> </div>
          </div>
        </div>
        <div class="row product-two-row-4">
          @foreach ($product as $item)
          <?php $img = ($item->featured_image) ? $item->featured_image : 'public/assets/images/product/product-12.jpg' ?>
          <div class="col-lg-12"> 
              <!-- single-product-wrap start -->
              <div class="single-product-wrap">
              <div class="product-image"> <a href="{{ route('product-detail',['id'=>$item->id])}}"><img style="height: 230px;width: 230px;object-fit: contain" src="{{ asset($img)}}" alt="Produce Images"></a>
                  <div class="product-action"> <a href="{{ route('signleCart',['id'=>$item->id])}}" class="add-to-cart"><i class="ion-ios-cart-outline"></i></a> 
                    <a href="{{ route('product-detail',['id'=>$item->id])}}" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ionicons ion-ios-eye-outline"></i></a> </div>
                </div>
                <div class="product-content">
                  <h3><a href="{{ route('product-detail',['id'=>$item->id])}}">{{ $item->name }}</a></h3>
                  <div class="price-box"> <span class="new-price">${{number_format($item->price,2)}}</span> </div>
                </div>
              </div>
              <!-- single-product-wrap end --> 
            </div>
               
          @endforeach
          
        </div>
      </div>
    </div>
    <!-- Start Product End -->
  </div>
  @endsection