@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">User Management</span>
                    <span class="breadcrumb-item active">Subscription Plan</span>
                </div>

                <a href="#breadcrumb_elements"
                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                    data-bs-toggle="collapse">
                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content row">
        <!-- Javascript behaviour -->
        <div class="col-lg-8 offset-2">
            <div class="container">
                <div class="row d-flex justify-content-between bg-white pt-2">
                    <div class="col-lg-6">
                        <div class="text-success">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#plan_add"
                                class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                <span class="btn-labeled-icon bg-success text-white">
                                    <i class="ph-plus-circle ph-sm"></i>
                                </span>
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-end form_title">
                            <h5 class="ms-1 mb-0 text-uppercase text-secondary">Subscription Plans</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card rounded-0 border-0 shadow-none">
                        <div class="card-body p-0">
                            <table
                                class="industry_watch_category_table table datatable-responsive table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="10%">#</th>
                                        <th width="25%">Profile Name </th>
                                        <th width="25%">Name</th>
                                        <th width="12%">Price</th>
                                        <th width="15%">Status</th>
                                        <th class="text-center" width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $plan->getProfileTypeName() }}
                                            </td>
                                            <td>
                                                {{ $plan->name }}
                                            </td>
                                            <td>{{ $plan->price }}</td>

                                            <td>
                                                @if ($plan->status == 'active')
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">In Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#plan_edit{{ $plan->id }}" class="text-primary">
                                                        <i class="ph-pen"></i>
                                                    </a>
                                                    <a href="{{ route('admin.industry-watch-category.destroy', $plan->id) }}"
                                                        class="text-danger mx-2 delete">
                                                        <i class="ph-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Disabled keyboard interaction add modal for Industry -->
        @foreach ($plans as $plan)
            <div @if (isset($plan)) id="plan_edit{{ $plan->id }}" @else id="plan_add" @endif
                class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                            <h6 class="modal-title">
                                @if (isset($plan))
                                    Edit Subscription Plan
                                @else
                                    Add Subscription Plan
                                @endif
                            </h6>
                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="{{ route('admin.subscription-plan.update', $plan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input id="name" name="name" type="text"
                                                @if (isset($plan)) value="{{ $plan->name }}"
                                                        @else value="{{ old('name') }}" @endif
                                                class="form-control form-control-sm" placeholder="Enter Name"
                                                maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="mb-2">
                                            <label class="form-label">Stripe Plan <span class="text-danger">*</span></label>
                                            <input id="stripe_plan" name="stripe_plan" type="text"
                                                @if (isset($plan)) value="{{ $plan->stripe_plan }}"
                                                        @else value="{{ old('stripe_plan') }}" @endif
                                                class="form-control form-control-sm" placeholder="Enter Stripe Plan"
                                                maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="mb-2">
                                            <label class="form-label">Renew Interval<span
                                                    class="text-danger">*</span></label>
                                            <select name="interval" data-placeholder="Select Subscription Renew Interval"
                                                class="form-control-sm multiselect btn btn-sm" id="select6">
                                                <option>Select Interval Period</option>
                                                <option value="monthly"
                                                    @isset($plan)
                                                    @selected($plan->interval == 'monthly')
                                                @endisset>
                                                    Monthly</option>
                                                <option value="half-yearly"
                                                    @isset($plan)
                                                    @selected($plan->interval == 'half-yearly')
                                                @endisset>
                                                    Half Yearly</option>
                                                <option value="yearly"
                                                    @isset($plan)
                                                    @selected($plan->interval == 'yearly')
                                                @endisset>
                                                    Yearly</option>
                                                <option value="lifetime"
                                                    @isset($plan)
                                                    @selected($plan->interval == 'lifetime')
                                                @endisset>
                                                    Lifetime</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label class="form-label">Price<span class="text-danger">*</span></label>
                                            <input id="price" name="price" type="text"
                                                @if (isset($plan)) value="{{ $plan->price }}"
                                                        @else value="{{ old('price') }}" @endif
                                                class="form-control form-control-sm"
                                                placeholder="Enter Subscription Price" maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label class="form-label">Currency<span class="text-danger">*</span></label>
                                            <input id="price" name="currency" type="text"
                                                @if (isset($plan)) value="{{ $plan->currency }}"
                                                        @else value="{{ old('currency') }}" @endif
                                                class="form-control form-control-sm"
                                                placeholder="Enter Subscription Currency" maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label class="form-label">Max Users<span class="text-danger">*</span></label>
                                            <input id="max_users" name="max_users" type="text"
                                                @if (isset($plan)) value="{{ $plan->max_users }}"
                                                        @else value="{{ old('max_users') }}" @endif
                                                class="form-control form-control-sm"
                                                placeholder="Enter Subscription max_users" maxlength="100" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-2">
                                            <label class="form-label">Max Projects<span
                                                    class="text-danger">*</span></label>
                                            <input id="max_projects" name="max_projects" type="text"
                                                @if (isset($plan)) value="{{ $plan->max_projects }}"
                                                        @else value="{{ old('max_projects') }}" @endif
                                                class="form-control form-control-sm"
                                                placeholder="Enter Subscription max_projects" maxlength="100" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="mb-1">
                                            <div class="table-responsive col-md-12">
                                                <table class="table table-bordered col-md-12 product text-center">
                                                    <thead>
                                                        <tr>
                                                            <th style="padding: 7px !important;"> Plan Details</th>
                                                            <th style="padding: 7px !important;">
                                                                <a href="javascript:void(0)"
                                                                    class="bg-success addRow p-1">
                                                                    <i class="ph-plus icons_design text-white"></i>
                                                                </a>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="repeater">
                                                        @foreach (json_decode($plan->descriptions ?? '[]') as $description)
                                                            <tr>
                                                                <td>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm"
                                                                        name="descriptions[]" value="{{ $description }}"
                                                                        required>
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="javascript:void(0)"
                                                                        class="bg-danger removeRow p-1">
                                                                        <i class="ph-minus icons_design text-white"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- <textarea name="description" rows="1" class="form-control" placeholder="Enter Your Description">
                                                @isset($plan)
                                                    {{ $plan->description }}
                                                @endisset
                                            </textarea> --}}

                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">Status <span class="text-danger">*</span></label>
                                        <select name="status" data-placeholder="Select Status"
                                            class="form-control-sm multiselect btn btn-sm" id="select6">
                                            <option>Select a Status....</option>
                                            <option value="active"
                                                @isset($plan)
                                                    @selected($plan->status == 'active')
                                                @endisset>
                                                Active</option>
                                            <option value="inactive"
                                                @isset($plan)
                                                    @selected($plan->status == 'inactive')
                                                @endisset>
                                                In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer p-0 m-0 border-0">
                                    <button type="submit" class="btn btn-primary">Update Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Disabled keyboard interaction add modal for Industry -->
        <!-- /Edit Modal -->
        <div id="plan_add" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-2 text-white bg-secondary rounded-0 m-0">
                        <h6 class="modal-title">
                            Add Subscription Plan
                        </h6>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>
                    <form action="{{ route('admin.subscription-plan.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-2">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input id="name" name="name" type="text"
                                            @if (isset($plan)) value="{{ $plan->name }}"
                                                    @else value="{{ old('name') }}" @endif
                                            class="form-control form-control-sm" placeholder="Enter Name" maxlength="100"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-2">
                                        <label class="form-label">Stripe Plan <span class="text-danger">*</span></label>
                                        <input id="stripe_plan" name="stripe_plan" type="text"
                                            @if (isset($plan)) value="{{ $plan->stripe_plan }}"
                                                    @else value="{{ old('stripe_plan') }}" @endif
                                            class="form-control form-control-sm" placeholder="Enter Stripe Plan"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <label class="form-label">Renew Interval<span class="text-danger">*</span></label>
                                        <select name="interval" data-placeholder="Select Subscription Renew Interval"
                                            class="form-control-sm multiselect btn btn-sm" id="select6">
                                            <option>Select Interval Period</option>
                                            <option value="monthly"
                                                @isset($plan)
                                                @selected($plan->interval == 'monthly')
                                            @endisset>
                                                Monthly</option>
                                            <option value="half-yearly"
                                                @isset($plan)
                                                @selected($plan->interval == 'half-yearly')
                                            @endisset>
                                                Half Yearly</option>
                                            <option value="yearly"
                                                @isset($plan)
                                                @selected($plan->interval == 'yearly')
                                            @endisset>
                                                Yearly</option>
                                            <option value="lifetime"
                                                @isset($plan)
                                                @selected($plan->interval == 'lifetime')
                                            @endisset>
                                                Lifetime</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Price<span class="text-danger">*</span></label>
                                        <input id="price" name="price" type="text"
                                            @if (isset($plan)) value="{{ $plan->price }}"
                                                    @else value="{{ old('price') }}" @endif
                                            class="form-control form-control-sm" placeholder="Enter Subscription Price"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Currency<span class="text-danger">*</span></label>
                                        <input id="price" name="currency" type="text"
                                            @if (isset($plan)) value="{{ $plan->currency }}"
                                                    @else value="{{ old('currency') }}" @endif
                                            class="form-control form-control-sm" placeholder="Enter Subscription Currency"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Max Users<span class="text-danger">*</span></label>
                                        <input id="max_users" name="max_users" type="text"
                                            @if (isset($plan)) value="{{ $plan->max_users }}"
                                                    @else value="{{ old('max_users') }}" @endif
                                            class="form-control form-control-sm"
                                            placeholder="Enter Subscription max_users" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="form-label">Max Projects<span class="text-danger">*</span></label>
                                        <input id="max_projects" name="max_projects" type="text"
                                            @if (isset($plan)) value="{{ $plan->max_projects }}"
                                                    @else value="{{ old('max_projects') }}" @endif
                                            class="form-control form-control-sm"
                                            placeholder="Enter Subscription max_projects" maxlength="100" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="mb-1">
                                        <div class="table-responsive col-md-12">
                                            <table class="table table-bordered col-md-12 product text-center">
                                                <thead>
                                                    <tr>
                                                        <th style="padding:7px !important;"> Plan Details</th>
                                                        <th style="padding:7px !important;"> <a href="javascript:void(0)"
                                                                class="bg-success addRow p-1"><i
                                                                    class="ph-plus icons_design text-white"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="repeater">
                                                    <tr>

                                                        <td> <input type="text" class="form-control form-control-sm"
                                                                name="descriptions[]" required></td>
                                                        <td class="text-center"> <a href="javascript:void(0)"
                                                                class="bg-danger removeRow p-1"><i
                                                                    class="ph-minus icons_design text-white"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" data-placeholder="Select Status"
                                        class="form-control-sm multiselect btn btn-sm" id="select6">
                                        <option>Select a Status....</option>
                                        <option value="active"
                                            @isset($plan)
                                                @selected($plan->status == 'active')
                                            @endisset>
                                            Active</option>
                                        <option value="inactive"
                                            @isset($plan)
                                                @selected($plan->status == 'inactive')
                                            @endisset>
                                            In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer p-0 m-0 border-0">
                                <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary ">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Modal -->

    </div>
@endsection

@push('scripts')
    <script>
        $('.industry_watch_category_table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [4],
            }, ],
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add Row
            $(".addRow").on("click", function() {
                var newRow =
                    '<tr><td><input type="text" class="form-control form-control-sm" name="descriptions[]" required></td>' +
                    '<td class="text-center"><a href="javascript:void(0)" class="bg-danger removeRow p-1">' +
                    '<i class="ph-minus icons_design text-white"></i></a></td></tr>';

                $(".repeater").append(newRow);
            });

            // Remove Row
            $(".repeater").on("click", ".removeRow", function() {
                $(this).closest("tr").remove();
            });
        });
    </script>
@endpush
