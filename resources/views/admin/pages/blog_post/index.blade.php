@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Blog Management</span>
                    <span class="breadcrumb-item active">Blog Post</span>
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
            <div class="row d-flex justify-content-between bg-white pt-2">
                <div class="col-lg-6">
                    <div class="text-success">
                        <a type="button" href="{{route('admin.blog-post.create')}}"
                            class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                            <span class="btn-labeled-icon bg-success text-white">
                                <i class="ph-plus-circle ph-sm"></i>
                            </span>
                            Add
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-end form_title">
                        <h5 class="ms-1 mb-0 text-uppercase text-secondary">Blog Post</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 border-0 shadow-none">
                    <div class="card-body p-0">
                        <table
                            class="blog_post_table table datatable-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr class="bg-secondary border-secondary text-white">
                                    <th width="5%">#</th>
                                    <th width="25%">Post Name</th>
                                    <th width="25%">Industry Name</th>
                                    <th width="30%">Title</th>
                                    <th width="10%">Badge</th>
                                    <th class="text-center" width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>Lorem ipsum dolor sit amet.</td>
                                    <td>This Is Title</td>
                                    <td>Badge</td>
                                    <td>
                                        <div class="d-inline-flex">
                                            <a href="#" class="text-primary">
                                                <i class="ph-pen"></i>
                                            </a>
                                            <a href="" class="text-danger mx-2 delete">
                                                <i class="ph-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
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
        $('.blog_post_table').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            autoWidth: false,
            responsive: true,
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                // width: 100,
                targets: [0,1,2,3,4,5],
            }, ],
        });
    </script>
@endpush
