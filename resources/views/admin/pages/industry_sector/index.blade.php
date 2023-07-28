@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Industry Management</span>
                    <span class="breadcrumb-item active">Industrial Sectors</span>
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
                <div class="row gy-0">
                    <div class="col-lg-12 bg-info">
                        <div class="row">
                            <div class="col-3 d-sm-none"></div>
                            <div class="col-6 col-sm-9">
                                <h6 class="text-center mb-0">Industrial Sectors</h6>
                            </div>
                            <div class="col-3">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#sectorAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 px-0">
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="8%">Logo</th>
                                    <th width="8%">Image</th>
                                    <th width="25%">Parent Sector</th>
                                    <th width="19%">Name</th>
                                    <th width="29%">Description</th>
                                    <th class="text-center" width="6%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($industrySectors)
                                    @foreach ($industrySectors as $industrySector)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src=" {{ isset($industrySector->logo) && Str::startsWith($industrySector->logo, 'https:') ? $industrySector->logo : (isset($industrySector->logo) ? asset('storage/' . $industrySector->logo) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>
                                            <td>
                                                <img class="rounded-circle"
                                                    src=" {{ isset($industrySector->image) && Str::startsWith($industrySector->image, 'https:') ? $industrySector->image : (isset($industrySector->image) ? asset('storage/' . $industrySector->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                    alt="" width="25px" height="25px">
                                            </td>

                                            <td>{{ $industrySector->getParentName() }}</td>
                                            <td>{{ $industrySector->name }}</td>
                                            <td> {{ Str::limit($industrySector->description, 45, '.......') }}
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#sectorEditModal{{ $industrySector->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>

                                                    <a href="{{ route('admin.industrial-sector.destroy', $industrySector->id) }}"
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
        <!-- Disabled keyboard interaction add modal for Industrial Sector -->
        <div id="sectorAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Your Industrial Sector</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.industrial-sector.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row modal-body gx-1">
                            <div class="col-lg-6">
                                <label class="form-label">Parent Sector </label>
                                <select name="parent_id" data-placeholder="Select a Profile Name...."
                                    class="form-control form-control-sm select" data-minimum-results-for-search="Infinity"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    @foreach ($industrySectors as $industrySector)
                                        <option value="{{ $industrySector->id }}">
                                            {{ $industrySector->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Name <span class="text-danger">*</span></label>
                                <input id="name" name="name" value="{{ old('name') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Industrial Sector Name"
                                    maxlength="100">
                            </div>
                            <div class="col-lg-4">
                                <div class="row d-flex align-items-center gx-0">
                                    <div class="col-lg-9">
                                        <label class="form-label">Logo <span class="text-danger">*</span></label>
                                        <input id="image1" name="logo" type="file"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Industrial Sector Logo">
                                    </div>
                                    <div class="col-lg-3 mt-4">
                                        <a href="#">
                                            <img id="showImage1"
                                                src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                                class="" width="40px" height="35px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row d-flex align-items-center gx-0">
                                    <div class="col-lg-9">
                                        <label class="form-label">Image <span class="text-danger">*</span></label>
                                        <input id="image" name="image" type="file"
                                            class="form-control form-control-sm"
                                            placeholder="Enter Industrial Sector Logo">
                                    </div>
                                    <div class="col-lg-3 mt-4">
                                        <a href="#">
                                            <img id="showImage"
                                                src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                                class="" width="40px" height="35px" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label">Link</label>
                                <input id="name" name="link" value="{{ old('link') }}" type="text"
                                    class="form-control form-control-sm mt-1" placeholder="Enter Link Url"
                                    maxlength="100">
                            </div>
                            <div class="col-lg-12">
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
        <!-- Disabled keyboard interaction add modal for brand -->
        @foreach ($industrySectors as $industrySector)
            <div id="sectorEditModal{{ $industrySector->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Your Industrial
                                Sector</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.industrial-sector.update', $industrySector->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row modal-body gx-1">
                                <div class="col-lg-6">
                                    <label class="form-label">Parent Sector </label>
                                    <select name="parent_id" data-placeholder="Select a Profile Name...."
                                        class="form-control form-control-sm select"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($industrySectors as $industrySector)
                                            <option value="{{ $industrySector->id }}" @selected($industrySector->id == $industrySector->parent_id)>
                                                {{ $industrySector->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input id="name" name="name" value="{{ $industrySector->name }}"
                                        type="text" class="form-control form-control-sm"
                                        placeholder="Enter Industrial Sector Name" maxlength="100">
                                </div>
                                <div class="col-lg-4">
                                    <div class="row d-flex align-items-center gx-0">
                                        <div class="col-lg-9">
                                            <label class="form-label">Logo <span class="text-danger">*</span></label>
                                            <input id="image1" name="logo" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Industrial Sector Logo">
                                        </div>
                                        <div class="col-lg-3 mt-4">
                                            <a href="#">
                                                <img id="showImage1" src="{{ asset('storage/' . $industrySector->logo) }}"
                                                    class="" width="40px" height="35px" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row d-flex align-items-center gx-0">
                                        <div class="col-lg-9">
                                            <label class="form-label">Image <span class="text-danger">*</span></label>
                                            <input id="image" name="image" type="file"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Industrial Sector Logo">
                                        </div>
                                        <div class="col-lg-3 mt-4">
                                            <a href="#">
                                                <img id="showImage" src="{{ asset('storage/' . $industrySector->image) }}"
                                                    class="" width="40px" height="35px" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Link</label>
                                    <input id="name" name="link" value="{{ $industrySector->link }}"
                                        type="text" class="form-control form-control-sm mt-1"
                                        placeholder="Enter Link Url" maxlength="100">
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ $industrySector->description }}</textarea>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Update changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- /javascript behaviour -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.data-table').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                autoWidth: false,
                responsive: true,
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    // width: 100,
                    targets: [0, 1, 2, 3, 4, 5, 6],
                }, ],
                "bDestroy": true,
            });
        });
    </script>
@endpush
