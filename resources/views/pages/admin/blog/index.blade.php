@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Product
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Product</h2>
                <p class="dashboard-subtitle">Product yang akan menjadi icon di Halaman utama</p>
              </div>
              <div class="dashboard-content">
                {{-- @include('pages.role_management.navigasi_roles') --}}
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
                                    <h3>List Product</h3>
                                    <!-- @can('supplier-create') -->
                                    <!-- @endcan -->
                                </div>
                                <a class="btn btn-success" href="{{ route('blog.create') }}"> Add Product</a>
                            </div>
                            <hr>
                            <div class="box-body mt-3">
                                    <table class="table table-hover table-responsive scroll-horizontal-vertical w-100" id="crudTable2">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach ($data as $key => $blog)
                                   <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $blog->judul_blog }}</td>
                                     <td>{{ $blog->category->category }}</td>
                                     <td>{{ $blog->tanggal_pembuatan }}</td>
                                     <td>
                                       @if(!empty($blog->getRoleNames()))
                                         @foreach($blog->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                         @endforeach
                                       @endif
                                     </td>
                                     <td>
                                     <a class="btn btn-success" href="{{ route('blog.show',$blog->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ route('blog.destroy',$blog->id) }}">Hapus</a>
                                     </td>
                                   </tr>
                                  @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- @push('addon-script')
<script>
   var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            responsive: true,
            autoWidth : true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                { data: 'nama_product', name: 'nama_product' },
                { data: 'category_id', name: 'name_category' },
                { data: 'satuan', name: 'satuan' },
                { data: 'harga_beli', name: 'harga_beli' },
                { data: 'harga_jual', name: 'harga_jual' },
                { data: 'qty', name: 'qty' },
                { data: 'berat', name: 'berat' },
                { data: 'diskon', name: 'diskon' },
                { data: 'description', name: 'description' },
                { data: 'slug', name: 'slug' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
        </script>
        @endpush -->