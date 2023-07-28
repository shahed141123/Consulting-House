<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- Product Create Form Start -->
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" card border border-secondary px-0">
                    <div class="card-header bg-secondary text-white p-2">
                        <h6 class="mb-0">Product Info</h6>
                    </div>
                    <div class="card-body border-secondary">
                        <div class="row ">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" value=""
                                        class="form-control form-control-sm maxlength-options" maxlength="200"
                                        placeholder="Enter Your Product Name" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Quantity </label>
                                    <input type="text" id="quantity" name="quantity" value=""
                                        class="form-control form-control-sm maxlength-options" maxlength="100"
                                        placeholder="Enter Product Quantity">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Size </label>
                                    <select name="size[]" class="form-control form-control-sm multiselect"
                                        multiple="multiple" data-include-select-all-option="true"
                                        data-button-class="btn btn-sm" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                        <option value="5">XXL</option>
                                        <option value="6">64GB</option>
                                        <option value="7">128GB</option>
                                        <option value="8">512GB</option>
                                        <option value="9">1TB</option>
                                        <option value="10">3/32 GB</option>
                                        <option value="11">4/64 GB</option>
                                        <option value="12">4/128 GB</option>
                                        <option value="13">6/128 GB</option>
                                        <option value="14">8/128 GB</option>
                                        <option value="15">8/256 GB</option>
                                        <option value="16">12/256 GB</option>
                                        <option value="17">12/512 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Color </label>
                                    <select name="color[]" class="form-control form-control-sm multiselect"
                                        multiple="multiple" data-include-select-all-option="true"
                                        data-enable-filtering="true" data-button-class="btn btn-sm"
                                        data-enable-case-insensitive-filtering="true">
                                        <option value="white">White</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="blue">Blue</option>
                                        <option value="red">Red</option>
                                        <option value="green">Green</option>
                                        <option value="black">Black</option>
                                        <option value="brown">Brown</option>
                                        <option value="azure">Azure</option>
                                        <option value="ivory">Ivory</option>
                                        <option value="teal">Teal</option>
                                        <option value="silver">Silver</option>
                                        <option value="purple">Purple</option>
                                        <option value="navy_blue">Navy blue</option>
                                        <option value="pea_green">Pea green</option>
                                        <option value="gray">Gray</option>
                                        <option value="orange">Orange</option>
                                        <option value="maroon">Maroon</option>
                                        <option value="charcoal">Charcoal</option>
                                        <option value="aquamarine">Aquamarine</option>
                                        <option value="coral">Coral</option>
                                        <option value="fuchsia">Fuchsia</option>
                                        <option value="wheat">Wheat</option>
                                        <option value="lime">Lime</option>
                                        <option value="crimson">Crimson</option>
                                        <option value="khaki">Khaki</option>
                                        <option value="hot_pink">Hot pink</option>
                                        <option value="magenta">Magenta</option>
                                        <option value="olden">Olden</option>
                                        <option value="plum">Plum</option>
                                        <option value="olive">Olive</option>
                                        <option value="cyan">Cyan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                                    <select name="brand_id" id="brand_id" data-placeholder="Select Brand ID"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Discount</label>
                                    <input type="text" id="is_discount" name="is_discount"
                                        class="form-control form-control-sm maxlength-options discountInput"
                                        maxlength="4" placeholder="Enter Product Discount">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Price</label>
                                    <input type="text" id="price" name="price"
                                        class="form-control form-control-sm maxlength-options priceInput" maxlength="100"
                                        placeholder="Enter Product price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Manufacturer Code </label>
                                    <div class="input-group">
                                        <input type="text" id="manufacturer_code" name="manufacturer_code"
                                            class="form-control form-control-sm" placeholder="Manufacturer Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Product Code<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="product_code" name="product_code"
                                            class="form-control form-control-sm" placeholder="Product Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">SKU</label>
                                    <div class="input-group">
                                        <input type="text" id="sku" name="sku"
                                            class="form-control form-control-sm" placeholder="SKU Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Type <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-sm select" data-placeholder="Select a Type"
                                        data-minimum-results-for-search="Infinity" data-container-css-class="select-sm"
                                        name="type">
                                        <option></option>
                                        <option value="new">New</option>
                                        <option value="refurbished">Refurbished</option>
                                        <option value="used">Used</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <select name="category_id" data-placeholder="Select Category Name"
                                        class="form-control form-control-sm category_dropdown select"
                                        data-container-css-class="select-sm" required>
                                        <option></option>
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Sub Category</label>
                                    <select name="sub_category_id" data-placeholder="Select Sub Category Name"
                                        id="sub_category_id"
                                        class="form-control form-control-sm subcategory_dropdown select"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        {{-- @foreach ($subCategorys as $subCategory)
                                            <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Child Category</label>
                                    <select name="child_category_id" data-placeholder="Select Child Category Name"
                                        id="child_category_id"
                                        class="form-control form-control-sm select childcategory_dropdown"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        {{-- @foreach ($childCategorys as $childCategory)
                                            <option value="{{ $childCategory->id }}">{{ $childCategory->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Payment Method</label>
                                    <select name="payment_method_id" data-placeholder="Select Payment Method"
                                        id="payment_method_id" class="form-control form-control-sm select"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($paymentMethods as $paymentMethod)
                                            <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->method }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-2 mt-2">
                                <div class="mb-4 mt-3 border rounded p-1">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="is_featured">Featured</label>
                                        <input type="checkbox" class="form-check-input form-check-input-secondary"
                                            name="is_featured" value="true" id="is_featured" checked>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 mt-2">
                                <div class="mb-4 mt-3 border rounded p-1">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="is_today_deal">Today
                                            <input type="checkbox" class="form-check-input form-check-input-secondary"
                                                name="is_today_deal" value="true" id="is_today_deal">
                                            Deal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Deal</label>
                                <input type="text" id="deal" name="deal"
                                    class="form-control form-control-sm maxlength-options" maxlength="100"
                                    placeholder="Enter Product Deal">
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Status</label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" data-container-css-class="select-sm"
                                    name="is_status" id="is_status">
                                    <option></option>
                                    <option value="draft">Draft</option>
                                    <option value="pending">Pending</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Product Tag</label>
                                    <select data-placeholder="Type and hit enter to add a tag"
                                        class="form-control form-control-sm select" id="tags" name="tags[]"
                                        data-container-css-class="select-sm" multiple="multiple" data-tags="true"
                                        data-maximum-input-length="30">
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Warranty</label>
                                    <input type="text" id="warranty" name="warranty"
                                        class="form-control form-control-sm maxlength-options" maxlength="100"
                                        placeholder="Enter Product Warrantry ">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="container px-0">
                    <div class="row">
                        <!-- Product Image Column -->
                        <div class="col">
                            <div class="card border border-secondary">
                                <div class="card-header bg-secondary text-white p-2">
                                    <h6 class="mb-0">Product Image</h6>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">Product Image </label>
                                            <input type="file" class="form-control form-control-sm" name="image">
                                            <div class="form-text"><span class="text-muted">Accepts only
                                                    png,jpeg,jpg types</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">Product Multiple Image </label>
                                            <input type="file" class="form-control form-control-sm" name="images[]"
                                                multiple>
                                            <div class="form-text"><span class="text-muted">Accepts only
                                                    png,jpeg,jpg types</span></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">PDF </label>
                                            <input type="file" class="form-control form-control-sm" name="pdf"
                                                multiple>
                                            <div class="form-text"><span class="text-muted">Accepts only
                                                    PDF</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Author Column -->
                    </div>
                    <!-- Product Short Description Row -->
                    <div class="row mx-0">
                        <div class="card px-0 border border-secondary">
                            <div class="card-header bg-secondary text-white p-2">
                                <h6 class="mb-0">Product Short Description</h6>
                            </div>

                            <div class="card-body">
                                <div class="mb-2">
                                    <textarea class="form-control form-control-sm" id="ckeditor_classic_empty_1" name="short_description"
                                        placeholder="Enter your text..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Description Row -->
                    <div class="row mx-0">
                        <div class="card px-0 border border-secondary">
                            <div class="card-header bg-secondary text-white">
                                <h6 class="mb-0">Product Description</h6>
                            </div>

                            <div class="card-body">
                                <div class="mb-2">
                                    <textarea class="form-control form-control-sm" id="ckeditor_classic_empty_2" name="description"
                                        placeholder="Enter your text..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Specification Row -->
                    <div class="row mx-0">
                        <div class="card px-0 border border-secondary">
                            <div class="card-header bg-secondary text-white p-2">
                                <h6 class="mb-0">Product Specification</h6>
                            </div>

                            <div class="card-body">
                                <div class="mb-2">
                                    <textarea class="form-control form-control-sm" id="ckeditor_classic_empty_3" name="specification"
                                        placeholder="Enter your text..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Submit Button Start-->
                    <div class="text-end">
                        <button type="reset" class="btn btn-danger">Reset<i class="icon-reset"></i></button>
                        <button type="submit" class="btn btn-primary">Submit
                            <i class="ph-paper-plane-tilt ms-2"></i>
                        </button>
                    </div>
                    <!-- Form Submit Button End-->
                </div>
            </form>
            <!-- Product Create Form End -->
        </div>
    </div>
@endsection
<!--End Page Code -->


@push('scripts')
    <script>
        // Here Is The Input Field Validation
        numberValidation('.priceInput');
        numberValidation('.discountInput');

        $(function() {
            var categoryDropdown = $('.category_dropdown');
            var subcategoryDropdown = $('.subcategory_dropdown');
            var childcategoryDropdown = $(".childcategory_dropdown");

            categoryDropdown.on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ route('admin.sub.categories.dropdown') }}",
                        type: "GET",
                        data: {
                            category_id: category_id
                        },
                        success: function(response) {
                            subcategoryDropdown.html(response);
                            childcategoryDropdown
                                .empty(); // clear the child category dropdown options
                        }
                    });
                } else {
                    subcategoryDropdown.empty(); // clear the subcategory dropdown options
                    childcategoryDropdown.empty(); // clear the child category dropdown options
                }
            });

            subcategoryDropdown.on('change', function() {
                var sub_category_id = $(this).val();
                if (sub_category_id) {
                    $.ajax({
                        url: "{{ route('admin.child.categories.dropdown') }}",
                        type: "GET",
                        data: {
                            sub_category_id: sub_category_id
                        },
                        success: function(response) {
                            childcategoryDropdown.html(response);
                        }
                    });
                } else {
                    childcategoryDropdown.empty(); // clear the child category dropdown options
                }
            });
        });
    </script>
@endpush
