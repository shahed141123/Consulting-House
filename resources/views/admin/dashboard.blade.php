@extends('admin.layouts.app')
@section('content')


    <div class="content-wrapper">
        <!-- Page header -->
        <section class="shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                {{-- Page Destination/ BreadCrumb --}}
                <div class="page-header-content d-lg-flex ">
                    <div class="d-flex px-2">
                        <div class="breadcrumb py-2">
                            <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                            <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                            <a href="javascript:void(0);" class="breadcrumb-item">Dashboard</a>
                        </div>
                        <a href="#breadcrumb_elements"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>
                </div>
                {{-- Inner Page Tab --}}
        </section>
        <!-- /page header -->
        <!-- Content area -->
        <div class="container-fluid">
            <div class="row py-2">
                <h5 class="mb-0 text-center mx-auto site_color rounded-0"
                    style="border-bottom: 1px solid #ae0a46; width: 13%; background: #ae0a46;
                color: white;">
                    All Notification</h5>
            </div>
            <div class="row gx-1">
                <div class="col-lg-5 mt-2 ">
                    <div class="container px-1 mb-2">
                        <div class="row gx-2">
                            <div class="col-lg-6">
                                <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                    class=" mb-0 pt-2 text-center">Business</h6>
                                <div class="card notification_card rounded-0 p-2">
                                    {{-- <div class="mt-1">
                                        <a href=""
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Purchase</span>
                                            <span
                                                class="badge site_bg_color rounded-0 ms-3"></span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="javascript:void(0);"
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Pending Delivery</span>
                                            <span
                                                class="badge site_bg_color rounded-0 ms-3"></span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                    class=" mb-0 pt-2 text-center">Profiles</h6>
                                <div class="card notification_card rounded-0 p-2">
                                    <div class="mt-1">
                                        <a href="" class="d-flex justify-content-between link_area">
                                            <span>Pending Approval</span>
                                            <span class="badge site_bg_color rounded-0 ms-3 custom-tooltip"
                                                title=""
                                                data-toggle="tooltip"></span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="" class="d-flex justify-content-between link_area">
                                            <span>Rating Pending</span>
                                            <span
                                                class="badge site_bg_color rounded-0 ms-3"></span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href=""
                                            class="d-flex justify-content-between notification_link_area">
                                            <span></span>
                                            <span
                                                class="badge site_bg_color rounded-0 ms-3"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-2">
                    <div class="container px-1 mb-2">
                        <div class="row gx-2">
                            <div class="col-lg-4">
                                <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                    class=" mb-0 pt-2 text-center">CRM Main </h6>
                                <div class="card notification_card rounded-0 p-2">
                                    <div class="mt-1">
                                        <a href="{{route('admin.contact.index')}}" class="d-flex justify-content-between notification_link_area">
                                            <span>Contact Messages</span>
                                            <span class="badge site_bg_color rounded-0 ms-3">{{ App\Models\Contact::count() }}</span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="" class="d-flex justify-content-between notification_link_area">
                                            <span>One to One Chat</span>
                                            <span class="badge site_bg_color rounded-0 ms-3">15</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                    class=" mb-0 pt-2 text-center">Marketing
                                </h6>
                                <div class="card notification_card rounded-0 p-2">
                                    <div class="mt-1">
                                        <a href="" class="d-flex justify-content-between notification_link_area">
                                            <span>Marketing</span>
                                            <span class="badge site_bg_color rounded-0 ms-3">15</span>
                                        </a>
                                    </div>
                                    {{-- <div class="mt-1">
                                        <a href="" class="d-flex justify-content-between notification_link_area">
                                            <span>DMAR</span>
                                            <span class="badge site_bg_color rounded-0 ms-3">15</span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h6 style="color: #ae0a46; border-bottom: 1px solid #ae0a46;"
                                    class=" mb-0 pt-2 text-center">Site Content
                                </h6>
                                <div class="card notification_card rounded-0 p-2">
                                    <div class="mt-1">
                                        <a href="{{ route('admin.blog-post.index') }}"
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Blog</span>
                                            <span
                                                class="badge bg-secondary rounded-0 ms-3">{{ App\Models\BlogPost::count() }}</span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="{{route('admin.industrial-sector.index')}}"
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Sector</span>
                                            <span
                                                class="badge bg-secondary rounded-0 ms-3">{{ App\Models\IndustrySector::count() }}
                                            </span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="{{ route('admin.industry.index') }}"
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Industry</span>
                                            <span
                                                class="badge bg-secondary rounded-0 ms-3">{{ App\Models\Industry::count() }}</span>
                                        </a>
                                    </div>
                                    <div class="mt-1">
                                        <a href="{{route('admin.industry-watch.index')}}"
                                            class="d-flex justify-content-between notification_link_area">
                                            <span>Industry Watch</span>
                                            <span class="badge bg-secondary rounded-0 ms-3">
                                                {{ App\Models\IndustryWatch::count() }}
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->
    </div>
    <!-- /content area -->
    <script>
        $(document).ready(function() {
            $("#accordion").click(function() {
                $('.expandable').toggle("slide");
            });
        });
    </script>
@endsection
