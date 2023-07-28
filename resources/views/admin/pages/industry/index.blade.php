@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Industry Management</span>
                    <span class="breadcrumb-item active">Industry</span>
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
                                <h5 class="ms-1 mb-0 text-uppercase text-secondary">Industry Category</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card rounded-0 border-0 shadow-none">
                            <div class="card-body p-0">
                                <table
                                    class="industry_table table datatable-responsive table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="bg-secondary border-secondary text-white text-center">
                                            <th width="10%">#</th>
                                            <th width="15%">Logo</th>
                                            <th width="15%">Image</th>
                                            <th width="50%">Name</th>
                                            <th class="text-center" width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($industries as $industry)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img class="rounded-circle"
                                                        src="{{ asset('storage/' . $industry->logo) }}" alt=""
                                                        width="25px" height="25px">
                                                </td>
                                                <td>
                                                    <img class="rounded-circle"
                                                        src="{{ asset('storage/' . $industry->image) }}" alt=""
                                                        width="25px" height="25px">
                                                </td>
                                                <td>{{ $industry->name }}</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#industry_edit{{ $industry->id }}"
                                                            class="text-primary">
                                                            <i class="ph-pen"></i>
                                                        </a>
                                                        <a href="{{ route('admin.industry.destroy', $industry->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Industry -->
        <div id="industry_add" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                        <h6 class="modal-title">Add Industy</h6>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.industry.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Industry Sector Name</label>
                                        <select name="sector_id" data-placeholder="Select a Industry Sector Name...."
                                            class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                            <option></option>
                                            @foreach ($industrySectors as $industrySector)
                                                <option value="{{ $industrySector->id }}">
                                                    {{ $industrySector->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Industry Parent</label>
                                        <select name="parent_id" class="form-control form-control-sm select" data-placeholder="Select a Industry Parent Name"
                                            data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                            <option></option>
                                            @foreach ($industries as $industry)
                                                <option value="{{ $industry->id }}">
                                                    {{ $industry->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm" placeholder="Enter  Name"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label">Link </label>
                                        <input id="name" name="link" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Image"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row gx-0 d-flex align-items-center">
                                        <div class="col-lg-10">
                                            <div class="mb-3">
                                                <label class="form-label">Logo <span class="text-danger">*</span></label>
                                                <input id="image" name="logo" type="file"
                                                    class="form-control form-control-sm" placeholder="Enter Logo"
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
                                                <label class="form-label">Image <span class="text-danger">*</span></label>
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
                                        <label class="form-label">Description</label>
                                        <textarea name="description" rows="3" cols="3" class="form-control"
                                            placeholder="Enter your message here"></textarea>
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
        @foreach ($industries as $industry)
            <div id="industry_edit{{ $industry->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                            <h6 class="modal-title">Edit Industy Information</h6>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.industry.update',$industry->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Industry Sector Name</label>
                                            <select name="sector_id" data-placeholder="Select a Industry Sector Name...."
                                                class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                @foreach ($industrySectors as $industrySector)
                                                    <option value="{{ $industrySector->id }}"
                                                        @selected($industry->sector_id == $industrySector->id)>
                                                        {{ $industrySector->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Industry Parent</label>
                                            <select name="parent_id" class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity" data-placeholder="Select a Industry Parent Name"
                                                data-container-css-class="select-sm">

                                                <option></option>
                                                @foreach ($industries as $industrie)
                                                    <option value="{{ $industrie->id }}" @selected($industry->parent_id == $industrie->id)>
                                                        {{ $industrie->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input id="name" name="name" type="text"
                                                value="{{ $industry->name }}" class="form-control form-control-sm"
                                                placeholder="Enter  Name" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label class="form-label">Link </label>
                                            <input id="name" name="link" type="text"
                                                value="{{ $industry->link }}" class="form-control form-control-sm"
                                                placeholder="Enter Image" maxlength="100">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row gx-0 d-flex align-items-center">
                                            <div class="col-lg-10">
                                                <div class="mb-3">
                                                    <label class="form-label">Logo <span
                                                            class="text-danger">*</span></label>
                                                    <input id="image" name="logo" type="file"
                                                        class="form-control form-control-sm" placeholder="Enter Logo">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="#" class="mb-3">
                                                    <img id="showImage" src="{{ asset('storage/' . $industry->logo) }}"
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
                                                    <label class="form-label">Image <span
                                                            class="text-danger">*</span></label>
                                                    <input id="image1" name="image" type="file"
                                                        class="form-control form-control-sm" placeholder="Enter Image">
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <a href="#" class="mb-1">
                                                    <img id="showImage1" src="{{ asset('storage/' . $industry->image) }}"
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
                                            <label class="form-label">Description</label>
                                            <textarea name="description" rows="3" cols="3" class="form-control"
                                                placeholder="Enter your message here">{{ $industry->description }}</textarea>
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
        $('.industry_table').DataTable({
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
