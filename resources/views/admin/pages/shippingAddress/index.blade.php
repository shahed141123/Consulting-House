@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Shipping Address Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#ShippingAddressAddModal"
                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-plus-circle ph-sm"></i>
                        </span>
                        Add
                    </button>
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
                                        <th width="15%">User Name</th>
                                        <th width="20%">Address One</th>
                                        <th width="5%">City</th>
                                        <th width="10%">zip Code</th>
                                        <th width="10%">Country</th>
                                        <th width="15%">Phone</th>
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
    <!-- Disabled keyboard interaction add modal for Shipping -->
    <div id="ShippingAddressAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Add Shipping Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">User Name</label>
                                    <select name="user_id" data-placeholder="Select User Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="56">56</option>
                                        <option value="65852">65852</option>
                                        <option value="4585">4585</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">City</label>
                                    <input name="city" value="" type="text" class="form-control form-control-sm"
                                        placeholder="Enter City" maxlength="150">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">State</label>
                                    <input name="state" value="" type="text" class="form-control form-control-sm"
                                        placeholder="Enter State" maxlength="150">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Country</label>
                                    <input name="country" value="" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Country" maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Postal Code</label>
                                        <input name="postal_code" value="" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Postal" maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Phone</label>
                                    <input name="contact_phone" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Phone" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Address Line One</label>
                                        <input name="address_line1" value="" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Address Line One"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Address Line Two</label>
                                    <input name="address_line2" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Address Line Two"
                                        maxlength="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction Edit modal for Shipping -->
    <div id="ShippingEditressEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Edit shipping Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">User Name</label>
                                    <select name="user_id" data-placeholder="Select User Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="56">56</option>
                                        <option value="65852">65852</option>
                                        <option value="4585">4585</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">City</label>
                                    <input name="city" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter City" maxlength="150">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">State</label>
                                    <input name="state" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter State" maxlength="150">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Country</label>
                                    <input name="country" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Country" maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Postal Code</label>
                                        <input name="postal_code" value="" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Postal"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Phone</label>
                                    <input name="contact_phone" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Phone" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Address Line One</label>
                                        <input name="address_line1" value="" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Address Line One"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Address Line Two</label>
                                    <input name="address_line2" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Address Line Two"
                                        maxlength="100">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
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
                ajax: "{{ route('admin.shipping-address.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name',
                    },
                    {
                        data: 'address_line1',
                        name: 'address_line1',
                    },
                    {
                        data: 'city',
                        name: 'city',
                    },
                    {
                        data: 'postal_code',
                        name: 'postal_code',
                    },
                    {
                        data: 'country',
                        name: 'country',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
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
