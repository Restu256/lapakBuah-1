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
                    <div class="col-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-categories d-block" href="#">
                            <div class="categories-image">
                                <img src="images/TCategori1.svg" alt="Gadgets Categories" class="w-100" />
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
                        <h5>Buah Segar</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="/category_front" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Sayur Segar</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Rimpah Bumbu Dapur</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Bibit Tanaman</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Pestisida</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Pupuk</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Alat Pertanian</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>UMKM(olahan)</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-6" data-aos="fade-up">
                        <h5>Sembako</h5>
                    </div>
                    <div class="col-6 text-right mt-3" data-aos="fade-up">
                        <a href="#" class="link-show-more">Lihat Semua>></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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
                        <a href="/detail_front" class="component-products d-block">
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