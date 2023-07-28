@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Admin</h6>
                    <div class="d-inline-flex ms-auto">
                        <div class="d-flex justify-content-end pb-1">
                            <a href="" data-bs-toggle="modal" data-bs-target="#addAdminModal">
                                <button type="button" class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-1">
                    <div class="col-lg-12 p-0">
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="10%">Image</th>
                                    <th width="40%">Name</th>
                                    <th width="40%">Designation</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img class="rounded-circle"
                                                src=" {{ isset($employee->image) && Str::startsWith($employee->image, 'https:') ? $employee->image : (isset($employee->image) ? asset('storage/requestImg/' . $employee->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                alt="" width="25px" height="25px">
                                        </td>

                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->designation }}</td>
                                        <td>
                                            <div class="d-inline-flex text-center">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#addPermissionModal" class="text-primary me-2">
                                                    <i class="ph ph-key text-secondary"></i>
                                                </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#eddtAdminModal{{ $employee->id }}"
                                                    class="text-primary">
                                                    <i class="ph-pen"></i>
                                                </a>

                                                <a href="{{ route('admin.employee.destroy', $employee->id) }}"
                                                    class="text-danger mx-2 delete">
                                                    <i class="ph-trash"></i>
                                                </a>
                                            </div>
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
    <!-- /javascript behaviour -->
    <!-- Disabled keyboard interaction add modal for Permission -->
    <div id="addPermissionModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Role Permissions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <p class="fw-bold text-info">Roles</p>
                        <div class="row ">
                            <div class="col-lg-3">
                                <input type="checkbox" name="" id="checkboxInput">
                                <label for="checkboxInput">Super Admin</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="" id="checkboxInput">
                                <label for="checkboxInput">Admin</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="" id="checkboxInput">
                                <label for="checkboxInput">Member</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="" id="checkboxInput">
                                <label for="checkboxInput">Others</label>
                            </div>
                        </div>
                        <p class="fw-bold text-info mt-2">Permissions</p>
                        <div class="row bg-light p-2 rounded">
                            <div class="col-lg-4">
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="checkboxInput">
                                    <label for="checkboxInput">superadmin</label>
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
    <!-- Disabled keyboard interaction add modal for Permission -->

    <!-- Disabled keyboard interaction add modal for Admin -->
    <div id="addAdminModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Full Name</label>
                                    <input id="username" name="name" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Full Name"
                                        maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">User Name</label>
                                    <input id="username" name="username" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Full Name"
                                        maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input id="email" name="email" type="email"
                                        class="form-control form-control-sm" placeholder="Enter Email" maxlength="100"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control form-control-sm phoneInput"
                                        placeholder="Enter Your Phone" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Country Name</label>
                                    <select name="country_id" data-placeholder="Select Country Id" id="country_id"
                                        class="form-control form-control-sm select select-admin-add"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm select" data-placeholder="Select Status"
                                        data-minimum-results-for-search="Infinity" name="status" id="is_status"
                                        data-container-css-class="select-sm">
                                        <option> </option>
                                        <option value="active">Active</option>
                                        <option value="inactive">
                                            Inactive
                                        </option>
                                        <option value="suspended">
                                            Suspended</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Image</label>
                                            <input id="image" name="image" type="file"
                                                class="form-control form-control-sm imageInput" placeholder="Enter Image">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-2 mt-4">
                                        <div class="border-1 rounded mx-1 my-1 px-1 py-1 d-none" id="img-preview">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Designation</label>
                                    <input type="text" class="form-control form-control-sm "
                                        placeholder="Enter Designation" id="designation" name="designation"
                                        maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control form-control-sm "
                                        placeholder="Enter Address" id="address" name="address" maxlength="200">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control form-control-sm " placeholder="Enter City"
                                        id="city" name="city">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter Zip Code" id="zip_code" name="zip_code">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-sm password"
                                        placeholder="Enter Password" id="password" name="password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control form-control-sm confirm_password"
                                        placeholder="Enter Confirm Password" id="confirm_password"
                                        name="confirm_password">
                                    <div id="message"></div>
                                </div>
                            </div>
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
    <!-- Disabled keyboard interaction add modal for Admin -->

    <!-- Disabled keyboard interaction Edit modal for Admin -->
    @foreach ($employees as $employee)
        <div id="eddtAdminModal{{ $employee->id }}" class="modal fade text-start eddtAdminModal" data-bs-keyboard="false"
            data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.employee.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Full Name</label>
                                        <input id="username" name="name" value="{{ $employee->name }}"
                                            type="text" class="form-control form-control-sm"
                                            placeholder="Enter Full Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">User Name</label>
                                        <input id="username" name="username" value="{{ $employee->username }}"
                                            type="text" class="form-control form-control-sm"
                                            placeholder="Enter Full Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input id="email" name="email" value="{{ $employee->email }}"
                                            type="email" class="form-control form-control-sm" placeholder="Enter Email"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control form-control-sm phoneInput"
                                            placeholder="Enter Your Phone" id="phone" name="phone"
                                            value="{{ $employee->phone }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Country Name</label>
                                        <select name="country_id" data-placeholder="Select Country Id" id="country_id"
                                            class="form-control form-control-sm select select-admin-edit"
                                            data-container-css-class="select-sm">
                                            <option value=""></option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" @selected($country->id == $employee->country_id)>
                                                    {{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
                                        <select class="form-control form-control-sm select"
                                            data-placeholder="Select Status" data-minimum-results-for-search="Infinity"
                                            name="status" id="is_status" data-container-css-class="select-sm">
                                            <option> </option>
                                            <option value="active" @selected($employee->status == 'active')>Active</option>
                                            <option value="inactive" @selected($employee->status == 'inactive')>
                                                Inactive
                                            </option>
                                            <option value="suspended" @selected($employee->status == 'suspended')>
                                                Suspended</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-lg-12">
                                            <div class="mb-2">
                                                <label class="form-label">Image</label>
                                                <input id="image" name="image" value="{{ $employee->image }}"
                                                    type="file" class="form-control form-control-sm imageInput"
                                                    placeholder="Enter Image">
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-2 mt-4">
                                            <div class="border-1 rounded mx-1 my-1 px-1 py-1 d-none" id="img-preview">
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control form-control-sm "
                                            placeholder="Enter Designation" id="designation" name="designation"
                                            value="{{ $employee->designation }}" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control form-control-sm "
                                            placeholder="Enter Address" id="address" name="address"
                                            value="{{ $employee->address }}" maxlength="200">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control form-control-sm "
                                            placeholder="Enter City" id="city" name="city"
                                            value="{{ $employee->city }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Enter Zip Code" id="zip_code" name="zip_code"
                                            value="{{ $employee->zip_code }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-sm password"
                                            placeholder="Enter Password" id="password" name="password">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control form-control-sm confirm_password"
                                            placeholder="Enter Confirm Password" id="confirm_password"
                                            name="confirm_password">
                                        <div id="message"></div>
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
    <!-- Disabled keyboard interaction add modal for Admin -->
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
                targets: [1, 4],
            }, ],
        });

        $(document).ready(function() {
            $('.phoneInput').on('input', function() {
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9()+-]/g,
                    ''); // Remove non-numeric characters except +, (, ), and -
                $(this).val(numericValue);
            });
        });

        $('#addAdminModal').on('shown.bs.modal', function() {
            $('.select-admin-add').select2({
                dropdownParent: $('#addAdminModal')
            })
        });
        $('.eddtAdminModal').on('shown.bs.modal', function() {
            $('.select-admin-edit').select2({
                dropdownParent: $('.eddtAdminModal')
            })
        });

        $(document).ready(function() {
            $('.confirm_password').on('keyup', function() {
                if ($('.password').val() == $('.confirm_password').val()) {
                    $('#message').html('Passwords match').css('color', 'green');
                } else {
                    $('#message').html('Passwords do not match').css('color', 'red');
                }
            });
        });
    </script>
@endpush
