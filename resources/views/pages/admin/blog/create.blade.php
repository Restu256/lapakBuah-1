@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Dashboard Admin
@endsection

@section('content') 
<div class = "section-content section-dashboard-home"
data - aos = "fade-up" > <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Blog</h2>
        <p class="dashboard-subtitle">Blog yang akan menjadi icon di tampilan awal</p>
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
                            Form Create Blog
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form
                            action="{{ route('blog.store') }}"
                            method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul_blog">Judul Blog</label>
                                <input
                                    type="text"
                                    class="form-control @error('judul_blog') is-invalid @enderror"
                                    name="judul_blog"
                                    id="judul_blog"
                                    value="{{ old('judul_blog') }}">
                                    @error('judul_blog')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="category_blog_id" class="form-control">
                                        @foreach ($category_blog as $c)
                                        @if(old('category_blog_id') == $c->id)
                                        <option value="{{$c->id}}" selected>{{ $c->category }}</option>
                                        @else
                                        <option value="{{$c->id}}">{{ $c->category }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('category_blog_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                                <div class="form-group">
                                                    <label for="isi_blog">Description</label>
                                                    @error('isi_blog')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <input id="isi_blog" type="hidden" name="isi_blog" value="{{ old('isi_blog') }}">
                                                    <trix-editor input="isi_blog"></trix-editor>
                                                </div>
                                                    <div class="form-group">
                                                        <label for="tag_blog">Tag</label>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="tag_blog"
                                                            id="tag_blog"
                                                            value="{{ old('tag_blog') }}"></div>
                                                        <div class="form-group">
                                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                                                <a href="{{ route('blog.index') }}" class="btn btn-dark">
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