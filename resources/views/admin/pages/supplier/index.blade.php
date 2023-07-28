@extends('admin.layouts.app')
@section('content')
    <!-- Javascript behaviour -->
    <div class="row">
        <div class="card">
            <div class="card-header d-flex flex-wrap">
                <h6 class="mb-0">Supplier Table</h6>
                <div class="d-inline-flex ms-auto">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#SupplierAddModal"
                        class="btn btn-flat-success btn-labeled btn-labeled-start btn-sm">
                        <span class="btn-labeled-icon bg-success text-white">
                            <i class="ph-plus-circle ph-sm"></i>
                        </span>
                        Add
                    </button>
                </div>
            </div>
            <div class="collapse show">
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-secondary border-secondary text-white">
                                        <th width="5%">#</th>
                                        <th width="25%">Name</th>
                                        <th width="15%">Email</th>
                                        <th width="15%">Phone</th>
                                        <th width="10%">Web Url</th>
                                        <th width="25%">Address</th>
                                        <th class="text-center" width="5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Torik</td>
                                        <td>email@mail.com</td>
                                        <td>+880 1568456</td>
                                        <td>
                                            <a href="#" class="btn btn-flat-success btn-sm p-1 py-0">URL</a>
                                        </td>
                                        <td>Gulshan</td>
                                        <td>
                                            <div class="d-inline-flex">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#SupplierEditModal"
                                                    class="text-primary mx-1">
                                                    <i class="ph-pen"></i>
                                                </a>
                                                <a href="" class="text-danger mx-1 delete">
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
    </div>
    <!-- Disabled keyboard interaction Add modal for Supplier -->
    <div id="SupplierAddModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary">Add Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input id="name" name="name" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Name" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Email</label>
                                    <input id="email" name="email" type="email" class="form-control form-control-sm"
                                        placeholder="Enter Email" maxlength="255" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Phone" maxlength="20">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-2">
                                    <label class="form-label">Web Url</label>
                                    <input name="web_url" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Phone" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Address </label>
                                    <input id="name" name="name" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Address" maxlength="255">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Disabled keyboard interaction Edit modal for Supplier -->
    <div id="SupplierEditModal" class="modal fade" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input id="name" name="name" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Name" maxlength="100"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-2">
                                    <label class="form-label">Email</label>
                                    <input id="email" name="email" type="email"
                                        class="form-control form-control-sm" placeholder="Enter Email" maxlength="255"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-2">
                                    <label class="form-label">Phone</label>
                                    <input name="phone" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Phone" maxlength="20">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-2">
                                    <label class="form-label">Web Url</label>
                                    <input name="web_url" type="text" class="form-control form-control-sm"
                                        placeholder="Enter Phone" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Address </label>
                                    <input id="name" name="name" type="text"
                                        class="form-control form-control-sm" placeholder="Enter Address" maxlength="255">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /javascript behaviour -->
@endsection
