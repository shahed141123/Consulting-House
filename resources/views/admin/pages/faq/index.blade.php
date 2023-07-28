@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Site Content</span>
                    <span class="breadcrumb-item active">FAQ Management</span>
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
        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered">
                                <thead>
                                    <tr class="bg-secondary border border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="15%">Category</th>
                                        <th width="50%">Question</th>
                                        <th width="10%">Order</th>
                                        <th width="10%">Status</th>
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
    <!-- Javascript behaviour -->

    <!-- /javascript behaviour -->
    <!-- Disabled keyboard interaction add modal for Faq -->
    <div id="faqAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Add Faq</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.faq.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Category <span class="text-danger">*</span></label>
                                    <input name="category" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Category" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label ">Status</label>
                                    <select name="status" data-placeholder="Select a Status..." class="form-control select"
                                        data-minimum-results-for-search="Infinity">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-2">
                                    <label class="form-label">Order</label>
                                    <input type="text" class="form-control form-control-sm integerInput"
                                        placeholder="E.g: 100" id="order" name="order">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Question</label>
                                    <input id="question" name="question" type="text"
                                        class="form-control form-control-sm" placeholder="Do You Have Question ?"
                                        maxlength="100" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Answer</label>
                                    <textarea class="form-control form-control-sm" id="answer" name="answer" placeholder="Yes I Have."></textarea>
                                </div>
                            </div>
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
    <!-- Disabled keyboard interaction Edit modal for Faq -->
    @foreach ($faqs as $faq)
        <div id="faqEditModal{{ $faq->id }}" class="modal fade text-start" data-bs-keyboard="false"
            data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-secondary">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Category <span class="text-danger">*</span></label>
                                        <input name="category" value="{{ $faq->category }}" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Category"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label ">Status</label>
                                        <select name="status" data-placeholder="Select a Status..."
                                            class="form-control select" data-minimum-results-for-search="Infinity">
                                            <option></option>
                                            <option @selected($faq->status == 'active') value="active">Active</option>
                                            <option @selected($faq->status == 'inactive') value="inactive">In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Order</label>
                                        <input type="text" class="form-control form-control-sm integerInput"
                                            placeholder="E.g: 100" id="order" name="order"
                                            value="{{ $faq->order }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Question</label>
                                        <input id="question" name="question" value="{{ $faq->question }}"
                                            type="text" class="form-control form-control-sm"
                                            placeholder="Do You Have Question ?" maxlength="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Answer</label>
                                        <textarea class="form-control form-control-sm" id="answer" name="answer" placeholder="Yes I Have.">{{ $faq->answer }}</textarea>
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
    @endforeach
    <!-- Disabled keyboard interaction Show modal for Faq -->
    <div id="faqViewModal" class="modal fade text-start" data-bs-keyboard="false" data-bs-backdrop="static"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary d-flex align-items-center">
                        <span>Category Name Here </span>
                        <span class="badge bg-secondary ms-2">50</span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-info">A frequently asked questions list is often?</h5>
                                <p><span class="text-success fw-bold">Ans:</span> Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Perferendis cumque odit dolore
                                    vel, eius officia accusantium recusandae nobis repudiandae qui quibusdam natus,
                                    dignissimos repellendus nihil maxime laudantium exercitationem. Officiis, voluptatum.
                                </p>
                            </div>
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
@endsection




@push('scripts')
    <script type="text/javascript">
        $(function product() {
            var table = $('#dataTable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ route('admin.faq.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'category',
                        name: 'category',
                    },
                    {
                        data: 'question',
                        name: 'question',
                    },
                    {
                        data: 'order',
                        name: 'order',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        });
    </script>
@endpush
