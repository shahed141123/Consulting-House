<div class="row">
    <div class="col-lg-12">
        <table class="data-table-sub-category table datatable-responsive table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-secondary border-secondary text-white">
                    <th width="5%">#</th>
                    <th width="5%">Image</th>
                    <th width="20%">Category Name</th>
                    <th width="20%">Sub Category Name</th>
                    <th width="15%">Icon</th>
                    <th width="30%">Description</th>
                    <th class="text-center" width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($subCategories)
                    @foreach ($subCategories as $subCategorie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img class="rounded-circle"
                                    src=" {{ isset($subCategorie->image) && Str::startsWith($subCategorie->image, 'https:') ? $subCategorie->image : (isset($subCategorie->image) ? asset('storage/requestImg/' . $subCategorie->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>{{ $subCategorie->getCategoryName() }}</td>
                            <td>{{ $subCategorie->name }}</td>
                            <td>{{ Str::limit($subCategorie->icon, 15, '...') }}</td>
                            <td>{{ Str::limit($subCategorie->description, 36, '.......') }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#subCategoryEditModal{{ $subCategorie->id }}"
                                        class="text-primary">
                                        <i class="ph-pen"></i>
                                    </a>
                                    <div id="subCategoryEditModal{{ $subCategorie->id }}" class="modal fade"
                                        data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Your Sub Category</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <form
                                                    action="{{ route('admin.sub.categories.update', $subCategorie->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Category Name</label>
                                                                    <select name="category_id"
                                                                        data-placeholder="Select a category..."
                                                                        class="form-control form-control-sm select select-category-add"
                                                                        data-container-css-class="select-sm">
                                                                        <option></option>
                                                                        @foreach ($categories as $categorie)
                                                                            <option value="{{ $categorie->id }}"
                                                                                @selected($categorie->id == $subCategorie->category_id)>
                                                                                {{ $categorie->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Sub Category Name</label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $subCategorie->name }}"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Sub Category Name"
                                                                        maxlength="200" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Sub Category Image</label>
                                                                    <input id="image" name="image" type="file"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Category Logo">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 mt-4">
                                                                <div class="mb-3">
                                                                    <a href="#">
                                                                        <img id="showImage"
                                                                            src="{{ asset('admin/assets/images/demo/brands/dell.png') }}"
                                                                            class="rounded img-thumbnail" width="45px"
                                                                            height="45px" alt="">
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-5">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Sub Category Icon</label>
                                                                    <input id="icon" name="icon"
                                                                        value="{{ $subCategorie->icon }}"
                                                                        type="text"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Sub Category Icon"
                                                                        maxlength="50">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Sub Category Description</label>
                                                            <textarea name="description" rows="3" cols="3" class="form-control"
                                                                placeholder="Enter a Sub Category Description">{{ $subCategorie->description }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="btn btn-primary from-prevent-multiple-submits">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.sub.categories.destroy', $subCategorie->id) }}"
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
<div id="subCategoryAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('admin.sub.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" data-placeholder="Select a category..."
                                    class="form-control form-control-sm select select-category-add"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Sub Category Name</label>
                                <input type="text" name="name" class="form-control form-control-sm"
                                    placeholder="Enter Sub Category Name" maxlength="200" required>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Sub Category Image</label>
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
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Sub Category Icon</label>
                                <input id="icon" name="icon" value="{{ old('icon') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Sub Category Icon"
                                    maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub Category Description</label>
                        <textarea name="description" rows="3" cols="3" class="form-control"
                            placeholder="Enter a Sub Category Description">{{ old('description') }}</textarea>
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
<!-- Disabled keyboard interaction add modal for category -->

@push('scripts')
    <script type="text/javascript">
        $('#subCategoryAddModal').on('shown.bs.modal', function() {
            $('.select-category-add').select2({
                dropdownParent: $('#subCategoryAddModal')
            })
        });
        $('#subCategoryEditModal').on('shown.bs.modal', function() {
            $('.select-sub-category-edit').select2({
                dropdownParent: $('#subCategoryEditModal')
            })
        });

        $('.data-table-sub-category').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0,1,2,3,4,5,6],
            }, ],
        });
    </script>
@endpush
