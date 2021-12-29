@extends('layouts.admin')

@section('title')
LapakBuah.com ~ Dashboard Admin
@endsection

@section('content') 
<div class = "section-content section-dashboard-home"
data - aos = "fade-up"> 
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">List Inventory</h2>
        <p class="dashboard-subtitle">List Inventory</p>
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
                            Form Create List Inventory
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <form
                            action="{{ route('bank.store') }}"
                            method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="warehouse_name">Warehouse</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="warehouse_name"
                                        name="warehouse_name"
                                        value="Sentra Duta Cemara"
                                    />
                                </div>
                            </div>
                            <div class="col-md-8">
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
                            <div class="col-md-6">
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
                                <div class="col-md-12" align="right">
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
        </div>
        @endsection @push('addon-script')
        
        @endpush