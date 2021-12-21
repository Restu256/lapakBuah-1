@extends('layouts.admin')

@section('title')
    LapakBuah.com ~ Dashboard Admin
@endsection

@section('content')
    <div class="section-content section-dashboard-home"
            data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Purchassing Product</h2>
                <p class="dashboard-subtitle">Management Purchassing Product</p>
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
                                    <h3>Purchassing Product</h3>
                                    @can('stock-create')
                                    <a class="btn btn-success" href="{{ route('stock.create') }}"> Add Purchase</a>
                                    @endcan
                                </div>
                            </div>
                            <hr>
                            <div class="box-body mt-3">
                                    <table id="crudTable" class="table table-hover scroll-horizontal-vertical w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product Id</th>
                                                <th>First Stock</th>
                                                <th>Product IN</th>
                                                <th>Product Out</th>
                                                <th>Final Stock</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($data as $key => $stock)
                                        <tbody>
                                   <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $stock->product->nama_product }}</td>
                                     <td>{{ $stock->first_stock }}</td>
                                     <td>{{ $stock->products_in }}</td>
                                     <td>{{ $stock->products_out }}</td>
                                     <td>{{ $stock->final_stock }}</td>
                                     <td>{{ $stock->created_at }}</td>
                                     <td>
                                        <!-- <a class="btn btn-info" href="{{ route('category.show',$stock->id) }}">Show</a> -->
                                        <a class="btn btn-primary" href="{{ route('imageproduct.edit',$stock->id) }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ route('imageproduct.destroy',$stock->id) }}">Hapus</a>
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
@endsection
    @push('addon-script')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script>
   var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            responsive: true,
            autoWidth : true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
<!-- <script>
   // AJAX DataTable
   var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            responsive: true,
            autoWidth : true,
            dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'DT_RowIndex', name:'DT_RowIndex'},
                { data: 'products_id', name: 'products_id' },
                { data: 'first_stock', name: 'first_stock' },
                { data: 'products_in', name: 'products_in' },
                { data: 'products_out', name: 'products_out' },
                { data: 'final_stock', name: 'final_stock' },
                { data: 'created_at', name: 'created_at' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
        </script> -->
        @endpush