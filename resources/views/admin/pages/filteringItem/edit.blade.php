<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <!-- Product Create Form Start -->
        <form action="{{ route('admin.filtering-item.update', $filteringItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- Product Info Column -->
                <div class="col-lg-12">
                    <div class="card border border-secondary">
                        <div class="card-header bg-secondary text-white p-2">
                            <h6 class="mb-0">Filtering Item Edit</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Product Name </label>
                                        <select name="product_id" id="product_id"
                                            class="form-control form-control-sm select" data-container-css-class="select-sm"
                                            data-placeholder="Select Product Name">
                                            <option></option>
                                            @foreach ($products as $id => $name)
                                                <option @selected($id == $filteringItem->product_id) value="{{ $id }}">
                                                    {{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Attribute Name</label>
                                        <input type="text" id="attribute_name" name="attribute_name"
                                            value="{{ $filteringItem->attribute_name }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="200"
                                            placeholder="Enter Attribute Name">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Attribute Value</label>
                                        <input type="text" id="attribute_value" name="attribute_value"
                                            value="{{ $filteringItem->attribute_value }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Attribute Value">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" data-placeholder="Select Status"
                                            data-container-css-class="select-sm" required>
                                            <option></option>
                                            <option @selected($filteringItem->status == 'active') value="active">Active</option>
                                            <option @selected($filteringItem->status == 'inactive') value="inactive">In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Stock Status</label>
                                        <select class="form-control form-control-sm select" name="stock_status"
                                            id="stock_status" data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm" data-placeholder="Select Stock Status">
                                            <option></option>
                                            <option @selected($filteringItem->stock_status == 'in_stock') value="in_stock">In Stock</option>
                                            <option @selected($filteringItem->stock_status == 'out_of_stock') value="out_of_stock">Out Stock</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Icon</label>
                                        <input type="text" id="icon" name="icon"
                                            value="{{ $filteringItem->icon }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="100"
                                            placeholder="Enter Icon">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Price</label>
                                        <input type="text" id="price" name="price"
                                            value="{{ $filteringItem->price }}"
                                            class="form-control form-control-sm maxlength-options integerInput"
                                            maxlength="8" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Quantity</label>
                                        <input type="text" id="quantity" name="quantity"
                                            value="{{ $filteringItem->quantity }}"
                                            class="form-control form-control-sm maxlength-options integerInput"
                                            maxlength="8" placeholder="Enter Quantity">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Sort Order</label>
                                        <input type="text" id="sort_order" name="sort_order"
                                            value="{{ $filteringItem->sort_order }}"
                                            class="form-control form-control-sm maxlength-options integerInput"
                                            maxlength="100" placeholder="E.g: 1">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Material</label>
                                        <input type="text" id="material" name="material"
                                            value="{{ $filteringItem->material }}"
                                            class="form-control form-control-sm maxlength-options integerInput"
                                            maxlength="8" placeholder="Enter Material">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Weight</label>
                                        <input type="text" id="weight" name="weight"
                                            value="{{ $filteringItem->weight }}"
                                            class="form-control form-control-sm maxlength-options" maxlength="200"
                                            placeholder="Enter Weight">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control form-control-sm" id="description" name="description" rows="1"
                                            placeholder="Enter Description">{{ $filteringItem->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Price Column -->
            </div>
            <!-- Form Submit Button Start-->
            <div class="text-end">
                <button type="reset" class="btn btn-danger">Reset<i class="icon-reset"></i></button>
                <button type="" class="btn btn-primary ">Submit
                    <i class="ph-paper-plane-tilt ms-2"></i>
                </button>
            </div>
            <!-- Form Submit Button End-->
        </form>
        <!-- Product Create Form End -->
    </div>
@endsection
<!--End Page Code -->
