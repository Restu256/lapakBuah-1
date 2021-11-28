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
            <div
              class="col-4 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a class="component-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="images/TCategori1.svg"
                    alt="Gadgets Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">Gadgets</p>
              </a>
            </div>
            <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <a class="component-categories d-block" href="#">
                    <div class="categories-image">
                        <img src="images/TCategori2.svg" alt="Furniture Categories" class="w-100" />
                    </div>
                    <p class="categories-text">Furniture</p>
                </a>
            </div>
            <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                <a class="component-categories d-block" href="#">
                    <div class="categories-image">
                        <img src="images/TCategori3.svg" alt="Makeup Categories" class="w-100" />
                    </div>
                    <p class="categories-text">Makeup</p>
                </a>
            </div>
            <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <a class="component-categories d-block" href="#">
                    <div class="categories-image">
                        <img src="images/TCategori4.svg" alt="Sneaker Categories" class="w-100" />
                    </div>
                    <p class="categories-text">Sneaker</p>
                </a>
            </div>
            <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                <a class="component-categories d-block" href="#">
                    <div class="categories-image">
                        <img src="images/TCategori5.svg" alt="Tools Categories" class="w-100" />
                    </div>
                    <p class="categories-text">Tools</p>
                </a>
            </div>
            <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                <a class="component-categories d-block" href="#">
                    <div class="categories-image">
                        <img src="images/TCategori6.svg" alt="Baby Categories" class="w-100" />
                    </div>
                    <p class="categories-text">Baby</p>
                </a>
            </div>
        </div>
        </div>
        </section>
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>All Product</h5>
                    </div>
                    <!-- <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('images/NP1.jpg')"></div>
                            </div>
                            <div class="product-keterangan">
                                <div class="products-text">Jeruk Bali Premium</div>
                                <div class="products-price">Rp. 20.000/kg</div>
                                <div class="product-lokasi"><i class="fa fa-map-marker" aria-hidden="true"></i> Kab. Bandung Barat</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        </div>
@endsection