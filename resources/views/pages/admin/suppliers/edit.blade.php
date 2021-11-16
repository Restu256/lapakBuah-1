@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Suppliers
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Suppliers</h2>
                <p class="dashboard-subtitle">Catat semua suplier yang menyediakan barang kepada kita</p>
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
                                    Form Edit Suppliers
                                </h3>
                            </div>
                            <div class="card-body p-3">
                                <form action="{{ route('supplier.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="kode_supplier">Kode Supplier</label>
                                        <input type="text" class="form-control" name="kode_supplier" id="kode_supplier" value="{{ $data->kode_supplier }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_supplier">Nama Supplier</label>
                                        <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" value="{{ $data->nama_supplier }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kontak_supplier">Kontak Supplier</label>
                                        <input type="text" class="form-control" name="kontak_supplier" id="kontak_supplier" value="{{ $data->kontak_supplier }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_supplier">Email Supplier</label>
                                        <input type="email" class="form-control" name="email_supplier" id="email_supplier" value="{{ $data->email_supplier }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ $data->keterangan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_supplier">Alamat Supplier</label>
                                        <textarea name="alamat_supplier" id="alamat_supplier" cols="30" rows="7" class="form-control">{{ $data->alamat_supplier }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Simpan" class="btn btn-primary">
                                        <a href="{{ route('supplier.index') }}" class="btn btn-dark"><i class="fa fa-reply" aria-hidden="true"> Back</i></a>
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