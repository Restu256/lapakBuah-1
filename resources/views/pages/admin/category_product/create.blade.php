@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Admin
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card header p-3">
                                <h3>
                                    Form Create Category
                                </h3>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                        <label for="image_category">Image</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5 w-50">
                                        <input class="form-control @error('image_category') is-valid @enderror" type="file" name="image_category" id="image_category" onchange="previewImage()">
                                        @error('image_category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="name_category">Category</label>
                                        <input type="text" class="form-control" name="name_category" id="name_category" value="{{ old('name_category') }}">
                                        @error('name_category')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="slug">Slug Category</label>
                                        <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
                                    </div> -->
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="{{ route('category.index') }}" class="btn btn-dark"><i class="fa fa-reply" aria-hidden="true"> Back</i></a>
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
        const image = document.querySelector('#image_category');
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