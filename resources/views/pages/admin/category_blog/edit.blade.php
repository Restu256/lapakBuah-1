@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Edit Category Blog
@endsection

@section('content') 
<div class = "section-content section-dashboard-home" data - aos = "fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Edit Category Blog</h2>
        <p class="dashboard-subtitle">Atur hak akses untuk semua user</p>
    </div>
    <div class="dashboard-content">
    {{-- @include('pages.role_management.navigasi_roles') --}}
        <div class="row">
            <div class="col-md-12">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>
                    There were some problems with your input.<br>
                        <br>
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
                        <div class="box bg-white rounded shadow-sm p-3">
                            <div class="box-header">
                                <div class="box-title w-100 d-flex flex-row justify-content-between">
                                    <h3>Update Category</h3>
                                    {{-- @can('category-list') --}}
                                    <a class="btn btn-success" href="{{ route('category.index') }}">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        Back</a>
                                    {{-- @endcan --}}
                                </div>
                            </div>
                            <hr>
                                <div class="box-body mt-3">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <form
                                                action="{{ route('category_blog.update', $category_blog->id) }}"
                                                method="POST"
                                                enctype="multipart/form-data">
                                                @csrf @method('PUT')
                                                <div class="form-group">
                                                    <label class="font-weight-bold">Category</label>
                                                    <input
                                                        type="text"
                                                        class="form-control @error('category') is-invalid @enderror"
                                                        name="category"
                                                        value="{{ old('category', $category_blog->category) }}"
                                                        placeholder="Masukkan Judul Blog">

                                                        <!-- error message untuk category -->
                                                        @error('category')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="hidden" name="oldImage" value="{{ $category_blog->image }}">
                                                    @if($category_blog->image)
                                                    <img src="{{ asset('storage/'. $category_blog->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                    @else
                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                    @endif
                                                        <input
                                                            class="form-control @error('image') is-valid @enderror"
                                                            type="file"
                                                            name="image"
                                                            id="image"
                                                            onchange="previewImage()">
                                                            @error('image')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                                        </form>
                                                    </div>
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
                                const image = document.querySelector('#image');
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