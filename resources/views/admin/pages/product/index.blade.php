@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Product</h6>
                    <div class="d-inline-flex ms-auto">
                        <a href="{{ route('admin.product.create') }}" type="button"
                            class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                            <span class="btn-labeled-icon bg-success text-white">
                                <i class="ph-plus-circle ph-sm"></i>
                            </span>
                            Add
                        </a>
                        {{-- multiDeleteLinkUrl="{{ route('ad.productMultiDelete') }}" --}}
                        <button class="btn btn-sm btn-flat-danger" id="multi-delete" formId="dataTable">Delete
                            Selected Items</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        {{-- <th width="5%"><input id="select-all-checkbox" type="checkbox"
                                                        class="form-check-input">
                                                </th> --}}
                                        <th width="5%">#</th>
                                        <th width="5%">Image</th>
                                        <th width="40%">Name</th>
                                        <th width="5%">Price </th>
                                        <th width="5%">Quantity </th>
                                        <th width="5%">SKU</th>
                                        <th width="5%">PC</th>
                                        <th width="5%">MFC</th>
                                        <th width="5%">Discount</th>
                                        <th width="5%">Type</th>
                                        <th width="10%">Status</th>
                                        <th width="5%">Featured</th>
                                        <th class="text-center" width="5%">Action</th>
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
@endsection


@push('scripts')
    <script type="text/javascript">
        $(function product() {
            var table = $('#dataTable').DataTable({
                processing: false,
                // searching: true,
                // Paginate: true,
                // paging: true,
                // ordering: true,
                // info: true,
                serverSide: true,
                ajax: "{{ route('admin.product.index') }}",
                columns: [
                    // {
                    //     data: 'checkbox',
                    //     name: 'checkbox',
                    //     orderable: false,
                    //     searchable: false,
                    //     exportable: false,
                    //     printable: true,

                    // },
                    {
                        orderable: false,
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        orderable: false,
                        searchable: false,
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta) {
                            const imageSource = data ? `{{ asset('storage/requestImg/${data}') }}` :
                                `https://static.thenounproject.com/png/1554489-200.png`;
                            return `<span><img src="${imageSource}" height="40"></span>`;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'sku',
                        name: 'sku'
                    },
                    {
                        data: 'product_code',
                        name: 'product_code'
                    },
                    {
                        data: 'manufacturer_code',
                        name: 'manufacturer_code'
                    },
                    {
                        data: 'is_discount',
                        name: 'is_discount'
                    },
                    {
                        data: 'type',
                        name: 'type'
                    },
                    {
                        data: 'is_status',
                        name: 'is_status'
                    },
                    {
                        data: 'is_featured',
                        name: 'is_featured'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],

            });

            $('#select-all-checkbox').on('click', function() {
                var rows = table.rows({
                    'search': 'applied'
                }).nodes();
                $('input[type="checkbox"]', rows).prop('checked', this.checked);
            });
            $('#dataTable tbody').on('change', 'input[type="checkbox"]', function() {
                if (!this.checked) {
                    if (el && el.checked && ('indeterminate' in el)) {
                        el.indeterminate = true;
                    }
                }
            });
        });
    </script>
@endpush
