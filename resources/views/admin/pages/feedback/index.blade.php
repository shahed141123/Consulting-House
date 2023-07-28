@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">CRM</span>
                    <span class="breadcrumb-item active">Feedbacks</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- Javascript behaviour -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex flex-wrap p-1">
                        <h6 class="mb-0">All Feedback Messages</h6>
                        <div class="d-inline-flex ms-auto">
                            <div class="d-flex justify-content-end pb-1">
                                <a href="" data-bs-toggle="modal" data-bs-target="#addFeedbackModal">
                                    <button type="button"
                                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                        <span class="btn-labeled-icon bg-success text-white">
                                            <i class="ph-plus-circle ph-sm"></i>
                                        </span>
                                        Add
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse show">
                        <div class="card-body pt-1">
                            <div class="col-lg-12 p-0">
                                <div class="table-responsive">
                                    <table class="feedbackDT table table-bordered">
                                        <thead>
                                            <tr class="bg-secondary border text-white">
                                                <th width="5%">#</th>
                                                <th width="19%">U. Name</th>
                                                <th width="17%">Consultation Rating</th>
                                                <th width="23%">Business Management Rating</th>
                                                <th width="17%">Website Rating</th>
                                                <th width="10%">Approved</th>
                                                <th class="text-center" width="9%">Action</th>
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
        </div>
        <!-- /javascript behaviour -->
        <!-- Disabled keyboard interaction Add modal for Feedback -->
        <div id="addFeedbackModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-secondary">Add Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">User Name <span class="text-danger">*</span></label>
                                        <select name="user_id" data-container-css-class="select-sm"
                                            class="form-control form-control-sm select" data-placeholder="E.g: User Name"
                                            required>
                                            <option></option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Title" maxlength="100"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Rating <span class="text-danger">*</span></label>
                                        <input name="title" type="text"
                                            class="form-control form-control-sm integerInput" placeholder="E.g: 5"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Approved</label>
                                        <select class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" name="approved"
                                            data-container-css-class="select-sm" data-placeholder="E.g: Pending">
                                            <option></option>
                                            <option value="pending">Pending</option>
                                            <option value="approved">Approved</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Vendor Name <span class="text-danger">*</span></label>
                                        <select name="vendor_id" data-container-css-class="select-sm"
                                            class="form-control form-control-sm select" data-placeholder="E.g: Russel"
                                            required>
                                            <option></option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Public</label>
                                        <select class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" name="public"
                                            data-container-css-class="select-sm" data-placeholder="Select Public">
                                            <option></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control form-control-sm" id="message" rows="3" name="message"
                                            placeholder="Enter Message" maxlength="255"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Disabled keyboard interaction Edit modal for Feedback -->
        <div id="editFeedbackModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-secondary">Edit Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">User Name <span class="text-danger">*</span></label>
                                        <select name="user_id" data-container-css-class="select-sm"
                                            class="form-control form-control-sm select" data-placeholder="E.g: User Name"
                                            required>
                                            <option></option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Title"
                                            maxlength="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Rating <span class="text-danger">*</span></label>
                                        <input name="title" type="text"
                                            class="form-control form-control-sm integerInput" placeholder="E.g: 5"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Approved</label>
                                        <select class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" name="approved"
                                            data-container-css-class="select-sm" data-placeholder="E.g: Pending">
                                            <option></option>
                                            <option value="pending">Pending</option>
                                            <option value="approved">Approved</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Vendor Name </label>
                                        <select id="vendor_id" class="form-control form-control-sm select"
                                            data-enable-filtering="true" data-enable-case-insensitive-filtering="true"
                                            data-container-css-class="select-sm" data-placeholder="Select Vendor Name">
                                            <option></option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                            <option value="568">568</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Public</label>
                                        <select class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity" name="public"
                                            data-container-css-class="select-sm" data-placeholder="Select Public">
                                            <option></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control form-control-sm" id="message" rows="3" name="message"
                                            placeholder="Enter Message" maxlength="255"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save
                                changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.feedbackDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                autoWidth: false,
                responsive: true,
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    width: 100,
                    targets: [0, 1, 2, 3, 4, 6],
                }, ],
            });
        });
    </script>
@endpush
