@extends('admin.layouts.app')
@section('content')
<div class="page-header page-header-light shadow">
    <div class="page-header-content d-lg-flex border-top">
        <div class="d-flex">
            <div class="breadcrumb py-2">
                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                <span class="breadcrumb-item active">Supply Chain</span>
                <span class="breadcrumb-item active">Brands</span>
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
            <div class="card">

                <div class="collapse show">
                    <div class="card-body">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="row gy-0">
                                <div class="col-lg-12 bg-info">
                                    <div class="row">
                                        <div class="col-3 d-sm-none"></div>
                                        <div class="col-6 col-sm-9">
                                            <h6 class="text-center mb-0">Brand Table</h6>
                                        </div>
                                        <div class="col-3">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#brandAddModal"
                                                class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                                <span class="btn-labeled-icon bg-success text-white">
                                                    <i class="ph-plus-circle ph-sm"></i>
                                                </span>
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <table
                                        class="data-table table datatable-responsive table-bordered table-striped table-hover">
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
                                            @if ($brands)
                                                @foreach ($brands as $brand)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img class="rounded-circle"
                                                                src=" {{ isset($brand->image) && Str::startsWith($brand->image, 'https:') ? $brand->image : (isset($brand->image) ? asset('storage/requestImg/' . $brand->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                                                alt="" width="25px" height="25px">
                                                        </td>

                                                        <td>{{ $brand->name }}</td>
                                                        <td> {{ Str::limit($brand->description, 36, '.......') }}</td>
                                                        <td>
                                                            <div class="d-inline-flex">
                                                                <a href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#brandEditModal{{ $brand->id }}"
                                                                    class="text-primary">
                                                                    <i class="ph-pen"></i>
                                                                </a>
                                                                <div id="brandEditModal{{ $brand->id }}"
                                                                    class="modal fade" data-bs-keyboard="false"
                                                                    data-bs-backdrop="static" tabindex="-1">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Edit Your Brand</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"></button>
                                                                            </div>

                                                                            <form
                                                                                action="{{ route('admin.brand.update', $brand->id) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="modal-body">
                                                                                    <div class="mb-3">
                                                                                        <label
                                                                                            class="form-label">Name</label>
                                                                                        <input id="name" name="name"
                                                                                            value="{{ $brand->name }}"
                                                                                            type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            placeholder="Enter Brand Name"
                                                                                            maxlength="100">
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-10">
                                                                                            <div class="mb-3">
                                                                                                <label
                                                                                                    class="form-label">Image</label>
                                                                                                <input id="image"
                                                                                                    name="image"
                                                                                                    type="file"
                                                                                                    class="form-control form-control-sm"
                                                                                                    placeholder="Enter Brand Logo">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2">
                                                                                            <a href="#"
                                                                                                class="mb-3">
                                                                                                <img id="preview-image"
                                                                                                    src="{{ file_exists(public_path('storage/requestImg/' . $brand->image))
                                                                                                        ? asset('public/storage/requestImg/' . $brand->image)
                                                                                                        : asset('admin/assets/images/demo/brands/dell.png') }}"
                                                                                                    class="rounded img-thumbnail"
                                                                                                    width="44"
                                                                                                    height="44"
                                                                                                    alt="">
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label
                                                                                            class="form-label">Description</label>
                                                                                        <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ $brand->description }}</textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-link"
                                                                                        data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary ">Save
                                                                                        changes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="{{ route('admin.brand.destroy', $brand->id) }}"
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
            </div>
        </div>
        <!-- Disabled keyboard interaction add modal for Brand -->
        <div id="brandAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Your Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input id="name" name="name" value="{{ old('name') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Brand Name" maxlength="100">
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
                                            <img id="showImage"
                                                src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                                class="rounded img-thumbnail" width="45px" height="45px"
                                                alt="">
                                        </a>
                                    </div>

                                </div>
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
        <!-- Disabled keyboard interaction add modal for brand -->
        <!-- /javascript behaviour -->
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
                targets: [0,1,2,3,4],
            }, ],
        });
    </script>
@endpush
