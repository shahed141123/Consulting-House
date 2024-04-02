@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Industry Management</span>
                    <span class="breadcrumb-item active">Industry Category</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content row">
        <!-- Javascript behaviour -->
        <div class="col-lg-8 offset-2">
            <div class="container">
                <div class="row d-flex justify-content-between bg-white pt-2">
                    <div class="col-lg-6">
                        <div class="text-success">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#industry_add"
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
                            <h5 class="ms-1 mb-0 text-uppercase text-secondary">Industry Watch Category</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow-none">
                        <div class="card-body p-0">
                            <table
                                class="industry_watch_category_table table datatable-responsive table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="8%">#</th>
                                        <th width="12%">Logo</th>
                                        <th width="13%">Image</th>
                                        <th width="42%">Name</th>
                                        <th width="15%">Status</th>
                                        <th class="text-center" width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($industryWatchCategorys as $industryWatchCategory)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src="{{ isset($industryWatchCategory->icon) && Str::startsWith($industryWatchCategory->icon, 'https:') ? $industryWatchCategory->icon : (isset($industryWatchCategory->icon) ? asset('storage/' . $industryWatchCategory->icon) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src="{{ isset($industryWatchCategory->image) && Str::startsWith($industryWatchCategory->image, 'https:') ? $industryWatchCategory->image : (isset($industryWatchCategory->image) ? asset('storage/' . $industryWatchCategory->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>
                                            <td>{{ $industryWatchCategory->name }}</td>
                                            <td>
                                                @if ($industryWatchCategory->status == 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">In Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#industry_edit{{ $industryWatchCategory->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="{{ route('admin.industry-watch-category.destroy', $industryWatchCategory->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Industry -->
        <div id="industry_add" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                        <h6 class="modal-title">Add Your Industy Watch Category</h6>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.industry-watch-category.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Name" maxlength="100"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" data-placeholder="Select Status"
                                        class="form-control-sm multiselect btn btn-sm" id="select6">
                                        <option>Select a Status....</option>
                                        <option value="active"> Active</option>
                                        <option value="inactive"> In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-lg-10">
                                            <div class="mb-3">
                                                <label class="form-label">Icon </label>
                                                <input id="image" name="icon" type="file"
                                                    class="form-control form-control-sm" placeholder="Enter Icon"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#" class="mb-3">
                                                <img id="showImage"
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4zGCi3zopn2o_TNs3JU18b7GjJKEE_ZvW15Vwfjv4sXFIVQROwOAixqUtkwICmNhShbc&usqp=CAU"
                                                    class="border" style="margin-top: 6px !important;" width="44"
                                                    height="36" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-lg-10">
                                            <div class="mb-3">
                                                <label class="form-label">Image </label>
                                                <input id="image1" name="image" type="file"
                                                    class="form-control form-control-sm" placeholder="Enter Image"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="#" class="mb-1">
                                                <img id="showImage1"
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4zGCi3zopn2o_TNs3JU18b7GjJKEE_ZvW15Vwfjv4sXFIVQROwOAixqUtkwICmNhShbc&usqp=CAU"
                                                    class="border" style="margin-top: 6px !important;" width="44"
                                                    height="36" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label class="form-label">Description </label>
                                        <textarea name="description" rows="1" class="form-control" placeholder="Enter Your Description"></textarea>

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
        <!-- Disabled keyboard interaction add modal for Industry -->
        <!-- /Edit Modal -->
        @foreach ($industryWatchCategorys as $industryWatchCategory)
            <div id="industry_edit{{ $industryWatchCategory->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                            <h6 class="modal-title">Edit Your Industy Watch Category</h6>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="{{ route('admin.industry-watch-category.update', $industryWatchCategory->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input id="name" name="name" type="text"
                                                value="{{ $industryWatchCategory->name }}"
                                                class="form-control form-control-sm" placeholder="Enter Name"
                                                maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" data-placeholder="Select Status"
                                            class="form-control-sm multiselect btn btn-sm" id="select6">
                                            <option>Select a Status....</option>
                                            <option value="active" @selected($industryWatchCategory->status == 'active')> Active</option>
                                            <option value="inactive" @selected($industryWatchCategory->status == 'inactive')> In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-lg-10">
                                                <div class="mb-3">
                                                    <label class="form-label">Icon </label>
                                                    <input id="image" name="icon" type="file"
                                                        class="form-control form-control-sm" placeholder="Enter Icon">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="#" class="mb-3">
                                                    <img id="showImage"
                                                        src="{{ isset($industryWatchCategory->icon) && Str::startsWith($industryWatchCategory->icon, 'https:') ? $industryWatchCategory->icon : (isset($industryWatchCategory->icon) ? asset('storage/' . $industryWatchCategory->icon) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                        class="border" style="margin-top: 6px !important;" width="44"
                                                        height="36" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-lg-10">
                                                <div class="mb-3">
                                                    <label class="form-label">Image </label>
                                                    <input id="image1" name="image" type="file"
                                                        class="form-control form-control-sm" placeholder="Enter Image">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="#" class="mb-1">
                                                    <img id="showImage1"
                                                        src="{{ isset($industryWatchCategory->image) && Str::startsWith($industryWatchCategory->image, 'https:') ? $industryWatchCategory->image : (isset($industryWatchCategory->image) ? asset('storage/' . $industryWatchCategory->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                        class="border" style="margin-top: 6px !important;" width="44"
                                                        height="36" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <label class="form-label">Description </label>
                                            <textarea name="description" rows="1" class="form-control" placeholder="Enter Your Description">{{ $industryWatchCategory->description }}</textarea>

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
        @endforeach
        <!-- /Edit Modal -->

    </div>
@endsection

@push('scripts')
    <script>
        $('.industry_watch_category_table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [4],
            }, ],
        });
    </script>
@endpush
