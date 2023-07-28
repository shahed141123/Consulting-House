@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">All Product Draft</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#ProductDraftAddModal"
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
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="30%">Product Name</th>
                                        <th width="35%">User Name</th>
                                        <th width="10%">Quantity</th>
                                        <th class="text-center" width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for Product Draft -->
    <div id="ProductDraftAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Add Product Draft</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Product Name</label>
                                    <select name="product_id" data-placeholder="Enter Product Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">nogod</option>
                                        <option value="dbbl">dbbl</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">User Name</label>
                                    <select name="user_id" data-placeholder="Select User Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">nogod</option>
                                        <option value="dbbl">dbbl</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Quantity</label>
                                    <input name="quantity" value="" type="text"
                                        class="form-control form-control-sm integerInput" placeholder="Enter Quantity"
                                        maxlength="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction Edit modal for Product Draft -->
    <div id="productDraftEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Product Draft</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Product
                                        Name</label>
                                    <select name="product_id" data-placeholder="Enter Product Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">nogod</option>
                                        <option value="dbbl">dbbl</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">User Name</label>
                                    <select name="user_id" data-placeholder="Select User Name"
                                        class="form-control form-control-sm select" data-container-css-class="select-sm"
                                        required>
                                        <option></option>
                                        <option value="bkash">bkash</option>
                                        <option value="nogod">nogod</option>
                                        <option value="dbbl">dbbl</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Quantity</label>
                                    <input name="quantity" value="" type="text"
                                        class="form-control form-control-sm integerInput" placeholder="Enter Quantity"
                                        maxlength="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Modal Button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save
                            changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->
@endsection

@push('scripts')
<script type="text/javascript">
    $(function() {
        var table = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.product-draft.index') }}",
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'product.name',
                    name: 'product.name',
                },
                {
                    data: 'user.name',
                    name: 'user.name',
                },
                {
                    data: 'quantity',
                    name: 'quantity',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            columnDefs: [{
                "defaultContent": "-",
                "targets": "_all"
            }]
        });
    });
</script>

@endpush
