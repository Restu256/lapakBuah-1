@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-detail">
      <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="store-gallery" id="gallery">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 col-8" data-aos="zoom-in">
                    <div class="frame-image">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 min-image" alt="" />
                        </transition>
                    </div>
                </div>
                <div class="col-lg-2 col-4">
                    <div class="row">
                        <div class="frame-thumnail">
                            <div class="col-10 col-lg-12 mt-2 mt-lg-0" style="width: 100%;" v-for="(photo, index) in photos" :key="photo.id">
                                <a href="#" @click="changeActive(index)">
                                    <div class="thumbnail-image">
                                        <img :src="photo.url" class="w-100" :class="{ active: index == activePhoto }" alt="" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>{{ $product->nama_product }}</h1>
                        <div class="owner">By Iqbal Zaenal Mutaqin</div>
                        <div class="price">Rp. {{ number_format($product->harga_jual,0,',','. ')  }}/{{ $product->satuan }}</div>
                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                        @auth
                            <form action="{{ route('product-add', $product->id) }}" method="POST" enctype="multipart/form-data
                            ">
                            @csrf
                                <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                Add to Cart
                                </button>
                            </form>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                                <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>
                                SignIn to Add
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p data-aos="zoom-in">
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3" data-aos="zoom-in">
                        <h5>Customer Review (3)</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                            <li class="media" data-aos="zoom-in">
                                <img src="/images/testimoni/icon-testimonial-1.png" class="mr-3 rounded-circle" alt="" />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Putri Octaviani</h5>
                                    I thought it was not good for living room. I really happy to decided buy this product last week now feels like homey.
                                </div>
                            </li>
                            <li class="media" data-aos="zoom-in">
                                <img src="/images/testimoni/icon-testimonial-2.png" class="mr-3 rounded-circle" alt="" />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Faturahman Al Aziz</h5>
                                    Color is great with the minimalist concept. Even I thought it was made by Cactus industry. I do really satisfied with this.
                                </div>
                            </li>
                            <li class="media" data-aos="zoom-in">
                                <img src="/images/testimoni/icon-testimonial-3.png" class="mr-3 rounded-circle" alt="" />
                                <div class="media-body">
                                    <h5 class="mt-2 mb-1">Grasia Purnawira</h5>
                                    When I saw at first, it was really awesome to have with. Just let me know if there is another upcoming product like this.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script> 
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach($product->imageproduct as $gallery)
              {
                id: {{ $gallery->id }},
                url: "{{ Storage::url($gallery->image) }}",
              },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script> 
    {{-- <script>
      var gallery = new Vue({
          el: "#gallery",
          mounted() {
              AOS.init();
          },
          data: {
              activePhoto: 0,
              photos: [{
                  id: 1,
                  url: "/images/product-details/product-details-1.jpg",
              }, {
                  id: 2,
                  url: "/images/product-details/product-details-2.jpg",
              }, {
                  id: 3,
                  url: "/images/product-details/product-details-3.jpg",
              }, {
                  id: 4,
                  url: "/images/product-details/product-details-4.jpg",
              }, ],
          },
          methods: {
              changeActive(id) {
                  this.activePhoto = id;
              },
          },
      });
    </script> --}}
@endpush