<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('admin.role.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Role Name</label>
                        <input id="name" name="name" value="{{ old('name') }}" type="text"
                            class="form-control form-control-sm" placeholder="Enter Role Name" maxlength="200">
                    </div>
                    {{-- For All Permission --}}
                    <div class="row mt-3" style="border-bottom: 1px solid #9d9fa23b;">
                        <div class="col-lg-12">
                            <label><input type="checkbox" name="sample" class="allPermission" /> Permission
                                All</label>
                        </div>
                    </div>
                    {{-- For Individual Permission --}}
                    @foreach ($groupNames as $groupName)
                        @php
                            $permissionNames = App\Models\GroupPermission::getpermissionByGroupName($groupName->id);
                        @endphp
                        <div class="row d-flex justify-content-between mt-2">
                            <div class="col-lg-3" style="border-right: 1px solid #9d9fa23b;">
                            <label><input type="checkbox" name="group_name" class="groupPermission"
                                        value="{{ $groupName->id }}" />
                                    {{ $groupName->name }}</label>
                            </div>
                            <div class="col-lg-9" id="checkboxlist">
                                <div class="row">
                                    @foreach ($permissionNames as $permissionName)
                                        <div class="col-lg-4">
                                            <label><input class="me-1 groupPermission{{ $groupName->id }}" type="checkbox"
                                                    name="permission_id[]" value="{{ $permissionName->id }}"/>{{ $permissionName->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary from-prevent-multiple-submits">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<!--End Page Code -->


@push('scripts')
    <script>
        $('.allPermission').click(function() {
            if ($(this).is(':checked')) {
                $('div input').prop('checked', true);
                $('.groupPermission').prop('checked', true); // Check the groupPermission checkbox
            } else {
                $('div input').prop('checked', false);
                $('.groupPermission').prop('checked', false); // Uncheck the groupPermission checkbox
            }
        });
        $('.groupPermission').click(function() {
            var id = $(this).val();
            var attr = 'groupPermission' + id;
            if ($(this).is(':checked')) {
                $('.' + attr).prop("checked", true); // Concatenate the class name variable
            } else {
                $('.' + attr).prop("checked", false); // Concatenate the class name variable
            }
        });
    </script>
@endpush
