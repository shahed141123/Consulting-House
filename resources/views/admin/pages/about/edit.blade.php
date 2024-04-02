<!--Start Page Code -->
@extends('admin.layouts.app')
@section('content')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active">Site Content</span>
                    <span class="breadcrumb-item active">About Us</span>
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
        <div class="row">
            <div class="card">

                <div class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <!-- Product Create Form Start -->
                            <form action="{{ route('admin.about-us.update', $aboutUs->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <!-- Product Info Column -->
                                    <div class="col-lg-12">
                                        <div class="card border border-secondary">
                                            <div
                                                class="card-header bg-secondary text-white p-2 rounded-0 d-flex justify-content-between shadow-sm align-items-center">
                                                <a href="{{ route('admin.about-us.index') }}"
                                                    class="btn btn-link btn-labeled btn-labeled-start rounded-pill p-2 shadow-lg">
                                                    <span class="btn-labeled-icon bg-white text-secondary rounded-pill">
                                                        <i class="ph ph-arrow-left"></i>
                                                    </span>
                                                </a>
                                                <h6 class="mb-0">About Us Create Form</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="row gx-2">
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">Breadcrumb &
                                                                Section</h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Page Title <span
                                                                                class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text" id="breadcrumb_title"
                                                                            name="breadcrumb_title"
                                                                            value="{{ $aboutUs->breadcrumb_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50" placeholder="Eg: About Us"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Breadcrumb Sub
                                                                            Title</label>
                                                                        <input type="text" id="breadcrumb_sub_title"
                                                                            name="breadcrumb_sub_title"
                                                                            value="{{ $aboutUs->breadcrumb_sub_title }}"
                                                                            class="form-control form-control-sm"
                                                                            placeholder="Enter Breadcrumb Sub Title"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Section One Badge</label>
                                                                        <input type="text" id="section_one_badge"
                                                                            name="section_one_badge"
                                                                            value="{{ $aboutUs->section_one_badge }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Section One Badge">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Section One Title</label>
                                                                        <input type="text" id="section_one_title"
                                                                            name="section_one_title"
                                                                            value="{{ $aboutUs->section_one_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="100"
                                                                            placeholder="Enter Section One Title" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Section One Sub
                                                                            Title</label>
                                                                        <input type="text" id="section_one_sub_title"
                                                                            name="section_one_sub_title"
                                                                            value="{{ $aboutUs->section_one_sub_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Product Section One Sub Title"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row gx-0 d-flex align-items-center">
                                                                        <div class="col-lg-10">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Section One
                                                                                    Image</label>
                                                                                <input type="file" id="section_one_image"
                                                                                    name="section_one_image"
                                                                                    class="form-control form-control-sm rounded-0">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <label class="form-label"></label>
                                                                            <div class=" form-control form-control-sm rounded-0 text-center border p-0"
                                                                                style="margin-top: -2px;">
                                                                                <img class="p-0"
                                                                                    src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                                                    height="32px" width="100%"
                                                                                    alt="" class="border">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">CEO Section</h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">CEO Section Badge</label>
                                                                        <input type="text" id="ceo_section_badge"
                                                                            name="ceo_section_badge"
                                                                            value="{{ $aboutUs->ceo_section_badge }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter CEO Section Badge">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">CEO Section Title</label>
                                                                        <input type="text" id="ceo_section_title"
                                                                            name="ceo_section_title"
                                                                            value="{{ $aboutUs->ceo_section_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter CEO Section Title">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Title</label>
                                                                        <input type="text" id="ceo_section_sub_title"
                                                                            name="ceo_section_sub_title"
                                                                            value="{{ $aboutUs->ceo_section_sub_title }}"
                                                                            class="form-control form-control-sm  integerInput"
                                                                            maxlength="8"
                                                                            placeholder="Enter CEO Section Sub Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">CEO Name</label>
                                                                        <input type="text" id="ceo_section_ceo_name"
                                                                            name="ceo_section_ceo_name"
                                                                            value="{{ $aboutUs->ceo_section_ceo_name }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter ceo_section_ceo_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">CEO Designation</label>
                                                                        <input type="text"
                                                                            id="ceo_section_ceo_designation"
                                                                            name="ceo_section_ceo_designation"
                                                                            value="{{ $aboutUs->ceo_section_ceo_designation }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter ceo_section_ceo_designation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">CEO Section Signature
                                                                            Image</label>
                                                                        <input type="file"
                                                                            id="ceo_section_signature_image"
                                                                            name="ceo_section_signature_image"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="row gx-0 d-flex align-items-center">
                                                                        <div class="col-lg-10">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">CEO Section
                                                                                    Image</label>
                                                                                <input type="file"
                                                                                    id="ceo_section_image"
                                                                                    name="ceo_section_image"
                                                                                    class="form-control form-control-sm rounded-0">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <label class="form-label"></label>
                                                                            <div class=" form-control form-control-sm rounded-0 text-center border p-0"
                                                                                style="margin-top: -2px;">
                                                                                <img class="p-0"
                                                                                    src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                                                    height="32px" width="100%"
                                                                                    alt="" class="border">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-0">
                                                    <div class="col-lg-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">Section One Description</label>
                                                            <textarea class="form-control form-control-sm" id="ckeditor_classic_empty_1" name="section_one_description"
                                                                placeholder="Enter your text...">{!! $aboutUs->section_one_description !!}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-2">
                                                            <label class="form-label">CEO Section Description</label>
                                                            <textarea class="form-control form-control-sm" id="ckeditor_classic_empty_2" rows="2"
                                                                name="ceo_section_description" placeholder="Enter your text...">{!! $aboutUs->ceo_section_description !!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-2 bg-white mt-3 shadow-sm" style="margin: 1px;">
                                                    <h4 class="text-center" style="border-bottom: 1px solid #247297">Why
                                                        Choose Us</h4>
                                                    <div class="row gx-2 p-2">
                                                        <div class="col-lg-4">
                                                            <div class="mb-2">
                                                                <label class="form-label">Choose Us Section Title</label>
                                                                <input type="text" id="choose_us_section_title"
                                                                    name="choose_us_section_title"
                                                                    value="{{ $aboutUs->choose_us_section_title }}"
                                                                    class="form-control form-control-sm " maxlength="50"
                                                                    placeholder="Enter Choose Us Section Title">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gx-1 p-2">
                                                        <div class="col-lg-4">
                                                            <div class="p-3 bg-light">
                                                                <h6 class="text-center"
                                                                    style="border-bottom: 1px solid #247297">Card One</h6>
                                                                <div class="row gx-0">
                                                                    <div class="row gx-0 d-flex align-items-center">
                                                                        <div class="col-lg-10">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">Choose Us One
                                                                                    Image</label>
                                                                                <input type="file"
                                                                                    name="choose_us_one_image"
                                                                                    class="form-control form-control-sm rounded-0">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-2">
                                                                            <label class="form-label"></label>
                                                                            <div class="form-control form-control-sm rounded-0 text-center border p-0"
                                                                                style="margin-top: -2px;">
                                                                                <img class="p-0"
                                                                                    src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                                                    height="32px" width="100%"
                                                                                    alt="" class="border">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Choose Us One
                                                                            Title</label>
                                                                        <input type="text" id="choose_us_one_title"
                                                                            name="choose_us_one_title"
                                                                            value="{{ $aboutUs->choose_us_one_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Choose Us One Title">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Choose Us One
                                                                            Description</label>
                                                                        <textarea class="form-control form-control-sm" name="choose_us_one_description"
                                                                            placeholder="Enter Choose Us One Description">{{ $aboutUs->choose_us_one_description }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="p-3 bg-light">
                                                                <h6 class="text-center"
                                                                    style="border-bottom: 1px solid #247297">Card Two</h6>
                                                                <div class="row gx-0 d-flex align-items-center">
                                                                    <div class="col-lg-10">
                                                                        <div class="mb-2">
                                                                            <label class="form-label">Choose Us Two
                                                                                Image</label>
                                                                            <input type="file"
                                                                                name="choose_us_two_image"
                                                                                class="form-control form-control-sm rounded-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label class="form-label"></label>
                                                                        <div class=" form-control form-control-sm rounded-0 text-center border p-0"
                                                                            style="margin-top: -2px;">
                                                                            <img class="p-0"
                                                                                src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                                                height="32px" width="100%"
                                                                                alt="" class="border">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label class="form-label">Choose Us Two Title</label>
                                                                    <input type="text" id="choose_us_two_title"
                                                                        name="choose_us_two_title"
                                                                        value="{{ $aboutUs->choose_us_two_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Choose Us Two Title">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label class="form-label">Choose Us Two
                                                                        Description</label>
                                                                    <textarea class="form-control form-control-sm" id="choose_us_two_description" name="choose_us_two_description"
                                                                        placeholder="Enter Choose Us Two Description">{{ $aboutUs->choose_us_two_description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="p-3 bg-light">
                                                                <h6 class="text-center"
                                                                    style="border-bottom: 1px solid #247297">Card Three
                                                                </h6>
                                                                <div class="row gx-0 d-flex align-items-center">
                                                                    <div class="col-lg-10">
                                                                        <div class="mb-2">
                                                                            <label class="form-label">Choose Us Three
                                                                                Image</label>
                                                                            <input type="file"
                                                                                name="choose_us_three_image"
                                                                                class="form-control form-control-sm rounded-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2">
                                                                        <label class="form-label"></label>
                                                                        <div class=" form-control form-control-sm rounded-0 text-center border p-0"
                                                                            style="margin-top: -2px;">
                                                                            <img class="p-0"
                                                                                src="https://t4.ftcdn.net/jpg/03/17/25/45/360_F_317254576_lKDALRrvGoBr7gQSa1k4kJBx7O2D15dc.jpg"
                                                                                height="32px" width="100%"
                                                                                alt="" class="border">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label class="form-label">Choose Us Three Title</label>
                                                                    <input type="text" id="choose_us_three_title"
                                                                        name="choose_us_three_title"
                                                                        value="{{ $aboutUs->choose_us_three_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Choose Us Three Title">
                                                                </div>
                                                                <div class="mb-2">
                                                                    <label class="form-label">Choose Us Three
                                                                        Description</label>
                                                                    <textarea class="form-control form-control-sm" id="choose_us_three_description" name="choose_us_three_description"
                                                                        placeholder="Enter Choose Us Three Description">{{ $aboutUs->choose_us_three_description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-2 bg-white mt-3 p-2 shadow-sm" style="margin: 1px;">
                                                    <div class="col">
                                                        <h4 class="text-center" style="border-bottom: 1px solid #247297">
                                                            Head Office</h4>
                                                        <div class="col-lg-8">
                                                            <div class="mb-2">
                                                                <label class="form-label">Contact Section Title</label>
                                                                <input type="text" id="contact_section_title"
                                                                    name="contact_section_title"
                                                                    value="{{ $aboutUs->contact_section_title }}"
                                                                    class="form-control form-control-sm " maxlength="200"
                                                                    placeholder="Enter Contact Section Title">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Head Office Title</label>
                                                                    <input type="text" id="head_office_title"
                                                                        name="head_office_title"
                                                                        value="{{ $aboutUs->head_office_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Head Office Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Head Office Address</label>
                                                                    <input type="text" id="head_office_address"
                                                                        name="head_office_address"
                                                                        value="{{ $aboutUs->head_office_address }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="200"
                                                                        placeholder="Enter Head Office Address">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Head Office Email</label>
                                                                    <input type="email" id="head_office_email"
                                                                        name="head_office_email"
                                                                        value="{{ $aboutUs->head_office_email }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="100"
                                                                        placeholder="Enter Head Office Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Head Office Phone</label>
                                                                    <input type="text" id="head_office_phone"
                                                                        name="head_office_phone"
                                                                        value="{{ $aboutUs->head_office_phone }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Head Office Phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mt-3">
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">Sub Office One
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office One
                                                                            Title</label>
                                                                        <input type="text" id="sub_office_one_title"
                                                                            name="sub_office_one_title"
                                                                            value="{{ $aboutUs->sub_office_one_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office One Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office One
                                                                            Address</label>
                                                                        <input type="text" id="sub_office_one_address"
                                                                            name="sub_office_one_address"
                                                                            value="{{ $aboutUs->sub_office_one_address }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter Sub Office One Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office One
                                                                            Email</label>
                                                                        <input type="email" id="sub_office_one_email"
                                                                            name="sub_office_one_email"
                                                                            value="{{ $aboutUs->sub_office_one_email }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office One Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office One
                                                                            Phone</label>
                                                                        <input type="text" id="sub_office_one_phone"
                                                                            name="sub_office_one_phone"
                                                                            value="{{ $aboutUs->sub_office_one_phone }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office One Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">Sub Office Two
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Two
                                                                            Title</label>
                                                                        <input type="text" id="sub_office_two_title"
                                                                            name="sub_office_two_title"
                                                                            value="{{ $aboutUs->sub_office_two_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Two Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Two
                                                                            Address</label>
                                                                        <input type="text" id="sub_office_two_address"
                                                                            name="sub_office_two_address"
                                                                            value="{{ $aboutUs->sub_office_two_address }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter Sub Office Two Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Two
                                                                            Email</label>
                                                                        <input type="email" id="sub_office_two_email"
                                                                            name="sub_office_two_email"
                                                                            value="{{ $aboutUs->sub_office_two_email }}"
                                                                            class="form-control form-control-sm"
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Two Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Two
                                                                            Phone</label>
                                                                        <input type="text" id="sub_office_two_phone"
                                                                            name="sub_office_two_phone"
                                                                            value="{{ $aboutUs->sub_office_two_phone }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Two Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-3 mt-3">
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">Sub Office Three
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Three
                                                                            Title</label>
                                                                        <input type="text" id="sub_office_three_title"
                                                                            name="sub_office_three_title"
                                                                            value="{{ $aboutUs->sub_office_three_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Three Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Three
                                                                            Address</label>
                                                                        <input type="text"
                                                                            id="sub_office_three_address"
                                                                            name="sub_office_three_address"
                                                                            value="{{ $aboutUs->sub_office_three_address }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter Sub Office Three Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Three
                                                                            Email</label>
                                                                        <input type="email" id="sub_office_three_email"
                                                                            name="sub_office_three_email"
                                                                            value="{{ $aboutUs->sub_office_three_email }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Three Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Three
                                                                            Phone</label>
                                                                        <input type="text" id="sub_office_three_phone"
                                                                            name="sub_office_three_phone"
                                                                            value="{{ $aboutUs->sub_office_three_phone }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Three Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="p-3 pt-0 shadow-sm bg-white">
                                                            <h4 class="text-center"
                                                                style="border-bottom: 1px solid #247297">Sub Office Four
                                                            </h4>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Four
                                                                            Title</label>
                                                                        <input type="text" id="sub_office_four_title"
                                                                            name="sub_office_four_title"
                                                                            value="{{ $aboutUs->sub_office_four_title }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Four Title">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Four
                                                                            Address</label>
                                                                        <input type="text" id="sub_office_four_address"
                                                                            name="sub_office_four_address"
                                                                            value="{{ $aboutUs->sub_office_four_address }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="200"
                                                                            placeholder="Enter Sub Office Four Address">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Four
                                                                            Email</label>
                                                                        <input type="email" id="sub_office_four_email"
                                                                            name="sub_office_four_email"
                                                                            value="{{ $aboutUs->sub_office_four_email }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Four Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-2">
                                                                        <label class="form-label">Sub Office Four
                                                                            Phone</label>
                                                                        <input type="text" id="sub_office_four_phone"
                                                                            name="sub_office_four_phone"
                                                                            value="{{ $aboutUs->sub_office_four_phone }}"
                                                                            class="form-control form-control-sm "
                                                                            maxlength="50"
                                                                            placeholder="Enter Sub Office Four Phone">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gx-2 bg-white mt-3 p-2 shadow-sm" style="margin: 1px;">
                                                    <div class="col">
                                                        <h4 class="text-center" style="border-bottom: 1px solid #247297">
                                                            Counter</h4>
                                                        <div class="row">
                                                            <div class="col-lg-1">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Value 1</label>
                                                                    <input type="text" id="counter_one_value"
                                                                        name="counter_one_value"
                                                                        value="{{ $aboutUs->counter_one_value }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50" placeholder="Eg: 404">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Counter One_title</label>
                                                                    <input type="text" id="counter_one_title"
                                                                        name="counter_one_title"
                                                                        value="{{ $aboutUs->counter_one_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="200"
                                                                        placeholder="Enter Counter One_title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Value 2</label>
                                                                    <input type="text" id="counter_two_value"
                                                                        name="counter_two_value"
                                                                        value="{{ $aboutUs->counter_two_value }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="100" placeholder="Eg: 404">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Counter Two Title</label>
                                                                    <input type="text" id="counter_two_title"
                                                                        name="counter_two_title"
                                                                        value="{{ $aboutUs->counter_two_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Counter Two Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Value 3</label>
                                                                    <input type="text" id="counter_three_value"
                                                                        name="counter_three_value"
                                                                        value="{{ $aboutUs->counter_three_value }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50" placeholder="Eg: 404">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Counter Three Title</label>
                                                                    <input type="text" id="counter_three_title"
                                                                        name="counter_three_title"
                                                                        value="{{ $aboutUs->counter_three_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Counter Three Title">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Value 4</label>
                                                                    <input type="text" id="counter_four_value"
                                                                        name="counter_four_value"
                                                                        value="{{ $aboutUs->counter_four_value }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50" placeholder="Eg: 404">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="mb-2">
                                                                    <label class="form-label">Counter Four Title</label>
                                                                    <input type="text" id="counter_four_title"
                                                                        name="counter_four_title"
                                                                        value="{{ $aboutUs->counter_four_title }}"
                                                                        class="form-control form-control-sm "
                                                                        maxlength="50"
                                                                        placeholder="Enter Counter Four Title">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end mt-3">
                                                    <button type="reset" class="btn btn-danger">Reset <i
                                                            class="icon-reset"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Submit <i
                                                            class="ph-paper-plane-tilt ms-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Submit Button Start-->
                                    <!-- Form Submit Button End--Product Price Column -->
                                </div>
                            </form>
                            <!-- Product Create Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!--End Page Code -->
