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
                        <a href="{{ route('admin.privacy-terms.index') }}" class="breadcrumb-item active">Terms & Policy</a>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">
                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a href="#privacy_policy" class="nav-link active" data-bs-toggle="tab">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#terms_condition" class="nav-link" data-bs-toggle="tab">
                                    Terms & Condition
                                </a>
                            </li>


                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="privacy_policy">
                                
                                @include('admin.pages.privacy_terms.privacy')
                            </div>

                            <div class="tab-pane fade" id="terms_condition">

                                @include('admin.pages.privacy_terms.terms')

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.portfolioDetailDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
