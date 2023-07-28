<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="col-lg-12">
        <div class="card border border-secondary">
            <div class="card-header bg-secondary d-flex flex-wrap">
                <h6 class="mb-0">Rfq Order Form</h6>
                <div class="d-inline-flex ms-auto">
                    <a href="{{ route('admin.order.index') }}" class="btn btn-outline-yellow btn-sm">
                        <i class="ph-chats ph-lg me-2"></i>
                        Back
                    </a>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.order.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">User Name</label>
                                <select name="user_id" data-placeholder="Select User Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">RFQ Code</label>
                                <select name="rfq_id" data-placeholder="Select Rfq Code"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    @foreach ($rfqs as $rfq)
                                        <option value="{{ $rfq->id }}">{{ $rfq->rfq_code }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Payment Methods</label>
                                <select name="payment_method_id" data-placeholder="Select Payment Method Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm"
                                    required>
                                    <option></option>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <option value="{{ $paymentMethod->id }}">{{ $paymentMethod->method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" name="payment_status"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="paid">Paid</option>
                                    <option value="unpaid">Unpaid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Order Number</label>
                                <input name="order_number" value="" type="text"
                                    class="form-control form-control-sm priceInput" placeholder="Enter Order Number"
                                    maxlength="20" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Invoice Number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" name="invoice_number"
                                        placeholder="Enter Invoice Number" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Name</label>
                                <input name="billing_name" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing Name" maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Address Line One</label>
                                <input name="billing_address_line1" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing Address Line One"
                                    maxlength="255">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Address Line Two</label>
                                <input name="billing_address_line2" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing Address Line Two"
                                    maxlength="255">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing City</label>
                                <input name="billing_city" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing Address Line Two"
                                    maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing State</label>
                                <input name="billing_state" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing State"
                                    maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Country</label>
                                <select name="Billing_Country" data-placeholder="Select Billing Country Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm">
                                    <option></option>
                                    @foreach ($countries as $countrie)
                                        <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row  d-flex align-items-center">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Postal Code</label>
                                <input name="billing_postal_code" value="" type="text"
                                    class="form-control form-control-sm decimalInput"
                                    placeholder="Enter billing_postal_code" maxlength="20" required>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Billing Phone</label>
                                <input name="billing_phone" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Billing Phone"
                                    maxlength="20">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Name</label>
                                <input name="shipping_name" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping Name"
                                    maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Phone</label>
                                <input name="shipping_phone" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping Phone"
                                    maxlength="20">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Country</label>
                                <select name="shipping_country" data-placeholder="Select Shipping Country Name"
                                    class="form-control form-control-sm select" data-container-css-class="select-sm">
                                    <option></option>
                                    @foreach ($countries as $countrie)
                                        <option value="{{ $countrie->id }}">{{ $countrie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Address Line One</label>
                                <input name="shipping_address_line1" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping Address Line One"
                                    maxlength="255">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Address Line Two</label>
                                <input name="shipping_address_line2" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping Address Line One"
                                    maxlength="255">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping City</label>
                                <input name="shipping_city" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping City"
                                    maxlength="100">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping State</label>
                                <input name="shipping_state" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Shipping State"
                                    maxlength="100">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipping Postal Code</label>
                                <input name="shipping_postal_code" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter shipping_postal_code"
                                    maxlength="20">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm select" data-placeholder="Select a Status"
                                    data-minimum-results-for-search="Infinity" name="status"
                                    data-container-css-class="select-sm">
                                    <option></option>
                                    <option value="pending">pending</option>
                                    <option value="processing">processing</option>
                                    <option value="shipped">shipped</option>
                                    <option value="delivered">delivered</option>
                                    <option value="cancelled">cancelled</option>
                                    <option value="return">return</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Return Amount</label>
                                <input name="return_amount" value="" type="text"
                                    class="form-control form-control-sm priceInput" placeholder="Enter Return Amount"
                                    maxlength="12">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Total Amount</label>
                                <input name="total_amount" value="" type="text"
                                    class="form-control form-control-sm priceInput" placeholder="Enter Total Amount"
                                    maxlength="12">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Transaction Number</label>
                                <input name="transaction_number" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Transaction Number"
                                    maxlength="100">
                                <span class=" show_focus_text"
                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                    transaction_number</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Order Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="date" class="form-control form-control-sm" name="order_date"
                                        placeholder="Enter Order Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Processing Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="date" class="form-control form-control-sm" name="processing_date"
                                        placeholder="Enter Processing Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Shipped Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="date" class="form-control form-control-sm" name="shipped_date"
                                        placeholder="Enter Shipped Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Delivered Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="date" class="form-control form-control-sm" name="delivered_date"
                                        placeholder="Enter Delivered Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Return Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="ph-calendar"></i></span>
                                    <input type="date" class="form-control form-control-sm" name="return_date"
                                        placeholder="Enter Delivered Date">
                                </div>
                            </div>
                        </div>
                        {{-- Text --}}
                        <div class="col-lg-3">
                            <div class="mb-2">
                                <label class="form-label">Return Reason</label>
                                <input name="return_reason" value="" type="text"
                                    class="form-control form-control-sm" placeholder="Enter Return Reason"
                                    maxlength="100">
                                <span class=" show_focus_text"
                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                    Return Reason</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-2">
                                <label class="form-label">Notes</label>
                                <textarea rows="3" cols="3" name="notes" class="form-control form-control-sm"
                                    placeholder="Enter Notes"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <div class="col-lg-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Save changes</button>
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
        initTokenField('.color-limit')
        initTokenField('.size-limit')
        // Here Is The Input Field for price
        priceInput('.priceInput');
        priceInput('.discountInput');
    </script>
@endpush
