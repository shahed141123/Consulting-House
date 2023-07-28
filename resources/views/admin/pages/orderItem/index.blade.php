@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Order Item Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#orderItemAddModal"
                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-plus-circle ph-sm"></i>
                        </span>
                        Add
                    </button>
                </div>
            </div>
            <div class="collapse show">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="20%">Order Name</th>
                                        <th width="25%">Product Name</th>
                                        <th width="10%">Color</th>
                                        <th width="10%">Size</th>
                                        <th width="10%">Price</th>
                                        <th width="10%">Quantity</th>
                                        <th class="text-center" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Multi order</td>
                                        <td>Slick Slider</td>
                                        <td>White</td>
                                        <td>xl</td>
                                        <td>4558 $</td>
                                        <td>22</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#OrderItemEditModal" class="text-primary mx-1">
                                                    <i class="ph-pen"></i>
                                                </a>
                                                <div id="OrderItemEditModal" class="modal fade" data-bs-keyboard="false"
                                                    data-bs-backdrop="static" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Ware House Info</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <form action="" method="POST">
                                                                @csrf
                                                                {{-- Modal Body --}}
                                                                <div class="modal-body">
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Name</label>
                                                                                <input name="name" value=""
                                                                                    type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Name" maxlength="100"
                                                                                    required>
                                                                                <span class=" show_focus_text"
                                                                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                    Ware House Name</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">City</label>
                                                                                <input name="city" value=""
                                                                                    type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter City" maxlength="50">
                                                                                <span class=" show_focus_text"
                                                                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                    Ware House City
                                                                                    Name</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">State</label>
                                                                                <input name="state" value=""
                                                                                    type="text"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter State"
                                                                                    maxlength="50">
                                                                                <span class="show_focus_text"
                                                                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                    Ware House
                                                                                    State</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <div class="mb-2">
                                                                                    <label class="form-label">Zip
                                                                                        Code</label>
                                                                                    <input name="zip_code" value=""
                                                                                        type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder="Enter Phone"
                                                                                        maxlength="100">
                                                                                    <span class="show_focus_text"
                                                                                        style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                        Ware House Zip
                                                                                        Code</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <div class="mb-2">
                                                                                    <label class="form-label">Contact
                                                                                        Name</label>
                                                                                    <input name="contact_name"
                                                                                        value="" type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder="Enter Phone"
                                                                                        maxlength="100">
                                                                                    <span class=" show_focus_text"
                                                                                        style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                        Ware House Contact
                                                                                        Name</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <div class="mb-2">
                                                                                    <label class="form-label">Contact
                                                                                        Email</label>
                                                                                    <input name="contact_email"
                                                                                        value="" type="email"
                                                                                        class="form-control form-control-sm"
                                                                                        placeholder="Enter Phone"
                                                                                        maxlength="100">
                                                                                    <span class=" show_focus_text"
                                                                                        style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                        Ware House
                                                                                        Email</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Address</label>
                                                                                <textarea class="form-control form-control-sm" rows="1" cols="1" name="Address"
                                                                                    placeholder="Enter Supplier Address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Contact
                                                                                    Phone</label>
                                                                                <input name="contact_phone" value=""
                                                                                    type="email"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Supplier contact_phone"
                                                                                    maxlength="100">
                                                                                <span class=" show_focus_text"
                                                                                    style="color: #174a62; font-size: 12px; display: none;">Enter
                                                                                    Ware House
                                                                                    Email</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- Modal Button --}}
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
                                                <a href="" class="text-danger mx-1 delete">
                                                    <i class="ph-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Coupon -->
    <div id="orderItemAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Add Order Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
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
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Order Name</label>
                                    <select name="order_id" data-placeholder="Select Order Name"
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
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Color</label>
                                    <input name="color" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Color" maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">Quantity</label>
                                    <input name="quantity" value="" type="text"
                                        class="form-control form-control-sm integerInput" placeholder="Enter Quantity"
                                        maxlength="100">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Size</label>
                                        <input name="size" value="" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Size"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <div class="mb-2">
                                        <label class="form-label">Price</label>
                                        <input name="price" value="" type="text"
                                            class="form-control form-control-sm integerInput" placeholder="Enter Price"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Coupon -->
    <!-- /javascript behaviour -->
@endsection
