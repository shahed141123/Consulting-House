<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="container border border-secondary bg-white rounded">
        <div class="row rounded border border-bottom-secondary d-flex align-items-center p-2 shadow-lg">
            <div class="col-lg-1">
                <a href="{{ route('admin.pre-order.index') }}">
                    <button type="submit" class="create_form_submit_btn"><i class="ph ph-arrow-bend-up-left"></i></button>
                </a>
            </div>
            <div class="col-lg-11  border-bottom-secondary">
                <h1 class="text-secondary text-center p-0 m-0">Add Pre-Order Form</h1>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-lg-12">
                <!-- Pre order Create Form Start -->
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label class="form-label">Product Name</label>
                                <select name="product_id" data-placeholder="Select Product Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Order Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="text" class="form-control form-control-sm daterange-single"
                                        name="order_date" value="03/18/2013" placeholder="Enter order Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Order Time</label>
                                <input name="order_time" value="" type="time" class="form-control form-control-sm"
                                    placeholder="Enter Order Time" maxlength="100">
                                {{-- <span class=" show_focus_text" style="color: #174a62; font-size: 12px; display: none;">Enter
                                    order Time</span> --}}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Quantity</label>
                                <select name="quantity" data-placeholder="Select Quantity"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">User Name <span class="text-danger">*</span></label>
                                <select name="user_id" data-placeholder="Select User Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Vendor Name</label>
                                <select name="vendor_id" data-placeholder="Select Vendor Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                    <option value="56">56</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">PMethod Name</label>
                                <select name="payment_method_id" data-placeholder="Select Vendor Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    <option value="bkash">bkash</option>
                                    <option value="nogod">nogod</option>
                                    <option value="dbbl">dbbl</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2 border p-1 mt-4 rounded">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="confirm">Confirmed
                                        <input type="checkbox" class="form-check-input form-check-input-secondary"
                                            name="confirmed" placeholder="Enter Confirm Or Unconfirm">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2 border p-1 mt-4 rounded">
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="paid">Paid
                                        <input type="checkbox" class="form-check-input form-check-input-secondary"
                                            name="paid" placeholder="Enter Paid Or Upaid">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-2">
                                <label class="form-label">Total Amount</label>
                                <input name="total_amount" value="" type="text"
                                    class="form-control form-control-sm decimalInput" placeholder="Enter Total Amount"
                                    maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" name="status"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="pending">Pending</option>
                                    <option value="deal">Deal</option>
                                    <option value="order">Order</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="mb-2">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control form-control-sm" rows="1" cols="1" name="notes"
                                    placeholder="Enter Address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-end py-2 pb-0 mb-0">
                                <div class="">
                                    <button type="submit" class="create_form_submit_btn">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Pre order Create Form End -->
            </div>
        </div>
    </div>
@endsection
<!--End Page Code -->


@push('scripts')
    <script>
        // Here Is The Input Field for price
        priceInput('.priceInput');
        priceInput('.discountInput');
    </script>
@endpush
