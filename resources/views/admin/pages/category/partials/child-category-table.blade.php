<div class="row">
    <div class="col-lg-12">
        <table class="data-table-child-category table datatable-responsive table-bordered table-striped table-hover">
            <thead>
                <tr class="bg-secondary border-secondary text-white">
                    <th width="5%">#</th>
                    <th width="5%">Image</th>
                    <th width="19%">Category Name</th>
                    <th width="19%">Sub Category Name</th>
                    <th width="19%">Child Category Name</th>
                    <th width="9%">Icon</th>
                    <th width="19%">Description</th>
                    <th class="text-center" width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($childCategories)
                    @foreach ($childCategories as $childCategorie)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img class="rounded-circle"
                                    src=" {{ isset($childCategorie->image) && Str::startsWith($childCategorie->image, 'https:') ? $childCategorie->image : (isset($childCategorie->image) ? asset('storage/requestImg/' . $childCategorie->image) : url('admin/assets/images/demo/brands/dell.png')) }}"
                                    alt="" width="25px" height="25px">
                            </td>
                            <td>{{ $childCategorie->getCategoryName() }}</td>
                            <td>{{ $childCategorie->getSubCategoryName() }}</td>
                            <td>{{ $childCategorie->name }}</td>
                            <td>{{ Str::limit($childCategorie->icon, 15, '...') }}</td>
                            <td>{{ Str::limit($childCategorie->description, 36, '.......') }}</td>
                            <td>
                                <div class="d-inline-flex">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#childCategoryEditModal{{ $childCategorie->id }}"
                                        class="text-primary">
                                        <i class="ph-pen"></i>
                                    </a>
                                    <div id="childCategoryEditModal{{ $childCategorie->id }}" class="modal fade"
                                        data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Your Child Category</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <form
                                                    action="{{ route('admin.child.categories.update', $childCategorie->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Category Name</label>
                                                                    <select name="category_id"
                                                                        data-placeholder="Select a category..."
                                                                        class="form-control form-control-sm select select-child"
                                                                        data-container-css-class="select-sm">
                                                                        <option></option>
                                                                        @foreach ($categories as $categorie)
                                                                            <option @selected($categorie->id == $childCategorie->category_id)
                                                                                value="{{ $categorie->id }}">
                                                                                {{ $categorie->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Sub Category Name</label>
                                                                    <select name="sub_category_id"
                                                                        data-placeholder="Select a sub category..."
                                                                        class="form-control form-control-sm select select-child"
                                                                        data-container-css-class="select-sm">
                                                                        <option></option>
                                                                        @foreach ($subCategories as $subCategorie)
                                                                            <option @selected($subCategorie->id == $childCategorie->sub_category_id)
                                                                                value="{{ $subCategorie->id }}">
                                                                                {{ $subCategorie->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Child Category Name</label>
                                                            <input type="text" name="name"
                                                                value="{{ $childCategorie->name }}"
                                                                class="form-control form-control-sm"
                                                                placeholder="Enter Child Category Name" maxlength="200"
                                                                required>
                                                        </div>
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Child Category
                                                                        Image</label>
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
                                                                    <label class="form-label">Child Category
                                                                        Icon</label>
                                                                    <input id="icon" name="icon"
                                                                        value="{{ $childCategorie->icon }}"
                                                                        type="text"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Enter Child Category Icon"
                                                                        maxlength="50">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Child Category Description</label>
                                                            <textarea name="description" rows="3" cols="3" class="form-control"
                                                                placeholder="Enter a Child Category Description">{{ $childCategorie->description }}</textarea>
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
                                    <a href="{{ route('admin.child.categories.destroy', $childCategorie->id) }}"
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
<div id="childCategoryAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
    tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Child Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.child.categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <select id="category_id" name="category_id" data-placeholder="Select a category..."
                                    class="form-control form-control-sm select select-child category_dropdown"
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
                                <div class="subcategory_spinner" style="display: none;">
                                    <div class="d-flex spinner-border text-primary text-center justify-content-center align-item-center" role="status"><span class="visually-hidden">Loading...</span></div>
                                </div>
                                <select id="sub_category_id" name="sub_category_id"
                                    data-placeholder="Select a sub category..."
                                    class="form-control form-control-sm select select-child subcategory_dropdown"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    {{-- @foreach ($subCategories as $subCategorie)
                                        <option value="{{ $subCategorie->id }}">{{ $subCategorie->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Child Category Name</label>
                        <input type="text" name="name" class="form-control form-control-sm"
                            placeholder="Enter Child Category Name" maxlength="200" required>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Child Category Image</label>
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
                                <label class="form-label">Child Category Icon</label>
                                <input id="icon" name="icon" value="{{ old('icon') }}" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Child Category Icon"
                                    maxlength="50">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Child Category Description</label>
                        <textarea name="description" rows="3" cols="3" class="form-control"
                            placeholder="Enter a Child Category Description">{{ old('description') }}</textarea>
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
        $('#childCategoryAddModal').on('shown.bs.modal', function() {
            $('.select-child').select2({
                dropdownParent: $('#childCategoryAddModal')
            })
        });
        $('#childCategoryEditModal').on('shown.bs.modal', function() {
            $('.select-child').select2({
                dropdownParent: $('#childCategoryEditModal')
            })
        });

        $('.data-table-child-category').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0,1,2,3,4,5,6,7],
            }, ],
        });

        $(function() {
            var categoryDropdown = $('.category_dropdown');
            var subcategoryDropdown = $('.subcategory_dropdown');
            var spinnerContainer = $('.subcategory_spinner');


            categoryDropdown.on('change', function() {
                var category_id = $(this).val();

                if (category_id) {
                    spinnerContainer.show();
                    $.ajax({
                        url: "{{ route('admin.sub.categories.dropdown') }}",
                        type: "GET",
                        data: {
                            category_id: category_id
                        },
                        success: function(response) {
                            setTimeout(function() {
                                // Hide the spinner after the AJAX request is complete
                                spinnerContainer.hide();
                            }, 5000);
                            subcategoryDropdown.html(response);
                        }
                    });
                } else {
                    subcategoryDropdown.empty(); // clear the subcategory dropdown options
                }
            });
        });
    </script>
@endpush
