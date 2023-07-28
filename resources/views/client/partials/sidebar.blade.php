<div class="mobile-sidebar-container floating-panel-container col-md-4 mb-2">
    {{-- <a class="mobile-sidebar-toggle-button" href="#">
        <i class="fas fa-cog"></i>
    </a> --}}
    @php
        $user = App\Models\User::where('id', '=', Auth::user()->id)->first();
    @endphp
    <div class="mobile-sidebar ">
        <div class="dashboard-sidebar-wrapper">
            <div class="dashboard-sidebar">
                <div class="user-info">
                    <div class="sme-v3-single-line">
                        <div class="sme-v3-bolder sme-v3-largetext">
                            {{ $user->name }}
                        </div>
                        {{-- <div class="user-image"
                            style="background-image:url({{ isset($user->image) ? url('storage/' . $user->image) : url('admin/assets/images/no_image.jpg') }})"
                            profile-picture-container>
                            <input id="upload-multi-img" type="file" class="file-input" name="image"
                                data-id="{{ $user->id }}" accept="image/*" profile-picture-upload>
                            <span class="edit-picture"><i class="fas fa-pencil-alt"></i></span>
                        </div> --}}
                        <div class="user-image"
                            style="background-image:url({{ $user->image ? asset('storage/' . $user->image) : asset('admin/assets/images/no_image.jpg') }})"
                            profile-picture-container>
                            <input id="upload-multi-img" type="file" class="file-input" name="image"
                                accept="image/*" profile-picture-upload>
                            <span class="edit-picture bg-white"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                    </div>
                    <div class="sme-v3-smalltext sme-v3-lighter-text email-location-tz">
                        @if (!empty($user->email))
                            <div class="sme-v3-single-line" title="{{ $user->email }}">
                                <i class="fa fa-envelope"></i>&nbsp; {{ $user->email }}
                            </div>
                        @endif
                        @if (!empty($user->country))
                            <div class="sme-v3-single-line">
                                <i class="fas fa-map-marker"></i>&nbsp;
                                {{ $user->country }}
                            </div>
                        @endif
                        <div class="sme-v3-single-line">
                            <i class="fas fa-clock"></i>&nbsp;
                            Asia/Dhaka (+06 +0600)
                        </div>
                        <div class="sme-v3-single-line">
                            <i class="fas fa-calendar-week"></i>&nbsp;
                            Joined {{ $user->created_at->translatedFormat('j F Y') }}
                        </div>
                        <div class="sme-v3-single-line">
                            <span class="sme-v3-smalltext">
                                <a href="{{ route('general.info', ['contact_details']) }}"><i
                                        class="fas fa-pencil-alt"></i>&nbsp;
                                    Update details</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="user-details">
                    <div class="details-column">
                        <div class="detail linkedin ">
                            <i class="fab fa-linkedin text-primary"></i>
                            <a href="/login/linkedin-oauth2/?next=/dashboard/">Linkedin</a>
                        </div>
                        <div class="detail facebook ">
                            <i class="fab fa-facebook text-primary"></i>
                            <a href="/login/facebook/?next=/dashboard/">Facebook</a>
                        </div>
                        <div class="detail google verified">
                            <i class="fab fa-google-plus-square text-danger"></i>
                            <span>Google</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sme-v3-padded-box-sm sme-v3-border-bottom" style="padding-top:5px;">
                    <div class="sme-v3-center-justify sme-v3-bolder sme-v3-padded-box-xs">
                        Feed Preferences
                        <span class="sme-v3-smalltext sme-v3-thinner-text sme-v3-lighter-text">
                            <a href="{{ route('general.info', ['deal-preferences']) }}"><i class="fas fa-pencil"></i>
                                Edit</a>
                        </span>
                    </div>
                    <table class="sme-v3-smalltext table table-borderless table-condensed" style="margin-bottom:0;">
                        <tr>
                            <td>
                                <strong>Industries</strong>
                            </td>
                            <td>
                                All industries
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Locations</strong>
                            </td>
                            <td>
                                Bangladesh
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Deal Size</strong>
                            </td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sme-v3-padded-box-sm sme-v3-border-bottom" style="padding-top:5px;">
                    <div class="sme-v3-center-justify sme-v3-bolder sme-v3-padded-box-xs">
                        Email Preferences
                        <span class="sme-v3-smalltext sme-v3-thinner-text sme-v3-lighter-text">
                            <a href="{{ route('general.info', ['email-preferences']) }}"><i class="fas fa-pencil"></i>
                                Edit</a>
                        </span>
                    </div>
                    <table class="sme-v3-smalltext table table-borderless table-condensed" style="margin-bottom:0;">
                        <tr>
                            <td>
                                <strong>Important Communication</strong>
                            </td>
                            <td>
                                Subscribed
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Business Proposals</strong></td>
                            <td>
                                Real Time
                            </td>
                        </tr>
                        <tr>
                            <td><strong>New Opportunity Notifications</strong></td>
                            <td>
                                Weekly
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="user-profiles">
                    <div class="profiles-label  space-1">
                        No Active Profiles
                    </div>
                    <table
                        class="sme-v3-smalltext table table-borderless table-condensed sme-v3-left-justify space-bottom-0 space-top-1">
                        <tr>
                            <td width="20%">
                                <strong>Recent Payments</strong>
                            </td>
                            <td>
                                Free Trial
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="mobile-sidebar-mask"></div>
</div>


