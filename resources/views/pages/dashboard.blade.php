@extends('layouts.admin')

@section('title')
    Store Dashboard Page
@endsection

@section('content')
    <!-- section content -->
          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="dashboard-card-title">Customer</div>
                        <div class="dashboard-card-subtitle">Rp. 30000.094</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">Rp. 30000.094</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="dashboard-card-title">Transaction</div>
                        <div class="dashboard-card-subtitle">Rp. 30000.094</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transaction</h5>
                    {{-- @foreach ($transactions_data as $transaction) --}}
                        <a
                      href="#"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="images/BANNER-SLIDE-PROMO-Benih-Melon 1.png"
                              class="w-75"
                            />
                          </div>
                          <div class="col-md-4">
                            {{-- {{ $transaction->product->name ?? '' }} --}}
                            Jeruk pontianak
                          </div>
                          <div class="col-md-3">
                            {{-- {{ $transaction->transaction->user->name ?? '' }} --}}
                            Pembelian sapi
                          </div>
                          <div class="col-md-3">
                            {{-- {{ $transaction->transaction->created_at ?? '' }} --}}
                            28-agustus-2021
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    {{-- @endforeach --}}
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection