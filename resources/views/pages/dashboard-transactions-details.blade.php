@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions Details
@endsection
@section('content')
         <!-- section content -->
         <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">#STORE0890</h2>
              <p class="dashboard-subtitle">Transactions / Details</p>
            </div>
            <div class="dashboard-content" id="transactionDetails">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <img src="/images/dashboard-details.png" alt="" class="w-100 mb-3">
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Customer Name</div>
                              <div class="product-subtitle">Pradipta Wistika</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Product Name</div>
                              <div class="product-subtitle">Sepatu Mauts</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Date of Transactions</div>
                              <div class="product-subtitle">20 April,2020</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Payment Status</div>
                              <div class="product-subtitle text-danger">Pending</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Total Amount</div>
                              <div class="product-subtitle text-danger">$500</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Mobile</div>
                              <div class="product-subtitle text-danger">+621828792732</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address I</div>
                      <div class="product-subtitle">Setra Duta Cemara</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address II</div>
                      <div class="product-subtitle">Blok B2 No. 34</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">Bandung</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">123999</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-12 col-md-3">
                      <div class="product-title">Shipping Status</div>
                      <Select class="form-control" id="status" name="status" v-model="status">
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </Select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                      <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input type="text" name="resi" v-model="resi" class="form-control">
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-success btn-block mt-4">Update Resi</button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-right">
                  <button type="submit" class="btn btn-success btn-lg mt-4 mb-4">Save Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
      status: "SHIPPING",
      resi: "862345423764"
    },
  });
</script>
@endpush