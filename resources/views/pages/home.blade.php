@extends('layouts.admin')

@section('title')
    Store Dashboard Page
@endsection

@section('content')
    <!-- section content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">This is IPStore Administrator</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="dashboard-card-title">Customer</div>
                            <div class="dashboard-card-subtitle">#</div>
                          </div>
                          <div class="col-md-4">
                            <i class="fa fa-user" aria-hidden="true" style="font-size: 70px"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="dashboard-card-title">Revenue</div>
                            <div class="dashboard-card-subtitle">#</div>
                          </div>
                          <div class="col-md-4">
                            <i class="fa fa-money" aria-hidden="true" style="font-size: 70px"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="dashboard-card-title">Transaction</div>
                            <div class="dashboard-card-subtitle">#</div>
                          </div>
                          <div class="col-md-4">
                            <i class="fa fa-bar-chart" aria-hidden="true" style="font-size: 70px"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transaction</h5>
                    <a
                      href="/dashboard-transaction-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard/dashboard-icon-products-1.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Shirup Marjan</div>
                          <div class="col-md-3">Iqbal zaenal M</div>
                          <div class="col-md-3">16 Juni 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transaction-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard/dashboard-icon-products-2.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">LeBrone X</div>
                          <div class="col-md-3">Masayoshi</div>
                          <div class="col-md-3">11 January 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a
                      href="/dashboard-transaction-details.html"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="/images/dashboard/dashboard-icon-products-3.png"
                              alt=""
                            />
                          </div>
                          <div class="col-md-4">Soffa Lembutte</div>
                          <div class="col-md-3">Shayna</div>
                          <div class="col-md-3">18 Juni 2021</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
@endsection