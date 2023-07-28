@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Coupon Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#couponAddModal"
                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-plus-circle ph-sm"></i>
                        </span>
                        Add
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="10%">Code</th>
                                    <th width="10%">Type</th>
                                    <th width="10%">Value</th>
                                    <th width="15%">Max Uses</th>
                                    <th width="15%">Valid From</th>
                                    <th width="15%">Valid Until</th>
                                    <th width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
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
    <!-- Disabled keyboard interaction add modal for Coupon -->
    <div id="couponAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.coupon.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Coupon Code</label>
                                    <input name="code" value="" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Coupon Code" maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Value</label>
                                    <input id="value" name="value" value="" type="text"
                                        class="form-control form-control-sm decimalInput" placeholder="Enter Coupon Value"
                                        maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Type</label>
                                    <select class="form-control select" data-placeholder=" Select Type"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm"
                                        name="type">
                                        <option></option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percentage">Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Max Uses</label>
                                    <input id="max_uses" name="max_uses" type="text"
                                        class="form-control form-control-sm maxUsers" placeholder="Enter Max Uses">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Valid From</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="date" class="form-control form-control-sm" name="valid_from"
                                            value="03/18/2013" placeholder="Enter Valid From">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Valid Until</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="date" class="form-control form-control-sm" name="valid_until"
                                            value="03/18/2013" placeholder="Enter Valid Until">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Description</label>
                                    <input name="description" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Coupon Description" maxlength="255">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm select" name="status"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                        <option value="active">Active</option>
                                        <option value="expired">Expired</option>
                                        <option value="used">Used</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction Edit modal for Coupon -->

    <!-- /javascript behaviour -->
    <div id="couponEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your Coupon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Coupon
                                        Code</label>
                                    <input name="code" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Coupon Code"
                                        maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Value</label>
                                    <input id="value" name="value" value="" type="text"
                                        class="form-control form-control-sm decimalInput" placeholder="Enter Coupon Value"
                                        maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Type</label>
                                    <select class="form-control select" data-placeholder=" Select Type"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm"
                                        name="type">
                                        <option></option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percentage">Percentage
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Max Uses</label>
                                    <input id="max_uses" name="max_uses" type="text"
                                        class="form-control form-control-sm maxUsers" placeholder="Enter Max Uses">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Valid From</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm" name="valid_from"
                                            value="03/18/2013" placeholder="Enter Valid From">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Valid
                                        Until</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm" name="valid_until"
                                            value="03/18/2013" placeholder="Enter Valid Until">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Description</label>
                                    <input name="description" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Coupon Description" maxlength="255">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm select" name="status"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                        <option value="active">Active</option>
                                        <option value="expired">Expired
                                        </option>
                                        <option value="used">Used</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($coupons as $coupon)
        <div id="couponEditModal{{ $coupon->id }}" class="modal fade" data-bs-keyboard="false"
            data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Your Coupon</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.coupon.update', $coupon->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Coupon
                                            Code</label>
                                        <input name="code" value="{{ $coupon->code }}" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Coupon Code"
                                            maxlength="50">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Value</label>
                                        <input id="value" name="value" value="{{ $coupon->value }}" type="text"
                                            class="form-control form-control-sm decimalInput"
                                            placeholder="Enter Coupon Value" maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Type</label>
                                        <select class="form-control select" data-placeholder=" Select Type"
                                            data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm" name="type">
                                            <option></option>
                                            <option value="fixed" @selected($coupon->type == 'fixed')>Fixed</option>
                                            <option value="percentage" @selected($coupon->type == 'percentage')>Percentage
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Max Uses</label>
                                        <input id="max_uses" name="max_uses" value="{{ $coupon->max_uses }}"
                                            type="text" class="form-control form-control-sm maxUsers"
                                            placeholder="Enter Max Uses">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Valid From</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                                            <input type="date" class="form-control form-control-sm" name="valid_from"
                                                value="{{ $coupon->valid_from }}" placeholder="Enter Valid From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Valid
                                            Until</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="ph-calendar"></i></span>
                                            <input type="date" class="form-control form-control-sm" name="valid_until"
                                                value="{{ $coupon->valid_until }}" placeholder="Enter Valid Until">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Description</label>
                                        <input name="description" type="text" class="form-control form-control-sm"
                                            placeholder="Enter Coupon Description" maxlength="255"
                                            value="{{ $coupon->description }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
                                        <select class="form-control form-control-sm select" name="status"
                                            data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option value="active" @selected($coupon->status == 'active')>Active</option>
                                            <option value="expired" @selected($coupon->status == 'expired')>Expired
                                            </option>
                                            <option value="used" @selected($coupon->status == 'used')>Used</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
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
                ajax: "{{ route('admin.coupon.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'code',
                        name: 'code',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'type',
                        name: 'type',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'value',
                        name: 'value',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'max_uses',
                        name: 'max_uses',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'valid_from',
                        name: 'valid_from'
                    },
                    {
                        data: 'valid_until',
                        name: 'valid_until'
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
