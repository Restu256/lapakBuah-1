@extends('layouts.admin')


@section('title')
LapakBuah.com ~ Role Management
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Role Management</h2>
                <p class="dashboard-subtitle">Atur hak akses untuk semua user</p>
            </div>
            <div class="dashboard-content">
                @include('pages.role_management.navigasi_roles')
                <div class="row">
                    <div class="col-md-12">
                        <div class="box bg-white rounded shadow-sm p-3">
                            <div class="box-header">
                                <div class="box-title w-100 d-flex flex-row justify-content-between">
                                    <h3>Show User</h3>
                                    @can('route-list')
                                        <a class="btn btn-success" href="{{ route('roles.index') }}"><i class="fa fa-reply" aria-hidden="true"></i> Back</a>
                                    @endcan
                                </div>
                            </div>
                            <hr>
                            <div class="box-body mt-3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            {{ $permission->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



