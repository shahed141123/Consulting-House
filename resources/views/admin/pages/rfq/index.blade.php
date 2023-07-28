@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All RFQ Table</h6>
                </div>
                <div class="card-body pt-1">
                    <div class="col-lg-12 p-0">
                        <div class="table-responsive ">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="5%">Code</th>
                                        <th width="25%">Custom Product Name</th>
                                        <th width="5%">Qty</th>
                                        <th width="5%">Price</th>
                                        <th width="10%">Tax</th>
                                        <th width="10%">Vat</th>
                                        <th width="10%">User Name</th>
                                        <th width="10%">User Phone</th>
                                        <th width="5%">Rfq Status</th>
                                        <th width="5%">Status</th>
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
    <!-- /javascript behaviour -->
@endsection


@push('scripts')
    <script type="text/javascript">
        $(function product() {
            var table = $('#dataTable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ route('admin.rfq.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'rfq_code',
                        name: 'rfq_code',
                    },
                    {
                        data: 'custom_product_name',
                        name: 'custom_product_name',
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'price',
                        name: 'price',
                    },
                    {
                        data: 'tax',
                        name: 'tax',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'vat',
                        name: 'vat',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'user_name',
                        name: 'user_name',
                    },
                    {
                        data: 'user_phone',
                        name: 'user_phone',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'rfq_status',
                        name: 'rfq_status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'status',
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
