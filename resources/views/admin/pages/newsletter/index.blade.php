@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Newsletter</span>
                    </div>
                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-3 mx-0 rounded-0">
                        <div class="card-header">
                            <h5 class="mb-0 h6">Send Newsletter</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                <div class="row mb-2 d-flex align-items-center">
                                    <div class="col-lg-2">
                                        <div>
                                            <label class="form-label">Emails (Users)</label>
                                        </div>
                                        <!-- Select All option -->
                                    </div>
                                    <div class="col-lg-10">
                                        <select class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true">
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2 d-flex align-items-center">
                                    <div class="col-lg-2">
                                        <div>
                                            <label class="form-label">Emails (Subscribers)</label>
                                        </div>
                                        <!-- Select All option -->
                                    </div>
                                    <div class="col-lg-10">
                                        <select class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true">
                                            <option value="cheese">Cheese</option>
                                            <option value="tomatoes">Tomatoes</option>
                                            <option value="mozarella">Mozzarella</option>
                                            <option value="mushrooms">Mushrooms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2 d-flex align-items-center">
                                    <div class="col-lg-2">
                                        <div>
                                            <label class="form-label">Newsletter subject</label>
                                        </div>
                                        <!-- Select All option -->
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control"
                                            placeholder="Enter Your Newsletter Subject">
                                    </div>
                                </div>
                                <div class="row mb-2 d-flex align-items-center">
                                    <div class="col-lg-2">
                                        <div>
                                            <label class="form-label">Newsletter subject</label>
                                        </div>
                                        <!-- Select All option -->
                                    </div>
                                    <div class="col-lg-10">
                                        <textarea class="form-control rounded-0" id="ckeditor_classic_prefilled"></textarea>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-end ">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
