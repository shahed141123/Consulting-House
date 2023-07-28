<div class="row">
    <div class="col-lg-12">
        <table
            class="data-table-category table datatable-responsive table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-secondary border-secondary text-white">
                    <th width="5%">#</th>
                    <th width="10%">Image</th>
                    <th width="20%">Name</th>
                    <th width="15%">Icon</th>
                    <th width="45%">Description</th>
                    <th class="text-center" width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($categories)
                    @foreach ($categories as $categorie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img class="rounded-circle"
                                    src=" {{ isset($categorie->image) && Str::startsWith($categorie->image, 'https:') ? $categorie->image : (isset($categorie->image) ? asset('storage/requestImg/' . $categorie->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                    alt="" width="25px" height="25px">
                            </td>

                            <td>{{ $categorie->name }}</td>
                            <td> {{ Str::limit($categorie->icon, 15, '...') }}</td>
                            <td> {{ Str::limit($categorie->description, 36, '.......') }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#categoryEditModal{{ $categorie->id }}" class="text-primary">
                                        <i class="ph-pen"></i>
                                    </a>
                                    <div id="categoryEditModal{{ $categorie->id }}" class="modal fade"
                                        data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Your Brand</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <form action="{{ route('admin.categories.update', $categorie->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Category Name</label>
                                                                    <input id="name" name="name"
                                                                        value="{{ $categorie->name }}" type="text"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Category Name"
                                                                        maxlength="200">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Category Icon</label>
                                                                    <input id="icon" name="icon"
                                                                        value="{{ $categorie->icon }}" type="text"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Category Icon"
                                                                        maxlength="50">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-10">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Image</label>
                                                                    <input id="image" name="image" type="file"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Brand Logo">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <a href="#" class="mb-3">
                                                                    <img id="preview-image"
                                                                        src="{{ file_exists(public_path('storage/requestImg/' . $categorie->image))
                                                                            ? asset('public/storage/requestImg/' . $categorie->image)
                                                                            : asset('admin/assets/images/demo/brands/dell.png') }}"
                                                                        class="rounded img-thumbnail" width="44"
                                                                        height="44" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Description</label>
                                                            <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ $categorie->description }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary ">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.categories.destroy', $categorie->id) }}"
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

<!-- Disabled keyboard interaction add modal for category -->
<div id="categoryAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input id="name" name="name" value="{{ old('name') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Category Name"
                                    maxlength="200">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Category Icon</label>
                                <input id="icon" name="icon" value="{{ old('icon') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Category Icon"
                                    maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-11">
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input id="image" name="image" type="file"
                                    class="form-control form-control-sm" placeholder="Enter Category Logo">
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
                        <label class="form-label">Description</label>
                        <textarea name="description" rows="3" cols="3" class="form-control" placeholder="Enter a Description">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Disabled keyboard interaction add modal for category -->

@push('scripts')
    <script>
        $('.data-table-category').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0,1,2,3,4,5],
            }, ],
        });
    </script>
@endpush
