@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="ph-house me-2"></i> Home</a>
                        <a href="javascript:void(0);" class="breadcrumb-item">Site Contents</a>
                        <a href="{{ route('admin.terms-privacy-category.index') }}" class="breadcrumb-item active">Terms &
                            Policy Category</a>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Highlighting rows and columns -->
        <div class="content mt-2">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card rounded-0">
                        <div class="card-body">

                            <div class="d-flex align-items-center table_header">
                                {{-- Add Details Start --}}
                                <div class="text-success table_header_content">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#policyCategoryAdd"
                                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm table_header_button">
                                        <span class="btn-labeled-icon bg-success text-white">
                                            <i class="ph-plus-circle ph-sm"></i>
                                        </span>
                                        Add
                                    </button>

                                    <div class="text-center table_header_text">
                                        <h5 class="ms-1 mb-0">Terms & Policy Category</h5>
                                    </div>
                                </div>
                                {{-- Add Details End --}}
                            </div>
                            <table class="table termsCategoryDT table-bordered table-hover text-center">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th width="5">Sl No:</th>
                                        <th width="20">Type</th>
                                        <th width="65">Name</th>
                                        <th width="10" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($categories)
                                        @foreach ($categories as $key => $categorie)
                                            <tr>
                                                <td class="text-center">{{ ++$key }}</td>
                                                <td>{{ ucfirst($categorie->type) }}</td>
                                                <td>{{ $categorie->name }}</td>
                                                <td>
                                                    <a href="" class="text-primary" data-bs-toggle="modal"
                                                        data-bs-target="#policyEdit{{ $categorie->id }}">
                                                        <i
                                                            class="ph-pencil me-2 p-1 rounded-circle text-primary"></i>
                                                    </a>
                                                    <a href="{{ route('admin.terms-privacy-category.destroy', [$categorie->id]) }}"
                                                        class="text-danger delete">
                                                        <i class="ph-trash p-1 rounded-circle text-danger"></i>
                                                    </a>

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
        {{-- add Policy Modal Content --}}
        <div id="policyCategoryAdd" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Add Terms & Policy Category
                        </h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-1">
                        <div class="container ps-0 pe-0">
                            <form method="post" action="{{ route('admin.terms-privacy-category.store') }}">
                                @csrf
                                <div class="px-1 py-2 m-2 bg-light rounded">
                                    <div class="row mb-1">
                                        <div class="col-lg-8">
                                            <div class="row mb-1">
                                                <div class="col-lg-12 col-sm-12">
                                                    <span>Title</span>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <input type="text" name="name"
                                                        class="form-control form-control-sm maxlength" maxlength="100"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
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

                                    <div class="row mb-1">
                                        <div class="col-lg-8">
                                            <div class="row mb-1">
                                                <div class="col-lg-12 col-sm-12">
                                                    <span>Type</span>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="form-group text-secondary">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="type" value="terms_condition"
                                                                        id="terms" checked>
                                                                    <label class="form-check-label" for="terms">
                                                                        Terms & Condition
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="type" value="privacy_policy"
                                                                        id="policy">
                                                                    <label class="form-check-label" for="policy">
                                                                        Privacy & Policy
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12 text-secondary d-flex justify-content-end">
                                        <button type="submit" class="text-white btn btn-sm"
                                            style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Policy Modal End --}}
        {{-- Edit Policy Modal Content --}}
        @foreach ($categories as $key => $categorie)
            <div id="policyEdit{{ $categorie->id }}" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title text-primary">Edit Terms & Policy
                            </h6>
                            <a type="button" data-bs-dismiss="modal">
                                <i class="ph ph-x text-danger" style="font-weight: 800;font-size: 10px;"></i>
                            </a>
                        </div>
                        <div class="modal-body p-1">
                            <div class="container ps-0 pe-0">
                                <form method="post"
                                    action="{{ route('admin.terms-privacy-category.update', $categorie->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="px-2 py-2 m-2 bg-light rounded">
                                        <div class="row mb-1">
                                            <div class="col-lg-8 col-sm-12">
                                                <div class="row mb-1">
                                                    <div class="col-lg-12 col-sm-12 d-flex align-items-center">
                                                        <span>Name</span>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12">
                                                        <input type="text" name="name"
                                                            value="{{ $categorie->name }}"
                                                            class="form-control form-control-sm maxlength" maxlength="100"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="form-label">Status</label>
                                                <select name="status" data-placeholder="Select Status..."
                                                    class="form-control form-control-sm select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-container-css-class="select-sm">
                                                    <option></option>
                                                    <option value="active" @selected($categorie->status == 'active')>Active</option>
                                                    <option value="inactive" @selected($categorie->status == 'inactive')>Inactive</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-lg-8 col-sm-12">
                                                <div class="col-lg-12 col-sm-12 text-start">
                                                    <span>Condition</span>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                @checked($categorie->type == 'terms_condition') name="type"
                                                                value="terms_condition" id="terms" checked>
                                                            <label class="form-check-label" for="terms">
                                                                Terms & Condition
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                @checked($categorie->type == 'privacy_policy') name="type"
                                                                value="privacy_policy" id="policy">
                                                            <label class="form-check-label" for="policy">
                                                                Privacy & Policy
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                            </div>
                            <div class="row mt-2">
                                <div class="col-sm-12 text-secondary d-flex justify-content-end">
                                    <button type="submit" class="text-white btn btn-sm"
                                        style="background-color:#247297 !important; padding: 5px 12px 5px;">Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- Add Policy Modal End --}}

    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.termsCategoryDT').DataTable({
                    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                    "iDisplayLength": 10,
                    "lengthMenu": [10, 25, 30, 50],
                    columnDefs: [{
                        orderable: false,
                        targets: [0, 1, 2, 3],
                    }, ],
                });
            });
        </script>
    @endpush
@endonce
