@extends('frontend.master')
@section('content')
    <div class="smergers-form-wrapper single-page-form">
        <form id="business-form" method="post" action="/save-business-profile/" enctype="multipart/form-data"
            name="business-form">
            <input type="hidden" name="csrfmiddlewaretoken"
                value="6JXjWNCgCm1QhOVXDcnx63GAnLhj5UJy0d4uYb79a7XIx26gj4QfodbQveXthAvU">
            <input id="id_business_id" type="hidden" name="business_id" value="211529">
            <div class="form-step-fields-wrapper">
                <div class="form-step-fields active" data-pageno="1">
                    <div class="container">
                        <div class="form-heading">
                            Register Business Profile
                        </div>
                        <div class="step-progress-bar-wrapper">
                            <div class="step-progress-bar">
                                <div class="step-progress-bar-item step-progress-bar-item--completed">
                                    <div class="step-progress-bar-item__text">
                                        <i class="icon-ok"></i>
                                    </div>
                                    <div class="step-progress-bar-item__label">
                                        Provide Details
                                    </div>
                                </div>
                                <div class="step-progress-bar-connector step-progress-bar-connector--completed"></div>
                                <div class="step-progress-bar-item step-progress-bar-item--active">
                                    <div class="step-progress-bar-item__text">
                                        2
                                    </div>
                                    <div class="step-progress-bar-item__label">
                                        Verification Call
                                    </div>
                                </div>
                                <div class="step-progress-bar-connector "></div>
                                <div class="step-progress-bar-item ">
                                    <div class="step-progress-bar-item__text">
                                        3
                                    </div>
                                    <div class="step-progress-bar-item__label">
                                        Approval
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 sme-v3-no-padding-in-mobile">
                            <div class="form-field-errors-wrapper"></div>
                            <div class="form-section">
                                <div class="form-section-title">
                                    Confidential Information
                                    <div class="form-section-subtitle">
                                        Please enter your own details here. Information entered here is not publicly
                                        displayed.
                                    </div>
                                </div>
                                <div class="form-fields-wrapper">
                                    <div class="col-md-6 form-fields-column column-left">
                                        <ul class="form-fields">
                                            <li class="columns-1 success" id="li_id_contact_person">
                                                <div class="field-label-wrapper">
                                                    <div class="field-label">
                                                        <div class="bold-label">
                                                            <label id="field_label_id_contact_person"
                                                                for="id_contact_person">Your Name</label>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field-wrapper">
                                                    <div class="form-field ">
                                                        <div class="smergers-input-group ">
                                                            <input type="text" name="contact_person"
                                                                value="DEV1 - NGENIT" maxlength="100" autocomplete="nope"
                                                                class=" smergers-input" id="id_contact_person">
                                                            <div class="smergers-input-addon status-icon-wrapper">
                                                                <i id="status_icon_id_contact_person"
                                                                    class="icon-ok-sign"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field-note ">
                                                        <span class="status-message"
                                                            id="status_message_id_contact_person"></span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 form-fields-column column-right">
                                        <ul class="form-fields">
                                            <li class="columns-1 " id="li_id_company_name">
                                                <div class="field-label-wrapper">
                                                    <div class="field-label">
                                                        <div class="bold-label">
                                                            <label id="field_label_id_company_name"
                                                                for="id_company_name">Company Name</label>
                                                            <span href="#" class="why-needed" data-toggle="popover"
                                                                data-content="This information is required for our verification process. SMERGERS may ask for supporting documentation without which we are unable to activate your profile. This information is never disclosed to anyone without your permission."
                                                                data-trigger="hover" data-placement="top"
                                                                data-container="body" data-original-title=""
                                                                title="">Why is this needed?</span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field-wrapper">
                                                    <div class="form-field ">
                                                        <div class="smergers-input-group ">
                                                            <input type="text" name="company_name" maxlength="100"
                                                                autocomplete="nope" class=" smergers-input"
                                                                id="id_company_name">
                                                            <div class="smergers-input-addon status-icon-wrapper">
                                                                <i id="status_icon_id_company_name"
                                                                    class="icon-check-empty"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field-note ">
                                                        <span class="status-message"
                                                            id="status_message_id_company_name"></span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="col-md-6 form-fields-column column-left">
                                        <ul class="form-fields">
                                            <li class="columns-1 " id="li_id_mobile_number">
                                                <div class="field-label-wrapper">
                                                    <div class="field-label">
                                                        <div class="bold-label">
                                                            <label id="field_label_id_mobile_number"
                                                                for="id_mobile_number">Your Mobile Number</label>
                                                            <span href="#" class="why-needed" data-toggle="popover"
                                                                data-content="We'll use this to contact you for verification and activation of your account. We will never share your number with telemarketers."
                                                                data-trigger="hover" data-placement="top"
                                                                data-container="body" data-original-title=""
                                                                title="">Why is this needed?</span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field-wrapper">
                                                    <div class="form-field ">
                                                        <div class="col-xs-3" style="padding: 0;">
                                                            <div class="select2-container smergers-input select-dropdown country-code-dropdown"
                                                                id="s2id_id_country_code"><a href="javascript:void(0)"
                                                                    class="select2-choice" tabindex="-1"> <span
                                                                        class="select2-chosen"
                                                                        id="select2-chosen-4">+880</span><abbr
                                                                        class="select2-search-choice-close"></abbr> <span
                                                                        class="select2-arrow" role="presentation"><b
                                                                            role="presentation"></b></span></a><label
                                                                    for="s2id_autogen4"
                                                                    class="select2-offscreen"></label><input
                                                                    class="select2-focusser select2-offscreen"
                                                                    type="text" aria-haspopup="true" role="button"
                                                                    aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                                                                <div
                                                                    class="select2-drop select2-display-none country-dropdown select2-with-searchbox">
                                                                    <div class="select2-search"> <label
                                                                            for="s2id_autogen4_search"
                                                                            class="select2-offscreen"></label> <input
                                                                            type="text" autocomplete="nope"
                                                                            autocorrect="off" autocapitalize="off"
                                                                            spellcheck="false" class="select2-input"
                                                                            role="combobox" aria-expanded="true"
                                                                            aria-autocomplete="list"
                                                                            aria-owns="select2-results-4"
                                                                            id="s2id_autogen4_search" placeholder="">
                                                                    </div>
                                                                    <ul class="select2-results" role="listbox"
                                                                        id="select2-results-4"> </ul>
                                                                </div>
                                                            </div><input type="text" name="country_code"
                                                                value="+880" autocomplete="nope"
                                                                class=" smergers-input select-dropdown country-code-dropdown"
                                                                required="" id="id_country_code" tabindex="-1"
                                                                title="" style="display: none;">
                                                        </div>
                                                        <div class="col-xs-9" style="padding: 0;">
                                                            <div class="smergers-input-group">
                                                                <input type="text" name="mobile_number" maxlength="40"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input only-numbers-input"
                                                                    id="id_mobile_number">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_mobile_number"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="field-note ">
                                                        <span class="status-message"
                                                            id="status_message_id_mobile_number"></span>
                                                        <div class="mobile-verification-wrapper">
                                                            <div class="message"></div>
                                                            <div class="smergers-input-group">
                                                                <input
                                                                    class="smergers-input id_mobile_number-verification-input"
                                                                    type="text"
                                                                    placeholder="Enter your verification code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 form-fields-column column-right">
                                        <ul class="form-fields">
                                            <li class="columns-1 " id="li_id_email_address">
                                                <div class="field-label-wrapper">
                                                    <div class="field-label">
                                                        <div class="bold-label">
                                                            <label id="field_label_id_email_address"
                                                                for="id_email_address">Enter official email</label>
                                                            <span href="#" class="why-needed" data-toggle="popover"
                                                                data-content="Enter a valid official email address to ensure your profile is prioritized and verified faster. Please note that this email address is used only for verification purposes and all email communications will be sent only to your registered email address."
                                                                data-trigger="hover" data-placement="top"
                                                                data-container="body" data-original-title=""
                                                                title="">Why is this needed?</span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-field-wrapper">
                                                    <div class="form-field ">
                                                        <div class="smergers-input-group ">
                                                            <input type="email" name="email_address" maxlength="254"
                                                                autocomplete="nope" class=" smergers-input"
                                                                id="id_email_address">
                                                            <div class="smergers-input-addon status-icon-wrapper">
                                                                <i id="status_icon_id_email_address"
                                                                    class="icon-check-empty"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="field-note ">
                                                        <span class="status-message"
                                                            id="status_message_id_email_address"></span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="email-verification-wrapper">
                                                <div class="message" style="padding-top: 0"></div>
                                                <div class="smergers-input-group">
                                                    <input class="smergers-input id_email_address-verification-input"
                                                        type="text" placeholder="Enter your verification code">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <ul class="form-fields">
                                        <li id="li_id_display_contact_details" class="full-width empty">
                                            <div class="field-label">
                                                <input type="checkbox" name="display_contact_details"
                                                    id="id_display_contact_details" sr-value="**">
                                                <span class="bold-label">
                                                    <span id="field_label_id_display_contact_details">Display contact
                                                        details to introduced members so that they can contact me
                                                        directly</span>
                                                    <i id="status_icon_id_display_contact_details"
                                                        class="icon-check-empty"></i>
                                                </span>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                            <div class="field-note-wrapper">
                                                <div id="status_message_id_display_contact_details" class="field-note">
                                                </div>
                                            </div>
                                        </li>
                                        <li id="li_id_display_company_details" class="full-width empty">
                                            <div class="field-label">
                                                <input type="checkbox" name="display_company_details"
                                                    id="id_display_company_details" sr-value="**">
                                                <span class="bold-label">
                                                    <span id="field_label_id_display_company_details">Display company
                                                        details to introduced members so that they can know about my
                                                        company</span>
                                                    <i id="status_icon_id_display_company_details"
                                                        class="icon-check-empty"></i>
                                                </span>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                            <div class="field-note-wrapper">
                                                <div id="status_message_id_display_company_details" class="field-note">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="form-section-title">
                                    Business Information
                                    <div class="form-section-subtitle">
                                        <span class="advisor-content"
                                            style="
                        display: none;">Please enter the details of
                                            your client's business which you wish to sell/seek investment for.</span>
                                        <span>Information entered here is displayed publicly to match you with the right set
                                            of investors and buyers. Do not mention business name/information which can
                                            identify the business.</span>
                                    </div>
                                </div>
                                <div class="form-fields-wrapper">
                                    <ul class="form-fields">
                                        <li class="columns-2 " id="li_id_type">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_type" for="id_type">You are
                                                            a(n)</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container smergers-input select-dropdown"
                                                            id="s2id_id_type"><a href="javascript:void(0)"
                                                                class="select2-choice select2-default" tabindex="-1">
                                                                <span class="select2-chosen"
                                                                    id="select2-chosen-1"></span><abbr
                                                                    class="select2-search-choice-close"></abbr> <span
                                                                    class="select2-arrow" role="presentation"><b
                                                                        role="presentation"></b></span></a><label
                                                                for="s2id_autogen1" class="select2-offscreen">You are
                                                                a(n)</label><input
                                                                class="select2-focusser select2-offscreen" type="text"
                                                                aria-haspopup="true" role="button"
                                                                aria-labelledby="select2-chosen-1" id="s2id_autogen1">
                                                            <div
                                                                class="select2-drop select2-display-none select2-with-searchbox">
                                                                <div class="select2-search"> <label
                                                                        for="s2id_autogen1_search"
                                                                        class="select2-offscreen">You are a(n)</label>
                                                                    <input type="text" autocomplete="nope"
                                                                        autocorrect="off" autocapitalize="off"
                                                                        spellcheck="false" class="select2-input"
                                                                        role="combobox" aria-expanded="true"
                                                                        aria-autocomplete="list"
                                                                        aria-owns="select2-results-1"
                                                                        id="s2id_autogen1_search" placeholder=""> </div>
                                                                <ul class="select2-results" role="listbox"
                                                                    id="select2-results-1"> </ul>
                                                            </div>
                                                        </div><select name="type" autocomplete="nope"
                                                            class=" smergers-input select-dropdown" required=""
                                                            id="id_type" tabindex="-1" title="You are a(n)"
                                                            style="display: none;">
                                                            <option value="" selected=""></option>
                                                            <option value="BUSINESS_OWNER">Business Owner / Director
                                                            </option>
                                                            <option value="MANAGEMENT">Management Member</option>
                                                            <option value="ADVISOR">Advisor / Business Broker</option>
                                                        </select>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_type" class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message" id="status_message_id_type"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_transaction_type">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_transaction_type"
                                                            for="id_transaction_type">You are interested in</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container smergers-input select-dropdown"
                                                            id="s2id_id_transaction_type"><a href="javascript:void(0)"
                                                                class="select2-choice select2-default" tabindex="-1">
                                                                <span class="select2-chosen"
                                                                    id="select2-chosen-5"></span><abbr
                                                                    class="select2-search-choice-close"></abbr> <span
                                                                    class="select2-arrow" role="presentation"><b
                                                                        role="presentation"></b></span></a><label
                                                                for="s2id_autogen5" class="select2-offscreen">You are
                                                                interested in</label><input
                                                                class="select2-focusser select2-offscreen" type="text"
                                                                aria-haspopup="true" role="button"
                                                                aria-labelledby="select2-chosen-5" id="s2id_autogen5">
                                                            <div
                                                                class="select2-drop select2-display-none select2-with-searchbox">
                                                                <div class="select2-search"> <label
                                                                        for="s2id_autogen5_search"
                                                                        class="select2-offscreen">You are interested
                                                                        in</label> <input type="text"
                                                                        autocomplete="nope" autocorrect="off"
                                                                        autocapitalize="off" spellcheck="false"
                                                                        class="select2-input" role="combobox"
                                                                        aria-expanded="true" aria-autocomplete="list"
                                                                        aria-owns="select2-results-5"
                                                                        id="s2id_autogen5_search" placeholder=""> </div>
                                                                <ul class="select2-results" role="listbox"
                                                                    id="select2-results-5"> </ul>
                                                            </div>
                                                        </div><select name="transaction_type" autocomplete="nope"
                                                            class=" smergers-input select-dropdown" required=""
                                                            id="id_transaction_type" tabindex="-1"
                                                            title="You are interested in" style="display: none;">
                                                            <option value=""></option>
                                                            <option value="FULL_SALE">Full sale of business</option>
                                                            <option value="FINANCIAL_INVESTMENT">Partial stake sale of
                                                                business/investment</option>
                                                            <option value="BUSINESS_LOAN">Loan for business</option>
                                                            <option value="ASSET_SALE">Selling or Leasing out Business
                                                                Assets</option>
                                                        </select>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_transaction_type"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_transaction_type"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-3 " id="li_id_established">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_established" for="id_established">When
                                                            was the business established?</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container smergers-input select-dropdown"
                                                            id="s2id_id_established"><a href="javascript:void(0)"
                                                                class="select2-choice select2-default" tabindex="-1">
                                                                <span class="select2-chosen"
                                                                    id="select2-chosen-3"></span><abbr
                                                                    class="select2-search-choice-close"></abbr> <span
                                                                    class="select2-arrow" role="presentation"><b
                                                                        role="presentation"></b></span></a><label
                                                                for="s2id_autogen3" class="select2-offscreen">When was the
                                                                business established?</label><input
                                                                class="select2-focusser select2-offscreen" type="text"
                                                                aria-haspopup="true" role="button"
                                                                aria-labelledby="select2-chosen-3" id="s2id_autogen3">
                                                            <div
                                                                class="select2-drop select2-display-none select2-with-searchbox">
                                                                <div class="select2-search"> <label
                                                                        for="s2id_autogen3_search"
                                                                        class="select2-offscreen">When was the business
                                                                        established?</label> <input type="text"
                                                                        autocomplete="nope" autocorrect="off"
                                                                        autocapitalize="off" spellcheck="false"
                                                                        class="select2-input" role="combobox"
                                                                        aria-expanded="true" aria-autocomplete="list"
                                                                        aria-owns="select2-results-3"
                                                                        id="s2id_autogen3_search" placeholder=""> </div>
                                                                <ul class="select2-results" role="listbox"
                                                                    id="select2-results-3"> </ul>
                                                            </div>
                                                        </div><select name="established" autocomplete="nope"
                                                            class=" smergers-input select-dropdown" id="id_established"
                                                            tabindex="-1" title="When was the business established?"
                                                            style="display: none;">
                                                            <option value="" selected=""></option>
                                                            <option value="999999">Not Operational Yet</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                            <option value="1919">1919</option>
                                                            <option value="1918">1918</option>
                                                            <option value="1917">1917</option>
                                                            <option value="1916">1916</option>
                                                            <option value="1915">1915</option>
                                                            <option value="1914">1914</option>
                                                            <option value="1913">1913</option>
                                                            <option value="1912">1912</option>
                                                            <option value="1911">1911</option>
                                                            <option value="1910">1910</option>
                                                            <option value="1909">1909</option>
                                                            <option value="1908">1908</option>
                                                            <option value="1907">1907</option>
                                                            <option value="1906">1906</option>
                                                            <option value="1905">1905</option>
                                                            <option value="1904">1904</option>
                                                            <option value="1903">1903</option>
                                                            <option value="1902">1902</option>
                                                            <option value="1901">1901</option>
                                                            <option value="1900">1900</option>
                                                            <option value="1899">1899</option>
                                                            <option value="1898">1898</option>
                                                            <option value="1897">1897</option>
                                                            <option value="1896">1896</option>
                                                            <option value="1895">1895</option>
                                                            <option value="1894">1894</option>
                                                            <option value="1893">1893</option>
                                                            <option value="1892">1892</option>
                                                            <option value="1891">1891</option>
                                                            <option value="1890">1890</option>
                                                            <option value="1889">1889</option>
                                                            <option value="1888">1888</option>
                                                            <option value="1887">1887</option>
                                                            <option value="1886">1886</option>
                                                            <option value="1885">1885</option>
                                                            <option value="1884">1884</option>
                                                            <option value="1883">1883</option>
                                                            <option value="1882">1882</option>
                                                            <option value="1881">1881</option>
                                                            <option value="1880">1880</option>
                                                            <option value="1879">1879</option>
                                                            <option value="1878">1878</option>
                                                            <option value="1877">1877</option>
                                                            <option value="1876">1876</option>
                                                            <option value="1875">1875</option>
                                                            <option value="1874">1874</option>
                                                            <option value="1873">1873</option>
                                                            <option value="1872">1872</option>
                                                            <option value="1871">1871</option>
                                                            <option value="1870">1870</option>
                                                            <option value="1869">1869</option>
                                                            <option value="1868">1868</option>
                                                            <option value="1867">1867</option>
                                                            <option value="1866">1866</option>
                                                            <option value="1865">1865</option>
                                                            <option value="1864">1864</option>
                                                            <option value="1863">1863</option>
                                                            <option value="1862">1862</option>
                                                            <option value="1861">1861</option>
                                                            <option value="1860">1860</option>
                                                            <option value="1859">1859</option>
                                                            <option value="1858">1858</option>
                                                            <option value="1857">1857</option>
                                                            <option value="1856">1856</option>
                                                            <option value="1855">1855</option>
                                                            <option value="1854">1854</option>
                                                            <option value="1853">1853</option>
                                                            <option value="1852">1852</option>
                                                            <option value="1851">1851</option>
                                                            <option value="1850">1850</option>
                                                            <option value="1849">1849</option>
                                                            <option value="1848">1848</option>
                                                            <option value="1847">1847</option>
                                                            <option value="1846">1846</option>
                                                            <option value="1845">1845</option>
                                                            <option value="1844">1844</option>
                                                            <option value="1843">1843</option>
                                                            <option value="1842">1842</option>
                                                            <option value="1841">1841</option>
                                                            <option value="1840">1840</option>
                                                            <option value="1839">1839</option>
                                                            <option value="1838">1838</option>
                                                            <option value="1837">1837</option>
                                                            <option value="1836">1836</option>
                                                            <option value="1835">1835</option>
                                                            <option value="1834">1834</option>
                                                            <option value="1833">1833</option>
                                                            <option value="1832">1832</option>
                                                            <option value="1831">1831</option>
                                                            <option value="1830">1830</option>
                                                            <option value="1829">1829</option>
                                                            <option value="1828">1828</option>
                                                            <option value="1827">1827</option>
                                                            <option value="1826">1826</option>
                                                            <option value="1825">1825</option>
                                                            <option value="1824">1824</option>
                                                            <option value="1823">1823</option>
                                                            <option value="1822">1822</option>
                                                            <option value="1821">1821</option>
                                                            <option value="1820">1820</option>
                                                            <option value="1819">1819</option>
                                                            <option value="1818">1818</option>
                                                            <option value="1817">1817</option>
                                                            <option value="1816">1816</option>
                                                            <option value="1815">1815</option>
                                                            <option value="1814">1814</option>
                                                            <option value="1813">1813</option>
                                                            <option value="1812">1812</option>
                                                            <option value="1811">1811</option>
                                                            <option value="1810">1810</option>
                                                            <option value="1809">1809</option>
                                                            <option value="1808">1808</option>
                                                            <option value="1807">1807</option>
                                                            <option value="1806">1806</option>
                                                            <option value="1805">1805</option>
                                                            <option value="1804">1804</option>
                                                            <option value="1803">1803</option>
                                                            <option value="1802">1802</option>
                                                            <option value="1801">1801</option>
                                                            <option value="1800">1800</option>
                                                        </select>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_established"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_established"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_industry_activity">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_industry_activity"
                                                            for="id_industry_activity">Select business' industry</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container select2-container-multi smergers-input industry-dropdown"
                                                            id="s2id_id_industry_activity">
                                                            <ul class="select2-choices">
                                                                <li class="select2-search-field"> <label
                                                                        for="s2id_autogen7"
                                                                        class="select2-offscreen">Select business'
                                                                        industry</label> <input type="text"
                                                                        autocomplete="nope" autocorrect="off"
                                                                        autocapitalize="off" spellcheck="false"
                                                                        class="select2-input select2-default"
                                                                        id="s2id_autogen7" placeholder=""
                                                                        style="width: 401.4px;"> </li>
                                                            </ul>
                                                            <div
                                                                class="select2-drop select2-drop-multi select2-display-none">
                                                                <ul class="select2-results">
                                                                    <li class="select2-no-results">No matches found</li>
                                                                </ul>
                                                            </div>
                                                        </div><input type="text" name="industry_activity"
                                                            autocomplete="nope" class=" smergers-input industry-dropdown"
                                                            required="" id="id_industry_activity" tabindex="-1"
                                                            style="display: none;">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_industry_activity"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_industry_activity"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_cities">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_cities" for="id_cities">Where is the
                                                            business located / headquartered?</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container select2-container-multi location-dropdown smergers-input location-dropdown"
                                                            id="s2id_id_cities" style="min-width: 200px;">
                                                            <ul class="select2-choices">
                                                                <li class="select2-search-field"> <label
                                                                        for="s2id_autogen8"
                                                                        class="select2-offscreen">Where is the business
                                                                        located?</label> <input type="text"
                                                                        autocomplete="nope" autocorrect="off"
                                                                        autocapitalize="off" spellcheck="false"
                                                                        class="select2-input" id="s2id_autogen8"
                                                                        placeholder="" style="width: 20px;"> </li>
                                                            </ul>
                                                            <div
                                                                class="select2-drop select2-drop-multi select2-display-none">
                                                                <ul class="select2-results">
                                                                    <li class="select2-no-results">No matches found</li>
                                                                </ul>
                                                            </div>
                                                        </div><input type="text" name="cities"
                                                            class="location-dropdown smergers-input location-dropdown"
                                                            style="min-width: 200px; display: none;" autocomplete="nope"
                                                            required="" id="id_cities" tabindex="-1">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_cities" class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message" id="status_message_id_cities"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-3 " id="li_id_employees">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_employees" for="id_employees">How many
                                                            permanent employees does the business have?</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <input type="text" name="employees" autocomplete="nope"
                                                            class=" smergers-input only-numbers-input" required=""
                                                            id="id_employees" skip-validation="false">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_employees" class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message" id="status_message_id_employees"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_company_entity_type">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_company_entity_type"
                                                            for="id_company_entity_type">Select business legal entity
                                                            type</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <div class="select2-container smergers-input select-dropdown"
                                                            id="s2id_id_company_entity_type"><a href="javascript:void(0)"
                                                                class="select2-choice select2-default" tabindex="-1">
                                                                <span class="select2-chosen"
                                                                    id="select2-chosen-2"></span><abbr
                                                                    class="select2-search-choice-close"></abbr> <span
                                                                    class="select2-arrow" role="presentation"><b
                                                                        role="presentation"></b></span></a><label
                                                                for="s2id_autogen2" class="select2-offscreen">Select
                                                                business legal entity type</label><input
                                                                class="select2-focusser select2-offscreen" type="text"
                                                                aria-haspopup="true" role="button"
                                                                aria-labelledby="select2-chosen-2" id="s2id_autogen2"
                                                                skip-validation="false">
                                                            <div
                                                                class="select2-drop select2-display-none select2-with-searchbox">
                                                                <div class="select2-search"> <label
                                                                        for="s2id_autogen2_search"
                                                                        class="select2-offscreen">Select business legal
                                                                        entity type</label> <input type="text"
                                                                        autocomplete="nope" autocorrect="off"
                                                                        autocapitalize="off" spellcheck="false"
                                                                        class="select2-input" role="combobox"
                                                                        aria-expanded="true" aria-autocomplete="list"
                                                                        aria-owns="select2-results-2"
                                                                        id="s2id_autogen2_search" placeholder=""
                                                                        skip-validation="false"> </div>
                                                                <ul class="select2-results" role="listbox"
                                                                    id="select2-results-2"> </ul>
                                                            </div>
                                                        </div><select name="company_entity_type" autocomplete="nope"
                                                            class=" smergers-input select-dropdown"
                                                            id="id_company_entity_type" tabindex="-1"
                                                            title="Select business legal entity type"
                                                            skip-validation="false" style="display: none;">
                                                            <option value="" selected=""></option>
                                                            <option value="SOLE_PROPRIETORSHIP">Sole Proprietorship/Sole
                                                                Trader</option>
                                                            <option value="PARTNERSHIP">General Partnership</option>
                                                            <option value="LIMITED_LIABILITY_PARTNERSHIP">Limited Liability
                                                                Partnership (LLP)</option>
                                                            <option value="LIMITED_LIABILITY_COMPANY">Limited Liability
                                                                Company (LLC)</option>
                                                            <option value="PRIVATE_LIMITED_COMPANY">Private Limited Company
                                                            </option>
                                                            <option value="PUBLIC_LIMITED_COMPANY">Public Limited Company
                                                            </option>
                                                            <option value="S_CORPORATION">S Corporation</option>
                                                            <option value="C_CORPORATION">C Corporation</option>
                                                            <option value="OTHER">Other</option>
                                                        </select>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_company_entity_type"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_company_entity_type"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_single_line_description">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_single_line_description"
                                                            for="id_single_line_description">Describe the business in a
                                                            single line</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <textarea name="single_line_description" cols="40" rows="2" autocomplete="nope" class=" smergers-input"
                                                            required="" id="id_single_line_description"></textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_single_line_description"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="single_line_description">Examples of what
                                                            to write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_single_line_description"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_products_services">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_products_services"
                                                            for="id_products_services">List all products and services of
                                                            the business</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <textarea name="products_services" cols="40" rows="4" autocomplete="nope" class=" smergers-input"
                                                            id="id_products_services" skip-validation="false"></textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_products_services"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="products_services">Examples of what to
                                                            write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_products_services"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_description_of_business">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_description_of_business"
                                                            for="id_description_of_business">Mention highlights of the
                                                            business including number of clients, growth rate, promoter
                                                            experience, business relationships, awards, etc</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <textarea name="description_of_business" cols="40" rows="4" autocomplete="nope" class=" smergers-input"
                                                            id="id_description_of_business"></textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_description_of_business"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="description_of_business">Examples of what
                                                            to write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_description_of_business"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_facilities_description">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_facilities_description"
                                                            for="id_facilities_description">Describe your facility such as
                                                            built-up area, number of floors, rental/lease details</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <textarea name="facilities_description" cols="40" rows="2" autocomplete="nope" class=" smergers-input"
                                                            id="id_facilities_description" skip-validation="false"></textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_facilities_description"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="facilities_description">Examples of what
                                                            to write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_facilities_description"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_capitalization_overview">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_capitalization_overview"
                                                            for="id_capitalization_overview">How is the business funded
                                                            presently? Mention all debts/loans outstanding and the total
                                                            number of shareholders/owners of the business with percentage
                                                            ownership.</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <textarea name="capitalization_overview" cols="40" rows="4" autocomplete="nope"
                                                            class=" smergers-input" id="id_capitalization_overview" skip-validation="false"></textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_capitalization_overview"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="capitalization_overview">Examples of what
                                                            to write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_capitalization_overview"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_monthly_expected_sales">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_monthly_expected_sales"
                                                            for="id_monthly_expected_sales">At present, what is your
                                                            average monthly sales?</label>
                                                        <span href="#" class="why-needed" data-toggle="popover"
                                                            data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                            data-trigger="hover" data-placement="top"
                                                            data-container="body" data-original-title=""
                                                            title="">Why is this needed?</span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <span class="smergers-input-addon form-currency-symbol-updates">
                                                            BDT
                                                        </span>
                                                        <input type="text" name="monthly_expected_sales"
                                                            autocomplete="nope" class=" smergers-input currency-input"
                                                            required="" id="id_monthly_expected_sales"
                                                            skip-validation="false">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_monthly_expected_sales"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_monthly_expected_sales"></span>
                                                </div>
                                                <div class="sub-label">
                                                    <a href="#" id="form-change-currency"
                                                        class="form-change-currency">Change Currency</a>
                                                    <div class="form-currency-container">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_" for=""></label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="form-currency-container">
                                                        <div class="select2-container smergers-input"
                                                            id="s2id_id_currency" style="width: 100%;"><a
                                                                href="javascript:void(0)" class="select2-choice"
                                                                tabindex="-1"> <span class="select2-chosen"
                                                                    id="select2-chosen-9"><span class="flag flag-bd"
                                                                        style="display:inline-block;margin-right:6px;"></span>Bangladeshi
                                                                    Taka - BDT</span><abbr
                                                                    class="select2-search-choice-close"></abbr> <span
                                                                    class="select2-arrow" role="presentation"><b
                                                                        role="presentation"></b></span></a><label
                                                                for="s2id_autogen9"
                                                                class="select2-offscreen"></label><input
                                                                class="select2-focusser select2-offscreen"
                                                                type="text" aria-haspopup="true" role="button"
                                                                aria-labelledby="select2-chosen-9" id="s2id_autogen9">
                                                            <div
                                                                class="select2-drop select2-display-none geo-currency-dropdown select2-with-searchbox">
                                                                <div class="select2-search"> <label
                                                                        for="s2id_autogen9_search"
                                                                        class="select2-offscreen"></label> <input
                                                                        type="text" autocomplete="nope"
                                                                        autocorrect="off" autocapitalize="off"
                                                                        spellcheck="false" class="select2-input"
                                                                        role="combobox" aria-expanded="true"
                                                                        aria-autocomplete="list"
                                                                        aria-owns="select2-results-9"
                                                                        id="s2id_autogen9_search" placeholder=""> </div>
                                                                <ul class="select2-results" role="listbox"
                                                                    id="select2-results-9"> </ul>
                                                            </div>
                                                        </div><input type="text" name="currency" value="78"
                                                            autocomplete="nope" class=" smergers-input"
                                                            style="width: 100%; display: none;" required=""
                                                            id="id_currency" data-id="78" data-symbol="BDT"
                                                            data-img_src="bd" data-text="Bangladeshi Taka - BDT"
                                                            tabindex="-1" title="">
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message" id="status_message_"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_yearly_turnover">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_yearly_turnover"
                                                            for="id_yearly_turnover">What was your latest reported yearly
                                                            sales?</label>
                                                        <span href="#" class="why-needed" data-toggle="popover"
                                                            data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                            data-trigger="hover" data-placement="top"
                                                            data-container="body" data-original-title=""
                                                            title="">Why is this needed?</span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <span class="smergers-input-addon form-currency-symbol-updates">
                                                            BDT
                                                        </span>
                                                        <input type="text" name="yearly_turnover"
                                                            autocomplete="nope" class=" smergers-input currency-input"
                                                            required="" id="id_yearly_turnover"
                                                            skip-validation="false">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_yearly_turnover"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-field"><input type="checkbox"
                                                            name="yearly_turnover_show_range"
                                                            id="id_yearly_turnover_show_range" skip-validation="false">
                                                        Display as range</div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_yearly_turnover"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-3 " id="li_id_ebitda_margin_percentage">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_ebitda_margin_percentage"
                                                            for="id_ebitda_margin_percentage">What is the EBITDA /
                                                            Operating Profit Margin Percentage? <span class="ebitda-info"
                                                                data-toggle="popover" data-placement="top"
                                                                data-original-title="" title=""><i
                                                                    class="icon icon-info-sign"></i></span></label>
                                                        <span href="#" class="why-needed" data-toggle="popover"
                                                            data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                            data-trigger="hover" data-placement="top"
                                                            data-container="body" data-original-title=""
                                                            title="">Why is this needed?</span>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <input type="text" name="ebitda_margin_percentage"
                                                            autocomplete="nope"
                                                            class=" smergers-input only-integers-input" required=""
                                                            id="id_ebitda_margin_percentage" skip-validation="false">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_ebitda_margin_percentage"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-field"><input type="checkbox"
                                                            name="ebitda_margin_percentage_show_range"
                                                            id="id_ebitda_margin_percentage_show_range"
                                                            skip-validation="false"> Display as range</div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_ebitda_margin_percentage"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 error" id="li_id_assets_description">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_assets_description"
                                                            for="id_assets_description">List all tangible and intangible
                                                            assets the business owns</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <grammarly-extension data-grammarly-shadow-root="true"
                                                            class="dnXmp"
                                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
                                                        </grammarly-extension>
                                                        <grammarly-extension data-grammarly-shadow-root="true"
                                                            class="dnXmp"
                                                            style="position: absolute; top: 0px; left: 0px; pointer-events: none;">
                                                        </grammarly-extension>
                                                        <textarea name="assets_description" cols="40" rows="2" autocomplete="nope" class=" smergers-input"
                                                            id="id_assets_description" skip-validation="false" sr-scroll-left="0" sr-scroll-top="0" spellcheck="false"
                                                            sr-value="">hbdfidsivbdisbvidvbsdivdsivhivbivbvbsivbhfivbfivbfsivbsdivbdsivsdvbdvbdivdsvdsbhvivsjhnbofdibjfbidjbdoibjbjboidfbjoibjoij</textarea>
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_assets_description"
                                                                class="icon-exclamation-sign"></i>
                                                        </div>
                                                    </div>
                                                    <div class="sme-v3-smalltext">
                                                        <a href="#" class="view-examples"
                                                            data-example_field="assets_description">Examples of what to
                                                            write</a>
                                                        <div class="example-placeholder"></div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message show"
                                                        id="status_message_id_assets_description">Enter 7 more
                                                        words</span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2 " id="li_id_real_estate_value">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <label id="field_label_id_real_estate_value"
                                                            for="id_real_estate_value">What is the value of physical
                                                            assets owned by the business that would be part of the
                                                            transaction?</label>
                                                    </div>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div class="form-field ">
                                                    <div class="smergers-input-group ">
                                                        <span class="smergers-input-addon form-currency-symbol-updates">
                                                            BDT
                                                        </span>
                                                        <input type="text" name="real_estate_value"
                                                            autocomplete="nope" class=" smergers-input currency-input"
                                                            required="" id="id_real_estate_value"
                                                            skip-validation="false">
                                                        <div class="smergers-input-addon status-icon-wrapper">
                                                            <i id="status_icon_id_real_estate_value"
                                                                class="icon-check-empty"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="field-note ">
                                                    <span class="status-message"
                                                        id="status_message_id_real_estate_value"></span>
                                                </div>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="transaction-fields-wrapper">
                                        <div class="transaction" data-key="FULL_SALE" style="display: none;">
                                            <ul class="form-fields" data-key="FULL_SALE">
                                                <li class="columns-2 " id="li_id_asking_price">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_asking_price"
                                                                    for="id_asking_price">What is the tentative selling
                                                                    price for the business?</label>
                                                                <span href="#" class="why-needed"
                                                                    data-toggle="popover"
                                                                    data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                                    data-trigger="hover" data-placement="top"
                                                                    data-container="body" data-original-title=""
                                                                    title="">Why is this needed?</span>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <span
                                                                    class="smergers-input-addon form-currency-symbol-updates">
                                                                    BDT
                                                                </span>
                                                                <input type="text" name="asking_price"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input currency-input"
                                                                    required="" id="id_asking_price"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_asking_price"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_asking_price"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_reason_for_selling">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_reason_for_selling"
                                                                    for="id_reason_for_selling">Provide reason for
                                                                    sale</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <textarea name="reason_for_selling" cols="40" rows="2" autocomplete="nope" class=" smergers-input"
                                                                    id="id_reason_for_selling" skip-validation="true"></textarea>
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_reason_for_selling"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                            <div class="sme-v3-smalltext">
                                                                <a href="#" class="view-examples"
                                                                    data-example_field="reason_for_selling">Examples of
                                                                    what to write</a>
                                                                <div class="example-placeholder"></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_reason_for_selling"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="transaction" data-key="FINANCIAL_INVESTMENT"
                                            style="display: none;">
                                            <ul class="form-fields" data-key="FINANCIAL_INVESTMENT">
                                                <li class="columns-3 " id="li_id_financial_dilution">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_financial_dilution"
                                                                    for="id_financial_dilution">What is the maximum stake
                                                                    you are willing to sell?</label>
                                                                <span href="#" class="why-needed"
                                                                    data-toggle="popover"
                                                                    data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                                    data-trigger="hover" data-placement="top"
                                                                    data-container="body" data-original-title=""
                                                                    title="">Why is this needed?</span>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <input type="text" name="financial_dilution"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input only-numbers-input"
                                                                    required="" id="id_financial_dilution"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_financial_dilution"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_financial_dilution"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_financial_investment">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_financial_investment"
                                                                    for="id_financial_investment">What investment amount
                                                                    are you seeking for this stake?</label>
                                                                <span href="#" class="why-needed"
                                                                    data-toggle="popover"
                                                                    data-content="Investors/Buyers evaluate your business proposal based on this information. It is best to communicate this information upfront instead of wasting your time and theirs."
                                                                    data-trigger="hover" data-placement="top"
                                                                    data-container="body" data-original-title=""
                                                                    title="">Why is this needed?</span>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <span
                                                                    class="smergers-input-addon form-currency-symbol-updates">
                                                                    BDT
                                                                </span>
                                                                <input type="text" name="financial_investment"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input currency-input"
                                                                    required="" id="id_financial_investment"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_financial_investment"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_financial_investment"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_financial_reason_for_transaction">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label
                                                                    id="field_label_id_financial_reason_for_transaction"
                                                                    for="id_financial_reason_for_transaction">Provide
                                                                    reason for investment</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <textarea name="financial_reason_for_transaction" cols="40" rows="2" autocomplete="nope"
                                                                    class=" smergers-input" id="id_financial_reason_for_transaction" skip-validation="true"></textarea>
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_financial_reason_for_transaction"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                            <div class="sme-v3-smalltext">
                                                                <a href="#" class="view-examples"
                                                                    data-example_field="financial_reason_for_transaction">Examples
                                                                    of what to write</a>
                                                                <div class="example-placeholder"></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_financial_reason_for_transaction"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="transaction" data-key="BUSINESS_LOAN" style="display: none;">
                                            <ul class="form-fields" data-key="BUSINESS_LOAN">
                                                <li class="columns-2 " id="li_id_collateral_value">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_collateral_value"
                                                                    for="id_collateral_value">What is the value of
                                                                    collateral you can provide?</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <span
                                                                    class="smergers-input-addon form-currency-symbol-updates">
                                                                    BDT
                                                                </span>
                                                                <input type="text" name="collateral_value"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input currency-input"
                                                                    required="" id="id_collateral_value"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_collateral_value"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_collateral_value"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_loan_amount">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_loan_amount"
                                                                    for="id_loan_amount">What loan amount are you
                                                                    seeking?</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <span
                                                                    class="smergers-input-addon form-currency-symbol-updates">
                                                                    BDT
                                                                </span>
                                                                <input type="text" name="loan_amount"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input currency-input"
                                                                    required="" id="id_loan_amount"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_loan_amount"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_loan_amount"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-3 " id="li_id_loan_interest">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_loan_interest"
                                                                    for="id_loan_interest">What is the maximum yearly
                                                                    interest you can pay?</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <input type="text" name="loan_interest"
                                                                    autocomplete="nope" class=" smergers-input"
                                                                    required="" id="id_loan_interest"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_loan_interest"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_loan_interest"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-3 " id="li_id_loan_period">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_loan_period"
                                                                    for="id_loan_period">In how many years will you repay
                                                                    the loan?</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <input type="text" name="loan_period"
                                                                    autocomplete="nope"
                                                                    class=" smergers-input only-numbers-input"
                                                                    required="" id="id_loan_period"
                                                                    skip-validation="true">
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_loan_period"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_loan_period"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_loan_reason_for_transaction">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_loan_reason_for_transaction"
                                                                    for="id_loan_reason_for_transaction">Reason for
                                                                    seeking a loan</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <textarea name="loan_reason_for_transaction" cols="40" rows="2" autocomplete="nope"
                                                                    class=" smergers-input" id="id_loan_reason_for_transaction" skip-validation="true"></textarea>
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_loan_reason_for_transaction"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                            <div class="sme-v3-smalltext">
                                                                <a href="#" class="view-examples"
                                                                    data-example_field="loan_reason_for_transaction">Examples
                                                                    of what to write</a>
                                                                <div class="example-placeholder"></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_loan_reason_for_transaction"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="transaction" data-key="ASSET_SALE" style="display: none;">
                                            <ul class="form-fields" data-key="ASSET_SALE">
                                                <li class="columns-2 " id="li_id_assets_asking_price">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_assets_asking_price"
                                                                    for="id_assets_asking_price">At what price are you
                                                                    selling / leasing?</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="col-xs-6" style="padding: 0;">
                                                                <div class="smergers-input-group">
                                                                    <span
                                                                        class="smergers-input-addon form-currency-symbol-updates">
                                                                        BDT
                                                                    </span>
                                                                    <input type="text" name="assets_asking_price"
                                                                        autocomplete="nope"
                                                                        class=" smergers-input currency-input"
                                                                        required="" id="id_assets_asking_price"
                                                                        skip-validation="true">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6" style="padding: 0;">
                                                                <div class="smergers-input-group">
                                                                    <div class="select2-container smergers-input select-dropdown"
                                                                        id="s2id_id_assets_asking_price_type"><a
                                                                            href="javascript:void(0)"
                                                                            class="select2-choice" tabindex="-1"> <span
                                                                                class="select2-chosen"
                                                                                id="select2-chosen-6">Asset
                                                                                Sale</span><abbr
                                                                                class="select2-search-choice-close"></abbr>
                                                                            <span class="select2-arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></a><label
                                                                            for="s2id_autogen6"
                                                                            class="select2-offscreen"></label><input
                                                                            class="select2-focusser select2-offscreen"
                                                                            type="text" aria-haspopup="true"
                                                                            role="button"
                                                                            aria-labelledby="select2-chosen-6"
                                                                            id="s2id_autogen6" skip-validation="true">
                                                                        <div
                                                                            class="select2-drop select2-display-none select2-with-searchbox">
                                                                            <div class="select2-search"> <label
                                                                                    for="s2id_autogen6_search"
                                                                                    class="select2-offscreen"></label>
                                                                                <input type="text"
                                                                                    autocomplete="nope"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="false"
                                                                                    class="select2-input"
                                                                                    role="combobox" aria-expanded="true"
                                                                                    aria-autocomplete="list"
                                                                                    aria-owns="select2-results-6"
                                                                                    id="s2id_autogen6_search"
                                                                                    placeholder=""
                                                                                    skip-validation="true"> </div>
                                                                            <ul class="select2-results" role="listbox"
                                                                                id="select2-results-6"> </ul>
                                                                        </div>
                                                                    </div><select name="assets_asking_price_type"
                                                                        autocomplete="nope"
                                                                        class=" smergers-input select-dropdown"
                                                                        id="id_assets_asking_price_type" tabindex="-1"
                                                                        title="" skip-validation="true"
                                                                        style="display: none;">
                                                                        <option value="FULL_SALE" selected="">Asset
                                                                            Sale</option>
                                                                        <option value="MONTHLY_RENT">Monthly Rent</option>
                                                                        <option value="YEARLY_LEASE">Yearly Lease Amount
                                                                        </option>
                                                                    </select>
                                                                    <div class="smergers-input-addon status-icon-wrapper">
                                                                        <i id="status_icon_id_assets_asking_price"
                                                                            class="icon-check-empty"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_assets_asking_price"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                            <a href="#" id="form-change-currency"
                                                                class="form-change-currency">Change Currency</a>
                                                            <div class="form-currency-container">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="columns-2 " id="li_id_assets_reason_for_transaction">
                                                    <div class="field-label-wrapper">
                                                        <div class="field-label">
                                                            <div class="bold-label">
                                                                <label id="field_label_id_assets_reason_for_transaction"
                                                                    for="id_assets_reason_for_transaction">Reason for
                                                                    selling these business assets</label>
                                                            </div>
                                                            <div class="sub-label">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-wrapper">
                                                        <div class="form-field ">
                                                            <div class="smergers-input-group ">
                                                                <textarea name="assets_reason_for_transaction" cols="40" rows="2" autocomplete="nope"
                                                                    class=" smergers-input" id="id_assets_reason_for_transaction" skip-validation="true"></textarea>
                                                                <div class="smergers-input-addon status-icon-wrapper">
                                                                    <i id="status_icon_id_assets_reason_for_transaction"
                                                                        class="icon-check-empty"></i>
                                                                </div>
                                                            </div>
                                                            <div class="sme-v3-smalltext">
                                                                <a href="#" class="view-examples"
                                                                    data-example_field="assets_reason_for_transaction">Examples
                                                                    of what to write</a>
                                                                <div class="example-placeholder"></div>
                                                            </div>
                                                        </div>
                                                        <div class="field-note ">
                                                            <span class="status-message"
                                                                id="status_message_id_assets_reason_for_transaction"></span>
                                                        </div>
                                                        <div class="sub-label">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="form-fields">
                                        <li id="li_id_allow_advisors_contact" class="full-width">
                                            <div class="field-label">
                                                <input type="checkbox" name="allow_advisors_contact"
                                                    id="id_allow_advisors_contact">
                                                <span class="bold-label">
                                                    <span id="field_label_id_allow_advisors_contact"><span
                                                            class="is-not-advisor">I’m interested in receiving quotations
                                                            from Advisors / Boutique Investment Banks who can manage this
                                                            transaction. </span><span class="is-advisor"
                                                            style="display: none;">Allow other advisors to connect with me
                                                            regarding this transaction</span></span>
                                                    <i id="status_icon_id_allow_advisors_contact"
                                                        class="icon-check-empty"></i>
                                                </span>
                                                <div class="sub-label">
                                                </div>
                                            </div>
                                            <div class="field-note-wrapper">
                                                <div id="status_message_id_allow_advisors_contact" class="field-note">
                                                </div>
                                            </div>
                                        </li>
                                        <div id="connect-with-advisor-warning-wrapper"></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="form-section-title">
                                    Photos, Documents &amp; Proof
                                    <div class="form-section-subtitle">
                                        Photos are an important part of your profile and are publicly displayed. Documents
                                        help us verify and approve your profile faster. Documents names entered here are
                                        publicly visible but are accessible only to introduced members.
                                    </div>
                                </div>
                                <div class="form-fields-wrapper">
                                    <ul class="form-fields">
                                        <li class="columns-2">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <span id="field_label_id_business_photos">Business Photos</span>
                                                        <span data-toggle="popover" data-placement="top"
                                                            data-content="Profiles with good pictures get higher rating and visibility. Upload high quality images of the business facility / office exclusively clicked for SMERGERS. Only jpg, bmp, png, tiff, gif files can be uploaded. Total upload size of all files cannot exceed 50MB."
                                                            data-original-title="" title=""><i
                                                                class="icon icon-info-sign"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div id="business-photo-formset" class="formset-wrapper"
                                                    data-prefix="image">
                                                    <input type="hidden" name="image-TOTAL_FORMS" value="1"
                                                        id="id_image-TOTAL_FORMS"><input type="hidden"
                                                        name="image-INITIAL_FORMS" value="0"
                                                        id="id_image-INITIAL_FORMS"><input type="hidden"
                                                        name="image-MIN_NUM_FORMS" value="0"
                                                        id="id_image-MIN_NUM_FORMS"><input type="hidden"
                                                        name="image-MAX_NUM_FORMS" value="1000"
                                                        id="id_image-MAX_NUM_FORMS">
                                                    <div class="formset-body-wrapper">
                                                        <div class="formset-body">
                                                            <div class="formset-form empty-form" form-prefix="image-0">
                                                                <div class="formset-form-fields">
                                                                    <ul class="form-fields">
                                                                        <li class="columns-1 hide-label"
                                                                            id="li_id_image-0-original">
                                                                            <div class="field-label-wrapper">
                                                                                <div class="field-label">
                                                                                    <div class="bold-label">
                                                                                        <label
                                                                                            id="field_label_id_image-0-original"
                                                                                            for="id_image-0-original">Photo</label>
                                                                                    </div>
                                                                                    <div class="sub-label">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-field-wrapper">
                                                                                <div class="form-field file-field">
                                                                                    <div class="image-preview-wrapper"
                                                                                        id="image_preview_wrapper_id_image-0-original">
                                                                                        <div class=" col-xs-3 no-padding">
                                                                                            <a class="image-link"
                                                                                                target="_blank"
                                                                                                href="#">
                                                                                                <div
                                                                                                    class="image-preview">
                                                                                                </div>
                                                                                            </a>
                                                                                            <a href="#"
                                                                                                class="delete-image">
                                                                                                <i class="ti-close"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="col-xs-9">
                                                                                            <div class="hidden"><input
                                                                                                    type="number"
                                                                                                    name="image-0-display_order"
                                                                                                    value="0"
                                                                                                    class="smergers-input"
                                                                                                    id="id_image-0-display_order">
                                                                                            </div>
                                                                                            <div
                                                                                                class="smergers-input-group">
                                                                                                <input type="text"
                                                                                                    name="image-0-description"
                                                                                                    maxlength="80"
                                                                                                    class="smergers-input"
                                                                                                    placeholder="Describe the photo"
                                                                                                    id="id_image-0-description">
                                                                                                <div
                                                                                                    class="smergers-input-addon">
                                                                                                    <i id="status_icon_id_image-0-original"
                                                                                                        class="icon-check-empty"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="field-note ">
                                                                                                <span
                                                                                                    class="status-message"
                                                                                                    id="status_message_id_image-0-original"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                    <span
                                                                                        class="btn btn-default smergers-file-btn">
                                                                                        Upload Photos
                                                                                        <input type="file"
                                                                                            name="image-0-original"
                                                                                            accept="image/*"
                                                                                            class=" smergers-input"
                                                                                            id="id_image-0-original">
                                                                                    </span>
                                                                                </div>
                                                                                <div class="field-note ">
                                                                                </div>
                                                                                <div class="sub-label">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="display: none;">
                                                                        <input type="checkbox" name="image-0-DELETE"
                                                                            id="id_image-0-DELETE">
                                                                        <input type="hidden" name="image-0-id"
                                                                            id="id_image-0-id">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <script type="text/javascript" data-pagespeed-no-defer="">
                                                        pagespeed.lazyLoadImages.overrideAttributeFunctions();
                                                    </script>
                                                    <script type="text/template" class="formset-empty-form">
                                <div class="formset-form empty-form" form-prefix="image-__prefix__">
      <div class="formset-form-fields">
        <ul class="form-fields">
          <li class="columns-1 hide-label" id="li_id_image-__prefix__-original">
      <div class="field-label-wrapper">
        <div class="field-label">
          <div class="bold-label">
            <label id="field_label_id_image-__prefix__-original" for="id_image-__prefix__-original">Photo</label>



          </div>
          <div class="sub-label">

          </div>
        </div>
      </div>

      <div class="form-field-wrapper">
        <div class="form-field file-field">


        <div class="image-preview-wrapper" id="image_preview_wrapper_id_image-__prefix__-original" >
          <div class=" col-xs-3 no-padding">
            <a class="image-link" target="_blank" href="#">
              <div class="image-preview" >
              </div>
            </a>
            <a href="#" class="delete-image">
              <i class="ti-close"></i>
            </a>

          </div>

          <div class="col-xs-9">
            <div class="hidden"><input type="number" name="image-__prefix__-display_order" value="0" class="smergers-input" id="id_image-__prefix__-display_order"></div>
            <div class="smergers-input-group">
              <input type="text" name="image-__prefix__-description" maxlength="80" class="smergers-input" placeholder="Describe the photo" id="id_image-__prefix__-description">
              <div class="smergers-input-addon">
                <i id="status_icon_id_image-__prefix__-original" class="icon-check-empty"></i>
              </div>
            </div>


            <div class="field-note ">
              <span class="status-message" id="status_message_id_image-__prefix__-original"></span>
            </div>
          </div>
        </div>
        <div class="clear"></div>

      <span class="btn btn-default smergers-file-btn" >
        Upload Photos

          <input type="file" name="image-__prefix__-original" accept="image/*" class=" smergers-input" id="id_image-__prefix__-original">

      </span>

        </div>
        <div class="field-note ">


        </div>
            <div class="sub-label">

            </div>

      </div>
    </li>

        </ul>
        <div style="display: none;">
          <input type="checkbox" name="image-__prefix__-DELETE" id="id_image-__prefix__-DELETE">
          <input type="hidden" name="image-__prefix__-id" id="id_image-__prefix__-id">
        </div>
      </div>
    </div>

                              </script>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <span id="field_label_id_business_documents">Business
                                                            Documents</span>
                                                        <span data-toggle="popover" data-placement="top"
                                                            data-content="Profiles with documents get higher rating and visibility. You can upload documents such as Corporate Presentations, Information Memorandums, Valuation Models, Due Diligence Reports, etc. Documents uploaded are accessible only to members introduced to you. Only word, excel, powerpoint, pdf, jpg, bmp, png, gif, mp4 files can be uploaded. Total upload size of all files cannot exceed 50MB."
                                                            data-original-title="" title=""><i
                                                                class="icon icon-info-sign"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div id="business-document-formset" class="formset-wrapper"
                                                    data-prefix="document">
                                                    <input type="hidden" name="document-TOTAL_FORMS" value="1"
                                                        id="id_document-TOTAL_FORMS"><input type="hidden"
                                                        name="document-INITIAL_FORMS" value="0"
                                                        id="id_document-INITIAL_FORMS"><input type="hidden"
                                                        name="document-MIN_NUM_FORMS" value="0"
                                                        id="id_document-MIN_NUM_FORMS"><input type="hidden"
                                                        name="document-MAX_NUM_FORMS" value="1000"
                                                        id="id_document-MAX_NUM_FORMS">
                                                    <div class="formset-body-wrapper">
                                                        <div class="formset-body">
                                                            <div class="formset-form " form-prefix="document-0">
                                                                <div class="formset-form-fields">
                                                                    <ul class="form-fields">
                                                                        <li class="columns- hide-label"
                                                                            id="li_id_document-0-document">
                                                                            <div class="field-label-wrapper">
                                                                                <div class="field-label">
                                                                                    <div class="bold-label">
                                                                                        <label
                                                                                            id="field_label_id_document-0-document"
                                                                                            for="id_document-0-document">Document</label>
                                                                                    </div>
                                                                                    <div class="sub-label">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-field-wrapper">
                                                                                <div class="form-field file-field">
                                                                                    <div class="document-preview-wrapper"
                                                                                        id="document_preview_wrapper_id_document-0-document">
                                                                                        <div class="col-xs-3 no-padding">
                                                                                            <div class="image-preview">
                                                                                            </div>
                                                                                        </div>
                                                                                        <a href="#"
                                                                                            class="delete-document">
                                                                                            <i class="ti-close"></i>
                                                                                        </a>
                                                                                        <div class="col-xs-9 no-padding">
                                                                                            <div
                                                                                                class="smergers-input-group">
                                                                                                <input type="text"
                                                                                                    name="document-0-name"
                                                                                                    maxlength="200"
                                                                                                    placeholder="Document Name"
                                                                                                    class="smergers-input"
                                                                                                    id="id_document-0-name"
                                                                                                    skip-validation="true">
                                                                                                <div
                                                                                                    class="smergers-input-addon">
                                                                                                    <i id="status_icon_id_document-0-document"
                                                                                                        class="icon-check-empty"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span
                                                                                        class="btn btn-default smergers-file-btn">
                                                                                        Upload Documents <input
                                                                                            type="file"
                                                                                            name="document-0-document"
                                                                                            class="smergers-input"
                                                                                            id="id_document-0-document">
                                                                                    </span>
                                                                                    <div class="clear"></div>
                                                                                </div>
                                                                                <div class="field-note ">
                                                                                    <span class="status-message"
                                                                                        id="status_message_id_document-0-document"></span>
                                                                                </div>
                                                                                <div class="sub-label">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="display: none;">
                                                                        <input type="checkbox" name="document-0-DELETE"
                                                                            id="id_document-0-DELETE">
                                                                        <input type="hidden" name="document-0-id"
                                                                            id="id_document-0-id">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script type="text/template" class="formset-empty-form">
                                <div class="formset-form " form-prefix="document-__prefix__">
      <div class="formset-form-fields">
        <ul class="form-fields">

              <li class="columns- hide-label" id="li_id_document-__prefix__-document">
      <div class="field-label-wrapper">
        <div class="field-label">
          <div class="bold-label">
            <label id="field_label_id_document-__prefix__-document" for="id_document-__prefix__-document">Document</label>



          </div>
          <div class="sub-label">

          </div>
        </div>
      </div>

      <div class="form-field-wrapper">
        <div class="form-field file-field">

      <div class="document-preview-wrapper" id="document_preview_wrapper_id_document-__prefix__-document" >
        <div class="col-xs-3 no-padding">

            <div class="image-preview"></div>

        </div>
        <a href="#" class="delete-document">
          <i class="ti-close"></i>
        </a>
        <div class="col-xs-9 no-padding">
          <div class="smergers-input-group">
            <input type="text" name="document-__prefix__-name" maxlength="200" placeholder="Document Name" class="smergers-input" id="id_document-__prefix__-name">
            <div class="smergers-input-addon">
              <i id="status_icon_id_document-__prefix__-document" class="icon-check-empty"></i>
            </div>
          </div>
        </div>
      </div>
      <span class="btn btn-default smergers-file-btn" >
        Upload Documents <input type="file" name="document-__prefix__-document" class="smergers-input" id="id_document-__prefix__-document">
      </span>
      <div class="clear"></div>

        </div>
        <div class="field-note ">

            <span class="status-message" id="status_message_id_document-__prefix__-document"></span>

        </div>
            <div class="sub-label">

            </div>

      </div>
    </li>


        </ul>
        <div style="display: none;">
          <input type="checkbox" name="document-__prefix__-DELETE" id="id_document-__prefix__-DELETE">
          <input type="hidden" name="document-__prefix__-id" id="id_document-__prefix__-id">
        </div>
      </div>
    </div>

                              </script>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="columns-2">
                                            <div class="field-label-wrapper">
                                                <div class="field-label">
                                                    <div class="bold-label">
                                                        <span id="field_label_id_verification_documents">Proof of
                                                            Business</span>
                                                        <span data-toggle="popover" data-placement="top"
                                                            data-content="Attach proof of business for faster verification. You can upload documents such as tax certificate, incorporation certificate, govt registration certificate or evidence of revenue such as bank statement, screenshot of sales, etc. Uploading this document will help our verification team to review and approve your profile faster. Documents uploaded are accessible only to members introduced to you. Only word, excel, powerpoint, pdf, jpg, bmp, png, gif files can be uploaded. Total upload size of all files cannot exceed 50MB."
                                                            data-original-title="" title=""><i
                                                                class="icon icon-info-sign"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <div id="business-verification-document-formset" class="formset-wrapper"
                                                    data-prefix="verification_documents">
                                                    <input type="hidden" name="verification_documents-TOTAL_FORMS"
                                                        value="1" id="id_verification_documents-TOTAL_FORMS"><input
                                                        type="hidden" name="verification_documents-INITIAL_FORMS"
                                                        value="0"
                                                        id="id_verification_documents-INITIAL_FORMS"><input
                                                        type="hidden" name="verification_documents-MIN_NUM_FORMS"
                                                        value="0"
                                                        id="id_verification_documents-MIN_NUM_FORMS"><input
                                                        type="hidden" name="verification_documents-MAX_NUM_FORMS"
                                                        value="1000" id="id_verification_documents-MAX_NUM_FORMS">
                                                    <div class="formset-body-wrapper">
                                                        <div class="formset-body">
                                                            <div class="formset-form "
                                                                form-prefix="verification_documents-0">
                                                                <div class="formset-form-fields">
                                                                    <ul class="form-fields">
                                                                        <li class="columns- hide-label"
                                                                            id="li_id_verification_documents-0-document">
                                                                            <div class="field-label-wrapper">
                                                                                <div class="field-label">
                                                                                    <div class="bold-label">
                                                                                        <label
                                                                                            id="field_label_id_verification_documents-0-document"
                                                                                            for="id_verification_documents-0-document">Document</label>
                                                                                    </div>
                                                                                    <div class="sub-label">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-field-wrapper">
                                                                                <div class="form-field file-field">
                                                                                    <div class="document-preview-wrapper"
                                                                                        id="document_preview_wrapper_id_verification_documents-0-document">
                                                                                        <div class="col-xs-3 no-padding">
                                                                                            <div class="image-preview">
                                                                                            </div>
                                                                                        </div>
                                                                                        <a href="#"
                                                                                            class="delete-document">
                                                                                            <i class="ti-close"></i>
                                                                                        </a>
                                                                                        <div class="col-xs-9 no-padding">
                                                                                            <div
                                                                                                class="smergers-input-group">
                                                                                                <input type="text"
                                                                                                    name="verification_documents-0-name"
                                                                                                    maxlength="200"
                                                                                                    placeholder="Document Name"
                                                                                                    class="smergers-input"
                                                                                                    id="id_verification_documents-0-name"
                                                                                                    skip-validation="true">
                                                                                                <div
                                                                                                    class="smergers-input-addon">
                                                                                                    <i id="status_icon_id_verification_documents-0-document"
                                                                                                        class="icon-check-empty"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span
                                                                                        class="btn btn-default smergers-file-btn">
                                                                                        Upload Proof <input type="file"
                                                                                            name="verification_documents-0-document"
                                                                                            class="smergers-input"
                                                                                            id="id_verification_documents-0-document">
                                                                                    </span>
                                                                                    <div class="clear"></div>
                                                                                </div>
                                                                                <div class="field-note ">
                                                                                    <span class="status-message"
                                                                                        id="status_message_id_verification_documents-0-document"></span>
                                                                                </div>
                                                                                <div class="sub-label">
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div style="display: none;">
                                                                        <input type="checkbox"
                                                                            name="verification_documents-0-DELETE"
                                                                            id="id_verification_documents-0-DELETE">
                                                                        <input type="hidden"
                                                                            name="verification_documents-0-id"
                                                                            id="id_verification_documents-0-id">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script type="text/template" class="formset-empty-form">
                                <div class="formset-form " form-prefix="verification_documents-__prefix__">
      <div class="formset-form-fields">
        <ul class="form-fields">

              <li class="columns- hide-label" id="li_id_verification_documents-__prefix__-document">
      <div class="field-label-wrapper">
        <div class="field-label">
          <div class="bold-label">
            <label id="field_label_id_verification_documents-__prefix__-document" for="id_verification_documents-__prefix__-document">Document</label>



          </div>
          <div class="sub-label">

          </div>
        </div>
      </div>

      <div class="form-field-wrapper">
        <div class="form-field file-field">

      <div class="document-preview-wrapper" id="document_preview_wrapper_id_verification_documents-__prefix__-document" >
        <div class="col-xs-3 no-padding">

            <div class="image-preview"></div>

        </div>
        <a href="#" class="delete-document">
          <i class="ti-close"></i>
        </a>
        <div class="col-xs-9 no-padding">
          <div class="smergers-input-group">
            <input type="text" name="verification_documents-__prefix__-name" maxlength="200" placeholder="Document Name" class="smergers-input" id="id_verification_documents-__prefix__-name">
            <div class="smergers-input-addon">
              <i id="status_icon_id_verification_documents-__prefix__-document" class="icon-check-empty"></i>
            </div>
          </div>
        </div>
      </div>
      <span class="btn btn-default smergers-file-btn" >
        Upload Proof <input type="file" name="verification_documents-__prefix__-document" class="smergers-input" id="id_verification_documents-__prefix__-document">
      </span>
      <div class="clear"></div>

        </div>
        <div class="field-note ">

            <span class="status-message" id="status_message_id_verification_documents-__prefix__-document"></span>

        </div>
            <div class="sub-label">

            </div>

      </div>
    </li>


        </ul>
        <div style="display: none;">
          <input type="checkbox" name="verification_documents-__prefix__-DELETE" id="id_verification_documents-__prefix__-DELETE">
          <input type="hidden" name="verification_documents-__prefix__-id" id="id_verification_documents-__prefix__-id">
        </div>
      </div>
    </div>

                              </script>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="form-section-title">
                                    Select a plan
                                </div>
                                <div class="form-fields-wrapper" style="padding-top: 0">
                                    <div class="pricing-info-wrapper">
                                        <ul class="pricing-info">
                                            <li>
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="verify_from_mca"
                                                            class="plan-checkbox" id="id_verify_from_mca">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Active Business</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 14,500
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p><i class="ti-check"></i> Speedy profile activation within 1
                                                        business day</p>
                                                    <p><i class="ti-check"></i> Profile marked as 'Premium Plan' and gets
                                                        higher visibility</p>
                                                    <p><i class="ti-check"></i> You can send up to 50 business proposals
                                                        to investors and buyers</p>
                                                    <p><i class="ti-check"></i> Quick email support for your queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                            <li id="fast-track-box">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="verified_plus_plan"
                                                            class="plan-checkbox" id="id_verified_plus_plan"
                                                            checked="" data-original-title="" title="">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Fast Track Business</span>
                                                        <span class="paid recommended-text"
                                                            style="font-size:13px;font-family:proxima_novasemibold;">
                                                            [ Recommended ]
                                                        </span>
                                                        <span class="know-more recommended-plan-know-more"><a
                                                                href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 18,000
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="display: block;">
                                                    <p><i class="ti-check"></i> Speedy profile activation within 1
                                                        business day</p>
                                                    <p><i class="ti-check"></i> Profile marked as 'Premium Plan' and gets
                                                        higher visibility</p>
                                                    <p><i class="ti-check"></i> SMERGERS promotes your profile actively in
                                                        regular investor newsletters</p>
                                                    <p><i class="ti-check"></i> You can send up to 80 business proposals
                                                        to investors and buyers</p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 20 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Option to send NDA to maintain
                                                        confidentiality</p>
                                                    <p><i class="ti-check"></i> Quick email support for your queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="professional_plan"
                                                            class="plan-checkbox" id="id_professional_plan">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Professional Business</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 1,80,000
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p><i class="ti-check"></i> Speedy profile activation within 1
                                                        business day</p>
                                                    <p><i class="ti-check"></i> Profile marked as 'Premium Plan' and gets
                                                        higher visibility</p>
                                                    <p><i class="ti-check"></i> SMERGERS promotes your profile actively in
                                                        regular investor newsletters</p>
                                                    <p><i class="ti-check"></i> You can send unlimited business proposals
                                                        to investors and buyers subject to <a
                                                            href="https://www.smergers.com/faq/can-you-define-fair-usage-policy-fup-for-unlimited-plans/65/">FUP</a>
                                                    </p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 50 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Option to send NDA to maintain
                                                        confidentiality</p>
                                                    <p><i class="ti-check"></i> Up to 3,000 exclusive emails sent to
                                                        registered members to promote your profile</p>
                                                    <p><i class="ti-check"></i> SMERGERS prepares an Information
                                                        Memorandum / Business Plan for your business</p>
                                                    <p><i class="ti-check"></i> SMERGERS prepares a Financial Projection
                                                        and Business Valuation model for your business</p>
                                                    <p><i class="ti-check"></i> Account Manager who will be a single point
                                                        of contact to manage your profile</p>
                                                    <p><i class="ti-check"></i> Quick phone and email support for your
                                                        queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                            <li id="select-individual-services" class="no-border">
                                                <a href="#" id="view-more-services">
                                                    <i class="ti-plus"
                                                        style="font-size: 12px;color: #888;border: 1px solid #ccc;border-radius: 4px;"
                                                        id="individual-service-toggle-icon"></i>
                                                    Select Individual Services
                                                </a>
                                            </li>
                                            <li class="more-services collapse" id="fast-track-bundle-box"
                                                style="display: none;">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="fast_track_bundle"
                                                            class="plan-checkbox" id="id_fast_track_bundle">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            FastTrack Bundle</span>
                                                        <span class="paid recommended-text"
                                                            style="font-size:13px;font-family:proxima_novasemibold;display:none;">
                                                            [ Recommended ]
                                                        </span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 45,000
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>We recommend this if plan you are planning to list multiple business
                                                        opportunities on behalf of your clients. Purchase a bundle of 10
                                                        Fast Track plans at a discounted price. Use these 10 credits as and
                                                        when you have an opportunity to list without any expiry date. Each
                                                        Fast Track plan entitles you to the below benefits:<br></p>
                                                    <p><i class="ti-check"></i> Speedy profile activation within 1
                                                        business day</p>
                                                    <p><i class="ti-check"></i> Profile marked as 'Premium Plan' and gets
                                                        higher visibility</p>
                                                    <p><i class="ti-check"></i> SMERGERS promotes your profile actively in
                                                        regular investor newsletters</p>
                                                    <p><i class="ti-check"></i> You can send up to 80 business proposals
                                                        to investors and buyers</p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 20 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Option to send NDA to maintain
                                                        confidentiality</p>
                                                    <p><i class="ti-check"></i> Quick email support for your queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>

                                            <li class="more-services collapse" id="unlimited-bundle-box">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="unlimited_bundle"
                                                            class="plan-checkbox" id="id_unlimited_bundle">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Unlimited Bundle</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 99,500
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>Designed exclusively for M&amp;A Advisory firms which strive to get
                                                        the best results for every client of theirs. Be a rainmaker and
                                                        enhance your outreach with this bundle which gives you 10 Unlimited
                                                        Proposal plans at a steeply discounted price. Use these 10 credits
                                                        as and when you have an opportunity to list without any expiry date.
                                                        Each Unlimited Proposals plan entitles you to the below
                                                        benefits:<br></p>
                                                    <p><i class="ti-check"></i> Speedy profile activation within 1
                                                        business day</p>
                                                    <p><i class="ti-check"></i> Profile marked as 'Premium Plan' and gets
                                                        higher visibility</p>
                                                    <p><i class="ti-check"></i> SMERGERS promotes your profile actively in
                                                        regular investor newsletters</p>
                                                    <p><i class="ti-check"></i> You can send unlimited business proposals
                                                        to investors and buyers subject to <a
                                                            href="https://www.smergers.com/faq/can-you-define-fair-usage-policy-fup-for-unlimited-plans/65/">FUP</a>
                                                    </p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 50 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Up to 3000 exclusive emails sent from
                                                        every profile to matching members in our database to maximize reach
                                                    </p>
                                                    <p><i class="ti-check"></i> Option to send NDA to maintain
                                                        confidentiality</p>
                                                    <p><i class="ti-check"></i> Quick email support for your queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                            <li class="more-services collapse">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="private_profile"
                                                            id="id_private_profile" data-original-title=""
                                                            title="">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Stay Private</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 9,250
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>Please note that all business profiles on SMEREGRS are listed on a
                                                        no-name basis protecting the business' identity. But if you wish to
                                                        hide complete business details from SMERGERS users and search
                                                        engines subscribe to this plan. On the 'Stay Private' plan your
                                                        business profile will be visible to only those investors and buyers
                                                        to whom you send a proposal. This is an add-on feature along with
                                                        Active, Fast Track or Professional Plan. </p>
                                                </div>
                                            </li>
                                            <li class="more-services collapse">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="key_account_management"
                                                            id="id_key_account_management" data-original-title=""
                                                            title="">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Hire Account Manager</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 90,500
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>We recommend this add-on if you are seeking a hassle-free plan with
                                                        priority phone and email support. With this add-on you get:
                                                    </p>
                                                    <p><i class="ti-check"></i> Account Manager who will be a single point
                                                        of contact to manage your profile.</p>
                                                    <p><i class="ti-check"></i> For further details refer to: <a
                                                            href="https://www.smergers.com/faq/what-are-the-roles-responsibilities-of-an-account-manager/296/">Roles
                                                            &amp; Responsibilities</a></p>
                                                    <p><i class="ti-check"></i> You can send unlimited business proposals
                                                        to investors and buyers subject to <a
                                                            href="https://www.smergers.com/faq/can-you-define-fair-usage-policy-fup-for-unlimited-plans/65/">FUP</a>
                                                    </p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 50 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Up to 3,000 exclusive emails sent to
                                                        registered members to promote your profile</p>
                                                    <p><i class="ti-check"></i> Quick phone and email support for your
                                                        queries</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                            <li class="more-services collapse">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="cim" id="id_cim">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Prepare IM / Business Plan</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 90,500
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>Information Memorandum (IM) is one of the most important documents to
                                                        be shared with serious investors, buyers, and lenders after signing
                                                        an NDA. This forms the first impression of your company. Get it done
                                                        from our professional team. Position your firm strongly and convey
                                                        the most impressive highlights of your business. Our team will work
                                                        closely with you to build a detailed presentation document for your
                                                        business in 20 business days.</p>
                                                </div>
                                            </li>
                                            <li class="more-services collapse">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="business_valuation"
                                                            id="id_business_valuation">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Get A Business Valuation</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 90,500
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>Want a detailed understanding of your company's valuation? Our team
                                                        will work closely with you to build a detailed valuation model for
                                                        your business in 20 business days. Valuation is done using 3
                                                        industry-accepted methods: DCF Valuation, Trading Comparables
                                                        Valuation &amp; Transaction Comparables Valuation. This will help
                                                        you get a good understanding of what valuation drivers are,
                                                        investors perspective of how your company is valued and how you can
                                                        improve. Please note that the valuation can only be used for
                                                        internal and commercial purposes and not for regulatory purposes.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="more-services collapse">
                                                <div class="col-md-10">
                                                    <div class="check">
                                                        <input type="checkbox" name="accelerated_marketing"
                                                            id="id_accelerated_marketing" data-original-title=""
                                                            title="">
                                                    </div>
                                                    <div class="info">
                                                        <span
                                                            style="font-size:14px;color:#000;font-family:proxima_novasemibold;">
                                                            Unlimited Proposals</span>
                                                        <span class="know-more "><a href="#">Know More</a></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="price">
                                                        BDT 45,000
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="detailed" style="">
                                                    <p>Enhance your outreach and get the best visibility for your profile on
                                                        SMERGERS with this plan.
                                                    </p>
                                                    <p><i class="ti-check"></i> You can send unlimited business proposals
                                                        to investors and buyers subject to <a
                                                            href="https://www.smergers.com/faq/can-you-define-fair-usage-policy-fup-for-unlimited-plans/65/">FUP</a>
                                                    </p>
                                                    <p><i class="ti-check"></i> SMERGERS sends your business proposal to
                                                        top 50 active investors and buyers in your sector</p>
                                                    <p><i class="ti-check"></i> Up to 3000 exclusive emails sent to
                                                        matching members in our database to maximize reach</p>
                                                    <p><i class="ti-check"></i> Plan valid for 1 year or deal closure,
                                                        whichever is earlier</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-10" style="padding: 0;">
                                        <ul class="form-fields">
                                            <li id="li_id_claimed" class="full-width success">
                                                <div class="field-label">
                                                    <input type="checkbox" name="claimed" disabled=""
                                                        id="id_claimed" checked="">
                                                    <span class="bold-label">
                                                        <span id="field_label_id_claimed">I accept <span
                                                                class="is-not-advisor">1% finder's fee (payable post
                                                                transaction) and other</span> <a href="#"
                                                                class="terms-of-engagement-link"
                                                                data-event="Clicked on Business Terms of Engagement">terms
                                                                of engagement</a></span>
                                                        <i id="status_icon_id_claimed" class="icon-ok-sign"></i>
                                                    </span>
                                                    <div class="sub-label">
                                                    </div>
                                                </div>
                                                <div class="field-note-wrapper">
                                                    <div id="status_message_id_claimed" class="field-note"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2" style="padding: 0;">
                                        <div class="form-navigation">
                                            <div>
                                                <a class="form-submit-button btn btn-yellow" data-pageno="1"
                                                    href="#">Submit</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <ul class="form-fields">
                                        <li class="iaccept">
                                            <div id="sell-agreement">
                                                These Standard Terms of Use (“Terms”) apply in respect of all work carried
                                                out by SMERGERS, except to the extent that they otherwise agree with the
                                                Registered User in writing.<br><br>1. The Registered User has read and
                                                understands this Agreement and all terms of use of the website
                                                (smergers.com/terms) including privacy policy (smergers.com/privacy) and
                                                refund policy (smergers.com/refund-policy) and agrees to be bound by its
                                                terms.<br><br>2. The Registered User certifies that the details mentioned
                                                herein are true and complete to the best of his knowledge and belief.
                                                <br><br>3. The Registered User agrees not to post, email, display, upload,
                                                modify, publish, transmit, update or share any information on the site, or
                                                otherwise make available content that violates any law or regulation or that
                                                is false, deceptive, misleading or deceitful.<br><br>4. SMERGERS may seek
                                                proof of the content or information shared by the Registered User at any
                                                time. The Registered User agrees to furnish proof of the claims made by it
                                                within 2 days of the request made by SMERGERS. If proof is not submitted
                                                within the accorded time, SMERGERS shall be at liberty to not approve such
                                                profile or shall be entitled to either delete such information it believes
                                                to be false or suspend the said profile. <br><br>5. The Registered User
                                                agrees to promptly disclose in absolute good faith the correct transaction
                                                value and transaction closure date and other material terms to SMERGERS by
                                                promptly sending an email to info@smergers.com within 2 business days of
                                                transaction closure to enable SMERGERS to raise an invoice.<br><br>6. The
                                                Registered User agrees to pay a finder's fee of 1% of total transaction
                                                value or INR 30,000 (or USD 400), whichever is higher, plus taxes as
                                                applicable to SMERGERS on transaction closure with buyers/investors (or
                                                related parties) introduced by SMERGERS. <br><br>7. Irrespective of whether
                                                the parties were in touch earlier or the buyer/investor has previously
                                                contacted or been contacted by or introduced or known to the Registered User
                                                earlier or not, once the introduction has been made between the parties on
                                                SMERGERS, the Registered User agrees to pay the Finder’s Fee as stated above
                                                upon the closure of the transaction. <br><br>8. Any form of financial
                                                transaction between the Registered User and the buyer/investor including
                                                investment, complete buyout, sale of shares, sale of any assets, aqui-hiring
                                                of employees, is considered as successful Transaction for which SMERGERS
                                                finder's fee would be applicable.<br><br>9. The transaction shall be deemed
                                                closed on the date on which the Registered User and the buyer/investor (or
                                                related parties) sign the final version of the definitive agreement amongst
                                                themselves or on the receipt of any payment pertaining to the transaction by
                                                the Registered User from the buyer/investor(or related parties), whichever
                                                is earlier.<br><br>10. Failure to disclose accordingly in good faith within
                                                the aforesaid timeframe would entitle SMERGERS to be indemnified to an
                                                amount that is not less than 1% of the total transaction value or INR 20,000
                                                (or USD 300), whichever is higher.<br><br>11. Invoices are payable within 5
                                                days of the date of the invoice, unless alternative arrangements have been
                                                made with SMERGERS. Invoices outstanding for more than 5 days shall attract
                                                a simple interest of 4% per month.<br><br>12. Total transaction value
                                                includes total payments made, committed future payouts, non-cash payments,
                                                debt assumed by acquirer, and bonus payments to be paid to
                                                management.<br><br>13. The Registered User shall use information received
                                                from prospective buyers/investors (or related parties) and SMERGERS only for
                                                evaluation of the transaction in question and not for any other purpose.
                                                Further, the Registered User shall not disclose, directly or indirectly, any
                                                such information received, including contact information, to any person
                                                other than his representatives who are directly participating in the
                                                evaluation of this transaction.<br><br>14. The Registered User is aware that
                                                SMERGERS has access to all of his communication with the buyer/investor
                                                introduced to him through SMERGERS. In order to ensure a smooth transaction
                                                between the Registered User and the prospective buyer/investor, based on the
                                                content of the communication between these parties, SMERGERS reserves the
                                                right to take any action as indicated in these Terms. <br><br>15. SMERGERS
                                                will hold in confidence all information concerning the Registered User or
                                                his affairs that is acquired during the course of acting for the Registered
                                                User. SMERGERS will not disclose any of this information to any other person
                                                except: <br>a. to the extent necessary or desirable to enable SMERGERS to
                                                carry out the Registered User’s instructions; or<br>b. to the extent
                                                required by law <br>Notwithstanding the aforesaid, user consents to SMERGERS
                                                using the user's company name and logo on its website, promotional material
                                                or other literature/ write-ups unless the user requests
                                                otherwise.<br><br>16. The Registered User understands that SMERGERS doesn’t
                                                provide any representation or warranty as to completeness or accuracy of any
                                                information received from prospective buyers/investors (or related parties).
                                                The Registered Users are responsible for the accuracy and content of the
                                                listing.<br><br>17. In addition, to the extent permitted by law, SMERGERS is
                                                not liable, and the Registered User agrees not to hold them responsible, for
                                                any damages or losses (including, but not limited to, loss of money,
                                                goodwill or reputation, profits, or other intangible losses or any special,
                                                indirect, or consequential damages) resulting directly or indirectly from
                                                the use of their services.<br><br>18. If the Registered User has a dispute
                                                with one or more other Registered Users, the Registered User releases
                                                SMERGERS from claims, demands and damages (actual and consequential) of
                                                every kind and nature, known and unknown, arising out of or in any way
                                                connected with such disputes. <br><br>19. The Registered User will indemnify
                                                and hold SMERGERS harmless from and against any and all claims, damages,
                                                obligations, losses, liabilities, costs or debt, and expenses (including but
                                                not limited to legal fees), arising from the Registered User’s use of and
                                                access to the Website and/or the Service, violation of any of the terms of
                                                these Terms, claims made by any third party due to or arising out of the
                                                Registered User’s breach of this Agreement, improper use of SMERGERS’
                                                Services or breach of any law or the rights of a third party. This defense,
                                                duty of confidentiality and indemnification obligations will survive
                                                termination, modification or expiration of these Terms and your use of the
                                                Service and the Website.<br><br>20. Although, the Registered User may expect
                                                to be reimbursed by a third party for SMERGERS’ fees and expenses, and
                                                although the invoices may, at the request of the Registered User or with his
                                                approval be directed to a third party, nevertheless the Registered User
                                                remains responsible for payment to SMERGERS if the third party fails to pay
                                                them.<br><br>21. The Registered User agrees and consents to receive Phone
                                                calls, SMS and Emails that SMERGERS’ sends in connection with his account at
                                                SMERGERS.<br><br>22. The Registered User agrees that SMERGERS can use its
                                                best efforts to advertise, market and promote his requirements on various
                                                platforms and social media in order to maximize the introductions he
                                                receives.<br><br>23. The Registered User acknowledges and agrees that
                                                SMERGERS, may establish limits from time to time concerning use of the
                                                Service, including among others, the maximum number of days that Content
                                                will be maintained or retained by the Service, the maximum number and size
                                                of postings, e-mail messages, or other Content that may be transmitted or
                                                stored by the Service, and the frequency with which the Registered User may
                                                access the Service or the Website. <br><br>24. The Registered User grants
                                                permission to SMERGERS to publish the successful deal closure on its website
                                                upon intimating the transaction closure date to it and the publication may
                                                be done for any purposes of trade, advertising, publicity or promotion. The
                                                Registered User hereby releases SMERGERS from liability resulting from or
                                                attributable to any of the actions authorized above<br><br>25. The
                                                Registered User acknowledges and agrees that SMERGERS has no responsibility
                                                or liability for the deletion or failure to store any Content maintained or
                                                transmitted by the Website or the Service. <br><br>26. If SMERGERS believes
                                                that the Registered User is abusing SMERGERS in any way or if the Registered
                                                User intentionally furnishes information or makes claims knowing it to be
                                                false or deliberately fails to furnish verification proof to back its claims
                                                or fails to pay the Finder’s Fee to SMERGERS within the allotted time,
                                                SMERGERS may, in their sole discretion and without limiting other remedies,
                                                limit, suspend, or terminate the user account(s) and access to their
                                                Services, delay or remove hosted content, remove any special status
                                                associated with the user’s account(s) and take technical and/or legal steps
                                                to prevent the User from using the Services. On such an action being taken
                                                by SMERGERS, SMERGERS shall also be entitled to retain the entire fees paid
                                                to it by the Registered User, towards damages. The Registered User shall not
                                                be entitled to seek a refund of the same.<br><br>27. SMERGERS is not liable
                                                for any infringement of intellectual property rights arising out of
                                                materials posted on or transmitted through the site, or items advertised on
                                                the site, by end users or any other third parties.<br><br>28. In the event
                                                of any dispute of any nature whatsoever, whether in any court or otherwise,
                                                the liability of SMERGERS would be restricted to the fee paid under this
                                                engagement.<br><br>29. These Terms apply to any current engagement and also
                                                to any future engagement, whether or not SMERGERS send another copy to the
                                                Registered User. SMERGERS is entitled to change these Terms from time to
                                                time, in which case they shall send out the amended Terms. <br><br>30. Any
                                                disputes, differences or question between the parties arising out of, or in
                                                connection with, these Terms of Use, or the commission of any breach of any
                                                terms thereof or of compensation payable thereof or in any manner whatsoever
                                                in connection with it, shall be decided through Arbitration by a sole
                                                arbitrator. The decision of such an arbitrator shall be final and binding on
                                                the parties. The venue of the arbitration proceedings shall be Bangalore and
                                                the provisions of the Arbitration and Conciliation Act, 1996, shall be
                                                applicable to such proceedings. <br><br>31. This engagement shall be
                                                governed by and construed in accordance with the laws of India. The
                                                exclusive venue for all actions related to or arising out of this engagement
                                                shall be the Courts of Bangalore, India.<br><br>Acceptance of the Terms
                                                mentioned herein shall constitute a valid contract that is binding on the
                                                parties.
                                            </div>
                                            <div id="partner-agreement" style="display: none;">
                                                These Standard Terms of Use (“Terms”) apply in respect of all work carried
                                                out by SMERGERS, except to the extent that they otherwise agree with the
                                                Registered User in writing.<br><br>1. The Registered User has read and
                                                understands this Agreement and all terms of use of the website
                                                (smergers.com/terms) including privacy policy (smergers.com/privacy) and
                                                refund policy (smergers.com/refund-policy) and agrees to be bound by its
                                                terms.<br><br>2. The Registered User certifies that the details mentioned
                                                herein are true and complete to the best of his knowledge and belief.
                                                <br><br>3. The Registered User agrees not to post, email, display, upload,
                                                modify, publish, transmit, update or share any information on the site, or
                                                otherwise make available content that violates any law or regulation or that
                                                is false, deceptive, misleading or deceitful.<br><br>4. SMERGERS may seek
                                                proof of the content or information shared by the Registered User at any
                                                time. The Registered User agrees to furnish proof of the claims made by it
                                                within 2 days of the request made by SMERGERS. If proof is not submitted
                                                within the accorded time, SMERGERS shall be at liberty to not approve such
                                                profile or shall be entitled to either delete such information it believes
                                                to be false or suspend the said profile. <br><br>5. The Registered User
                                                agrees to promptly disclose in absolute good faith the correct transaction
                                                value and transaction closure date and other material terms to SMERGERS by
                                                promptly sending an email to info@smergers.com within 2 business days of
                                                transaction closure to enable SMERGERS to raise an invoice.<br><br>6.
                                                Irrespective of whether the parties were in touch earlier or the
                                                buyer/investor has previously contacted or been contacted by or introduced
                                                or known to the Registered User earlier or not, once the introduction has
                                                been made between the parties on SMERGERS, the Registered User agrees to pay
                                                the Finder’s Fee as stated above upon the closure of the transaction.
                                                <br><br>7. The transaction shall be deemed closed on the date on which the
                                                Registered User or clients of the Registered User and the buyer/investor (or
                                                related parties) sign the final version of the definitive agreement amongst
                                                themselves or on the receipt of any payment pertaining to the transaction by
                                                the Registered User or clients of the Registered User from the
                                                buyer/investor(or related parties), whichever is earlier.<br><br>8. Failure
                                                to disclose accordingly in good faith within the aforesaid timeframe would
                                                entitle SMERGERS to be indemnified to an amount that is not less than 1% of
                                                the total transaction value or INR 30,000 (or USD 400), whichever is
                                                higher.<br><br>9. Total transaction value includes total payments made,
                                                committed future payouts, non-cash payments, debt assumed by acquirer, and
                                                bonus payments to be paid to management.<br><br>10. The Registered User
                                                shall use information received from prospective buyers/investors (or related
                                                parties) and SMERGERS only for evaluation of the transaction in question and
                                                not for any other purpose. Further, the Registered User shall not disclose,
                                                directly or indirectly, any such information received, including contact
                                                information, to any person other than his representatives who are directly
                                                participating in the evaluation of this transaction.<br><br>11. The
                                                Registered User is aware that SMERGERS has access to all of his
                                                communication with the buyer/investor introduced to him through SMERGERS. In
                                                order to ensure a smooth transaction between the Registered User and the
                                                prospective buyer/investor, based on the content of the communication
                                                between these parties, SMERGERS reserves the right to take any action as
                                                indicated in these Terms. <br><br>12. SMERGERS will hold in confidence all
                                                information concerning the Registered User or his affairs that is acquired
                                                during the course of acting for the Registered User. SMERGERS will not
                                                disclose any of this information to any other person except: <br>a. to the
                                                extent necessary or desirable to enable SMERGERS to carry out the Registered
                                                User’s instructions; or<br>b. to the extent required by
                                                law<br>Notwithstanding the aforesaid, user consents to SMERGERS using the
                                                user's company name and logo on its website, promotional material or other
                                                literature/ write-ups unless the user requests otherwise.<br><br>13. The
                                                Registered User understands that SMERGERS doesn’t provide any representation
                                                or warranty as to completeness or accuracy of any information received from
                                                prospective buyers/investors (or related parties). The Registered Users are
                                                responsible for the accuracy and content of the listing.<br><br>14. In
                                                addition, to the extent permitted by law, SMERGERS is not liable, and the
                                                Registered User agrees not to hold them responsible, for any damages or
                                                losses (including, but not limited to, loss of money, goodwill or
                                                reputation, profits, or other intangible losses or any special, indirect, or
                                                consequential damages) resulting directly or indirectly from the use of
                                                their services.<br><br>15. If the Registered User has a dispute with one or
                                                more other Registered Users, the Registered User releases SMERGERS from
                                                claims, demands and damages (actual and consequential) of every kind and
                                                nature, known and unknown, arising out of or in any way connected with such
                                                disputes. <br><br>16. The Registered User will indemnify and hold SMERGERS
                                                harmless from and against any and all claims, damages, obligations, losses,
                                                liabilities, costs or debt, and expenses (including but not limited to legal
                                                fees), arising from the Registered User’s use of and access to the Website
                                                and/or the Service, violation of any of the terms of these Terms, claims
                                                made by any third party due to or arising out of the Registered User’s
                                                breach of this Agreement, improper use of SMERGERS’ Services or breach of
                                                any law or the rights of a third party. This defense, duty of
                                                confidentiality and indemnification obligations will survive termination,
                                                modification or expiration of these Terms and your use of the Service and
                                                the Website.<br><br>17. Although, the Registered User may expect to be
                                                reimbursed by a third party for SMERGERS’ fees and expenses, and although
                                                the invoices may, at the request of the Registered User or with his approval
                                                be directed to a third party, nevertheless the Registered User remains
                                                responsible for payment to SMERGERS if the third party fails to pay
                                                them.<br><br>18. The Registered User agrees and consents to receive Phone
                                                calls, SMS and Emails that SMERGERS’ sends in connection with his account at
                                                SMERGERS.<br><br>19. The Registered User agrees that SMERGERS can use its
                                                best efforts to advertise, market and promote his requirements on various
                                                platforms and social media in order to maximize the introductions he
                                                receives.<br><br>20. The Registered User acknowledges and agrees that
                                                SMERGERS, may establish limits from time to time concerning use of the
                                                Service, including among others, the maximum number of days that Content
                                                will be maintained or retained by the Service, the maximum number and size
                                                of postings, e-mail messages, or other Content that may be transmitted or
                                                stored by the Service, and the frequency with which the Registered User may
                                                access the Service or the Website. <br><br>21. The Registered User grants
                                                permission to SMERGERS to publish the successful deal closure on its website
                                                upon intimating the transaction closure date to it and the publication may
                                                be done for any purposes of trade, advertising, publicity or promotion. The
                                                Registered User hereby releases SMERGERS from liability resulting from or
                                                attributable to any of the actions authorized above<br><br>22. The
                                                Registered User acknowledges and agrees that SMERGERS has no responsibility
                                                or liability for the deletion or failure to store any Content maintained or
                                                transmitted by the Website or the Service. <br><br>23. If SMERGERS believes
                                                that the Registered User is abusing SMERGERS in any way or if the Registered
                                                User intentionally furnishes information or makes claims knowing it to be
                                                false or deliberately fails to furnish verification proof to back its claims
                                                or fails to pay the Finder’s Fee to SMERGERS within the allotted time,
                                                SMERGERS may, in their sole discretion and without limiting other remedies,
                                                limit, suspend, or terminate the user account(s) and access to their
                                                Services, delay or remove hosted content, remove any special status
                                                associated with the user’s account(s) and take technical and/or legal steps
                                                to prevent the User from using the Services. On such an action being taken
                                                by SMERGERS, SMERGERS shall also be entitled to retain the entire fees paid
                                                to it by the Registered User, towards damages. The Registered User shall not
                                                be entitled to seek a refund of the same.<br><br>24. SMERGERS is not liable
                                                for any infringement of intellectual property rights arising out of
                                                materials posted on or transmitted through the site, or items advertised on
                                                the site, by end users or any other third parties.<br><br>25. In the event
                                                of any dispute of any nature whatsoever, whether in any court or otherwise,
                                                the liability of SMERGERS would be restricted to the fee paid under this
                                                engagement.<br><br>26. These Terms apply to any current engagement and also
                                                to any future engagement, whether or not SMERGERS send another copy to the
                                                Registered User. SMERGERS is entitled to change these Terms from time to
                                                time, in which case they shall send out the amended Terms. <br><br>27. Any
                                                disputes, differences or question between the parties arising out of, or in
                                                connection with, these Terms of Use , or the commission of any breach of any
                                                terms thereof or of compensation payable thereof or in any manner whatsoever
                                                in connection with it, shall be decided through Arbitration by a sole
                                                arbitrator. The decision of such an arbitrator shall be final and binding on
                                                the parties. The venue of the arbitration proceedings shall be Bangalore and
                                                the provisions of the Arbitration and Conciliation Act, 1996, shall be
                                                applicable to such proceedings. <br><br>28. This engagement shall be
                                                governed by and construed in accordance with the laws of India. The
                                                exclusive venue for all actions related to or arising out of this engagement
                                                shall be the Courts of Bangalore, India.<br><br>Acceptance of the Terms
                                                mentioned herein shall constitute a valid contract that is binding on the
                                                parties.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 faq-section faq-section--sidebar" style="display: block;">
                            <div class="desktop-form-progress-indicator">
                                <div class="sme-v3-h3">
                                    Your Profile Status
                                </div>
                                <ul class="step sme-v3-extra-margin-top">
                                    <li>
                                        <div class="iconwrap">
                                            <i class="icon-ok-sign "></i>
                                        </div>
                                        <div class="infowrap">
                                            <div class="timeline">
                                                Provide Details
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconwrap">
                                            <i class=" icon-circle "></i>
                                        </div>
                                        <div class="infowrap">
                                            <div class="timeline">
                                                Verification Call
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iconwrap">
                                            <i class=" icon-circle-blank"></i>
                                        </div>
                                        <div class="infowrap">
                                            <div class="timeline">
                                                Approval
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="faq-wrapper">
                                <div class="faq">
                                    <div class="faq-title">
                                        <h3>Frequently Asked Questions</h3>
                                    </div>
                                    <div class="faq-questions with-icons">
                                        <div class="faq-question-wrapper ">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    What is a Business Profile?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">A “business profile” also called a
                                                “sell side profile” can be any of the following:
                                                <ul>
                                                    <li>Business for sale</li>
                                                    <li>Business offering a stake sale</li>
                                                    <li>Business seeking capital</li>
                                                    <li>Business seeking a loan</li>
                                                    <li>Business seeking Joint Venture partners</li>
                                                    <li>Business asset for sale</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper ">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    Why should I disclose my business' name?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>All profiles on SMERGERS are verified and hence we need to make sure that
                                                    the business exists. Business' name is not publicly disclosed on
                                                    SMERGERS. Registered Advisors need not enter their client's name and
                                                    instead, use their company's name along with a project name.</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper ">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    Who can create a Business Profile?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">Profile can be created by any of the
                                                below:
                                                <ul>
                                                    <li>Business owner</li>
                                                    <li>Management who is authorized by the business</li>
                                                    <li>Advisor who has a mandate from the business</li>
                                                    <li>Investor from current/previous round</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper ">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    What is the minimum criteria to register on SMERGERS?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>Any business which wishes to create a business profile on SMERGERS should
                                                    be registered with their local government agency and should be able to
                                                    produce a registration certificate. If an advisor is creating the
                                                    business profile, the advisor needs to be a registered business or
                                                    produce the engagement letter.</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper ">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    I don’t want my Business details to be shown online. Can I use SMERGERS?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>You have the following three options:</p>
                                                <p>1) Any profile you create is a “no name teaser” i.e. the public profile
                                                    will not display your business name or logo or address or website. So
                                                    there is no need to worry about disclosure of your business' identity.
                                                </p>
                                                <p>2) Only post introduction is your business' name disclosed to introduced
                                                    members. But if you wish not to disclose even post the introduction, you
                                                    can choose the option of not disclosing it at the time of profile
                                                    creation. For further details, you can refer to&nbsp;<a
                                                        href="/faq/how-do-i-hide-my-details-even-post-the-introduction/258/"
                                                        style="font-family: proxima_novaregular; font-size: 14px;">https://www.smergers.com/faq/how-do-i-hide-my-details-even-post-the-introduction/258/</a>
                                                </p>
                                                <p>3) If you want to keep even the "no name" profile details private, you
                                                    can choose to create a “Private Profile” where the profile is visible to
                                                    only those investors, buyers, lenders and advisors to whom you send a
                                                    proposal. For creating private profiles, we charge a fee which can be
                                                    subscribed to at the time of profile creation. For further details refer
                                                    to&nbsp;<a
                                                        href="/faq/can-i-keep-my-business-profile-completely-private/50"
                                                        style="font-family: proxima_novaregular; font-size: 14px;">https://www.smergers.com/faq/can-i-keep-my-business-profile-completely-private/50</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    How can I be sure about privacy and confidentiality?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>We understand the level of confidentiality required in strategic
                                                    transactions and we strive to provide a safe and secure experience for
                                                    our members. Please review our <a href="/privacy">privacy policy</a>.
                                                    We also use SSL technology to encrypt confidential information,
                                                    including business data, personal information and passwords.</p>
                                                <p>All profiles on SMERGERS are displayed on a "no name" basis
                                                    (except&nbsp;<a
                                                        href="/investors/venture-capital-firms/s0/c0/t0/m3/">Institutional
                                                        Investors, Advisors</a>&nbsp;and&nbsp;<a
                                                        href="/businesses/franchise-opportunities/s0/c0/t11/">Franchises)</a>.
                                                    Attachments on a&nbsp;<a
                                                        href="/businesses/businesses-for-sale-and-investment-opportunities/s0/c0/t0/">business
                                                        profile</a>&nbsp;are visible to specific members only after the
                                                    introduction is made. Businesses also have an option to not display
                                                    their business name and contact number even after the introduction. In
                                                    such cases, the onus is on the business to reach out to the investor
                                                    after they receive an introduction. Further, post&nbsp;introduction, it
                                                    is advisable to get an <a
                                                        href="/faq/how-to-send-an-nda-through-smergers-platform/238/">NDA</a>&nbsp;signed
                                                    before exchanging any sensitive information.</p>
                                                <p>Kindly note that the final responsibility of conducting thorough due
                                                    diligence and sharing information lies with the users. If the user has a
                                                    dispute with one or more other users, SMERGERS is not liable responsible
                                                    for any damages arising out of such disputes.</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    Why am I being asked to provide Revenue, EBITDA margin and other
                                                    confidential information?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">Without this information we would end
                                                up notifying the wrong set of investors, acquirers, lenders and advisors,
                                                which would be a waste of time and resources for you and them. This
                                                information is important for us to target and alert relevant members.</div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    What is EBITDA margin? How do I calculate it?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>EBITDA (Earnings Before Interest, Taxes, Depreciation and Amortization)
                                                    margin provides an investor with a clean view of the core operating
                                                    profitability of a business. It is a financial metric used to compare
                                                    valuations in most industries.&nbsp;EBITDA varies from industry to
                                                    industry and business to business.&nbsp;<span
                                                        style="font-size: 14px;">It is calculated as follows:</span></p>
                                                <p>EBITDA = Profit + Depreciation &amp; Amortization + Taxes + Interest
                                                    Expense – Non-Operating income + Non-operating expenses</p>
                                                <p>EBITDA Margin = EBITDA / Operating Revenue</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    How do I value my business?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">Well, this deserves a separate section
                                                to explain. You can check how to value a business <a
                                                    href="/how-to-value-a-business/">here.</a> Please remember that your
                                                business’s value is what one is ready to pay for it. And as one would
                                                expect, the lower you price it the faster you will close the transaction.
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    What is stake? How do I calculate it?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>Stake is the percentage share/ownership of your company you are willing
                                                    to transfer to the investor. For example if you wish to give half
                                                    ownership to the investor, then stake has to be 50 percent.</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    Can I keep my business profile completely private?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>You can choose 'Stay Private' option in 'Select Individual Services'.
                                                    Private profiles are not publicly shown to members. All details of such
                                                    profiles are only shown to those Investors, Acquirers, Lenders and
                                                    Advisors who receive a proposal from the business profile owner. We
                                                    recommend you to select this option only if your business operates in a
                                                    highly specific industry and you feel members will be able to identify
                                                    the business from the profile description.</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    What are the professional services you provide for businesses?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>SMERGERS believes in direct communication between businesses and
                                                    prospective investors/acquirers as most deals which close successfully
                                                    are based on the relationship which the parties develop during such
                                                    interactions. Nevertheless, there are several ancillary services which
                                                    would provide a professional approach to such transactions. Under the
                                                    professional plan, SMERGERS assists you with the below services:</p>
                                                <p>1.&nbsp;SMERGERS works with you to build a business valuation model with
                                                    financial projections. To know more about the process please refer
                                                    to:&nbsp;<a
                                                        href="/faq/what-is-the-process-of-creating-a-business-valuation/98/">Process
                                                        of creating a business valuation.</a></p>
                                                <p>2. SMERGERS helps you create a Confidential Information Memorandum (CIM)
                                                    document highlighting your business. To know more about the same, please
                                                    refer to:&nbsp;<a
                                                        href="/faq/what-is-a-confidential-information-memorandum-cim/89/">What
                                                        is a CIM.</a></p>
                                                <p>3.&nbsp;SMERGERS conducts promotional marketing of your business through
                                                    targeted emails. To know more about the same, please refer to:&nbsp;<a
                                                        href="/faq/how-to-check-the-promotions-by-smergers-as-part-of-the-paid-plan/305/">How
                                                        to check promotions by SMERGERS?</a></p>
                                                <p>4.&nbsp;SMERGERS assigns an Account Manager who acts as your single point
                                                    of contact for any discussions and clarifications. To know more about
                                                    the roles and responsibilities of the account manager, please refer
                                                    to:&nbsp;<a
                                                        href="/faq/what-are-the-roles-responsibilities-of-an-account-manager/296/">Roles
                                                        &amp; Responsibilities of an Account Manager.</a></p>
                                                <p>5.&nbsp;Your profile is showcased as Premium Profile on SMERGERS with
                                                    unlimited proposal credits and a validity of one year. To know more
                                                    about proposal credits, please refer to:&nbsp;<a
                                                        href="/faq/what-is-a-proposal-and-how-is-it-triggered/256/">What
                                                        is a proposal credit?</a></p>
                                                <p>Kindly note, even under the professional plan, once an introduction has
                                                    been made it is up to the business to take the discussions forward with
                                                    prospective investors/acquirers and these documents are only meant to be
                                                    assistive in the course of such interactions.&nbsp;</p>
                                            </div>
                                        </div>
                                        <div class="faq-question-wrapper faq-show-more">
                                            <div class="question-title question-title--condensed">
                                                <i class="icon-expand-alt"></i>
                                                <a href="#" class="question-title-link">
                                                    Which modes of payment do you accept?
                                                </a>
                                            </div>
                                            <div class="answer answer--condensed ">
                                                <p>We accept payments through Credit cards, Debit cards, Net Banking, UPI,
                                                    Wallets, and Bank Transfers. If you wish to make payment in any other
                                                    format please contact us on info@smergers.com.</p>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="faq-show-more-button faq-show-more-button--more-spacing">Show more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
