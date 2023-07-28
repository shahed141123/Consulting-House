@extends('admin.layouts.app')
@section('content')
    <style>
        @media only screen and (max-width: 576px) {
            .table_header_text {
                margin-left: 4.6rem;
            }
        }
    </style>
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Types</span>
                    <span class="breadcrumb-item active">Client Type Category</span>
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

                        <div class="d-flex align-items-center table_header">
                            <div class="text-success table_header_content">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#client_type_categoryAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                                <div class="text-center table_header_text">
                                    <h5 class="ms-1 mb-0">Client Type Categorys</h5>
                                </div>
                            </div>
                        </div>
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="30%">Name</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($client_type_categorys)
                                    @foreach ($client_type_categorys as $client_type_category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>


                                            <td>{{ $client_type_category->name }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#client_type_categoryEditModal{{ $client_type_category->id }}"
                                                        class="text-primary edit-btn">
                                                        <i class="ph-pen"></i>
                                                    </a>

                                                    <a href="{{ route('admin.client_type_category.destroy', $client_type_category->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Client Type Category -->
        <div id="client_type_categoryAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Your Client Type Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.client_type_category.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Client Type Category Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Status</label>
                                    <select name="status" data-placeholder="Select Status..."
                                        class="form-control form-control-sm select" data-minimum-results-for-search="Infinity"
                                        data-container-css-class="select-sm">
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
        <!-- Disabled keyboard interaction add modal for client_type_category -->

        <!-- /Edit Modal -->
        @foreach ($client_type_categorys as $client_type_category)
            <div id="client_type_categoryEditModal{{ $client_type_category->id }}" class="modal fade"
                data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog  modal-dialog-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Your Client Type Category
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.client_type_category.update', $client_type_category->id) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-2">
                                            <label class="form-label">Name</label>
                                            <input id="name" name="name"
                                                value="{{ $client_type_category->name }}" type="text"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Client Type Category Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Status</label>
                                        <select name="status" data-placeholder="Select Status..."
                                            class="form-control form-control-sm select" data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            <option value="active" @selected($client_type_category->status == 'active')>Active</option>
                                            <option value="inactive" @selected($client_type_category->status == 'inactive')>Inactive</option>
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
        $('.data-table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0, 1, 2],
            }, ],

        });
    </script>
@endpush
