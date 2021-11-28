@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <!-- Page Content -->
        <div class="page-content page-cart">
            <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="store-cart">
                <div class="container">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-12 table-responsive">
                            <table class="table table-borderless table-cart">
                                <thead>
                                    <tr class="font-weight-bolder">
                                        <td style="width: 20%;">Image</td>
                                        <td style="width: 20%;">Name &amp; Seller</td>
                                        <td style="width: 20%;">Price</td>
                                        <td style="width: 20%;">Qty</td>
                                        <td style="width: 20%;">Menu</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="/images/product-cart/product-cart-1.jpg" alt="" class="cart-image">
                                        </td>
                                        <td>
                                            <div class="product-title text-success">Sofa Ternyaman</div>
                                            <div class="product-subtitle">By Iqbal Zaenal M</div>
                                        </td>
                                        <td>
                                            <div class="product-title">$29.998</div>
                                            <div class="product-subtitle">USD</div>
                                        </td>
                                        <td>
                                            <div class="product-title pt-1">
                                                <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-remove-cart">
                                              Remove
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/images/product-cart/product-cart-1.jpg" alt="" class="cart-image">
                                        </td>
                                        <td>
                                            <div class="product-title text-success">Sofa Ternyaman</div>
                                            <div class="product-subtitle">By Iqbal Zaenal M</div>
                                        </td>
                                        <td>
                                            <div class="product-title">$29.998</div>
                                            <div class="product-subtitle">USD</div>
                                        </td>
                                        <td>
                                            <div class="product-title pt-1">
                                                <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-remove-cart">
                                            Remove
                                          </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/images/product-cart/product-cart-1.jpg" alt="" class="cart-image">
                                        </td>
                                        <td>
                                            <div class="product-title text-success">Sofa Ternyaman</div>
                                            <div class="product-subtitle">By Iqbal Zaenal M</div>
                                        </td>
                                        <td>
                                            <div class="product-title">$29.998</div>
                                            <div class="product-subtitle">USD</div>
                                        </td>
                                        <td>
                                            <div class="product-title pt-1">
                                                <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-remove-cart">
                                          Remove
                                        </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/images/product-cart/product-cart-1.jpg" alt="" class="cart-image">
                                        </td>
                                        <td>
                                            <div class="product-title text-success">Sofa Ternyaman</div>
                                            <div class="product-subtitle">By Iqbal Zaenal M</div>
                                        </td>
                                        <td>
                                            <div class="product-title">$29.998</div>
                                            <div class="product-subtitle">USD</div>
                                        </td>
                                        <td>
                                            <div class="product-title pt-1">
                                                <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-remove-cart">
                                        Remove
                                      </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="/images/product-cart/product-cart-1.jpg" alt="" class="cart-image">
                                        </td>
                                        <td>
                                            <div class="product-title text-success">Sofa Ternyaman</div>
                                            <div class="product-subtitle">By Iqbal Zaenal M</div>
                                        </td>
                                        <td>
                                            <div class="product-title">$29.998</div>
                                            <div class="product-subtitle">USD</div>
                                        </td>
                                        <td>
                                            <div class="product-title pt-1">
                                                <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-remove-cart">
                                      Remove
                                    </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <h2 class="mb-4">Shipping Details</h2>
                        </div>
                    </div>
                    <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="addressOne">Address 1</label>
                                <input type="text" class="form-control" id="addressOne" name="addressOne" value="Sentra Duta Cemara">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="addressTwo">Address 2</label>
                                <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 No. 34">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="province">Province</label>
                                <select name="province" id="province" class="form-control">
                      <option value="West Java">West Java</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <select name="city" id="city" class="form-control">
                      <option value="bandung">bandung</option>
                    </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input type="text" class="form-control" id="postalCode" name="postalCode" value="42833248">
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
                                <input type="text" class="form-control" id="mobile" name="mobile" value="+628 2020 11111">
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <h2 class="mb-1">Payment Information</h2>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-4 col-md-2">
                            <div class="product-title">$10</div>
                            <div class="product-subtitle">Country Tax</div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="product-title">$280</div>
                            <div class="product-subtitle">Product Insurance</div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="product-title">$580</div>
                            <div class="product-subtitle">Ship to Jakarta</div>
                        </div>
                        <div class="col-4 col-md-2">
                            <div class="product-title text-success">$392,409</div>
                            <div class="product-subtitle">Total</div>
                        </div>
                        <div class="col-8 col-md-3">
                            <a href="/check_out" class="btn btn-success mt-4 px-4 btn-block">
                    Checkout Now
                  </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection



@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/vendor/Input-Spinner-Plugin-Bootstrap-4/src/input-spinner.js"></script>
    <script>
        $(".qty_form").inputSpinner({
            // button text/icons
            decrementButton: "<i class='fa fa-plus-circle text-success fa-lg' aria-hidden='true'></i>",
            incrementButton: "<i class='fa fa-minus-circle text-success fa-lg' aria-hidden='true'></i>",
            buttonsClass: "btn btn-sm btn-rounded",
            autoDelay: 500,
        });
    </script>
    {{-- <script> 
      var locations = new Vue({
        el: "#locations",
        mounted() {
            AOS.init();
            this.getProvincesData();
        },
        data: {
            provinces: null,
            regencies: null,
            provinces_id: null,
            regencies_id: null,
        },
        methods: {
            getProvincesData(){
                var self = this;
                axios.get('{{ route('api-provinces') }}')
                .then(function(response){
                    self.provinces = response.data;
                })
            },
            getRegenciesData(){
                var self = this;
                axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                .then(function(response){
                    self.regencies = response.data;
                })
            },
        },
        watch: {
            provinces_id: function(va, oldval){
                this.regencies_id = null;
                this.getRegenciesData();
            }
        }
      });
    </script>  --}}

@endpush