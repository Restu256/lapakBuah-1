@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Dashboard Admin
@endsection

@section('content') 
<div class = "section-content section-dashboard-home"
data - aos = "fade-up"> 
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Bank Account</h2>
        <p class="dashboard-subtitle">List Bank Account</p>
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
                            Form Create Bank Account
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form
                            action="{{ route('bank.store') }}"
                            method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_bank">Nama Bank</label>
                                <input
                                    type="text"
                                    class="form-control @error('nama_bank') is-invalid @enderror"
                                    name="nama_bank"
                                    id="nama_bank"
                                    value="{{ old('nama_bank') }}">
                                    @error('nama_bank')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="no_rekening">Nomor Rekening</label>
                                <input
                                    type="text"
                                    class="form-control @error('no_rekening') is-invalid @enderror"
                                    name="no_rekening"
                                    id="no_rekening"
                                    value="{{ old('no_rekening') }}">
                                    @error('no_rekening')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="pemilik_rekening">Pemilik Rekening</label>
                                <input
                                    type="text"
                                    class="form-control @error('pemilik_rekening') is-invalid @enderror"
                                    name="pemilik_rekening"
                                    id="pemilik_rekening"
                                    value="{{ old('pemilik_rekening') }}">
                                    @error('pemilik_rekening')
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