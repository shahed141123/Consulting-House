@extends('frontend.master')
@section('content')
    <style>
        .accordion-button {
            left: -12px;
        }
    </style>
    {{-- Banner Area --}}
    <section class="showcase">
        <img class="img-fluid" src="https://worldbank.scene7.com/is/image/worldbankprod/Banner-1440x600-1:1440x600"
            alt="Picture" style="background-size: container;">
        <div class="overlay">
            <h2>Businesses</h2>
            <p class="mt-3 text-white">
                Businesses for Sale and Investment Opportunities
            </p>
        </div>
    </section>
    {{-- Main Content Start --}}
    <section>
        <div class="container">
            <div class="row gx-2 mt-3 mb-3">
                <div class="col-lg-3 px-0 mx-0">
                    <div class="py-3">
                        <h3>Filter By</h3>
                        {{-- Sidebar Tab Navigation --}}
                        <div class="mt-3">
                            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link border-0 rounded-0 m-0 text-one active" id="home-tab"
                                        data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                        aria-controls="home" aria-selected="true">Businesses</button>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link border-0 rounded-0 m-0 text-one" id="profile-tab"
                                        data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Investors &
                                        Buyers</button>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- Sidebar Tab Content --}}
                        <div class="tab-content" id="myTabContent">
                            {{-- Fist Tab Content --}}
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {{-- Radio Button Checkbox --}}
                                <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Profile Types
                                </p>
                                <div class="mt-3 mb-5">
                                    @foreach ($profile_types as $profile_type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="profile_type"
                                                value="{{ $profile_type->slug }}" id="profile_types">
                                            <label class="form-check-label" for="profile_types">
                                                {{ $profile_type->name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                                <hr class="">
                                <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Transactions Types
                                </p>
                                <div class="mt-3 mb-5">
                                    @foreach ($transaction_types as $transaction_type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transaction_type"
                                                value="{{ $transaction_type->slug }}" id="transaction_types">
                                            <label class="form-check-label" for="transaction_types">
                                                {{ $transaction_type->name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                                <hr class="">
                                <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Legal Entity Types
                                </p>
                                <div class="mt-3 mb-5">
                                    @foreach ($entity_types as $entity_type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="entity_type"
                                                value="{{ $entity_type->slug }}" id="entity_types">
                                            <label class="form-check-label" for="entity_types">
                                                {{ $entity_type->name }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                                <hr class="">
                                {{-- Search Under The  Section Start --}}
                                <div class="input-group input-group-sm py-2" style="max-width: 400px;">
                                    <div class="input-group-btn pt-2">
                                        <span type="submit"
                                            class="btn rounded-0 disabled text-white filter-buttons text-one"
                                            style="background-color: var(--main-color)">Locations <i
                                                class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <input id="location-filter" type="text" class="form-control mt-2 form-control-sm"
                                        placeholder="Filter...">
                                </div>
                                {{-- Nested Accordion --}}
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed p-1 m-0" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <div class="checkbox-wrapper-42">
                                                <input id="business_service" type="checkbox" />
                                                <label class="cbx" for="business_service"></label>
                                                <label class="lbl" for="business_service">Business Services</label>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="checkbox-wrapper-42">
                                                <input id="6" type="checkbox" />
                                                <label class="cbx" for="6"></label>
                                                <label class="lbl" for="6">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="5" type="checkbox" />
                                                <label class="cbx" for="5"></label>
                                                <label class="lbl" for="5">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="4" type="checkbox" />
                                                <label class="cbx" for="4"></label>
                                                <label class="lbl" for="4">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="3" type="checkbox" />
                                                <label class="cbx" for="3"></label>
                                                <label class="lbl" for="3">56</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed p-1 m-0" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <div class="checkbox-wrapper-42">
                                                <input id="education" type="checkbox" />
                                                <label class="cbx" for="education"></label>
                                                <label class="lbl" for="education">Education</label>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="checkbox-wrapper-42">
                                                <input id="89" type="checkbox" />
                                                <label class="cbx" for="89"></label>
                                                <label class="lbl" for="89">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="69" type="checkbox" />
                                                <label class="cbx" for="69"></label>
                                                <label class="lbl" for="69">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="49" type="checkbox" />
                                                <label class="cbx" for="49"></label>
                                                <label class="lbl" for="49">56</label>
                                            </div>
                                            <div class="checkbox-wrapper-42">
                                                <input id="13" type="checkbox" />
                                                <label class="cbx" for="13"></label>
                                                <label class="lbl" for="13">56</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Price Range Start --}}
                                {{-- <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Sectors
                                </p> --}}
                                {{-- <div class="accordion mt-3" id="accordionSector">
                                    @foreach ($sectors as $sector)
                                        <div class="accordion-item p-1">
                                            <h2 class="accordion-header" id="sector{{ $sector->id }}">
                                                <button class="accordion-button collapsed p-2 ps-0 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#sector{{ $sector->id }}" aria-expanded="false"
                                                    aria-controls="sector{{ $sector->id }}">
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="sector_check{{ $sector->id }}" type="checkbox" />
                                                        <label class="cbx" for="sector_check{{ $sector->id }}"></label>
                                                        <label class="lbl" for="sector_check{{ $sector->id }}">{{ $sector->name }}</label>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="sector{{ $sector->id }}" class="accordion-collapse collapse"
                                                aria-labelledby="sector{{ $sector->id }}" data-bs-parent="#accordionSector">
                                                <div class="accordion-body p-2">
                                                    <div class="accordion" id="sub-accordionExample">
                                                        @foreach ($sector->industries as $industry)
                                                            <div class="accordion-item mb-2">
                                                                <h2 class="accordion-header" id="sub-headingOne">
                                                                    <button class="accordion-button collapsed p-2 m-0"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#littoral" aria-expanded="false"
                                                                        aria-controls="littoral">
                                                                        <div class="checkbox-wrapper-42">
                                                                            <input id="industry{{ $industry->id }}" type="checkbox" />
                                                                            <label class="cbx" for="industry{{ $industry->id }}"></label>
                                                                            <label class="lbl" for="industry{{ $industry->id }}">{{ $industry->name }}</label>
                                                                        </div>
                                                                    </button>
                                                                </h2>

                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div> --}}
                                <div class="mb-3 mt-3">
                                    <h6>Investment Size</h6>
                                    <input type="hidden" name="min">
                                    <input type="hidden" name="max">

                                    <label>
                                        <span class="min"></span> AFN To <span class="max"></span></label>
                                    <br><br>
                                    <div class="slider-range"></div>
                                </div>
                                <hr>
                                <div class="mb-3 mt-3">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Run Rate Sales
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div>
                                                        <input type="hidden" name="min">
                                                        <input type="hidden" name="max">

                                                        <label>
                                                            <span class="min"></span> AFN To <span
                                                                class="max"></span></label>
                                                        <br><br>
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    EBITDA
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div>
                                                        <input type="hidden" name="min">
                                                        <input type="hidden" name="max">

                                                        <label>
                                                            <span class="min"></span> AFN To <span
                                                                class="max"></span></label>
                                                        <br><br>
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    EBITDA Margin
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div>
                                                        <input type="hidden" name="min">
                                                        <input type="hidden" name="max">

                                                        <label>
                                                            <span class="min"></span> AFN To <span
                                                                class="max"></span></label>
                                                        <br><br>
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Rating
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div>
                                                        <input type="hidden" name="min">
                                                        <input type="hidden" name="max">

                                                        <label>
                                                            <span class="min"></span> AFN To <span
                                                                class="max"></span></label>
                                                        <br><br>
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                    aria-expanded="false" aria-controls="collapseSix">
                                                    Year Established
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div>
                                                        <input type="hidden" name="min">
                                                        <input type="hidden" name="max">

                                                        <label>
                                                            <span class="min"></span> AFN To <span
                                                                class="max"></span></label>
                                                        <br><br>
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeven">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                    aria-expanded="false" aria-controls="collapseSeven">
                                                    Listed By
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse"
                                                aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-32" type="checkbox" />
                                                        <label class="cbx" for="cbx-32"></label>
                                                        <label class="lbl" for="cbx-32">Business Owner</label>
                                                    </div>
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-33" type="checkbox" />
                                                        <label class="cbx" for="cbx-33"></label>
                                                        <label class="lbl" for="cbx-33">Management</label>
                                                    </div>
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-34" type="checkbox" />
                                                        <label class="cbx" for="cbx-34"></label>
                                                        <label class="lbl" for="cbx-34">Advisor</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                                    aria-expanded="false" aria-controls="collapseEight">
                                                    Legal Entity
                                                </button>
                                            </h2>
                                            <div id="collapseEight" class="accordion-collapse collapse"
                                                aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordion-body">
                                                        <div class="checkbox-wrapper-42">
                                                            <input id="cbx-42" type="checkbox" />
                                                            <label class="cbx" for="cbx-42"></label>
                                                            <label class="lbl" for="cbx-42">Business Owner</label>
                                                        </div>
                                                        <div class="checkbox-wrapper-42">
                                                            <input id="cbx-43" type="checkbox" />
                                                            <label class="cbx" for="cbx-43"></label>
                                                            <label class="lbl" for="cbx-43">Management</label>
                                                        </div>
                                                        <div class="checkbox-wrapper-42">
                                                            <input id="cbx-44" type="checkbox" />
                                                            <label class="cbx" for="cbx-44"></label>
                                                            <label class="lbl" for="cbx-44">Advisor</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                    aria-expanded="false" aria-controls="collapseNine">
                                                    Exclude Locations / Sectors
                                                </button>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse"
                                                aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <select name="type" data-sm-placeholder="check"
                                                        class="select2 select2-search-box form-control form-control-sm ">
                                                        <option value="" disabled selected hidden>Country</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTen">
                                                <button class="accordion-button collapsed p-1 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                    aria-expanded="false" aria-controls="collapseTen">
                                                    Others
                                                </button>
                                            </h2>
                                            <div id="collapseTen" class="accordion-collapse collapse"
                                                aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-45" type="checkbox" />
                                                        <label class="cbx" for="cbx-45"></label>
                                                        <label class="lbl" for="cbx-45">Business Owner</label>
                                                    </div>
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-46" type="checkbox" />
                                                        <label class="cbx" for="cbx-46"></label>
                                                        <label class="lbl" for="cbx-46">Management</label>
                                                    </div>
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="cbx-47" type="checkbox" />
                                                        <label class="cbx" for="cbx-47"></label>
                                                        <label class="lbl" for="cbx-47">Advisor</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Price Range End --}}
                                {{-- Price Range End --}}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                Second Please Ready
                            </div>
                        </div>
                    </div>
                </div>
                @include('frontend.partials.business_filtering')
            </div>
        </div>
    </section>
    {{-- Main Content End --}}
    <section style="background-color: #fafafa">
        <div class="container">
            <div class="row p-5">
                <div class="col-lg-2">
                    <h3 style="font-size: 24px; font-weight: 400;line-height: 33px;">
                        Frequently<br>
                        Asked<br>
                        Questions
                    </h3>
                </div>
                <div class="col-lg-10">
                    <div>
                        <a href="#" class="text-one">How many businesses for sale and investment opportunities are
                            listed on SMERGERS?</a><br>
                        <span class="text-one">There are 18869 active and verified businesses for sale and investment
                            opportunities listed on SMERGERS as of 16 August 2023.</span> <br>
                        <a href="#" class="text-one">What level of due diligence does SMERGERS conduct on the
                            businesses/member?</a><br>
                        SMERGERS scrutinizes all profiles and only features a select group of businesses, investors,
                        advisors that meet a basic requirement. When required, certain members may have submitted some form
                        of proof <a href="#"> …read more</a> <br>

                        <br>
                        <a href="" class="text-one">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function formatSliderValues(value) {
            if (value == null) return 'Any';
            /* This code formats a number in a human value, by adding separators (forces 2 decimal).
               Ex."12345.67" to "12,345.67"  */
            var formattedNumber = value.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            return '$' + formattedNumber;
        }

        var values = [0, 100, 200, 500, 1000, 1500, null];

        $(".slider-range").slider({
            range: true,
            max: values.length - 1,
            values: [values[0], values.length - 1],
            slide: function(event, ui) {
                var min = values[ui.values[0]];
                var max = values[ui.values[1]];
                $("[name=min]").val(min);
                $("[name=max]").val(max);
                $(".min").text(formatSliderValues(min));
                $(".max").text(formatSliderValues(max));
            }
        });

        /* show initial values */
        var min = values[$(".slider-range").slider("values", 0)];
        var max = values[$(".slider-range").slider("values", 1)];
        $("[name=min]").val(min);
        $("[name=max]").val(max);
        $(".min").text(formatSliderValues(min));
        $(".max").text(formatSliderValues(max));


        $(function() {
            $('[data-toggle="tooltip"]').tooltip({
                delay: {
                    "show": 500,
                    "hide": 100
                }
            })
        })
    </script>
@endpush
