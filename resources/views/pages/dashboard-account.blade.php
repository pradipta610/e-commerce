@extends('layouts.dashboard')

@section('title')
    Account Settings
@endsection
@section('content')
     <!-- section content -->
     <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">My Account</h2>
          <p class="dashboard-subtitle">Silahkan Atur Akunmu.</p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <form action="">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2" data-aos="fade-up" data-aos-dellay="200">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Your Name</label>
                          <input type="text" class="form-control" id="name" name="name" value="Pradipta Wistika">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Your Email</label>
                          <input type="email" class="form-control" id="email" name="email" value="Mansyur@gmail.com">
                        </div>
                      </div>
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
                    <div class="row">
                      <div class="col text-right">
                        <button type="submit" class="btn btn-success px-5">Save Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection