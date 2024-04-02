@extends('admin.layouts.app')
@section('content')
    <style>
        .section-title {
            background-color: #186191;
            color: white;
            position: relative;
            bottom: -12px;
            padding: 2px 13px 2px 13px;
            font-size: 13px;
        }

        .main-section {
            border: 1px solid #186191;
            padding-top: 10px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .email-modal {
            font-size: 15px;
            padding: 5px 5px 5px 5px;
        }

        .btn-close {
            background: transparent url('https://i.ibb.co/t2CkLrk/close.png') center/var(--btn-close-width) auto no-repeat;
        }
    </style>
    <div class="content-wrapper">
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Bulk Email Management</span>
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


        <div class="content">
            <div class="card rounded-0">
                <div class="card-body px-3">
                    <form id="form-validate-mail" action="{{ route('admin.bulk-email.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="text-end text-secondary mb-0">
                                        <span>Bulk Email</span>
                                        <a href="" class="bg-secondary email-modal text-white" data-bs-toggle="modal"
                                            data-bs-target="#bulk-modal" title="See All Bulk Email Details">
                                            <i class="ph ph-eye"></i>
                                        </a>
                                    </h4>
                                    <!-- Modal -->
                                    <div class="modal fade" id="bulk-modal" tabindex="-1" aria-labelledby="bulk-modalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header p-2 px-2 m-0 bg-secondary text-white rounded-0">
                                                    <h5 class="modal-title" id="bulk-modalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <h1>This is Bulk Email Modal</h1>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="section-title">Email Credential</span>
                            <div class="row main-section">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label col-form-label-sm">Partner Mail</label>
                                        <select name="recipients[]" class="form-select form-select-sm multiselect"
                                            multiple="multiple" data-include-select-all-option="true"
                                            data-enable-filtering="true" data-enable-case-insensitive-filtering="true">
                                            <option value="" disabled>Partner Mail</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label col-form-label-sm">Client Mail</label>
                                        <select name="recipients[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            <option value="" disabled>Partner Mail</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label col-form-label-sm">Newsletter Mail</label>
                                        <select name="recipients[]" class="form-control multiselect" multiple="multiple"
                                            data-include-select-all-option="true" data-enable-filtering="true"
                                            data-enable-case-insensitive-filtering="true">
                                            <option value="" disabled>Partner Mail</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                            <option value="">asd</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label col-form-label-sm col-lg-3">Subject</label>
                                        <input name="subject" type="text" name="subject"
                                            class="form-control maxlength" placeholder="e.g: Sent Your Resume letter"
                                            maxlength="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="section-title">Massage header</span>
                            <div class="row main-section" style="padding-top: 1rem">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="row_one_title" type="text" class="form-control form-control-sm"
                                            placeholder="Row One Title">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="row_one_sub_title" type="text"
                                            class="form-control form-control-sm" placeholder="Row One Sub Title">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="date" type="date" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="row_one_btn" type="text" class="form-control form-control-sm"
                                            placeholder="Row One Button Name">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="row_one_btn_link" type="text"
                                            class="form-control form-control-sm" placeholder="Row One Button Link">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="banner_image_one" type="file"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="banner_image_two" type="file"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <textarea name="note" rows="1" cols="3" class="form-control form-control-sm"
                                            placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="section-title">Product Section</span>
                            <div class="row main-section" style="padding-top: 1rem; padding-bottom: 0.5rem;">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr class="bg-secondary text-white">
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Sub Title</th>
                                                <th>Button Name</th>
                                                <th>Button Link</th>
                                                <th class="d-flex justify-content-center">
                                                    <a href="#" class="text-white add-row">
                                                        <i class="ph ph-plus-circle"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input name="product_image" type="file"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12">
                                                        <input name="product_title" type="text"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12">
                                                        <input name="product_sub_title" type="text"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12">
                                                        <input name="product_button_name" type="text"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-lg-12">
                                                        <input name="product_button_link" type="text"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center" style="height: 8.5vh;">
                                                    <div>
                                                        <a href="#" class="text-danger delete-row">
                                                            <i class="ph ph-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="section-title">Row Section</span>
                            <div class="row main-section" style="padding-top: 1rem">
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="row_four_title" type="text" class="form-control form-control-sm"
                                            placeholder="Row Four Title">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <input name="row_four_sub_title" type="text"
                                            class="form-control form-control-sm" placeholder="Row Four Sub Title">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="row_four_time" class="form-control form-control-sm" type="date">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="row_four_btn_name" class="form-control form-control-sm"
                                            type="text" placeholder="Row Four Button Name">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-2">
                                        <input name="row_four_btn_link" class="form-control form-control-sm"
                                            type="text" placeholder="Row Four Button Link">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <span class="section-title">Footer Section</span>
                            <div class="row main-section" style="padding-top: 1rem">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <input name="footer_link_one_name" type="text"
                                            class="form-control form-control-sm" placeholder="Footer Link One Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="mb-2">
                                            <input name="footer_link_one" type="text"
                                                class="form-control form-control-sm" placeholder="Footer Link One">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <input name="footer_link_two_name" type="text"
                                            class="form-control form-control-sm" placeholder="Footer Link Two Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <input name="footer_link_two" type="text" class="form-control form-control-sm"
                                            placeholder="Footer Link Two">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <input name="footer_link_three_name" type="text"
                                            class="form-control form-control-sm" placeholder="Footer Link Three Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <input name="footer_link_three" type="text"
                                            class="form-control form-control-sm" placeholder="Footer Link Three">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-end pt-3">
                            <button type="reset" class="btn btn-light">Reset</button>
                            <button type="submit" class="btn btn-primary ms-3">Submit <i
                                    class="ph-paper-plane-tilt ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /content area -->
    <!-- /inner content -->
    </div>
@endsection




@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {


            // Add new row
            $('.add-row').click(function() {
                // create a new row and an empty cell
                const newRow = $('<tr><td></td></tr>');
                // create the remaining cells
                const cols = `
                    <td><input name="product-image" type="file" class="form-control form-control-sm"></td>
                    <td><input name="product-title" type="text" class="form-control form-control-sm" ></td>
                    <td><input name="product-sub-title" type="text" class="form-control form-control-sm"></td>
                    <td><input name="product-button-name" type="text" class="form-control form-control-sm" ></td>
                    <td><input name="product-button-link" type="text" class="form-control form-control-sm" ></td>
                    <td class="d-flex justify-content-center" style="height: 8.5vh;">
                        <a href="#" class="text-danger delete-row"><i class="ph ph-trash text-danger"></i></a>
                    </td>
                `;


                // add the cells to the row
                newRow.append(cols);


                // add the row to the table
                $('table tbody').append(newRow);


                // update the ID field of the added row
                $('table tbody tr').each((i, elem) => $(elem).find('td:first').text(i + 1));
            });




            // Remove row
            $('table').on('click', '.delete-row', function() {
                $(this).closest('tr').remove();


                // update the ID field of existing rows
                $('table tbody tr').each(function(i) {
                    $(this).find('td:first').text(i + 1);
                });
            });


        });
    </script>
@endpush
