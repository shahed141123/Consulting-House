@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Filtering Item</h6>
                    <div class="d-inline-flex ms-auto">
                        <a href="{{ route('admin.filtering-item.create') }}">
                            <button type="button" class="btn btn-flat-secondary btn-labeled btn-labeled-start btn-sm">
                                <span class="btn-labeled-icon bg-secondary text-white">
                                    <i class="ph-plus-circle ph-sm"></i>
                                </span>
                                Add
                            </button>
                        </a>
                    </div>
                </div>

                <div class="collapse show">
                    <div class="card-body pt-1">
                        <div class="col-lg-12 p-0">
                            <div class="table-responsive ">
                                <table id="dataTable" class="table table-bordered table-striped table-xl">
                                    <thead>
                                        <tr class="bg-secondary border-secondary text-white text-center">
                                            <th width="5%">#</th>
                                            <th width="15%">Product Name</th>
                                            <th width="5%">Status</th>
                                            <th width="5%">Sort Order</th>
                                            <th width="15%">Attribute Name</th>
                                            <th width="5%">Attribute Value</th>
                                            <th width="5%">Price</th>
                                            <th width="5%">Stock Status</th>
                                            <th width="5%">Quantity</th>
                                            <th width="5%">Material</th>
                                            <th width="5%">Weight</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function product() {
            var table = $('#dataTable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ route('admin.filtering-item.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'product.name',
                        name: 'product.name',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'sort_order',
                        name: 'sort_order',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'attribute_name',
                        name: 'attribute_name',
                    },
                    {
                        data: 'attribute_value',
                        name: 'attribute_value',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'price',
                        name: 'price',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'stock_status',
                        name: 'stock_status',
                        render: function(data, type, row) {
                            return data.replace(/_/g, ' ');
                        }
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'material',
                        name: 'material',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'weight',
                        name: 'weight',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        });
    </script>
@endpush
