@extends('layouts.frontendtemplate')
@section('title', 'Home Page')
@section('content')
  <!-- Slider Area -->
  <section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider" style="background-image: url({{asset('frontend/images/banner.jpg')}})">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 offset-md-4 col-12">
            <div class="text-inner">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="hero-text">
                    <h1><span>UP TO 50% OFF </span>Fashion For Man</h1>
                    <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                    <div class="button">
                      <a href="#" class="btn">Shop Now!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Single Slider -->
  </section>
  <!--/ End Slider Area -->
  
  <!-- Start Small Banner  -->
  <section class="small-banner section">
    <div class="container">
      <div class="row">
        <!-- Single Banner  -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="{{asset('frontend/images/men_collection.jpeg')}}" alt="#">
            <div class="content">
              <p>Man's Collectons</p>
              <h3 class="text-white">Summer travel <br> collection</h3>
              <a href="#">Discover Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="{{asset('frontend/images/bag_collection.jpeg')}}" alt="#">
            <div class="content">
              <p>Bag Collectons</p>
              <h3 class="text-white">Awesome Bag <br> 2020</h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <div class="col-lg-4 col-12">
          <div class="single-banner tab-height">
            <img src="{{asset('frontend/images/shoe-collection.jpeg')}}" alt="#">
            <div class="content">
              <p>Shoe Collections</p>
              <h3 class="text-white">Amazing Shoe <br> 2021</h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
      </div>
    </div>
  </section>
  <!-- End Small Banner -->
  
  <!-- Start Product Area -->
    <div class="product-area section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Item</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              <div class="nav-main">
                <!-- Tab Nav -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  @php
                    $i = 1;
                  @endphp
                  @foreach($categories as $category)
                    <li class="nav-item"><a class="nav-link @if($i==1){{'active'}} @endif" data-toggle="tab" href="#{{$category->name}}" role="tab">{{$category->name}}</a></li>
                    @php $i++; @endphp
                  @endforeach
                  {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li> --}}
                </ul>
                <!--/ End Tab Nav -->
              </div>
              <div class="tab-content" id="myTabContent">
                @php
                  $i = 1;
                @endphp
                @foreach($categories as $category)
                <!-- Start Single Tab -->
                <div class="tab-pane fade @if($i==1){{'show active'}} @endif" id="{{$category->name}}" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">
                      @foreach($category->items as $item)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <x-single-product-component :item="$item"></x-single-product-component>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                <!--/ End Single Tab -->
                @php $i++; @endphp
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End Product Area -->
  
  <!-- Start Midium Banner  -->
  <section class="midium-banner">
    <div class="container">
      <div class="row">
        <!-- Single Banner  -->
        <div class="col-lg-6 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Man's Collectons</p>
              <h3>Man's items <br>Up to<span> 50%</span></h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <div class="col-lg-6 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>shoes women</p>
              <h3>mid season <br> up to <span>70%</span></h3>
              <a href="#" class="btn">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
      </div>
    </div>
  </section>
  <!-- End Midium Banner -->
  
  <!-- Start Most Popular -->
  <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Hot Item</h2>
          </div>
        </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                  <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                  <span class="out-of-stock">Hot</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="product-content">
                <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                <div class="product-price">
                  <span class="old">$60.00</span>
                  <span>$50.00</span>
                </div>
              </div>
            </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                  <span class="new">New</span>
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div>
            <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- End Most Popular Area -->
  
  <!-- Start Shop Home List  -->
  <section class="shop-home-list section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>On sale</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
                  <p class="price with-discount">$59</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$44</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$89</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>Best Seller</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$65</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$33</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$77</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="row">
            <div class="col-12">
              <div class="shop-section-title">
                <h1>Top viewed</h1>
              </div>
            </div>
          </div>
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$22</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$35</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
          <!-- Start Single List  -->
          <div class="single-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="list-image overlay">
                  <img src="https://via.placeholder.com/115x140" alt="#">
                  <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 no-padding">
                <div class="content">
                  <h5 class="title"><a href="#">Licity jelly leg flat Sandals</a></h5>
                  <p class="price with-discount">$99</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Single List  -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Home List  -->
  
  <!-- Start Cowndown Area -->
  <section class="cown-down">
    <div class="section-inner ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 padding-right">
            <div class="image">
              <img src="https://via.placeholder.com/750x590" alt="#">
            </div>  
          </div>  
          <div class="col-lg-6 col-12 padding-left">
            <div class="content">
              <div class="heading-block">
                <p class="small-title">Deal of day</p>
                <h3 class="title">Beatutyful dress for women</h3>
                <p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
                <h1 class="price">$1200 <s>$1890</s></h1>
                <div class="coming-time">
                  <div class="clearfix" data-countdown="2021/02/30"></div>
                </div>
              </div>
            </div>  
          </div>  
        </div>
      </div>
    </div>
  </section>
  <!-- /End Cowndown Area -->
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.QuickView').click(function(e){
        e.preventDefault();
        $('#exampleModal').modal('show')
      })
    })
  </script>
@endsection