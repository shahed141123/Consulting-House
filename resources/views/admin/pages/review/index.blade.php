@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card col-lg-12">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Review Table</h6>
                <div class="d-inline-flex ms-auto">
                    <a class="text-body" data-card-action="collapse">
                        <i class="ph-caret-down"></i>
                    </a>
                    <a class="text-body mx-2" data-card-action="reload">
                        <i class="ph-arrows-clockwise"></i>
                    </a>
                </div>
            </div>
            <div class="collapse show">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="30%">Product Name</th>
                                        <th width="30%">Client Name</th>
                                        <th width="20%">Rating</th>
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
                ajax: "{{ route('admin.review.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name',
                    },
                    {
                        data: 'product.name',
                        name: 'product.name',
                    },
                    {
                        data: 'rating',
                        name: 'rating',
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
