@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Dashboard Admin
@endsection

@section('content') 
<div class = "section-content section-dashboard-home"
data - aos = "fade-up"> 
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Voucher</h2>
        <p class="dashboard-subtitle">List Voucher</p>
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
                            Form Create Voucher
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form
                            action="{{ route('voucher.store') }}"
                            method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="voucher">Voucher</label>
                                <input
                                    type="text"
                                    class="form-control @error('voucher') is-invalid @enderror"
                                    name="voucher"
                                    id="voucher"
                                    value="{{ old('voucher') }}">
                                    @error('voucher')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="masa_berlaku">Berlaku Sampai</label>
                                <input
                                    type="date"
                                    class="form-control @error('masa_berlaku') is-invalid @enderror"
                                    name="masa_berlaku"
                                    id="masa_berlaku"
                                    value="{{ old('masa_berlaku') }}">
                                    @error('masa_berlaku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
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