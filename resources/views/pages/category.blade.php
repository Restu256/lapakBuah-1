@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <!-- page-content -->
    <div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
          <div class="row">
                @php
                    $incrementCategory = 0
                @endphp
                @forelse ($categories as $cat)
                    <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up"
                    data-aos-delay="{{ $incrementCategory+=100 }}">
                        <a class="component-categories d-block" href="{{ route('categories-detail', $cat->slug) }}">
                            <div class="categories-image">
                                <img src="{{ Storage::url($cat->image_category) }}" alt="Gadgets Categories" class="w-100" />
                            </div>
                            <p class="categories-text">{{ $cat->name_category }}</p>
                        </a>
                    </div>
                @empty
                    <p>data not fount</p>
                @endforelse
            </div>
        </div>
        </section>
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Product</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $incrementProduct = 0
                    @endphp
                    @forelse ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+=100 }}">
                            <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div class="products-image" style="@if ($product->imageproduct)
                                        background-image: url('{{ Storage::url($product->imageproduct->first()->image) }}')
                                      @else
                                        background-color: #eee;
                                      @endif"></div>
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
                <div class="row">
                    <div class="col-12 mt-4 text-center d-flex justify-content-center">
                      {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
        </div>
@endsection