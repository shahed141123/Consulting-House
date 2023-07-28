@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Legal Entity Types</span>
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
            <div class="col-lg-8 offset-2">
                <div class="container">
                    <div class="row d-flex justify-content-between bg-white pt-2">
                        <div class="col-lg-6">
                            <div class="text-success">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#entity_type_add"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-end form_title">
                                <h5 class="ms-1 mb-0 text-uppercase text-secondary">Entity Types</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 border-0 shadow-none">
                            <div class="card-body p-0">
                                <table
                                    class="entity_table table datatable-responsive table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="bg-secondary border-secondary text-white">
                                            <th width="5%">#</th>
                                            <th width="40%">Profile Type Name</th>
                                            <th width="40%">Name</th>
                                            <th width="10%">Status</th>
                                            <th class="text-center" width="5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entity_types as $entity_type)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $entity_type->getProfileTypeName() }}</td>
                                                <td>{{ $entity_type->name }}</td>
                                                <td>
                                                    @if ($entity_type->status == 'active')
                                                        <span class="badge bg-success">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">In Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#entity_typeEdit{{ $entity_type->id }}"
                                                            class="text-primary">
                                                            <i class="ph-pen"></i>
                                                        </a>
                                                        <a href="{{ route('admin.entity_type.index') }}"
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

        </div>

        <!-- Disabled keyboard interaction add modal for Entity -->
        <div id="entity_type_add" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                        <h6 class="modal-title">Add Entity Type</h6>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.entity_type.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Profile Type Name</label>
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
                                <div class="col-lg-8">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm" placeholder="Enter  Name" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Status</label>
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
                            <div class="modal-footer p-0 m-0 border-0">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Disabled keyboard interaction add modal for Entity -->
        <!-- /Edit Modal -->
        @foreach ($entity_types as $entity_type)
            <div id="entity_typeEdit{{ $entity_type->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                            <h6 class="modal-title">Edit Entity Type</h6>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Profile Type Name</label>
                                            <select name="profile_type_id" data-placeholder="Select a category..."
                                                class="form-control form-control-sm select select-category-add"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                @foreach ($profile_types as $profile_type)
                                                    <option value="{{ $profile_type->id }}" @selected($profile_type->id == $entity_type->profile_type_id)>
                                                        {{ $profile_type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-2">
                                            <label class="form-label">Name</label>
                                            <input id="name" name="name" type="text"
                                                value="{{ $entity_type->name }}" class="form-control form-control-sm"
                                                placeholder="Enter  Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">Status</label>
                                            <select name="status" data-placeholder="Select Status..."
                                                class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                <option value="active" @selected($entity_type->status == 'active')>Active</option>
                                                <option value="inactive" @selected($entity_type->status == 'inactive')>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer p-0 m-0 border-0">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
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
        $('.entity_table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0, 1, 2, 3, 4],
            }, ],
        });
    </script>
@endpush
