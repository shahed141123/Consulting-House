@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Permission</h6>
                    <div class="d-inline-flex ms-auto">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#permissionAddModal"
                            class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                            <span class="btn-labeled-icon bg-success text-white">
                                <i class="ph-plus-circle ph-sm"></i>
                            </span>
                            Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="20%">Group Name</th>
                                    <th width="70%">Permission Names</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($permissions)
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            @php
                                                $permissionNames = App\Models\GroupPermission::getpermissionByGroupName($permission->group_name);
                                            @endphp

                                            <td>{{ $permission->getGroupPermissionName() }}</td>
                                            <td>
                                                @php
                                                    $class_names = ['bg-secondary', 'bg-danger', 'bg-success', 'bg-warning', 'bg-info', 'bg-pink', 'bg-purple', 'bg-indigo', 'bg-teal', 'bg-yellow'];
                                                @endphp

                                                @foreach ($permissionNames as $permissionName)
                                                    <span
                                                        class="mb-1 badge text-black {{ $class_names[array_rand($class_names)] }}">
                                                        {{ $permissionName->name }}
                                                    </span>
                                                @endforeach
                                            </td>

                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#permissionEditModal{{ $permission->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <div id="permissionEditModal{{ $permission->id }}" class="modal fade"
                                                        data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Your Permission</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"></button>
                                                                </div>

                                                                <form
                                                                    action="{{ route('admin.permission.update', $permission->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Permission
                                                                                Name</label>
                                                                            <input type="text" name="name"
                                                                                value="{{ $permission->name }}"
                                                                                class="form-control form-control-sm"
                                                                                placeholder="Enter Permission Name"
                                                                                maxlength="200" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Permission
                                                                                Group</label>
                                                                            <select
                                                                                data-placeholder="Select Permission Group Name..."
                                                                                name="group_name"
                                                                                class="form-control form-control-sm select select-permission"
                                                                                data-container-css-class="select-sm">
                                                                                <option></option>
                                                                                @foreach ($groupPermissions as $groupPermission)
                                                                                    <option @selected($groupPermission->id == $permission->group_name)
                                                                                        value="{{ $groupPermission->id }}">
                                                                                        {{ $groupPermission->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-link"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{ route('admin.permission.destroy', $permission->group_name) }}"
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
    <!-- Disabled keyboard interaction add modal for Brand -->
    <div id="permissionAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.permission.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                            <input type="text" name="name" class="form-control form-control-sm"
                                placeholder="Enter Permission Name" maxlength="200" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Permission Group</label>
                            <select data-placeholder="Select Permission Group Name..." name="group_name"
                                class="form-control form-control-sm select select-permission"
                                data-container-css-class="select-sm">
                                <option></option>
                                @foreach ($groupPermissions as $groupPermission)
                                    <option value="{{ $groupPermission->id }}">{{ $groupPermission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction add modal for brand -->

    <!-- /javascript behaviour -->
@endsection

@push('scripts')
    <script type="text/javascript">
        $('.data-table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [3],
            }, ],
        });
        $('#permissionAddModal').on('shown.bs.modal', function() {
            $('.select-permission').select2({
                dropdownParent: $('#permissionAddModal')
            })
        });
        $('#permissionEditModal').on('shown.bs.modal', function() {
            $('.select-permission').select2({
                dropdownParent: $('#permissionEditModal')
            })
        });
    </script>
@endpush






{{-- <span class="mb-1 badge bg-secondary">Secondary</span>
                                                <span class="mb-1 badge bg-danger">Danger</span>
                                                <span class="mb-1 badge bg-success">Success</span>
                                                <span class="mb-1 badge bg-warning">Warning</span>
                                                <span class="mb-1 badge bg-info">Info</span>
                                                <span class="mb-1 badge bg-dark">Dark</span>
                                                <span class="mb-1 badge bg-pink">Pink</span>
                                                <span class="mb-1 badge bg-purple">Purple</span>
                                                <span class="mb-1 badge bg-indigo">Indigo</span>
                                                <span class="mb-1 badge bg-teal">Teal</span>
                                                <span class="mb-1 badge bg-yellow text-black">Yellow</span> --}}
