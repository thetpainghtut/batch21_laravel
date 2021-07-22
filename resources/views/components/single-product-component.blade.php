{{-- <div>
    Happiness is not something readymade. It comes from your own actions. - Dalai Lama
</div> --}}

<div class="single-product">
  <div class="product-img">
    <a href="product-details.html">
      <img class="default-img" src="{{asset("storage/$item->photo")}}" alt="#">
      <img class="hover-img" src="{{asset("storage/$item->photo")}}" alt="#">
    </a>
    <div class="button-head">
      <div class="product-action">
        <a class="QuickView" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
      </div>
      <div class="product-action-2">
        <a title="Add to cart" href="#">Add To Cart</a>
      </div>
    </div>
  </div>
  <div class="product-content">
    <h3><a href="product-details.html">{{$item->name}}</a></h3>
    <div class="product-price">
      <span>{{number_format($item->price) .' Ks'}}</span>
    </div>
  </div>
</div>