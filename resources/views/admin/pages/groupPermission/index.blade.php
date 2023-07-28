@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Group Permission Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#groupPermissionAddModal"
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
                    <div class="col-lg-10 offset-lg-1">
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="90%">Name</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($groupPermissions)
                                    @foreach ($groupPermissions as $groupPermission)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $groupPermission->name }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#groupPermissionEditModal{{ $groupPermission->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <div id="groupPermissionEditModal{{ $groupPermission->id }}"
                                                        class="modal fade" data-bs-keyboard="false"
                                                        data-bs-backdrop="static" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Your Group Permission</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <form
                                                                    action="{{ route('admin.group-permission.update', $groupPermission->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Name</label>
                                                                            <input id="name" name="name"
                                                                                value="{{ $groupPermission->name }}"
                                                                                type="text"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Group Permission Name"
                                                                                maxlength="100">
                                                                        </div>
                                                                    </div>

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
                                                    <a href="{{ route('admin.group-permission.destroy', $groupPermission->id) }}"
                                                        class="text-danger mx-2 delete">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction group permission modal for Brand -->
    <div id="groupPermissionAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your Group Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('admin.group-permission.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input id="name" name="name" value="{{ old('name') }}" type="text"
                                class="form-control form-control-sm" placeholder="Enter Group Permission Name"
                                maxlength="100">
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
    <!-- Disabled keyboard interaction group permission modal for brand -->
    <!-- /javascript behaviour -->
@endsection

@push('scripts')
    <script>
        $('.data-table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [2],
            }, ],
        });
    </script>
@endpush
