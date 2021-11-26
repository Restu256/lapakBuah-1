@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Admin
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Blog</h2>
                <p class="dashboard-subtitle">Blog yang akan menjadi icon di Halaman utama</p>
              </div>
              <div class="dashboard-content">
                {{-- @include('pages.role_management.navigasi_roles') --}}
                <div class="row">
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>{{ $message }}</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ $message }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row mt-4">
    <div class="col col-lg-12 col-md-12">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        @foreach($blog->imageblog as $index => $image)
        @if($index == 0)
          <div class="carousel-item active">
              <img src="{{ asset('storage/' .$image->image) }}" class="d-block w-100" alt="...">
          </div>
        @else
          <div class="carousel-item">
              <img src="{{ asset('storage/' .$image->image) }}" class="d-block w-100" alt="...">
          </div>
        @endif
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- deskripsi produk -->
    <!-- <div class="col col-lg-12 col-md-12">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <span class="small">{{ $blog->category->name_category }}</span>
              <h5>{{ $blog->nama_product }}</h5>
              <p>
                Rp. {{ number_format($blog->harga_jual, 2) }}
              </p>
              <button class="btn btn-sm btn-outline-secondary">
              <i class="far fa-heart"></i> Tambah ke wishlist
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <button class="btn btn-block btn-primary">
              <i class="fa fa-shopping-cart"></i> Tambahkan Ke Keranjang
              </button>
              <button class="btn btn-block btn-danger mt-4">
              <i class="fa fa-shopping-basket"></i> Beli Sekarang
              </button>
            </div>
            <div class="card-footer">
              <div class="row mt-4">
                <div class="col text-center">
                  <i class="fa fa-truck-moving"></i> 
                  <p>Pengiriman Cepat</p>
                </div>
                <div class="col text-center">
                  <i class="fa fa-calendar-week"></i> 
                  <p>Garansi 7 hari</p>
                </div>
                <div class="col text-center">
                  <i class="fa fa-money-bill"></i> 
                  <p>Pembayaran Aman</p>
                </div>
              </div>            
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <div class="row mt-4 mb-5">
    <div class="col">
      <div class="card">
        <div class="card-header">
          Deskripsi
        </div>
        <div class="card-body">
          {{ $blog->isi_blog }}
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>
  </div>
  @endsection
@push('addon-script')