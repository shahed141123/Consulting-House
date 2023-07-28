@extends('frontend.master')
@section('content')
    <section class="container mt-65">
        <div class="dashboard-v2 row">
            <div class="mobile-sidebar-container floating-panel-container col-md-3 mb-2">
                <div class="mobile-sidebar ">
                    <div class="dashboard-sidebar-wrapper">
                        <div class="quick-links mt-0">
                            <ul class="linkmenu nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li class="p-0"><a href="/dashboard/"> <i class="fa fa-angle-left"
                                            style="font-size: 10px;"></i>
                                        Back to Dashboard</a></li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'contact_details' ? 'active' : '' }}"
                                        id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                                        role="tab" aria-controls="v-pills-home" aria-selected="true">Billing Details
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'deal-preferences' ? 'active' : '' }}"
                                        id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Deal
                                        Preferences
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'email-preferences' ? 'active' : '' }}"
                                        id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Email
                                        Preferences
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="p-0">
                                    <a class="h6 {{ $active_id == 'password' ? 'active' : '' }}" id="v-pills-settings-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-settings" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false">Change Password
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-sidebar-mask"></div>
            </div>

            <div class="col-md-8 no-gutter-mobile">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade {{ $active_id == 'contact_details' ? 'show' : '' }} {{ $active_id == 'contact_details' ? 'active' : '' }}"
                        id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Billing Details</div>
                                <main style="padding: 20px;">
                                    <p style="margin: -10px 0 10px 0; color: #999; font-size: 13px">
                                        Any changes made here will reflect only in the future invoices and not the already
                                        saved ones.
                                    </p>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="email" class="form-control" id="name"
                                                        aria-describedby="emailHelp" placeholder="Enter Name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mobile_no">Mobile Number</label>
                                                    <input type="email" class="form-control" id="mobile_no"
                                                        aria-describedby="emailHelp" placeholder="Enter Mobile Number">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="email" class="form-control" id="location"
                                                        aria-describedby="emailHelp" placeholder="Enter Location">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="company_name">Company Name</label>
                                                    <input type="email" class="form-control" id="company_name"
                                                        aria-describedby="emailHelp" placeholder="Enter Company Name">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timezone">Timezone</label>
                                                    <input type="email" class="form-control" id="timezone"
                                                        aria-describedby="emailHelp" placeholder="Enter Timezone">

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="designation">Designation</label>
                                                    <input type="email" class="form-control" id="designation"
                                                        aria-describedby="emailHelp" placeholder="Enter Designation">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <textarea class="form-control" id="address" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $active_id == 'deal-preferences' ? 'show' : '' }} {{ $active_id == 'deal-preferences' ? 'active' : '' }}"
                        id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Deal Preferences</div>
                                <main style="padding: 20px;">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="locations">Locations</label>
                                                    <select name="locations[]" id="locations"
                                                        class="form-control form-control-sm select2-search-box"
                                                        multiple="multiple">
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}">{{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label for="industries">Industries</label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <select class="form-select select2-search-box"
                                                            multiple="multiple" name="industries[]" id="industries">
                                                            @foreach ($industries as $industry)
                                                                <option value="{{ $industry->id }}">{{ $industry->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location">Deal Size</label>
                                                    <input type="email" class="form-control" id="location"
                                                        aria-describedby="emailHelp" placeholder="Enter Location">

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $active_id == 'email-preferences' ? 'show' : '' }} {{ $active_id == 'email-preferences' ? 'active' : '' }}"
                        id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Email Preferences</div>
                                <main style="padding: 20px;">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Important Communications</label>
                                                    <select name="email_subscription"
                                                        class="form-control form-control-sm select"
                                                        data-button-class="btn btn-sm"
                                                        data-placeholder="Communication Email Preference">
                                                        <option value="subscribed">Subscribed
                                                        </option>
                                                        <option value="unsubscribed">Unsubscribed
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="business_email_frequency">Business Proposals</label>
                                                    <select name="business_email_frequency" id="business_email_frequency"
                                                        class="form-control form-control-sm select"
                                                        data-button-class="btn btn-sm"
                                                        data-placeholder="Communication Email Preference">
                                                        <option value="">---------</option>
                                                        <option value="real_time">Real Time</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="weekly">Weekly</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="quarterly">Quarterly</option>
                                                        <option value="half_yearly">Half Yearly</option>
                                                        <option value="yearly">Yearly</option>
                                                        <option value="no_email">No Email</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="opportunity_email_frequency">New Opportunity
                                                        Notifications</label>
                                                    <select name="opportunity_email_frequency"
                                                        id="opportunity_email_frequency"
                                                        class="form-control form-control-sm select"
                                                        data-button-class="btn btn-sm"
                                                        data-placeholder="Opportunity Email Preference">
                                                        <option value="">---------</option>
                                                        <option value="real_time">Real Time</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="weekly">Weekly</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="quarterly">Quarterly</option>
                                                        <option value="half_yearly">Half Yearly</option>
                                                        <option value="yearly">Yearly</option>
                                                        <option value="no_email">No Email</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade {{ $active_id == 'password' ? 'show' : '' }} {{ $active_id == 'password' ? 'active' : '' }}"
                        id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="white-box-wrapper">
                            <div class="white-box">
                                <div class="box-heading">Password Settings</div>
                                <main style="padding: 20px;">

                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label for="old_password">Old Password</label>
                                                    <input type="password" class="form-control" id="old_password"
                                                        name="old_password" aria-describedby="emailHelp"
                                                        placeholder="Enter Old Password">

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label for="new_password">New Password</label>
                                                    <input type="password" class="form-control" id="new_password"
                                                        name="new_password" aria-describedby="emailHelp"
                                                        placeholder="Enter New Password">

                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group">
                                                    <label for="confirm_password">Confirm Password</label>
                                                    <input type="password" class="form-control" id="confirm_password"
                                                        name="confirm_password" aria-describedby="emailHelp"
                                                        placeholder="Repeat New Password">

                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
