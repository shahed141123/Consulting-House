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
                        <a href="{{ route('admin.blog-post.create') }}" class="breadcrumb-item">Blog Management</a>
                        <a href="{{ route('admin.blog-post.create') }}" class="breadcrumb-item">Post</a>
                        <span class="breadcrumb-item active">Add</span>
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
                                <a class="btn btn-white btn-rounded rounded-circle btn-icon back-btn"
                                    href="{{ URL::previous() }}">
                                    <i class="ph-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                            <h4 class="text-white p-0 m-0 fw-bold admin_adedit_title">Blog Post Add</h4>
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
                            </ul>
                        </div>
                        <div class="col-lg-10">
                            <form id="myForm" method="post"
                                action="{{ isset($blogPost) ? route('admin.blog-post.update', $blogPost->id) : route('admin.blog-post.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                @if (isset($blogPost))
                                    @method('PUT')
                                @endif
                                <div class="tab-content bg-white p-2 mt-0 pt-0" id="myTabContent">
                                    {{-- Basic Info Tab Content --}}
                                    <div class="tab-pane fade show active" id="basic_info" role="tabpanel"
                                        aria-labelledby="basic_info-tab">

                                        <div class="row"></div>

                                        <h6 class="mb-0 text-info">User Name</h6>
                                        <div class="row mb-3 gx-1 shadow-lg bg-light p-2">
                                            <div class="col-sm-3">
                                                <label class="ms-1" for="author_name">Author Name</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    name="author_name" id="author_name" placeholder="Enter Author Name"
                                                    maxlength="100"
                                                    @isset($blogPost) value="{{ $blogPost->author_name }}" @endisset>
                                            </div>

                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Category <span
                                                        class="text-danger">*</span></label>
                                                <select name="category_id" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($categories as $categorie)
                                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Profiles </label>
                                                <select name="profile_type_id[]"
                                                    class="form-control-sm multiselect btn btn-sm" id="select6"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">

                                                    @foreach ($profile_types as $profile_type)
                                                        <option value="{{ $profile_type->id }}">
                                                            {{ $profile_type->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="col-lg-3 mb-2">
                                                <label class="form-label">Related Industry <span
                                                        class="text-danger">*</span></label>
                                                <select name="industry_id" class="form-control-sm multiselect btn btn-sm"
                                                    id="select6" multiple="multiple"
                                                    data-include-select-all-option="true" data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @foreach ($industries as $industrie)
                                                        <option value="{{ $industrie->id }}">{{ $industrie->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-lg-3 mb-2">
                                                <label class="ms-1" for="author_name">Author Name</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    name="author_name" id="author_name" maxlength="100">
                                            </div>
                                            <div class="col-lg-1 mb-2">
                                                <label class="form-check-label" for="sc_r_secondary">Featured</label> <br>
                                                <input type="checkbox" name="featured" value="1"
                                                    class="form-check-input form-check-input-secondary mt-2 ms-3"
                                                    id="sc_r_secondary">
                                            </div>
                                            <div class="col-lg-3 mb-2">
                                                <label class="ms-1" for="badge">Badge</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    name="badge" id="badge" placeholder="Enter Youre Badge"
                                                    maxlength="100">
                                            </div>
                                            <div class="col-lg-5 mb-2">
                                                <label class="ms-1" for="title">Title</label>
                                                <input class="form-control form-control-sm mt-1" type="text"
                                                    name="title" id="title" placeholder="Enter Youre title"
                                                    maxlength="100">
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <label class="ms-1" for="tags">Tags</label>
                                                <input type="text" name="tags" id="tags"
                                                    class="form-control form-control-sm visually-hidden mt-1"
                                                    data-role="tagsinput" placeholder="Tags">

                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <div class="row gx-0 d-flex align-items-center">
                                                    <div class="col-lg-10">
                                                        <label class="form-label">Image <span
                                                                class="text-danger">*</span></label>
                                                        <input id="logo" name="image" type="file"
                                                            class="form-control form-control-sm" placeholder="Enter Image"
                                                            required>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <img id="preview-image"
                                                            src="{{ asset('admin/assets/images/no_image.jpg') }}"
                                                            class="border" width="44" height="35" style="margin-top:25px;"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-2">
                                                <label class="ms-1" for="meta_tags">Meta Tags</label>
                                                <input type="text" name="meta_tags" id="meta_tags"
                                                    class="form-control form-control-sm visually-hidden mt-1"
                                                    data-role="tagsinput" placeholder="Meta Tags">

                                            </div>
                                            <div class="col-lg-12">
                                                <label class="ms-1" for="header">Header</label>
                                                <textarea name="header" rows="3" class="form-control" placeholder="Enter your message here"></textarea>

                                            </div>
                                            <div class="col-sm-3">
                                                <label class="ms-1" for="source">Source</label>
                                                <input class="form-control form-control-sm" type="text" name="source"
                                                    id="source" placeholder="Enter Your Source" maxlength="100"
                                                    @isset($blogPost) value="{{ $blogPost->source }}" @endisset>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="ms-1" for="source_url">Source Url</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    name="source_url" id="source_url" placeholder="Enter Source Url"
                                                    maxlength="100"
                                                    @isset($blogPost) value="{{ $blogPost->source_url }}" @endisset>
                                            </div>

                                            <div class="col-sm-3">
                                                <label class="ms-1" for="author_email">Author Email</label>
                                                <input class="form-control form-control-sm" type="text"
                                                    name="author_email" id="author_email"
                                                    placeholder="Enter Author Email" maxlength="100"
                                                    @isset($blogPost) value="{{ $blogPost->author_email }}" @endisset>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="row gx-0 d-flex align-items-center">
                                                    <div class="col-lg-10">
                                                        <div class="mb-3">
                                                            <label class="form-label">Image</label>
                                                            <input id="logo" name="image" type="file"
                                                                class="form-control form-control-sm"
                                                                placeholder="Enter Image"
                                                                @isset($blogPost) value="{{ $blogPost->image }}" @endisset
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        @isset($blogPost)
                                                            <a href="#" class="mb-3">
                                                                <img id="preview-image" src="{{ $blogPost->image }}"
                                                                    class="border" style="margin-top: 6px !important;"
                                                                    width="44" height="36" alt="">
                                                            </a>
                                                        @endisset
                                                    </div>
                                                </div>
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
                                        <h6 class="ms-1 mb-0 text-info">Blog Post Contents</h6>
                                        <div class="row mb-3 gx-0 shadow-lg bg-light p-2">
                                            <div class="mb-1 row px-0 gx-1">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="ms-1" for="short_description">Header</label>
                                                        <textarea name="header" class="form-control" id="short_desc" rows="3" placeholder="Enter Your Header">
@isset($blogPost)
@isset($blogPost)
{{ $blogPost->header }}
@endisset
</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-2">
                                                        <label class="ms-1" for="content">Short Description</label>
                                                        <textarea class="form-control" name="short_description" id="overview" rows="3"
                                                            placeholder="Enter Your Short Description">
@isset($blogPost)
@isset($blogPost)
{{ $blogPost->short_description }}
@endisset
</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mb-2">
                                                        <label class="ms-1" for="content">Content <span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" name="content" id="overview" rows="3" placeholder="Enter Your Content">
@isset($blogPost)
{{ $blogPost->content }}
@endisset
</textarea>
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


    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(70)
                                        .height(50); //create image element
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>

    <script>
        //---------Sidebar list Show Hide----------

        $(document).ready(function() {

            $('#dealId').click(function() {
                $("#dealExpand").toggle(this.checked);
            });

            $('#rfqId').click(function() {

                $("#rfqExpand").toggle('slow');

            });


        });
    </script>
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
                var stock_value = $('.stock_select').find(":selected").val();
                if (stock_value == 'available') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else if (stock_value == 'limited') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else {
                    $(".qty_display").addClass("d-none");
                    $(".qty_required").prop('required', false);
                }
            });
            $('.stock_select').on('change', function() {
                var stock_value = $(this).find(":selected").val();
                if (stock_value == 'available') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else if (stock_value == 'limited') {
                    $(".qty_display").removeClass("d-none");
                    $(".qty_required").prop('required', true);
                } else {
                    $(".qty_display").addClass("d-none");
                    $(".qty_required").prop('required', false);
                }
            });
            $(document).ready(function() {
                var price_value = $(this).find(":selected").val();
                if (price_value == 'rfq') {
                    // alert(price_value);
                    $(".rfq_price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else if (price_value == 'offer_price') {
                    $(".offer_price").removeClass("d-none");
                    $(".rfq_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else {
                    $(".price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".rfq_price").addClass("d-none");
                }
            });
            $('.price_select').on('change', function() {
                var price_value = $(this).find(":selected").val();
                if (price_value == 'rfq') {
                    // alert(price_value);
                    $(".rfq_price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else if (price_value == 'offer_price') {
                    $(".offer_price").removeClass("d-none");
                    $(".rfq_price").addClass("d-none");
                    $(".price").addClass("d-none");
                } else {
                    $(".price").removeClass("d-none");
                    $(".offer_price").addClass("d-none");
                    $(".rfq_price").addClass("d-none");
                }
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
