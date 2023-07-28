@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Industry Management</span>
                    <span class="breadcrumb-item active">Industry Watch</span>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-1 bg-white pt-2">
                    <div class="d-flex justify-content-between ">
                        <div class="text-success">
                            <a href="{{ route('admin.industry-watch.create') }}" type="button"
                                class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                <span class="btn-labeled-icon bg-success text-white">
                                    <i class="ph-plus-circle ph-sm"></i>
                                </span>
                                Add
                            </a>
                        </div>
                        <div class="text-end form_title">
                            <h5 class="ms-1 mb-0 text-uppercase text-secondary">Industry Watch</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-1">
                <div class="card rounded-0 border-0 shadow-none">
                    <div class="card-body p-0">
                        <table
                            class="industry_watch_category_table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="25%">Idustry Name</th>
                                    <th width="25%">Badge</th>
                                    <th width="40%">Title</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($industryWatches as $industryWatch)
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            Lorem, ipsum dolor sit
                                        </td>
                                        <td>
                                            Badge
                                        </td>
                                        <td>asdasd</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#industry_edit" class="text-primary">
                                                    <i class="ph-pen"></i>
                                                </a>
                                                <a href="#" class="text-danger mx-2 delete">
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
@endpush
