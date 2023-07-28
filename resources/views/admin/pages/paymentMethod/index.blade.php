@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Payment Method Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#paymentMethodAddModal"
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
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="5%">Image</th>
                                    <th width="10%">Method</th>
                                    <th width="25%">Account Number</th>
                                    <th width="25%">Account Holder Name</th>
                                    <th width="25%">Bank Name</th>
                                    <th width="10%">Status</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($paymentMethods)
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src=" {{ isset($paymentMethod->image) && Str::startsWith($paymentMethod->image, 'https:') ? $paymentMethod->image : (isset($paymentMethod->image) ? asset('storage/requestImg/' . $paymentMethod->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>

                                            <td>{{ $paymentMethod->method }}</td>
                                            <td>{{ $paymentMethod->account_number }}</td>
                                            <td>{{ $paymentMethod->account_holder_name }}</td>
                                            <td>{{ $paymentMethod->bank_name }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ $paymentMethod->status === 'active' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $paymentMethod->status }}
                                                </span>
                                            </td>

                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#paymentMethodEditModal{{ $paymentMethod->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <div id="paymentMethodEditModal{{ $paymentMethod->id }}"
                                                        class="modal fade paymentMethodEditModal" data-bs-keyboard="false"
                                                        data-bs-backdrop="static" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Your Payment Method</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <form
                                                                    action="{{ route('admin.payment-method.update', $paymentMethod->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Method </label>
                                                                            <input id="method" name="method"
                                                                                value="{{ $paymentMethod->method }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Method  Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Account Number
                                                                            </label>
                                                                            <input id="account_number" name="account_number"
                                                                                value="{{ $paymentMethod->account_number }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Account Number"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Account Holder
                                                                                Name</label>
                                                                            <input id="account_holder_name"
                                                                                name="account_holder_name"
                                                                                value="{{ $paymentMethod->account_holder_name }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Account Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Account Address
                                                                            </label>
                                                                            <input id="account_address"
                                                                                name="account_address"
                                                                                value="{{ $paymentMethod->account_address }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Account Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bank Name </label>
                                                                            <input id="bank_name" name="bank_name"
                                                                                value="{{ $paymentMethod->bank_name }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Bank Name "
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bank Branch Name
                                                                            </label>
                                                                            <input id="bank_branch_name"
                                                                                name="bank_branch_name"
                                                                                value="{{ $paymentMethod->bank_branch_name }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Bank Branch Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bank Routing </label>
                                                                            <input id="bank_routing" name="bank_routing"
                                                                                value="{{ $paymentMethod->bank_routing }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Bank Routing  Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <label class="form-label">Status <span
                                                                                    class="text-danger">*</span></label>
                                                                            <select class="form-control select"
                                                                                data-minimum-results-for-search="Infinity"
                                                                                data-placeholder="Select a Status..."
                                                                                name="status">
                                                                                <option></option>
                                                                                <option @selected($paymentMethod->status == 'active')
                                                                                    value="active">Active</option>
                                                                                <option @selected($paymentMethod->status == 'inactive')
                                                                                    value="inactive">Inactive</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="row d-flex align-items-center">
                                                                            <div class="col-lg-11">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label">Image</label>
                                                                                    <input id="image" name="image"
                                                                                        type="file"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder="Enter Brand Logo">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-1 mt-4">
                                                                                <div class="mb-3">
                                                                                    <a href="#">
                                                                                        <img id="showImage"
                                                                                            src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                                                                            class="rounded img-thumbnail"
                                                                                            width="45px" height="45px"
                                                                                            alt="">
                                                                                    </a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">API Key </label>
                                                                            <input id="api_key" name="api_key"
                                                                                value="{{ $paymentMethod->api_key }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter API Key "
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Minimum Amount
                                                                            </label>
                                                                            <input id="minimum_amount"
                                                                                name="minimum_amount"
                                                                                value="{{ $paymentMethod->minimum_amount }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Minimum Amount "
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Maximum Amount
                                                                            </label>
                                                                            <input id="maximum_amount"
                                                                                name="maximum_amount"
                                                                                value="{{ $paymentMethod->maximum_amount }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Maximum Amount "
                                                                                maxlength="100">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Description</label>
                                                                            <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ $paymentMethod->description }}</textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-link"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary ">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('admin.payment-method.destroy', $paymentMethod->id) }}"
                                                        class="text-danger mx-2 delete">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Payment Method -->
    <div id="paymentMethodAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your Payment Method</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin.payment-method.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Method </label>
                            <input id="name" name="method" value="{{ old('method') }}" type="text"
                                class="form-control form-control-sm" placeholder="Enter Method Name" maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Number </label>
                            <input id="name" name="account_number" value="{{ old('account_number') }}"
                                type="text" class="form-control form-control-sm" placeholder="Enter Account Number "
                                maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Holder Name</label>
                            <input id="name" name="account_holder_name" value="{{ old('account_holder_name') }}"
                                type="text" class="form-control form-control-sm"
                                placeholder="Enter Account Holder Name" maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Address </label>
                            <input id="name" name="account_address" value="{{ old('account_address') }}"
                                type="text" class="form-control form-control-sm" placeholder="Enter Account Address"
                                maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Name </label>
                            <input id="name" name="bank_name" value="{{ old('bank_name') }}" type="text"
                                class="form-control form-control-sm" placeholder="Enter Bank Name" maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Branch Name </label>
                            <input id="name" name="bank_branch_name" value="{{ old('bank_branch_name') }}"
                                type="text" class="form-control form-control-sm" placeholder="Enter Bank Branch Name"
                                maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Routing </label>
                            <input id="name" name="bank_routing" value="{{ old('bank_routing') }}" type="text"
                                class="form-control form-control-sm" placeholder="Enter Bank Routing Name"
                                maxlength="100">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-control select" data-minimum-results-for-search="Infinity"
                                data-placeholder="Select a Status..." name="status">
                                <option></option>
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-11">
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input id="image" name="image" type="file"
                                        class="form-control form-control-sm" placeholder="Enter Brand Logo">
                                </div>
                            </div>
                            <div class="col-lg-1 mt-4">
                                <div class="mb-3">
                                    <a href="#">
                                        <img id="showImage" src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                            class="rounded img-thumbnail" width="45px" height="45px" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">API Key </label>
                            <input id="name" name="api_key" value="{{ old('api_key') }}" type="text"
                                class="form-control form-control-sm" placeholder="Enter Brand Name" maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Minimum Amount </label>
                            <input id="name" name="minimum_amount" value="{{ old('minimum_amount') }}"
                                type="text" class="form-control form-control-sm" placeholder="Enter Brand Name"
                                maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Maximum Amount </label>
                            <input id="name" name="maximum_amount" value="{{ old('maximum_amount') }}"
                                type="text" class="form-control form-control-sm" placeholder="Enter Brand Name"
                                maxlength="100">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Payment Method -->
    <!-- /javascript behaviour -->
@endsection

@push('scripts')
    <script>
        $('.data-table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [1, 7],
            }, ],
        });
    </script>
@endpush
