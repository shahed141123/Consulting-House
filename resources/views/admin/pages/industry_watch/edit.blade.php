@extends('admin.layouts.app')
@section('content')
    <style>
        .nav-tabs .nav-link {
            background: var(--main-bg-color);
            border-radius: 0;
            border-bottom: 1px solid #eeee;

        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-bottom: 1px solid #eeee;
        }

        .nav-tabs .nav-item {
            border-bottom: 1px solid #eeee;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background: #ae0476;
            border-radius: 0;
        }
    </style>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <a href="{{ route('admin.industry-watch.index') }}" class="breadcrumb-item">Industry Management</a>
                        <a href="{{ route('admin.industry-watch.index') }}" class="breadcrumb-item">Industry Watch</a>
                        <span class="breadcrumb-item active">
                            @if (isset($industryWatch))
                                Edit
                            @else
                                Add
                            @endif
                        </span>
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


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="text-start">
                    <div class="row bg-secondary py-1 rounded-1 d-flex align-items-center gx-0 px-2">
                        <div class="col-lg-4 col-sm-12">
                            <div>
                                <a class="btn btn-primary btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ URL::previous() }}">
                                    <i class="ph-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <h4 class="text-white p-0 m-0 fw-bold admin_adedit_title">
                                @if (isset($industryWatch))
                                    Industry Watch Edit
                                @else
                                    Industry Watch Add
                                @endif
                            </h4>
                        </div>

                    </div>
                </div>
                <div class="card-body p-1">
                    <div class="row gx-0">

                        <div class="col-lg-2">
                            <ul class="nav nav-tabs flex-column border-0" id="myTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-white active" id="basic_info-tab" data-bs-toggle="tab"
                                        data-bs-target="#basic_info" type="button" role="tab"
                                        aria-controls="basic_info" aria-selected="true">Basic Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-white" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" type="button" role="tab"
                                        aria-controls="description" aria-selected="false">Descripton</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-white" id="tab3-tab" data-bs-toggle="tab"
                                        data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3"
                                        aria-selected="false">Sidebar Informations</button>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-10">
                            <form id="myForm" method="post"
                                @if (isset($industryWatch)) action="{{ route('admin.industry-watch.update', $industryWatch->id) }}"
                                @else
                                    action="{{ route('admin.industry-watch.store') }}" @endif
                                enctype="multipart/form-data">
                                @csrf
                                @isset($industryWatch)
                                    @method('PUT')
                                    @php
                                        $categoryIds = isset($industryWatch->category_id) ? json_decode($industryWatch->category_id, true) : [];
                                        $profile_typeIds = isset($industryWatch->profile_type_id) ? json_decode($industryWatch->profile_type_id, true) : [];
                                        $sectorIds = isset($industryWatch->sector_id) ? json_decode($industryWatch->sector_id, true) : [];
                                        $industryIds = isset($industryWatch->industry_id) ? json_decode($industryWatch->industry_id, true) : [];
                                    @endphp
                                @endisset

                                <div class="tab-content bg-white p-2 mt-0 pt-0" id="myTabContent">
                                    {{-- Basic Info Tab Content --}}
                                    <div class="tab-pane fade show active" id="basic_info" role="tabpanel"
                                        aria-labelledby="basic_info-tab">

                                        <div class="row"></div>

                                        <h6 class="mb-0 text-info">Basic Information</h6>
                                        <div class="row mb-3 gx-1 border border-secondary bg-light p-2">
                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Category</label>
                                                <select name="category_id[]" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($categories as $categorie)
                                                        <option value="{{ $categorie->id }}" @isset($industryWatch)
                                                            {{ is_array($categoryIds) && in_array($categorie->id, $categoryIds) ? 'selected' : '' }}
                                                            @endisset>
                                                            {{ $categorie->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <input type="hidden" name="user_id"
                                                value="{{ Auth::guard('admin')->user()->id }}">
                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Profiles </label>
                                                <select name="profile_type_id[]"
                                                    class="form-control-sm multiselect btn btn-sm" id="select6"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($profile_types as $profile_type)
                                                        <option value="{{ $profile_type->id }}" @isset($industryWatch)
                                                            {{ is_array($profile_typeIds) && in_array($profile_type->id, $profile_typeIds) ? 'selected' : '' }}
                                                            @endisset>
                                                            {{ $profile_type->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Sector <span
                                                        class="text-danger">*</span></label>
                                                <select name="sector_id[]" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple"
                                                    data-include-select-all-option="true" data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($sectors as $sector)
                                                        <option value="{{ $sector->id }}" @isset($industryWatch)
                                                            {{ is_array($sectorIds) && in_array($sector->id, $sectorIds) ? 'selected' : '' }}
                                                            @endisset>{{ $sector->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Industry <span
                                                        class="text-danger">*</span></label>
                                                <select name="industry_id[]" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple"
                                                    data-include-select-all-option="true" data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($industries as $industrie)
                                                        <option value="{{ $industrie->id }}" @isset($industryWatch)
                                                            {{ is_array($industryIds) && in_array($industrie->id, $industryIds) ? 'selected' : '' }}
                                                            @endisset>{{ $industrie->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="ms-1" for="author_name">Author Name</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    @if (isset($industryWatch)) value="{{ $industryWatch->author_name }}"
                                                        @else value="{{ old('author_name') }}" @endif
                                                    name="author_name" id="author_name" maxlength="100">
                                            </div>
                                            <div class="col-lg-1 mb-2">
                                                <label class="form-check-label" for="sc_r_secondary">Featured</label> <br>
                                                <input type="checkbox" name="featured" value="1"
                                                    class="form-check-input form-check-input-secondary mt-2 ms-3"
                                                    id="sc_r_secondary"
                                                    @if (isset($industryWatch)) @checked($industryWatch->featured == '1') @endif>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="ms-1" for="badge">Badge</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    name="badge" id="badge" placeholder="Enter Badge"
                                                     @if (isset($industryWatch)) value="{{ $industryWatch->badge }}"
                                                    @else value="{{ old('badge') }}" @endif
                                                    maxlength="100">
                                            </div>
                                            <div class="col-lg-5 mb-2">
                                                <label class="ms-1" for="title">Title</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    name="title" id="title" placeholder="Enter Youre title" required
                                                    @if (isset($industryWatch)) value="{{ $industryWatch->title }}"
                                                    @else value="{{ old('title') }}" @endif
                                                    maxlength="100">
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <label class="ms-1" for="tags">Tags</label>
                                                <input type="text" name="tags" id="tags"
                                                    class="form-control form-control-sm visually-hidden mt-1"
                                                    @if (isset($industryWatch)) value="{{ $industryWatch->tags }}"
                                                    @else value="{{ old('tags') }}" @endif
                                                    data-role="tagsinput" placeholder="Tags">

                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <div class="row gx-0 d-flex align-items-center">
                                                    <div class="col-lg-10">
                                                        <label class="form-label">Image <span
                                                                class="text-danger">*</span></label>
                                                        <input id="logo" name="image" type="file" @if (isset($industryWatch)) value="{{ $industryWatch->image }}"
                                                        @else value="{{ old('image') }}" @endif
                                                            class="form-control form-control-sm" placeholder="Enter Image">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <img id="show-image"
                                                            src="{{ asset('admin/assets/images/no_image.jpg') }}"
                                                            class="border" width="44" height="35"
                                                            style="margin-top:25px;" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <label class="ms-1" for="meta_tags">Meta Tags</label>
                                                <input type="text" name="meta_tags" id="meta_tags"
                                                    class="form-control form-control-sm visually-hidden mt-1"
                                                    @if (isset($industryWatch)) value="{{ $industryWatch->image }}"
                                                        @else value="{{ old('image') }}" @endif
                                                    data-role="tagsinput" placeholder="Meta Tags">

                                            </div>
                                            <div class="col-lg-12">
                                                <label class="ms-1" for="header">Header</label>
                                                <textarea name="header" rows="3" class="form-control" placeholder="Enter your message here">{{ $industryWatch->header }}</textarea>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt "></i></button>
                                                <a href="javascript:void(0);" class="btn btn-info rounded-0 p-2 px-2"
                                                    id="nextTabButton">Next
                                                    <i class="ph-arrow-circle-right "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Description Tab Content --}}
                                    <div class="tab-pane fade" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <h6 class="ms-1 mb-0 text-info">Industry Watch Contents</h6>
                                        <div class="row mb-3 gx-0 border border-secondary bg-light p-2">
                                            <div class="mb-1 row px-0 gx-1">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="ms-1" for="short_description">Short
                                                            Description</label>
                                                        <textarea name="short_description" class="form-control" id="ckeditor_classic_empty_1" rows="3"
                                                            placeholder="Enter Your Short Description">{!! $industryWatch->short_description !!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-2">
                                                        <label class="ms-1" for="content">Content</label>
                                                        <textarea class="form-control" name="content" id="ckeditor_classic_empty_2" rows="3" placeholder="Enter Your Content" required>{!! $industryWatch->content !!}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt"></i></button>
                                                <a href="javascript:void(0);" class="btn btn-info rounded-0 p-2 px-2"
                                                    id="nextTabButton2">Next
                                                    <i class="ph-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel"
                                        aria-labelledby="tab3-tab">
                                        <h6 class="ms-1 mb-0 text-info">Industry Watch Sidebar Informations</h6>
                                        <div class="table-responsive col-md-12">
                                            <table class="table table-bordered col-md-12 product text-center">
                                                <thead>
                                                    <tr>
                                                        <th style="padding:7px !important;"> Information Title</th>
                                                        <th style="padding:7px !important;"> Information Value</th>
                                                        <th style="padding:7px !important;"> <a href="javascript:void(0)"
                                                                class="bg-success addRow p-1"><i
                                                                    class="ph-plus icons_design text-white"></i></a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="repeater">
                                                    <tr>

                                                        <td> <input type="text" class="form-control form-control-sm"
                                                                name="sidebar_title[]"></td>
                                                        <td> <input type="text" class="form-control form-control-sm"
                                                                name="sidebar_value[]"></td>
                                                        <td class="text-center"> <a href="javascript:void(0)"
                                                                class="bg-danger removeRow p-1"><i
                                                                    class="ph-minus icons_design text-white"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-success" name="action"
                                                    id="submitbtn" value="save">Save<i
                                                        class="ph-paper-plane-tilt"></i></button>
                                                <button class="btn btn-info rounded-0 p-2 px-2" type="submit"
                                                    id="nextTabButton2">Update
                                                    <i class="ph-arrow-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>


    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(60).height(40);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


    <script></script>


    <script>
        $(document).ready(function() {
            var isValid = true;
            $('#nextTabButton').on('click', function(event) {
                var nameField = $('#product_name');
                var sku_codeField = $('input[name="sku_code"]');
                var notification_daysField = $('input[name="notification_days"]');
                var product_typeField = $('select[name="product_type"]');
                var stockField = $('.stock_select');
                var thumbnailField = $('input[name="thumbnail"]');
                var brandField = $('[name="brand_id"]');
                var cat_idField = $('[name="cat_id"]');
                var solution_idField = $('.solution_multiselect');
                var industry_idField = $('.industry_multiselect');
                isValid = true;

                if (nameField.val() === '') {
                    isValid = false;
                    nameField.css("border", "1px solid red");
                }

                if (sku_codeField.val() === '') {
                    isValid = false;
                    sku_codeField.css("border", "1px solid red");
                }

                if (notification_daysField.val() === '') {
                    isValid = false;
                    notification_daysField.css("border", "1px solid red");
                }

                if (product_typeField.val() === '') {
                    isValid = false;
                    product_typeField.next('.select2-container').css("border", "1px solid red");
                }

                if (stockField.val() === '') {
                    isValid = false;
                    stockField.next('.select2-container').css("border", "1px solid red");
                }

                if (thumbnailField.val() === '') {
                    isValid = false;
                    $('.thumbnail').css("border", "1px solid red");
                }

                if (brandField.val() === '') {
                    isValid = false;
                    brandField.next('.select2-container').css("border", "1px solid red");
                }

                if (cat_idField.val() === '') {
                    isValid = false;
                    cat_idField.next('.select2-container').css("border", "1px solid red");
                }


                if (solution_idField.val() == '') {
                    alert('Please Fill the solution select Box');
                    isValid = false;
                    solution_idField.next('.dropdown').css("border", "1px solid red !important");
                }

                if (industry_idField.val() == '') {
                    alert('Please Fill the Industry select Box');
                    isValid = false;
                    industry_idField.next('.dropdown').css("border", "1px solid red !important");
                }
                if (!isValid) {
                    event.preventDefault();
                    return;
                }
                const descriptionButton = $('#description-tab');
                descriptionButton.addClass('active').attr('aria-selected', 'true');

                // Show Tab 2's content
                const descriptionContent = $('#description');
                descriptionContent.addClass('active show');

                // Deactivate Tab 1
                const basic_infoButton = $('#basic_info-tab');
                basic_infoButton.removeClass('active').attr('aria-selected', 'false');

                // Hide Tab 1's content
                const basic_infoContent = $('#basic_info');
                basic_infoContent.removeClass('active show');
            });

            $(".save_btn").click(function() {
                var price_selectField = $('.price_select');
                isValid = true;
                if (price_selectField.val() == '') {
                    isValid = false;
                    price_selectField.next('.select2-container').css("border", "1px solid red");
                }
                if (!isValid) {
                    event.preventDefault();
                    return;
                }
            });



            // Get the next tab button for Tab 1
            // $('#nextTabButton').click(function() {
            //     if (!isValid) {
            //         event.preventDefault();
            //         return;
            //     }
            //     // Activate Tab 2

            // });

            $('#nextTabButton2').click(function() {
                // Activate Tab 3
                const tab3Button = $('#tab3-tab');
                tab3Button.addClass('active').attr('aria-selected', 'true');

                // Show Tab 3's content
                const tab3Content = $('#tab3');
                tab3Content.addClass('active show');

                // Deactivate Tab 2
                const descriptionButton = $('#description-tab');
                descriptionButton.removeClass('active').attr('aria-selected', 'false');

                // Hide Tab 2's content
                const descriptionContent = $('#description');
                descriptionContent.removeClass('active show');
            });
        });
    </script>
@endsection
@once
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Add Row
                $(".addRow").on("click", function() {
                    var newRow =
                        '<tr><td><input type="text" class="form-control form-control-sm" name="sidebar_title[]"></td>' +
                        '<td><input type="text" class="form-control form-control-sm" name="sidebar_value[]"></td>' +
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
        <script>
            // Get the next tab button for Tab 1
            const nextTabButton = document.getElementById('nextTabButton');
            // Add a click event listener to the button
            nextTabButton.addEventListener('click', function() {
                // Activate Tab 2
                const descriptionButton = document.getElementById('description-tab');
                descriptionButton.classList.add('active');
                descriptionButton.setAttribute('aria-selected', 'true');
                // Show Tab 2's content
                const descriptionContent = document.getElementById('description');
                descriptionContent.classList.add('active', 'show');
                // Deactivate Tab 1
                const basic_infoButton = document.getElementById('basic_info-tab');
                basic_infoButton.classList.remove('active');
                basic_infoButton.setAttribute('aria-selected', 'false');
                // Hide Tab 1's content
                const basic_infoContent = document.getElementById('basic_info');
                basic_infoContent.classList.remove('active', 'show');
            });
            // Get the next tab button for Tab 2
            const nextTabButton2 = document.getElementById('nextTabButton2');
            // Add a click event listener to the button
            nextTabButton2.addEventListener('click', function() {
                // Activate Tab 3
                const tab3Button = document.getElementById('tab3-tab');
                tab3Button.classList.add('active');
                tab3Button.setAttribute('aria-selected', 'true');
                // Show Tab 3's content
                const tab3Content = document.getElementById('tab3');
                tab3Content.classList.add('active', 'show');
                // Deactivate Tab 2
                const descriptionButton = document.getElementById('description-tab');
                descriptionButton.classList.remove('active');
                descriptionButton.setAttribute('aria-selected', 'false');
                // Hide Tab 2's content
                const descriptionContent = document.getElementById('description');
                descriptionContent.classList.remove('active', 'show');
            });
            // Get the next tab button for Tab 3
            const nextTabButton3 = document.getElementById('nextTabButton3');
            // Add a click event listener to the button
            nextTabButton3.addEventListener('click', function() {
                // Activate Tab 4
                const tab4Button = document.getElementById('tab4-tab');
                tab4Button.classList.add('active');
                tab4Button.setAttribute('aria-selected', 'true');
                // Show Tab 4's content
                const tab4Content = document.getElementById('tab4');
                tab4Content.classList.add('active', 'show');
                // Deactivate Tab 3
                const tab3Button = document.getElementById('tab3-tab');
                tab3Button.classList.remove('active');
                tab3Button.setAttribute('aria-selected', 'false');
                // Hide Tab 3's content
                const tab3Content = document.getElementById('tab3');
                tab3Content.classList.remove('active', 'show');
            });
        </script>
    @endpush
@endonce




