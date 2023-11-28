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
                {{ $active_id }} for Sale and Investment Opportunities
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
                                <div class="input-group input-group-sm" style="max-width: 400px;">
                                    <div class="row gx-0">

                                        <span class="btn rounded-0 disabled text-white filter-buttons text-one col-lg-5"
                                            style="background-color: var(--main-color)">Locations <i
                                                class="fa-solid fa-location-dot"></i></span>

                                        <div class="col-lg-7">
                                            <input id="industry-filter" type="text" class="form-control form-control-sm"
                                                placeholder="Filter...">
                                        </div>
                                    </div>
                                </div>
                                {{-- Nested Accordion --}}
                                <div class="checkbox-wrapper-42">
                                    <input id="littoral" type="checkbox" />
                                    <label class="cbx" for="littoral"></label>
                                    <label class="lbl" for="littoral">Littoral</label>
                                </div>
                                <hr class="">
                                {{-- Price Range Start --}}
                                <p class="mt-3 p-0 m-0 fw-bold"><i class="fa-solid fa-briefcase me-2"></i>Industries
                                </p>
                                <div class="input-group input-group-sm" style="max-width: 400px;">
                                    <div class="row gx-0">

                                        <span class="btn rounded-0 disabled text-white filter-buttons text-one col-lg-5"
                                            style="background-color: var(--main-color)">Industries <i
                                                class="fa-solid fa-sitemap"></i></span>

                                        <div class="col-lg-7">
                                            <input id="industry-filter" type="text" class="form-control form-control-sm"
                                                placeholder="Filter...">
                                        </div>
                                    </div>
                                    {{-- <div class="input-group-btn">
                                        <span type="submit"
                                            class="btn rounded-0 disabled text-white filter-buttons text-one"
                                            style="background-color: var(--main-color)">Industries <i
                                                class="fa-solid fa-location-dot"></i></span>

                                    </div> --}}
                                </div>
                                <div class="accordion mt-3" id="accordionSector">
                                    {{-- Nested Item --}}
                                    @foreach ($sectors as $sector)
                                        <div class="accordion-item p-1">
                                            <h2 class="accordion-header" id="sector{{ $sector->id }}">
                                                <button class="accordion-button collapsed p-2 ps-0 m-0" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#sector{{ $sector->id }}"
                                                    aria-expanded="false" aria-controls="sector{{ $sector->id }}">
                                                    <div class="checkbox-wrapper-42">
                                                        <input id="sector_check{{ $sector->id }}" type="checkbox" />
                                                        <label class="cbx"
                                                            for="sector_check{{ $sector->id }}"></label>
                                                        <label class="lbl"
                                                            for="sector_check{{ $sector->id }}">{{ $sector->name }}</label>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="sector{{ $sector->id }}" class="accordion-collapse collapse"
                                                aria-labelledby="sector{{ $sector->id }}"
                                                data-bs-parent="#accordionSector">
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
                                                                            <input id="industry{{ $industry->id }}"
                                                                                type="checkbox" />
                                                                            <label class="cbx"
                                                                                for="industry{{ $industry->id }}"></label>
                                                                            <label class="lbl"
                                                                                for="industry{{ $industry->id }}">{{ $industry->name }}</label>
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
                                    {{-- Accordion nested Item 2 --}}

                                    {{-- Simple Accordion --}}

                                </div>
                                <div class="mb-5 px-3 mt-3">
                                    <h4>Investment Size</h4>
                                    <input type="hidden" name="min">
                                    <input type="hidden" name="max">

                                    <label>
                                        <span id="min"></span> AFN To <span id="max"></span></label>
                                    <br><br>
                                    <div id="slider-range"></div>
                                </div>
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

        $("#slider-range").slider({
            range: true,
            max: values.length - 1,
            values: [values[0], values.length - 1],
            slide: function(event, ui) {
                var min = values[ui.values[0]];
                var max = values[ui.values[1]];
                $("[name=min]").val(min);
                $("[name=max]").val(max);
                $("#min").text(formatSliderValues(min));
                $("#max").text(formatSliderValues(max));
            }
        });

        /* show initial values */
        var min = values[$("#slider-range").slider("values", 0)];
        var max = values[$("#slider-range").slider("values", 1)];
        $("[name=min]").val(min);
        $("[name=max]").val(max);
        $("#min").text(formatSliderValues(min));
        $("#max").text(formatSliderValues(max));


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
