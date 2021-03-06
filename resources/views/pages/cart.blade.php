@extends('layouts.app')


@section('title')
    Store Cart Page
@endsection
@section('content')
      <!-- Page Content -->
      <div class="page-content page-cart">
        <!-- breadcrumb -->
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-dellay="100">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="/index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                      Cart
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
  
        <!-- Cart Section -->
        <section class="store-cart">
          <div class="container">
            <!-- First Section -->
            <div class="row" data-aos="fade-up" data-aos-dellay="100">
              <div class="col-12 table-responsive">
                <table class="table table-borderless table-cart">
                  <thead>
                    <tr>
                      <td>Image</td>
                      <td>Name &amp; Seller</td>
                      <td>Price</td>
                      <td>Menu</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 20%;">
                        <img src="/images/gallery1.jpg" alt="" class="cart-image w-100">
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">Skin Care Terbaik</div>
                        <div class="product-subtitle">Skin Care Terbaik</div>
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">$29,122</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
  
                    <tr>
                      <td style="width: 20%;">
                        <img src="/images/gallery2.jpg" alt="" class="cart-image w-100">
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">Skin Care Terbaik</div>
                        <div class="product-subtitle">Skin Care Terbaik</div>
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">$29,122</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
  
                    <tr>
                      <td style="width: 20%;">
                        <img src="/images/gallery3.jpg" alt="" class="cart-image w-100">
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">Skin Care Terbaik</div>
                        <div class="product-subtitle">Skin Care Terbaik</div>
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">$29,122</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Header -->
            <div class="row" data-aos="fade-up" data-aos-dellay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-4">
                  Shipping Details
                </h2>
              </div>
            </div>
            <!-- Second Section -->
            <div class="row mb-2" data-aos="fade-up" data-aos-dellay="200">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressOne">Address 1</label>
                  <input type="text" class="form-control" id="addressOne" name="addressOne" value="Baler Bale Agung">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressTwo">Address 2</label>
                  <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Jalan Plawa">
                </div>
              </div>
            </div>
            <div class="row mb-2" data-aos="fade-up" data-aos-dellay="250">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="province">Province</label>
                    <select name="province" id="province" class="form-control">
                      <option value="Bali">Bali</option>
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="city">City</label>
                    <select name="city" id="city" class="form-control">
                      <option value="Jembrana">Jembrana</option>
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="postalCode">PostalCode</label>
                  <input type="text" class="form-control" id="postalCode" name="postalCode" value="82212">
                </div>
              </div>
  
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" value="+62 8776 1789 873">
                </div>
              </div>
            </div>
            <!-- Header -->
            <div class="row" data-aos="fade-up" data-aos-dellay="300">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-4">
                  Payment Informations
                </h2>
              </div>
            </div>
            <!-- Third Section -->
            <div class="row" data-aos="fade-up" data-aos-dellay="350">
              <div class="col-4 col-md-2">
                <div class="product-title">$10</div>
                <div class="product-subtitle">Country Tax</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title">$280</div>
                <div class="product-subtitle">Product Insurance</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title">$580</div>
                <div class="product-subtitle">Ship to Canada</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title text-success">$392,409</div>
                <div class="product-subtitle">Total</div>
              </div>
              <div class="col-8 col-md-3">
                <a href="/success.html" class="px-3 mt-4 btn btn-success btn-block">
                  Checkout
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection