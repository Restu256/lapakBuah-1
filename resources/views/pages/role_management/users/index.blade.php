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
                                    <h3>User List</h3>
                                    {{-- @can('user-create') --}}
                                        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                                    {{-- @endcan --}}
                                </div>
                            </div>
                            <hr>
                            <div class="box-body mt-3">
                                <table class="table table-bordered table-striped">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th width="280px">Action</th>
                                  </tr>
                                  @foreach ($data as $key => $user)
                                   <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $user->name }}</td>
                                     <td>{{ $user->email }}</td>
                                     <td>
                                       @if(!empty($user->getRoleNames()))
                                         @foreach($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                         @endforeach
                                       @endif
                                     </td>
                                     <td>
                                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                         {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                         {!! Form::close() !!}
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
    {!! $data->render() !!}
@endsection