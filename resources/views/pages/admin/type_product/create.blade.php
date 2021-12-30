@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Admin
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
              <h2 class="dashboard-title">Type Product</h2>
                <p class="dashboard-subtitle">Type Product</p>
              </div>
              <div class="dashboard-content">
                {{-- @include('pages.role_management.navigasi_roles') --}}
                <div class="row">
                    <div class="col-md-12">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card header p-3">
                                <h3>
                                    Form Create Type Product
                                </h3>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{ route('typeproduct.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Product</label>
                                    <select name="product_id" class="form-control">
                                        @foreach ($product as $p)
                                        @if(old('product_id') == $p->id)
                                        <option value="{{$p->id}}" selected>{{ $p->nama_product }}</option>
                                        @else
                                        <option value="{{$p->id}}">{{ $p->nama_product }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="type_products">Type Products</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="type_products"
                                        id="type_products"
                                        value="{{ old('type_products') }}">
                                        @error('type_products')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <label for="satuan">Satuan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="satuan"
                                        id="satuan"
                                        value="{{ old('satuan') }}">
                                        @error('satuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_beli">Harga Beli</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="harga_beli"
                                            id="harga_beli"
                                            value="{{ old('harga_beli') }}">
                                            @error('harga_beli')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_jual">Harga Jual</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                name="harga_jual"
                                                id="harga_jual"
                                                value="{{ old('harga_jual') }}">
                                                @error('harga_jual')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> 
                                            <div class="form-group">
                                                <label for="qty">Quantity</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    name="qty"
                                                    id="qty"
                                                    value="{{ old('qty') }}">
                                                    @error('qty')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                 <div class="form-group">
                                                    <label for="berat">Berat</label>
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        name="berat"
                                                        id="berat"
                                                        value="{{ old('berat') }}">
                                                        @error('berat')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                <label for="diskon">Diskon</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    name="diskon"
                                                    id="diskon"
                                                    value="{{ old('diskon') }}">
                                                    @error('diskon')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="{{ route('typeproduct.index') }}" class="btn btn-dark"><i class="fa fa-reply" aria-hidden="true"> Back</i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('addon-script')
    <script>
        function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
    
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
    
        oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
    
        }
    </script>
    @endpush