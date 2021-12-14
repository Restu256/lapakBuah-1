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
                                    @php
                                        $totalPrice = 0
                                    @endphp
                                    @forelse ($carts as $cart)
                                        <tr>
                                            <td>
                                                <img src="{{ Storage::url($cart->product->imageproduct->first()->image) }}" alt="" class="cart-image w-100">
                                            </td>
                                            <td>
                                                <div class="product-title text-success">{{ $cart->product->nama_product }}</div>
                                                <div class="product-subtitle">
                                                    <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                                                    Lokasi Gudang
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-title">Rp {{ number_format($cart->product->harga_jual,0,',','. ')  }}</div>
                                                <div class="product-subtitle"><input type="text" value="{{ $cart->product->harga_jual }}"></div>
                                                <div class="product-subtitle">RP</div>
                                            </td>
                                            <td>
                                                <div class="product-title pt-1">
                                                    <input type="number" value="0" min="0" max="100" step="1" data-suffix="" data-prefix="" class="bg-transparent border-top-0 border-right-0 border-left-0 qty_form">
                                                </div>
                                            </td>
                                            <td>
                                                <form action="{{ route('cart-delete', $cart->id ) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        type="submit"
                                                        class="btn btn-remove-cart">
                                                        Remove
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        
                                    @empty
                                        
                                    @endforelse
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
                    <form action="" id="locations" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="address"
                                        name="address"
                                        value="Sentra Duta Cemara"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="provinces_id">Province</label>
                                    <select
                                        name="provinces_id"
                                        id="provinces_id"
                                        class="form-control"
                                        v-if="provinces"
                                        v-model="provinces_id"
                                    >
                                        <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="regencies_id">City</label>
                                    <select
                                        name="regencies_id"
                                        id="regencies_id"
                                        class="form-control"
                                        v-if="regencies"
                                        v-model="regencies_id"
                                    >
                                        <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="districes_id">districes</label>
                                    <select
                                        name="districes_id"
                                        id="districes_id"
                                        class="form-control"
                                        v-if="districes"
                                        v-model="districes_id"
                                    >
                                        <option v-for="dis in districes" :value="dis.id">@{{ dis.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="villages_id">Village</label>
                                    <select
                                        name="villages_id"
                                        id="villages_id"
                                        class="form-control"
                                        v-if="villages"
                                        v-model="villages_id"
                                    >
                                        <option v-for="village in villages" :value="village.id">@{{ village.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="kode_pos">Kode POS</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="kode_pos"
                                        name="kode_pos"
                                        value="42833248"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="country"
                                        name="country"
                                        value="Indonesia"
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Mobile</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone_number"
                                        name="phone_number"
                                        value="+628 2020 11111"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up" data-aos-delay="150">
                            <div class="col-12">
                                <hr />
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
                                <div class="product-subtitle">
                                    Product Insurance
                                </div>
                            </div>
                            <div class="col-4 col-md-2">
                                <div class="product-title">$580</div>
                                <div class="product-subtitle">Ship to Jakarta</div>
                            </div>
                            <div class="col-4 col-md-2">
                                <div class="product-title text-success">
                                Rp {{ number_format($totalPrice,0,',','. ' ?? 0) }}
                                </div>
                                <div class="product-subtitle">Total</div>
                            </div>
                            <div class="col-8 col-md-3">
                                <button
                                    type="submit"
                                    class="btn btn-success mt-4 px-4 btn-block"
                                >
                                    Checkout Now
                                </button>
                            </div>
                        </div>
                    </form>
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
    <script> 
        var locations = new Vue({
          el: "#locations",
          mounted() {
              AOS.init();
              this.getProvincesData();
              this.getDistrictsData();
              this.getRegenciesData();
              this.getVillagesData();
          },
          data: {
              provinces: null,
              regencies: null,
              districes: null,
              villages: null,
              provinces_id: null,
              regencies_id: null,
              districes_id: null,
              villages_id: null,
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
              getDistrictsData(){
                  var self = this;
                  axios.get('{{ url('api/districes') }}/' + self.regencies_id)
                  .then(function(response){
                      self.districes = response.data;
                  })
              },
              getVillagesData(){
                  var self = this;
                  axios.get('{{ url('api/villages') }}/' + self.districes_id)
                  .then(function(response){
                      self.villages = response.data;
                      console.log(response);
                  })
              },
          },
          watch: {
              provinces_id: function(va, oldval){
                  this.regencies_id = null;
                  this.getRegenciesData();
              },
              regencies_id: function(va, oldval){
                  this.districts_id = null;
                  this.getDistrictsData();
              },
              districes_id: function(va, oldval){
                  this.villages_id = null;
                  this.getVillagesData();
              },
          },
        });
      </script>

@endpush