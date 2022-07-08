@extends('layouts.admin')

@section('title')
    Admin Store Dashboard
@endsection
@section('content')
    <!-- section content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Customer
                    </div>
                    <div class="dashboard-card-subtitle">
                      {{ $customer }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Revenue
                    </div>
                    <div class="dashboard-card-subtitle">
                      {{ $revenue }}
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Transactions
                    </div>
                    <div class="dashboard-card-subtitle">
                      {{ $transaction }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 mt-2">
                <h5 class="mb-3">Recent Transactions</h5>
                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                          <img src="/images/transaction1.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Shirup Marjan
                        </div>
                        <div class="col-md-3">
                          Billy Syahputra
                        </div>
                        <div class="col-md-3">
                          17 April, 2022
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow.svg" alt="">
                        </div>
                    </div>
                  </div>
                </a>


                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                          <img src="/images/transaction2.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Kursi Kematian
                        </div>
                        <div class="col-md-3">
                          Andi Fermansyah
                        </div>
                        <div class="col-md-3">
                          17 April, 2022
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow.svg" alt="">
                        </div>
                    </div>
                  </div>
                </a>

                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                          <img src="/images/transaction3.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Meja Kismis
                        </div>
                        <div class="col-md-3">
                          Luffy
                        </div>
                        <div class="col-md-3">
                          17 April, 2022
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow.svg" alt="">
                        </div>
                    </div>
                  </div>
                </a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection