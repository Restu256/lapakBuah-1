@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Admin
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
              <h2 class="dashboard-title">Purchassing Management Product</h2>
                <p class="dashboard-subtitle">Purchassing Management Product</p>
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
                                    Form Create Product Stock
                                </h3>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{ route('stock.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Product</label>
                                    <select name="products_id" class="form-control">
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
                                        <label for="First Stock">First Stock</label>
                                        <input type="number" class="form-control" name="first_stock" id="first_stock" value="{{ old('first_stock') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Products In">Products In</label>
                                        <input type="number" class="form-control" name="products_in" id="products_in" value="{{ old('products_in') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Products Out">Products Out</label>
                                        <input type="number" class="form-control" name="products_out" id="products_out" value="{{ old('products_out') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="Final Stock">Final Stock</label>
                                        <input type="number" class="form-control" name="final_stock" id="final_stock" value="{{ old('final_stock') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="{{ route('stock.index') }}" class="btn btn-dark"><i class="fa fa-reply" aria-hidden="true"> Back</i></a>
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