@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Advertisement Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#advertisementAddModal"
                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-plus-circle ph-sm"></i>
                        </span>
                        Add
                    </button>
                </div>
            </div>
            <div class="collapse show">
            </div>
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white text-center">
                                    <th width="5%">#</th>
                                    <th width="5%">Image</th>
                                    <th width="35%">Title</th>
                                    <th width="15%">Start Date</th>
                                    <th width="15%">End Date</th>
                                    <th width="5%">Status</th>
                                    <th class="text-center" width="5%">Action</th>
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
    <!-- Disabled keyboard interaction add modal for advertisement -->
    <div id="advertisementAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your advertisement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.advertisement.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input name="title" value="" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Title" maxlength="50" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm select"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Select Status"
                                        data-container-css-class="select-sm" name="status">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Link</label>
                                    <input name="link" value="" type="url" class="form-control form-control-sm"
                                        placeholder="Enter Link" maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control form-control-sm" id="image"
                                            name="image">
                                        <button class="btn btn-light btn-sm" type="button">Preview</button>
                                        {{-- <img class="img-fluid" src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg" alt=""> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Start Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm daterange-single"
                                            name="start_date" value="03/18/2013" placeholder="Enter Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">End Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm daterange-single"
                                            name="end_date" value="03/18/2013" placeholder="Enter End Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control form-control-sm" rows="1" id="description" name="description"
                                        placeholder="Enter your description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction Edit modal for advertisement -->
    <div id="advertisementEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your advertisement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Modal Body --}}
                    <div class="modal-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input name="title" value="" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Title" maxlength="50"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Status</label>
                                    <select class="form-control form-control-sm select"
                                        data-minimum-results-for-search="Infinity" data-placeholder="Select Status"
                                        data-container-css-class="select-sm" name="status">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="in active">In Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Link</label>
                                    <input name="link" value="" type="url"
                                        class="form-control form-control-sm" placeholder="Enter Link" maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control form-control-sm" id="image"
                                            name="image">
                                        <button class="btn btn-light btn-sm" type="button">Preview</button>
                                        {{-- <img class="img-fluid" src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg" alt=""> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Start Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm daterange-single"
                                            name="start_date" value="03/18/2013" placeholder="Enter Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">End Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ph-calendar"></i></span>
                                        <input type="text" class="form-control form-control-sm daterange-single"
                                            name="end_date" value="03/18/2013" placeholder="Enter End Date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control form-control-sm" rows="1" id="description" name="description"
                                        placeholder="Enter your description"></textarea>
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
    <!-- /javascript behaviour -->
@endsection


@push('scripts')
    <script type="text/javascript">
        $(function product() {
            var table = $('#dataTable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ route('admin.advertisement.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            const imageSource = data ? `{{ asset('storage/requestImg/${data}') }}` :
                                `https://static.thenounproject.com/png/1554489-200.png`;
                            return `<span><img src="${imageSource}" height="40"></span>`;
                        }
                    },
                    {
                        data: 'title',
                        name: 'title',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'start_date',
                        name: 'start_date',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'end_date',
                        name: 'end_date',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        name: 'status'
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
