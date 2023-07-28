<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- Product Create Form Start -->
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class=" card border border-secondary px-0">
                    <div class="card-header bg-secondary text-white p-2">
                        <h6 class="mb-0">Product Info</h6>
                    </div>
                    <div class="card-body border-secondary">
                        <div class="row ">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" value="{{ $product->name }}"
                                        class="form-control form-control-sm maxlength-options" maxlength="200"
                                        placeholder="Enter Your Product Name" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Quantity </label>
                                    <input type="text" id="quantity" name="quantity" value="{{ $product->quantity }}"
                                        class="form-control form-control-sm maxlength-options" maxlength="100"
                                        placeholder="Enter Product Quantity">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    @php
                                        $size = isset($product->size) ? json_decode($product->size, true) : [];
                                    @endphp
                                    <label class="form-label">Size </label>
                                    <select name="size[]" class="form-control form-control-sm multiselect"
                                        multiple="multiple" data-include-select-all-option="true"
                                        data-button-class="btn btn-sm" data-enable-filtering="true"
                                        data-enable-case-insensitive-filtering="true">
                                        <option @selected(!is_null($size) && in_array('1', $size)) value="1">S</option>
                                        <option @selected(!is_null($size) && in_array('2', $size)) value="2">M</option>
                                        <option @selected(!is_null($size) && in_array('3', $size)) value="3">L</option>
                                        <option @selected(!is_null($size) && in_array('4', $size)) value="4">XL</option>
                                        <option @selected(!is_null($size) && in_array('5', $size)) value="5">XXL</option>
                                        <option @selected(!is_null($size) && in_array('6', $size)) value="6">64GB</option>
                                        <option @selected(!is_null($size) && in_array('7', $size)) value="7">128GB</option>
                                        <option @selected(!is_null($size) && in_array('8', $size)) value="8">512GB</option>
                                        <option @selected(!is_null($size) && in_array('9', $size)) value="9">1TB</option>
                                        <option @selected(!is_null($size) && in_array('10', $size)) value="10">3/32 GB</option>
                                        <option @selected(!is_null($size) && in_array('11', $size)) value="11">4/64 GB</option>
                                        <option @selected(!is_null($size) && in_array('12', $size)) value="12">4/128 GB</option>
                                        <option @selected(!is_null($size) && in_array('13', $size)) value="13">6/128 GB</option>
                                        <option @selected(!is_null($size) && in_array('14', $size)) value="14">8/128 GB</option>
                                        <option @selected(!is_null($size) && in_array('15', $size)) value="15">8/256 GB</option>
                                        <option @selected(!is_null($size) && in_array('16', $size)) value="16">12/256 GB</option>
                                        <option @selected(!is_null($size) && in_array('17', $size)) value="17">12/512 GB</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                @php
                                    $colors = isset($product->color) ? json_decode($product->color, true) : [];
                                @endphp
                                <div class="mb-2">
                                    <label class="form-label">Color </label>
                                    <select name="color[]" class="form-control form-control-sm multiselect"
                                        multiple="multiple" data-include-select-all-option="true"
                                        data-enable-filtering="true" data-button-class="btn btn-sm"
                                        data-enable-case-insensitive-filtering="true">
                                        <option @selected(!is_null($colors) && in_array('white', $colors)) value="white">White</option>
                                        <option @selected(!is_null($colors) && in_array('yellow', $colors)) value="yellow">Yellow</option>
                                        <option @selected(!is_null($colors) && in_array('blue', $colors)) value="blue">Blue</option>
                                        <option @selected(!is_null($colors) && in_array('red', $colors)) value="red">Red</option>
                                        <option @selected(!is_null($colors) && in_array('green', $colors)) value="green">Green</option>
                                        <option @selected(!is_null($colors) && in_array('black', $colors)) value="black">Black</option>
                                        <option @selected(!is_null($colors) && in_array('brown', $colors)) value="brown">Brown</option>
                                        <option @selected(!is_null($colors) && in_array('azure', $colors)) value="azure">Azure</option>
                                        <option @selected(!is_null($colors) && in_array('ivory', $colors)) value="ivory">Ivory</option>
                                        <option @selected(!is_null($colors) && in_array('teal', $colors)) value="teal">Teal</option>
                                        <option @selected(!is_null($colors) && in_array('silver', $colors)) value="silver">Silver</option>
                                        <option @selected(!is_null($colors) && in_array('purple', $colors)) value="purple">Purple</option>
                                        <option @selected(!is_null($colors) && in_array('navy_blue', $colors)) value="navy_blue">Navy blue
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('pea_green', $colors)) value="pea_green">Pea green
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('gray', $colors)) value="gray">Gray</option>
                                        <option @selected(!is_null($colors) && in_array('orange', $colors)) value="orange">Orange</option>
                                        <option @selected(!is_null($colors) && in_array('maroon', $colors)) value="maroon">Maroon</option>
                                        <option @selected(!is_null($colors) && in_array('charcoal', $colors)) value="charcoal">Charcoal
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('aquamarine', $colors)) value="aquamarine">
                                            Aquamarine</option>
                                        <option @selected(!is_null($colors) && in_array('coral', $colors)) value="coral">Coral</option>
                                        <option @selected(!is_null($colors) && in_array('fuchsia', $colors)) value="fuchsia">Fuchsia
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('wheat', $colors)) value="wheat">Wheat</option>
                                        <option @selected(!is_null($colors) && in_array('lime', $colors)) value="lime">Lime</option>
                                        <option @selected(!is_null($colors) && in_array('crimson', $colors)) value="crimson">Crimson
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('khaki', $colors)) value="khaki">Khaki</option>
                                        <option @selected(!is_null($colors) && in_array('hot_pink', $colors)) value="hot_pink">Hot pink
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('magenta', $colors)) value="magenta">Magenta
                                        </option>
                                        <option @selected(!is_null($colors) && in_array('olden', $colors)) value="olden">Olden</option>
                                        <option @selected(!is_null($colors) && in_array('plum', $colors)) value="plum">Plum</option>
                                        <option @selected(!is_null($colors) && in_array('olive', $colors)) value="olive">Olive</option>
                                        <option @selected(!is_null($colors) && in_array('cyan', $colors)) value="cyan">Cyan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Brand Name <span class="text-danger">*</span></label>
                                    <select name="brand_id" value="{{ $product->brand_id }}" id="brand_id"
                                        data-placeholder="Select Brand ID" class="form-control form-control-sm select"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($brands as $brand)
                                            <option @selected($brand->id == $product->brand_id) value="{{ $brand->id }}">
                                                {{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Discount</label>
                                    <input type="text" id="is_discount" name="is_discount"
                                        value="{{ $product->is_discount }}"
                                        class="form-control form-control-sm maxlength-options discountInput"
                                        maxlength="4" placeholder="Enter Product Discount">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Price</label>
                                    <input type="text" id="price" name="price" value="{{ $product->price }}"
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
                                            value="{{ $product->manufacturer_code }}" class="form-control form-control-sm"
                                            placeholder="Manufacturer Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Product Code<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" id="product_code" name="product_code"
                                            value="{{ $product->product_code }}" class="form-control form-control-sm"
                                            placeholder="Product Code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">SKU</label>
                                    <div class="input-group">
                                        <input type="text" id="sku" name="sku" value="{{ $product->sku }}"
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
                                        <option @selected($product->type == 'new') value="new">New</option>
                                        <option @selected($product->type == 'refurbished') value="refurbished">Refurbished</option>
                                        <option @selected($product->type == 'used') value="used">Used</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <select name="category_id" data-placeholder="Select Category Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        @foreach ($categorys as $category)
                                            <option @selected($category->id == $product->category_id) value="{{ $category->id }}">
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Sub Category</label>
                                    <select name="sub_category_id" data-placeholder="Select Sub Category Name"
                                        id="sub_category_id" class="form-control form-control-sm select"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($subCategorys as $subCategory)
                                            <option @selected($subCategory->id == $product->sub_category_id) value="{{ $subCategory->id }}">
                                                {{ $subCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Child Category</label>
                                    <select name="child_category_id" data-placeholder="Select Child Category Name"
                                        id="child_category_id" class="form-control form-control-sm select"
                                        data-container-css-class="select-sm">
                                        <option></option>
                                        @foreach ($childCategorys as $childCategory)
                                            <option @selected($childCategory->id == $product->child_category_id) value="{{ $childCategory->id }}">
                                                {{ $childCategory->name }}</option>
                                        @endforeach
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
                                            <option @selected($paymentMethod->id == $product->payment_method_id) value="{{ $paymentMethod->id }}">
                                                {{ $paymentMethod->method }}
                                            </option>
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
                                            name="is_featured" value="true"
                                            {{ $product->is_featured == 'true' ? 'checked' : '' }} id="is_featured">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 mt-2">
                                <div class="mb-4 mt-3 border rounded p-1">
                                    <div class="form-check form-switch">
                                        <label class="form-check-label" for="is_today_deal">Today
                                            <input type="checkbox" class="form-check-input form-check-input-secondary"
                                                name="is_today_deal" value="true"
                                                {{ $product->is_today_deal == 'true' ? 'checked' : '' }}
                                                id="is_today_deal">
                                            Deal</label>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Deal</label>
                                <input type="text" id="deal" name="deal" value="{{ $product->deal }}"
                                    class="form-control form-control-sm maxlength-options" maxlength="100"
                                    placeholder="Enter Product Deal">
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label">Status</label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" data-container-css-class="select-sm"
                                    name="is_status" id="is_status">
                                    <option></option>
                                    <option @selected($product->is_status == 'draft') value="draft">Draft</option>
                                    <option @selected($product->is_status == 'pending') value="pending">Pending</option>
                                    <option @selected($product->is_status == 'active') value="active">Active</option>
                                    <option @selected($product->is_status == 'inactive') value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4">
                                    <label class="form-label">Product Tag</label>
                                    @php
                                        $meta_tag = isset($product->tags) ? json_decode($product->tags, true) : [];
                                    @endphp
                                    <select data-placeholder="Type and hit enter to add a tag"
                                        class="form-control form-control-sm select" id="tags" name="tags[]"
                                        data-container-css-class="select-sm" multiple="multiple" data-tags="true"
                                        data-maximum-input-length="30">
                                        @if ($meta_tag)
                                            @foreach ($meta_tag as $tag)
                                                <option @selected(in_array($tag, $meta_tag)) value="{{ $tag }}">
                                                    {{ $tag }}</option>
                                            @endforeach
                                        @else
                                            <option value=""></option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Warranty</label>
                                    <input type="text" id="warranty" name="warranty"
                                        value="{{ $product->warranty }}"
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
                                            <div class="">
                                                <label class="col-form-label">Product Image </label>
                                                <input id="upload-img" type="file"
                                                    class="form-control form-control-sm" name="image">
                                                <div class="form-text"><span class="text-muted">Accepts only
                                                        png,jpeg,jpg types</span></div>
                                                <div class="border-1 rounded mx-1 my-1 px-1 py-1 d-none" id="img-preview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <label class="col-form-label">Product Multiple Image</label>
                                                <input id="upload-multi-img" type="file"
                                                    class="form-control form-control-sm" name="images[]" multiple>
                                                <input type="hidden" class="product_id" value="{{ $product->id }}">
                                                <div class="form-group mt-2 multi_image_preview">
                                                    @foreach ($product_images as $image)
                                                        <div id="image-container{{ $image->id }}"
                                                            class="image-container" data-image-id="{{ $image->id }}">
                                                            <img src="{{ asset('storage/' . $image->images) }}"
                                                                alt="{{ $image->images }}" width="60"
                                                                height="60">
                                                            <i class="ph-trash me-3 fa-2x text-danger image_delete"></i>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="form-text"><span class="text-muted">Accepts only png, jpeg,
                                                        jpg types</span></div>
                                                <div class="border-1 rounded mx-1 my-1 px-1 py-1 d-none" id="img-preview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <label class="col-form-label">PDF </label>
                                                <input id="upload-img" type="file"
                                                    class="form-control form-control-sm" name="pdf" multiple>
                                                <div class="form-text"><span class="text-muted">Accepts only
                                                        PDF</span></div>
                                                <div class="border-1 rounded mx-1 my-1 px-1 py-1 d-none" id="img-preview">
                                                </div>
                                            </div>
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
                                        placeholder="Enter your text...">{!! $product->short_description !!}</textarea>
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
                                        placeholder="Enter your text...">{!! $product->description !!}</textarea>
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
                                        placeholder="Enter your text...">{!! $product->specification !!}</textarea>
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

        $(document).ready(function() {
            const $uploadMultiImg = $('#upload-multi-img');
            const $productId = $('.product_id');
            const $multiImagePreview = $('.multi_image_preview');

            $uploadMultiImg.on('change', function() {
                const files = $uploadMultiImg[0].files;
                let formData = new FormData();
                for (let i = 0; i < files.length; i++) {
                    formData.append('images[]', files[i]);
                }
                formData.append('product_id', $productId.val());

                $.ajax({
                    url: "{{ route('admin.multi-image.store') }}",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formData,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        $multiImagePreview.html('');
                        const productImages = result.product_images;
                        let html = '';
                        for (let i = 0; i < productImages.length; i++) {
                            const imageId = productImages[i].id;
                            const imageUrl = productImages[i].images;
                            html += `<div id="image-container${imageId}" class="image-container" data-image-id="${imageId}">
                                        <img src="{{ asset('storage') }}/${imageUrl}" alt="${imageUrl}" width="60" height="60">
                                        <i class="ph-trash me-3 fa-2x text-danger image_delete"></i>
                                    </div>`;
                        }
                        $multiImagePreview.append(html);
                    },
                    error: function(xhr, status, error) {
                        console.log(error); // For Debugging
                    }
                });
            });
        });



        $(document).on("click", ".image_delete", function() {
            var imageContainer = $(this).closest('.image-container');
            var imageId = imageContainer.data('image-id');

            $.ajax({
                url: "{{ route('admin.multi-image.update') }}",
                data: {
                    id: imageId,
                },
                type: 'GET',
                success: function(result) {
                    $("#image-container" + imageId).fadeOut(300, function() {
                        $(this).remove();
                    });
                }
            });
        });
    </script>
@endpush
