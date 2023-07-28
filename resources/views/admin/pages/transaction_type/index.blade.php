@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Types</span>
                    <span class="breadcrumb-item active">Transaction Types</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content">

        <!-- Javascript behaviour -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card rounded-0">
                    <div class="card-body">
                        {{-- <div class="d-flex align-items-center table_header">

                        <div class="text-success table_header_content">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#transaction_typeAddModal"
                                class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                <span class="btn-labeled-icon bg-success text-white">
                                    <i class="ph-plus-circle ph-sm"></i>
                                </span>
                                Add
                            </button>
                            <div class="text-center table_header_text">
                                <h5 class="ms-1 mb-0">Transaction  Types Table</h5>
                            </div>
                        </div>

                    </div> --}}
                        <div class="d-flex align-items-center table_header">
                            {{-- Add Details Start --}}
                            <div class="text-success table_header_content">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#transaction_typeAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                                <div class="text-center table_header_text">
                                    <h5 class="ms-1 mb-0">Transaction Types Table</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                        </div>
                        <table class="table transaction_type_table table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="30%">Prfile Type</th>
                                    <th width="30%">Name</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($transaction_types)
                                    @foreach ($transaction_types as $transaction_type)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaction_type->getProfileTypeName() }}</td>
                                            <td>{{ $transaction_type->name }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#transaction_typeEditModal{{ $transaction_type->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>

                                                    <a href="{{ route('admin.transaction_type.destroy', $transaction_type->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Transaction  Type -->
        <div id="transaction_typeAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Transaction Type</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.transaction_type.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Profile Type Name <span
                                                class="text-danger">*</span></label>
                                        <select name="profile_type_id" data-placeholder="Select a Profile Name...."
                                            class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                            <option></option>
                                            @foreach ($profile_types as $profile_type)
                                                <option value="{{ $profile_type->id }}">
                                                    {{ $profile_type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Group Category Name</label>
                                        <select name="category_id" class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                            <option value="" selected>Select a Category Name....</option>
                                            @foreach ($client_type_categories as $client_type_categorie)
                                                <option value="{{ $client_type_categorie->id }}">
                                                    {{ $client_type_categorie->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-2">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Transaction Type Name"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" data-placeholder="Select Status..."
                                        class="form-control form-control-sm select"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
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
        <!-- Disabled keyboard interaction add modal for transaction_type -->
        <!-- /Edit Modal -->
        @foreach ($transaction_types as $transaction_type)
            <div id="transaction_typeEditModal{{ $transaction_type->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Your Transaction Type</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.transaction_type.update', $transaction_type->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Profile Type Name</label>
                                            <select name="profile_type_id" data-placeholder="Select a category..."
                                                class="form-control form-control-sm select select-category-add"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                @foreach ($profile_types as $profile_type)
                                                    <option value="{{ $profile_type->id }}" @selected($profile_type->id == $transaction_type->profile_type_id)>
                                                        {{ $profile_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Group Category Name</label>
                                            <select name="category_id" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-container-css-class="select-sm">
                                                <option value="" selected>Select a Category Name....</option>
                                                @foreach ($client_type_categories as $client_type_categorie)
                                                    <option value="{{ $client_type_categorie->id }}"
                                                        @selected($client_type_categorie->id == $transaction_type->category_id)>
                                                        {{ $client_type_categorie->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-2">
                                            <label class="form-label">Name</label>
                                            <input id="name" name="name" value="{{ $transaction_type->name }}"
                                                type="text" class="form-control form-control-sm"
                                                placeholder="Enter Transaction  Type Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Status</label>
                                        <select name="status" data-placeholder="Select Status..."
                                            class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            <option value="active" @selected($transaction_type->status == 'active')>Active</option>
                                            <option value="inactive" @selected($transaction_type->status == 'inactive')>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- /Edit Modal -->

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.transaction_type_table').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                autoWidth: false,
                responsive: true,
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    // width: 100,
                    targets: [0, 1, 2, 3],
                }, ],


            });
        });
    </script>
@endpush
