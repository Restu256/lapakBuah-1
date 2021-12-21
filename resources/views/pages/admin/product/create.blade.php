@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Dashboard Admin
@endsection

@section('content') 
<div class = "section-content section-dashboard-home"
data - aos = "fade-up" > <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Category Product</h2>
        <p class="dashboard-subtitle">Category Product yang akan menjadi icon di tampilan awal</p>
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
                            Form Create Product
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form
                            action="{{ route('product.store') }}"
                            method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_product">Product</label>
                                <input
                                    type="text"
                                    class="form-control @error('nama_product') is-invalid @enderror"
                                    name="nama_product"
                                    id="nama_product"
                                    value="{{ old('nama_product') }}">
                                    @error('nama_product')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($category as $c)
                                        @if(old('category_id') == $c->id)
                                        <option value="{{$c->id}}" selected>{{ $c->name_category }}</option>
                                        @else
                                        <option value="{{$c->id}}">{{ $c->name_category }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('category_id')
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
                                            <!-- <div class="form-group">
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
                                                </div> -->
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
                                                    <label for="description">Description</label>
                                                    <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                                                    <trix-editor input="description"></trix-editor>
                                                    </div>
                                                    
                                                        <div class="form-group">
                                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                                                <a href="{{ route('category.index') }}" class="btn btn-dark">
                                                                    <i class="fa fa-reply" aria-hidden="true">
                                                                        Back</i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endsection @push('addon-script')
                            <script>
                                function previewImage() {
                                    const image = document.querySelector('#image_category');
                                    const imagePreview = document.querySelector('.image-preview');

                                    imgPreview.style.display = 'block';

                                    const oFReader = new FileReader();
                                    OFReader.readAsDataURL(image.files[0]);

                                    oFReader.onload = function (oFREvent) {
                                        imgPreview.src = oFREvent.target.result;
                                    }

                                }
                            </script>
                            @endpush