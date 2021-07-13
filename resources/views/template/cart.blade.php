@extends('layouts.template')
@section('title','Home Page')
@section('content')
  <!-- Page Header-->
  <header class="masthead" style="background-image: url('template/assets/img/home-bg.jpg')">
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="site-heading">
                      <h1>My Shopping Cart</h1>
                      <span class="subheading">A Blog Theme by Start Bootstrap</span>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Name / Photo</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody id="tbody">
          {{-- <tr>
            <td>1</td>
            <td>
              Item One
              <img src="{{asset('template/assets/img/home-bg.jpg')}}" class="w-25">
            </td>
            <td>
              15,000
            </td>
            <td>
              <input type="number" name="quantity" class="form-control" value="1">
            </td>
            <td>
              <button class="btn btn-danger btn-sm">x</button>
            </td>
          </tr> --}}
        </tbody>
        <tfoot>
          <tr>
            <td colspan="4"></td>
            <td>
              <button class="btn btn-success checkout" data-total="0">Checkout</button>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
    {{-- <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
          <!-- Post preview-->
          <div class="post-preview">
              <a href="post.html">
                  <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                  <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
              </a>
              <p class="post-meta">
                  Posted by
                  <a href="#!">Start Bootstrap</a>
                  on September 24, 2021
              </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
          <!-- Post preview-->
          <div class="post-preview">
              <a href="post.html"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
              <p class="post-meta">
                  Posted by
                  <a href="#!">Start Bootstrap</a>
                  on September 18, 2021
              </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
          <!-- Post preview-->
          <div class="post-preview">
              <a href="post.html">
                  <h2 class="post-title">Science has not yet mastered prophecy</h2>
                  <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
              </a>
              <p class="post-meta">
                  Posted by
                  <a href="#!">Start Bootstrap</a>
                  on August 24, 2021
              </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
          <!-- Post preview-->
          <div class="post-preview">
              <a href="post.html">
                  <h2 class="post-title">Failure is not an option</h2>
                  <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
              </a>
              <p class="post-meta">
                  Posted by
                  <a href="#!">Start Bootstrap</a>
                  on July 8, 2021
              </p>
          </div>
          <!-- Divider-->
          <hr class="my-4" />
          <!-- Pager-->
          <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
      </div>
    </div> --}}
  </div>
@endsection
@section('script')
  <script type="text/javascript" src="{{asset('template/js/custom.js')}}"></script>
@endsection