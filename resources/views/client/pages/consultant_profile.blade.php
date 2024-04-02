@extends('frontend.master')
@section('content')
    <section>
        <div class="container business-profile">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('consultant.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- First Form --}}
                        <div>
                            <div class="form-heading"> Register Consultant Profile </div>
                            <div class="form-section ">
                                <div class="form-section-title"> Confidential Information <div class="form-section-subtitle">
                                        Please enter your own details here. Information entered here is not publicly
                                        displayed.
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    name="contact_person" value="{{ Auth::user()->name }}"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Your Mobile
                                                    Number</label>
                                                <input type="text" class="form-control form-control-sm phone_number"
                                                    name="contact_number" value="{{ Auth::user()->phone }}"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <label for="exampleInputEmail1" class="form-label">Enter official email
                                                    <span href="#" class="why-needed" data-toggle="tooltip"
                                                        title="This is button.">Why is this needed?</span>
                                                </label>
                                                <input type="email" class="form-control form-control-sm "
                                                    name="email_address" value="{{ Auth::user()->email }}"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="form-fields pb-3">
                                        <li id="li_id_display_contact_details" class="full-width empty">
                                            <div class="field-label">
                                                <input type="checkbox" name="display_contact_details" value="true">
                                                <span class="bold-label">
                                                    <span id="field_label_id_display_contact_details">Display contact
                                                        details to
                                                        introduced members so that they can contact me directly</span>
                                                    <i id="status_icon_id_display_contact_details"
                                                        class="icon-check-empty"></i>
                                                </span>
                                                <div class="sub-label"></div>
                                            </div>
                                            <div class="field-note-wrapper">
                                                <div id="status_message_id_display_contact_details" class="field-note">
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- Second Form --}}
                        <div>
                            <div class="form-section ">
                                <div class="form-section-title"> Profile Information
                                    <div class="form-section-subtitle">
                                        Information entered here is displayed publicly to match you with the right set of
                                        investors and buyers. Do not mention business name/information which can identify
                                        the
                                        business.
                                    </div>
                                </div>
                                <div class="container">
                                    {{-- First Row --}}
                                    <input type="hidden" name="client_id" value="{{ Auth::user()->id }}">

                                    {{-- Second Row --}}
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Select Sector</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <select data-maximum-selection-length="2" data-placeholder="Select Sector"
                                                    name="sector"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option></option>
                                                    @foreach ($sectors as $sector)
                                                        <option value="{{ $sector->id }}">
                                                            {{ $sector->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Select industry</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <select id="select-state-business" data-maximum-selection-length="2"
                                                    data-sm-placeholder="check" multiple="multiple" name="industry_id[]"
                                                    class="select2 select2-search-box form-control form-control-sm">
                                                    <option value="" disabled hidden></option>
                                                    @foreach ($industries as $industry)
                                                        <option value="{{ $industry->id }}">
                                                            {{ $industry->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Second Row --}}
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Where is your office
                                                    located / headquartered?</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <input class="form-control form-control-sm" type="text"
                                                    name="profile_location" placeholder="Enter City Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">From When You Provide
                                                    consultation?</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <select name="established_year" id="select-state-when"
                                                    data-sm-placeholder="check"
                                                    class="select2 select2-search-box form-control form-control-sm ">
                                                    <option value="" disabled selected hidden></option>
                                                    <option value="not_operational">Not Operational Yet</option>
                                                    @foreach ($years as $year)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Experience (in
                                                    Years)</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <input class="form-control form-control-sm price" type="text"
                                                    name="experience" placeholder="Enter Experiece Years">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Second Row --}}
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Describe the
                                                    Consultation You offer
                                                    in a single line</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                {{-- Modal Area --}}
                                                <!-- Button trigger modal -->
                                                <span type="button" class="navy text-so-small" data-bs-toggle="modal"
                                                    data-bs-target="#example"> Examples of what to write</span>
                                                <!-- Modal -->
                                                <div class="modal fade" id="example" tabindex="-1"
                                                    aria-labelledby="exampleLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleLabel">Examples of what
                                                                    to write
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="owl-carousel owl-theme">
                                                                    <div class="item">
                                                                        <ul class="">
                                                                            <li class="text-one">
                                                                                The client will get active NBFC cat B
                                                                                licence.
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="item">
                                                                        <ul class="">
                                                                            <li class="text-one">
                                                                                Hardware-software infrastructure, equipment,
                                                                                and other niche assets.
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="item">
                                                                        <ul class="">
                                                                            <li class="text-one">
                                                                                All fixtures, furniture, audio and visual
                                                                                equipment.
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="item">
                                                                        <ul class="">
                                                                            <li class="text-one">
                                                                                The buyer would receive the entire hospital
                                                                                along with all the medical equipment,
                                                                                supplies, pharmacy, operating theatre
                                                                                equipment, patient database, and doctors.
                                                                                And the lease will be transferred to the
                                                                                buyer's name.
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="item">
                                                                        <ul class="">
                                                                            <li class="text-one">
                                                                                Complete product source code, access to
                                                                                servers &amp; infra machines, deployment on
                                                                                your infra and technical support for 6
                                                                                months.
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Modal Area End --}}
                                                <textarea name="short_description" rows="2" autocomplete="nope" class="form-control form-control-sm"
                                                    spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Second Row --}}
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Describe Your
                                                    Bio</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="">
                                                <textarea name="bio" rows="4" autocomplete="nope" class="form-control form-control-sm" spellcheck="true"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- Second Row --}}
                                    <div class="row pt-3 pb-0">
                                        <div class="col-lg-4">
                                            <div class="mb-1">
                                                <label for="exampleInputEmail1" class="form-label">Specialization</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="w-100">
                                                <textarea name="specialization" rows="4" autocomplete="nope" class="form-control form-control-sm"
                                                    spellcheck="true"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Second Row --}}

                                </div>
                            </div>
                        </div>
                        {{-- First Form --}}
                        <div>
                            <div class="form-section ">
                                <div class="form-section-title"> Photos, Documents & Proof
                                    <div class="form-section-subtitle">
                                        Photos are an important part of your profile and are publicly displayed. Documents
                                        help
                                        us verify and approve your profile faster. Documents names entered here are publicly
                                        visible but are accessible only to introduced members.
                                    </div>
                                </div>
                                <div>
                                    <div class="container pt-3 pb-3">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-1">
                                                    <label for="exampleInputEmail1" class="form-label">Business
                                                        Photo (<span>Only JPG,JPEG,PNG will be accepted</span>)</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="">
                                                    <input name="image" type="file"
                                                        class="form-control form-control-sm " id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row pt-2 pb-0">
                                            <div class="col-lg-4">
                                                <div class="mb-1">
                                                    <label for="exampleInputEmail1" class="form-label">
                                                        Proof of Experience (<span>Only PDF,Doc File will be
                                                            accepted</span>)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="">
                                                    <input name="experience_document" type="file"
                                                        class="form-control form-control-sm " id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2 pb-0">
                                            <div class="col-lg-4">
                                                <div class="mb-1">
                                                    <label for="exampleInputEmail1" class="form-label">
                                                        Verification of Degree (<span>Only PDF,Doc File will be
                                                            accepted</span>)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="">
                                                    <input name="verification_degree" type="file"
                                                        class="form-control form-control-sm " id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Select Plan Form --}}
                        <div>
                            <div class="form-section">
                                <div class="form-section-title">
                                    Select a plan
                                </div>
                                <div class="pb-3">
                                    {{-- Active Bussiness Start --}}
                                    @foreach ($plans as $plan)
                                        <div class="container pt-3">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="form-fields">
                                                        <li id="li_id_display_contact_details" class="full-width empty">
                                                            <div class="field-label d-flex">
                                                                <input type="checkbox" name="display_contact_details"
                                                                    id="id_display_contact_details" sr-value="**">
                                                                <span class="bold-label ms-2 text-one">
                                                                    <span id="field_label_id_display_contact_details">
                                                                        {{ $plan->name }}
                                                                    </span>
                                                                    <i class="navy text-one" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#active-{{ $plan->id }}"
                                                                        aria-expanded="false"
                                                                        aria-controls="active-{{ $plan->id }}">Know
                                                                        More</i>

                                                                    <i id="status_icon_id_display_contact_details"
                                                                        class="icon-check-empty"></i>
                                                                </span>
                                                                <div class="sub-label"></div>
                                                            </div>
                                                            <div class="field-note-wrapper">
                                                                <div id="status_message_id_display_contact_details"
                                                                    class="field-note">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 text-end text-one">
                                                    <span>$ {{ $plan->price }}</span>
                                                </div>
                                            </div>
                                            {{-- Know More Accordion Content Start --}}
                                            @if (!empty($plan->descriptions))
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <div id="active-{{ $plan->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="flush-headingOne"
                                                            data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body px-4 p-3 bg-light">
                                                                @php
                                                                    $descriptions = json_decode($plan->descriptions, true);
                                                                @endphp
                                                                @if (!empty($descriptions))
                                                                    @foreach ($descriptions as $description)
                                                                        <p class="text-one"><i
                                                                                class="fa-solid fa-check text-success"></i>
                                                                                {{ $description }}
                                                                        </p>
                                                                    @endforeach
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- Know More Accordion Content end --}}
                                        </div>
                                    @endforeach
                                    {{-- Active Bussiness Business End --}}

                                    {{-- Select Individual Services  Start --}}
                                    <div class="container">
                                        <div class="row">
                                            <div class="accordion mt-3 mb-3" id="accordionExample">
                                                {{-- First Faq --}}
                                                <div class="accordion-item border-0">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button
                                                            class="accordion-button p-0 bg-transparent border-0 faq-title shadow-none"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#individual_service" aria-expanded="true"
                                                            aria-controls="individual_service">
                                                            <span class="accordion-icon">
                                                                <i class="fa fa-minus faq-icon"
                                                                    style="display: none;"></i>
                                                                <i class="fa fa-plus faq-icon"
                                                                    style="display: inline;"></i>
                                                            </span>Select Individual Services </button>
                                                    </h2>
                                                    <div id="individual_service" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body p-0 text-one ms-3">
                                                            {{-- Select Individual Services  Start --}}
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <ul class="form-fields">
                                                                            <li id="li_id_display_contact_details"
                                                                                class="full-width empty">
                                                                                <div class="field-label d-flex">
                                                                                    <input type="checkbox"
                                                                                        name="display_contact_details"
                                                                                        id="id_display_contact_details"
                                                                                        sr-value="**">
                                                                                    <span class="bold-label ms-2 text-one">
                                                                                        <span
                                                                                            id="field_label_id_display_contact_details">
                                                                                            Professional
                                                                                            Business </span>
                                                                                        <i class="navy text-one"
                                                                                            type="button"
                                                                                            data-bs-toggle="collapse"
                                                                                            data-bs-target="#know-more-2"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="know-more-2">Know
                                                                                            More</i>

                                                                                        <i id="status_icon_id_display_contact_details"
                                                                                            class="icon-check-empty"></i>
                                                                                    </span>
                                                                                    <div class="sub-label"></div>
                                                                                </div>
                                                                                <div class="field-note-wrapper">
                                                                                    <div id="status_message_id_display_contact_details"
                                                                                        class="field-note">
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6 text-end text-one">
                                                                        <span>BDT 14,500</span>
                                                                    </div>
                                                                </div>
                                                                {{-- Know More Accordion Content Start --}}
                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushExample">
                                                                    <div class="accordion-item">
                                                                        <div id="know-more-2"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-headingOne"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body px-4 p-3 bg-light">
                                                                                <p class="text-one"><i
                                                                                        class="fa-solid fa-check text-success"></i>
                                                                                    Speedy profile activation within 1
                                                                                    business
                                                                                    day</p>
                                                                                <p class="text-one"><i
                                                                                        class="fa-solid fa-check text-success"></i>
                                                                                    Speedy profile activation within 1
                                                                                    business
                                                                                    day</p>
                                                                                <p class="text-one"><i
                                                                                        class="fa-solid fa-check text-success"></i>
                                                                                    Speedy profile activation within 1
                                                                                    business
                                                                                    day</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- Know More Accordion Content end --}}
                                                            </div>
                                                            {{-- Select Individual Services  End --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Select Individual Services  End --}}
                                    {{-- Select Individual Services  Start --}}
                                    <div class="container pb-5">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <ul class="form-fields">
                                                    <li id="li_id_display_contact_details" class="full-width empty">
                                                        <div class="field-label d-flex">
                                                            <input type="checkbox" name="acknowledge" checked disabled
                                                                id="id_display_contact_details" sr-value="**">
                                                            <span class="bold-label ms-2 text-one">
                                                                <span id="field_label_id_display_contact_details"> I accept
                                                                    1% finder's fee (payable post transaction) and other
                                                                    <span class="navy">terms of engagement</span> </span>
                                                                <i id="status_icon_id_display_contact_details"
                                                                    class="icon-check-empty"></i>
                                                            </span>
                                                            <div class="sub-label"></div>
                                                        </div>
                                                        <div class="field-note-wrapper">
                                                            <div id="status_message_id_display_contact_details"
                                                                class="field-note">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 text-end text-one">
                                                <button type="submit" class="btn-site-1 login-modal-link"
                                                    style="background-color: #186191; color: white; font-family:proxima_novaregular;
                                                    padding-top: 2px !important; padding-bottom: 2px !important;">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Select Individual Services  End --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="desktop-form-progress-indicator pb-4">
                        <div class="sme-v3-h3"> Your Profile Status </div>
                        <ol class="list-group vertical-steps mt-3">
                            <li class="list-group-item completed">
                                <span>Provide Details</span>
                            </li>
                            <li class="list-group-item active">
                                <span>Verification Call</span>
                            </li>
                            <li class="list-group-item ">
                                <span> Approval</span>
                            </li>
                        </ol>
                    </div>
                    {{-- Faq --}}
                    <div class="pt-3">
                        <h6>Frequently Asked Questions</h6>
                        <div class="accordion mt-3 mb-3" id="accordionExample">
                            {{-- First Faq --}}
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button p-0 bg-transparent border-0 faq-title shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
                                        aria-expanded="true" aria-controls="faq1">
                                        <span class="accordion-icon">
                                            <i class="fa fa-minus faq-icon" style="display: none;"></i>
                                            <i class="fa fa-plus faq-icon" style="display: inline;"></i>
                                        </span> What is a Business Profile? </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 text-one ms-3"> Content for Accordion Item 1 goes here.
                                    </div>
                                </div>
                            </div>
                            {{-- Second Faq --}}
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button p-0 bg-transparent border-0 faq-title shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq2"
                                        aria-expanded="true" aria-controls="faq2">
                                        <span class="accordion-icon">
                                            <i class="fa fa-minus faq-icon" style="display: none;"></i>
                                            <i class="fa fa-plus faq-icon" style="display: inline;"></i>
                                        </span> Why should I disclose my business' name? </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 text-one ms-3"> Content for Accordion Item 1 goes here.
                                    </div>
                                </div>
                            </div>
                            {{-- last Faq --}}
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button p-0 bg-transparent border-0 faq-title shadow-none"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#faq3"
                                        aria-expanded="true" aria-controls="faq3">
                                        <span class="accordion-icon">
                                            <i class="fa fa-minus faq-icon" style="display: none;"></i>
                                            <i class="fa fa-plus faq-icon" style="display: inline;"></i>
                                        </span> Who can create a Business Profile? </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body p-0 text-one ms-3"> Content for Accordion Item 1 goes here.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p-0 m-0 mt-5">
                            <a href="">
                                <i class="navy">See More</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
