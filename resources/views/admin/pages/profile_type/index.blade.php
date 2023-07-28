@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Types</span>
                    <span class="breadcrumb-item active">Profile Types</span>
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
                            <button type="button" data-bs-toggle="modal" data-bs-target="#profile_typeAddModal"
                                class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                <span class="btn-labeled-icon bg-success text-white">
                                    <i class="ph-plus-circle ph-sm"></i>
                                </span>
                                Add
                            </button>
                            <div class="text-center table_header_text">
                                <h5 class="ms-1 mb-0">Profile Types Table</h5>
                            </div>
                        </div>

                    </div> --}}
                        <div class="d-flex align-items-center table_header">
                            {{-- Add Details Start --}}
                            <div class="text-success table_header_content">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#profile_typeAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                                <div class="text-center table_header_text">
                                    <h5 class="ms-1 mb-0">Profile Types Table</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                        </div>
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="10%">Image</th>
                                    <th width="30%">Name</th>
                                    <th width="50%">Description</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($profile_types)
                                    @foreach ($profile_types as $profile_type)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src=" {{ isset($profile_type->image) && Str::startsWith($profile_type->image, 'https:') ? $profile_type->image : (isset($profile_type->image) ? asset('storage/requestImg/' . $profile_type->image) : url('admin/assets/images/demo/profile_types/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>

                                            <td>{{ $profile_type->name }}</td>
                                            <td> {{ Str::limit($profile_type->description, 36, '.......') }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#profile_typeEditModal{{ $profile_type->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>

                                                    <a href="{{ route('admin.profile_type.destroy', $profile_type->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Profile Type -->
        <div id="profile_typeAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Your Profile Type</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.profile_type.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name</label>
                                        <input id="name" name="name" value="{{ old('name') }}" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Profile Type Name"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row gx-2">
                                        <div class="col-lg-9">
                                            <div class="mb-2">
                                                <label class="form-label">Image</label>
                                                <input id="image" name="image" type="file"
                                                    class="form-control form-control-sm"
                                                    placeholder="Enter Profile Type Logo">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mt-3 pt-1">
                                            <div class="mb-2">
                                                <a href="#">
                                                    <img id="showImage"
                                                        src="{{ asset('admin/assets/images/no_image.jpg') }}"
                                                        class="rounded img-thumbnail" width="45px" style="height:38px;"
                                                        alt="">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-1">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ old('description') }}</textarea>
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
        <!-- Disabled keyboard interaction add modal for profile_type -->
        <!-- /Edit Modal -->
        @foreach ($profile_types as $profile_type)
            <div id="profile_typeEditModal{{ $profile_type->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Your Profile Type</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.profile_type.update', $profile_type->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Name</label>
                                            <input id="name" name="name" value="{{ $profile_type->name }}"
                                                type="text" class="form-control form-control-sm"
                                                placeholder="Enter Profile Type Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row gx-2">
                                            <div class="col-lg-9">
                                                <div class="mb-2">
                                                    <label class="form-label">Image</label>
                                                    <input id="image" name="image" type="file"
                                                        value="{{ $profile_type->image }}"
                                                        class="form-control form-control-sm"
                                                        placeholder="Enter Profile Type Logo">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mt-3 pt-1">
                                                <div class="mb-2">
                                                    <a href="#">
                                                        <img id="preview-image"
                                                            src="{{ file_exists(public_path('storage/requestImg/' . $profile_type->image))
                                                                ? asset('storage/requestImg/' . $profile_type->image)
                                                                : asset('admin/assets/images/no_image.jpg') }}"
                                                            class="rounded img-thumbnail" width="45px"
                                                            style="height: 38px;" alt="">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="mb-1">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">Status</label>
                                        <select name="status" data-placeholder="Select Status..."
                                            class="form-control form-control-sm select" data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            <option value="active" @selected($profile_type->status == 'active')>Active</option>
                                            <option value="inactive" @selected($profile_type->status == 'inactive')>Inactive</option>
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
                width: 100,
                targets: [1, 4],
            }, ],


        });
    </script>
@endpush
