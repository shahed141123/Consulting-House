@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Settings</span>
                    <span class="breadcrumb-item active">Frontend Menus</span>
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
            <div class="col-lg-10 offset-lg-1">
                <div class="card rounded-0">
                    <div class="card-body">

                        <div class="d-flex align-items-center table_header">
                            {{-- Add Details Start --}}
                            <div class="text-success table_header_content">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#menuItemAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                                <div class="text-center table_header_text">
                                    <h5 class="ms-1 mb-0">Frontend Menus Table</h5>
                                </div>
                            </div>
                            {{-- Add Details End --}}
                        </div>
                        <table class="table table-bordered table-striped menuItem_table table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="17%">Parent Menu</th>
                                    <th width="20%">MenuName</th>
                                    <th width="30%">URL</th>
                                    <th width="8%">Order</th>
                                    <th width="10%">Status</th>
                                    <th class="text-center" width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($menuItems)
                                    @foreach ($menuItems as $menuItem)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $menuItem->getParentName() }}</td>
                                            <td>{{ $menuItem->name }}</td>
                                            <td>{{ $menuItem->url }}</td>
                                            <td>{{ $menuItem->order }}</td>
                                            <td>
                                                @if ($menuItem->status == 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">In Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-content-center">
                                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                                        data-bs-target="#menuEditModal{{ $menuItem->id }}"
                                                        class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>

                                                <a href="{{ route('admin.frontend-menu.destroy', $menuItem->id) }}"
                                                    class="text-danger mx-2 delete">
                                                    <i class="ph-trash"></i>
                                                </a>

                                                <div id="menuItemEditModal-{{ $menuItem->id }}" class="modal fade"
                                                    data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Frontend Menu</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <form
                                                                action="{{ route('admin.frontend-menu.update', $menuItem->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Parent Menu Name
                                                                                    <span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="parent_id"
                                                                                    data-placeholder="Select a Profile Name...."
                                                                                    class="form-control form-control-sm select"
                                                                                    data-minimum-results-for-search="Infinity"
                                                                                    data-container-css-class="select-sm">
                                                                                    <option></option>
                                                                                    @foreach ($menuItems as $menuItem)
                                                                                        <option value="{{ $menuItem->id }}"
                                                                                            @selected($menuItem->parent_id == $menuItem->id)>
                                                                                            {{ $menuItem->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Name <span
                                                                                        class="text-danger">*</span></label>
                                                                                <input id="name" name="name"
                                                                                    type="text"
                                                                                    value="{{ $menuItem->name }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Menu Name"
                                                                                    maxlength="100">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">URL</label>
                                                                                <input id="url" name="url"
                                                                                    type="text"
                                                                                    value="{{ $menuItem->url }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Menu url"
                                                                                    maxlength="100">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Order</label>
                                                                                <input id="order" name="order"
                                                                                    type="text"
                                                                                    value="{{ $menuItem->order }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Menu order"
                                                                                    maxlength="100">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Target</label>
                                                                                <input id="target" name="target"
                                                                                    type="text"
                                                                                    value="{{ $menuItem->target }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Enter Menu target"
                                                                                    maxlength="100">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Icon [Font
                                                                                    Awesome(6) Icon]</label>
                                                                                <input id="icon" name="icon"
                                                                                    type="text"
                                                                                    value="{{ $menuItem->icon }}"
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Icon (Fa-solid fa-icon)"
                                                                                    maxlength="100">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Status <span
                                                                                        class="text-danger">*</span></label>
                                                                                <select name="status"
                                                                                    data-placeholder="Select Status..."
                                                                                    class="form-control form-control-sm select"
                                                                                    data-minimum-results-for-search="Infinity"
                                                                                    data-container-css-class="select-sm">
                                                                                    <option></option>
                                                                                    <option value="active"
                                                                                        @selected($menuItem->status == 'active')>Active
                                                                                    </option>
                                                                                    <option value="inactive"
                                                                                        @selected($menuItem->status == 'inactive')>
                                                                                        Inactive</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
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
        <!-- Disabled keyboard interaction add modal for Client  Type -->
        <div id="menuItemAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Frontend Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('admin.frontend-menu.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Parent Menu Name <span
                                                class="text-danger">*</span></label>
                                        <select name="parent_id" data-placeholder="Select a Profile Name...."
                                            class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            @foreach ($menuItems as $menuItem)
                                                <option value="{{ $menuItem->id }}">
                                                    {{ $menuItem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Menu Name"
                                            maxlength="100">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">URL</label>
                                        <input id="url" name="url" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Menu url"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Order</label>
                                        <input id="order" name="order" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Menu order"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Target</label>
                                        <input id="target" name="target" type="text"
                                            class="form-control form-control-sm" placeholder="Enter Menu target"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Icon [Font Awesome(6) Icon]</label>
                                        <input id="icon" name="icon" type="text"
                                            class="form-control form-control-sm" placeholder="Icon (Fa-solid fa-icon)"
                                            maxlength="100">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" data-placeholder="Select Status..."
                                            class="form-control form-control-sm select"
                                            data-minimum-results-for-search="Infinity"
                                            data-container-css-class="select-sm">
                                            <option></option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
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
        <!-- Disabled keyboard interaction add modal for menuItem -->
        <!-- /Edit Modal -->
        @foreach ($menuItems as $menuItem)
            <div id="menuEditModal{{ $menuItem->id }}" class="modal fade" data-bs-keyboard="false"
                data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Frontend Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('admin.frontend-menu.update', $menuItem->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Parent Menu Name
                                                <span class="text-danger">*</span></label>
                                            <select name="parent_id" data-placeholder="Select a Profile Name...."
                                                class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                @foreach ($menuItems as $item)
                                                    <option value="{{ $item->id }}" @selected($menuItem->parent_id == $item->id)>
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input id="name" name="name" type="text"
                                                value="{{ $menuItem->name }}" class="form-control form-control-sm"
                                                placeholder="Enter Menu Name" maxlength="100">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">URL</label>
                                            <input id="url" name="url" type="text"
                                                value="{{ $menuItem->url }}" class="form-control form-control-sm"
                                                placeholder="Enter Menu url" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">Order</label>
                                            <input id="order" name="order" type="text"
                                                value="{{ $menuItem->order }}" class="form-control form-control-sm"
                                                placeholder="Enter Menu order" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">Target</label>
                                            <input id="target" name="target" type="text"
                                                value="{{ $menuItem->target }}" class="form-control form-control-sm"
                                                placeholder="Enter Menu target" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">Icon [Font
                                                Awesome(6) Icon]</label>
                                            <input id="icon" name="icon" type="text"
                                                value="{{ $menuItem->icon }}" class="form-control form-control-sm"
                                                placeholder="Icon (Fa-solid fa-icon)" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-2">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" data-placeholder="Select Status..."
                                                class="form-control form-control-sm select"
                                                data-minimum-results-for-search="Infinity"
                                                data-container-css-class="select-sm">
                                                <option></option>
                                                <option value="active" @selected($menuItem->status == 'active')>Active
                                                </option>
                                                <option value="inactive" @selected($menuItem->status == 'inactive')>
                                                    Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- /Edit Modal -->

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.menuItem_table').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                autoWidth: false,
                responsive: true,
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    // width: 100,
                    targets: [0, 1, 2, 3, 5, 6],
                }, ],


            });
        });
    </script>
@endpush
