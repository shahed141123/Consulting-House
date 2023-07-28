@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a href="#category-tab" class="nav-link active" data-bs-toggle="tab">
                            Category
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#sub-category-tab" class="nav-link" data-bs-toggle="tab">
                            Sub Category
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#child-category-tab" class="nav-link" data-bs-toggle="tab">
                            Child Category
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="category-tab">
                        <div class="d-flex justify-content-end">
                            <div class="mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#categoryAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                        @include('admin.pages.category.partials.category-table')
                    </div>

                    <div class="tab-pane fade" id="sub-category-tab">
                        <div class="d-flex justify-content-end">
                            <div class="mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#subCategoryAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                        @include('admin.pages.category.partials.sub-category-table')
                    </div>

                    <div class="tab-pane fade" id="child-category-tab">
                        <div class="d-flex justify-content-end">
                            <div class="mb-2">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#childCategoryAddModal"
                                    class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                                    <span class="btn-labeled-icon bg-success text-white">
                                        <i class="ph-plus-circle ph-sm"></i>
                                    </span>
                                    Add
                                </button>
                            </div>
                        </div>
                        @include('admin.pages.category.partials.child-category-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->
@endsection

