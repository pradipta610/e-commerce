@extends('layouts.app')


@section('title')
    Store Homepage
@endsection
@section('content')
<div class="page-content page-home">
    <!-- banner/carousel section -->
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li type="button" data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                <li type="button" data-target="#storeCarousel" data-slide-to="1" ></li>
                <li type="button" data-target="#storeCarousel" data-slide-to="2" ></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/walpaper.jpg" class="d-block w-100" alt="carousel">
                </div>
                <div class="carousel-item">
                  <img src="/images/walpaper.jpg" class="d-block w-100" alt="carousel">
                </div>
                <div class="carousel-item">
                  <img src="/images/walpaper.jpg" class="d-block w-100" alt="carousel">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Trend Categories -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <!-- Categories Section -->
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image" >
                <img src="/images/categories1.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories2.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Furniture
              </p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories3.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Make Up
              </p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories4.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Sneakers
              </p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories5.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Tools
              </p>
            </a>
          </div>

          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories6.svg" alt="" data-aos-delay="100">
              </div>
              <p class="categories-text">
                Baby
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- new products -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product1.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product2.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product3.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product4.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product5.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product6.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product7.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>
          
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('/images/product8.jpg');"></div>
              </div>
              <div class="products-text">
                Apple Watch 4
              </div>
              <div class="products-price">
                $896
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection