@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <!-- page-content -->
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="images/BANNER-SLIDE-PROMO-Benih-Melon 1.png"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/banner.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/banner.jpg"
                      alt="Carousel Image"
                      class="d-block w-100"
                    />
                  </div>
                </div>
                <a class="carousel-control-prev" href="#storeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                        <a class="carousel-control-next" href="#storeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
            </div>
        </div>
        </div>
        </div>
        </section>
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Categories</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up"
                    data-aos-delay="">
                    <a class="component-categories d-block" href="">
                            <div class="categories-image">
                                <img src="" alt="Gadgets Categories" class="img-fluid" />
                            </div>
                            <p class="categories-text">Semua Kategori</p>
                        </a>    
                    </div>
                    @php
                        $incrementCategory = 0
                    @endphp
                    @forelse ($categories as $cat)
                        <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up"
                        data-aos-delay="{{ $incrementCategory+=100 }}">
                        <a class="component-categories d-block" href="{{ route('categories-detail', $cat->slug) }}">
                                <div class="categories-image">
                                    <img src="{{ Storage::url($cat->image_category) }}" alt="{{ $cat->name_category }}" title="{{ $cat->name_category }}" class="img-fluid" />
                                </div>
                                <p class="categories-text">{{ $cat->name_category }}</p>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            Product Not Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        @forelse ($categories as $category)
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>{{ $category->name_category }}</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="{{ route('categories-detail', $category->slug) }}" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    @php
                        $incrementProduct = 0;
                        $get = \App\Models\Admin\ProductModel::where(['category_id' => $category->id])->with(['imageproduct'])->take(6)->latest()->get();
                    @endphp
                    @forelse ($get as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+=100 }}">
                            <a href="{{ route('product-detail', $product->slug) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div class="products-image" style="@if ($product->imageproduct)
                                        background-image: url('{!! Storage::url($product->imageproduct->first()->image) !!}')
                                      @else
                                        background-color: #eee;
                                      @endif">
                                      </div>
                                </div>
                                <div class="product-keterangan">
                                    <div class="products-text">{{ $product->nama_product }}</div>
                                    <div class="products-price">Rp. {{ number_format($product->harga_jual,0,',','. ')  }}/kg</div>
                                    <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            Product Not Found
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        @empty
            <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                Product Not Found
            </div>
        @endforelse
        
        
        
    </div>
@endsection

@push('addon-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    // $(document).ready(function(){
    //     var idProduct = 
    // })
</script>
@endpush