@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Pre Booking</h6>
                    <div class="d-inline-flex ms-auto">
                        <a href="{{ route('admin.pre-booking.create') }}" type="button"
                            class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                            <span class="btn-labeled-icon bg-success text-white">
                                <i class="ph-plus-circle ph-sm"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="5%">P Name</th>
                                        <th width="40%">User Name</th>
                                        <th width="5%">Booking Date </th>
                                        <th width="5%">Booking Time </th>
                                        <th width="5%">Quantity</th>
                                        <th width="5%">Total Amount</th>
                                        <th width="5%">PM Name</th>
                                        <th width="10%">Status</th>
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
                serverSide: true,
                ajax: "{{ route('admin.pre-booking.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'product.name',
                        name: 'product.name',
                    },
                    {
                        data: 'user.name',
                        name: 'user.name',
                    },

                    {
                        data: 'booking_date',
                        name: 'booking_date',
                    },
                    {
                        data: 'booking_time',
                        name: 'booking_time',
                    },
                    {
                        data: 'quantity',
                        name: 'quantity',
                    },
                    {
                        data: 'total_amount',
                        name: 'total_amount',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'status',
                        name: 'status',
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
