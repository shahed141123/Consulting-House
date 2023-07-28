<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card border border-secondary">
            <div class="card-header bg-secondary d-flex flex-wrap">
                <h6 class="mb-0">Rfq Add Form</h6>
                <div class="d-inline-flex ms-auto">
                    <a href="" class="btn btn-outline-yellow btn-sm">
                        <i class="ph-chats ph-lg me-2"></i>
                        Back
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.rfq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Rfq Code<span class="text-danger">*</span></label>
                                <input type="text" name="rfq_code" value=""
                                    class="form-control form-control-sm maxlength-options" maxlength="200"
                                    placeholder="Enter Rfq Code" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Selected Product<span class="text-danger">*</span></label>
                                <select name="product_id" data-placeholder="Select Selected Product"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="New">Casual Floral Dress Bold</option>
                                    <option value="Refurbished">Casual Floral Dress Bold</option>
                                    <option value="Used">Casual Floral Dress Bold</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-2">
                                <label class="form-label">Custom Product Name</label>
                                <input type="text" name="custom_product_name" value=""
                                    class="form-control form-control-sm" placeholder="Enter Custom Product Name">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Vendor Name<span class="text-danger">*</span></label>
                                <select name="vendor_id" id="brand_id" data-placeholder="Select Vendor Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="New">New</option>
                                    <option value="Refurbished">Refurbished</option>
                                    <option value="Used">Used</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Quantity</label>
                                <input type="text" name="quantity"
                                    class="form-control form-control-sm maxlength-options discountInput" maxlength="50"
                                    placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Price</label>
                                <input type="text" id="price" name="price"
                                    class="form-control form-control-sm maxlength-options priceInput" maxlength="10"
                                    placeholder="Enter Product price">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Tax</label>
                                <input type="text" name="tax" class="form-control form-control-sm"
                                    placeholder="Enter Tax" id="mask_tax" maxlength="7">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Vat</label>
                                <input type="text" name="vat"
                                    class="form-control form-control-sm maxlength-options priceInput" maxlength="7"
                                    placeholder="Enter Vat">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Rfq Status <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" name="rfq_status"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="rfq">Rfq</option>
                                    <option value="deal">Deal</option>
                                    <option value="order">Order</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">User Name </label>
                                <div class="input-group">
                                    <input type="text" name="user_name" class="form-control form-control-sm"
                                        placeholder="Enter User Name" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">User Email<span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="email" name="user_email" class="form-control form-control-sm"
                                        placeholder="Enter User Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">User Phone</label>
                                <div class="input-group">
                                    <input type="text" name="user_phone" class="form-control form-control-sm"
                                        placeholder="Enter User Phone" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" name="status"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="pending">Pending</option>
                                    <option value="replied">Replied</option>
                                    <option value="closed">Closed</option>
                                    <option value="rejected">Rejected</option>>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Delivery Address<span class="text-danger">*</span></label>
                                <input type="text" name="delivery_address" class="form-control form-control-sm"
                                    placeholder="E.g: Mirpur">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Product Description</label>
                                <textarea rows="3" cols="3" name="product_description" class="form-control form-control-sm"
                                    placeholder="Enter Product Description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Product Notes</label>
                                <textarea rows="3" cols="3" name="notes" class="form-control form-control-sm"
                                    placeholder="Enter Product Notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <div class="col-lg-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ">Save changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
<!--End Page Code -->
@push('scripts')
    <script>
        priceInput('.priceInput');
        priceInput('.discountInput');
    </script>
@endpush
