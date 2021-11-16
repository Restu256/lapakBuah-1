@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Role Management
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Role Management</h2>
                <p class="dashboard-subtitle">Atur hak akses untuk semua user</p>
              </div>
              <div class="dashboard-content">
                @include('pages.role_management.navigasi_roles')
                <div class="row">
                    <div class="col-md-12">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>{{ $message }}</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ $message }}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box bg-white rounded shadow-sm p-3">
                            <div class="box-header">
                                <div class="box-title w-100 d-flex flex-row justify-content-between">
                                    <h3>Roles Management</h3>
                                    @can('role-create')
                                        <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                                    @endcan
                                </div>
                            </div>
                            <hr>
                            <div class="box-body mt-3">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                       <th>No</th>
                                       <th>Name</th>
                                       <th width="280px">Action</th>
                                    </tr>
                                      @foreach ($roles as $key => $role)
                                      <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $role->name }}</td> 
                                          <td>
                                              <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                              @can('role-edit')
                                                  <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                              @endcan
                                              @can('role-delete')
                                                  {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                      {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                  {!! Form::close() !!}
                                              @endcan
                                          </td>
                                      </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    </div>
    {!! $roles->render() !!}
    

@endsection