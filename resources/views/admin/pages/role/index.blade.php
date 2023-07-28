@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-header d-flex flex-wrap">
                    <h6 class="mb-0">All Roles</h6>
                    <div class="d-inline-flex ms-auto">
                        <a href="{{ route('admin.role.create') }}" type="button"
                            class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                            <span class="btn-labeled-icon bg-success text-white">
                                <i class="ph-plus-circle ph-sm"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-lg-12">
                        <table class="data-table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="20%"> Role Name</th>
                                    <th width="70%"> Permissions</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($roles))
                                    @foreach ($roles as $role)
                                        @php
                                            $permissionNames = App\Models\GroupPermission::getpermissionByRole($role->id);
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                @foreach ($permissionNames as $permissionName)
                                                    <span class="mb-1 badge bg-primary">
                                                        {{ App\Models\GroupPermission::getPermissionName($permissionName->permission_id) }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('admin.role.edit', $role->id) }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="{{ route('admin.role.destroy', $role->id) }}"
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

        $('.allPermission').click(function() {
            if ($(this).is(':checked')) {
                $('div input').prop('checked', true);
                $('.groupPermission').prop('checked', true);
            } else {
                $('div input').prop('checked', false);
                $('.groupPermission').prop('checked', false);
            }
        });
        $('.groupPermission').click(function() {
            if ($(this).is(':checked')) {
                $('div input').not('.allPermission').prop('checked',
                    true); // Check all input checkboxes except allPermission
            } else {
                $('div input').not('.allPermission').prop('checked',
                    false); // Uncheck all input checkboxes except allPermission
            }
        });
    </script>
@endpush
