@extends('frontend.master')
@section('content')
    {{-- <style>
        .nav-link {
            background-image: linear-gradient(#186191, #186191);
            color: white;
        }

        .nav-link.active {
            background: #ae067a;
            color: white;
        }

        .badge:hover {
            color: #ffffff;
            text-decoration: none;
            cursor: pointer;
        }


        /* For Tooltip */
        /* START TOOLTIP STYLES */
        [tooltip] {
            position: relative;
            /* opinion 1 */
        }

        /* Applies to all tooltips */
        [tooltip]::before,
        [tooltip]::after {
            text-transform: none;
            /* opinion 2 */
            font-size: 0.9em;
            /* opinion 3 */
            line-height: 1;
            user-select: none;
            pointer-events: none;
            position: absolute;
            display: none;
            opacity: 0;
        }

        [tooltip]::before {
            content: "";
            border: 5px solid transparent;
            /* opinion 4 */
            z-index: 1001;
            /* absurdity 1 */
        }

        [tooltip]::after {
            content: attr(tooltip);
            /* magic! */

            /* most of the rest of this is opinion */
            font-family: Helvetica, sans-serif;
            text-align: center;

            /*
                                            Let the content set the size of the tooltips
                                            but this will also keep them from being obnoxious
                                            */
            min-width: 3em;
            max-width: 21em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding: 1ch 1.5ch;
            border-radius: 0.3ch;
            box-shadow: 0 1em 2em -0.5em rgba(0, 0, 0, 0.35);
            background: #333;
            color: #fff;
            z-index: 1000;
            /* absurdity 2 */
        }

        /* Make the tooltips respond to hover */
        [tooltip]:hover::before,
        [tooltip]:hover::after {
            display: block;
        }

        /* don't show empty tooltips */
        [tooltip=""]::before,
        [tooltip=""]::after {
            display: none !important;
        }

        /* FLOW: UP */
        [tooltip]:not([flow])::before,
        [tooltip][flow^="up"]::before {
            bottom: 100%;
            border-bottom-width: 0;
            border-top-color: #333;
        }

        [tooltip]:not([flow])::after,
        [tooltip][flow^="up"]::after {
            bottom: calc(100% + 5px);
        }

        [tooltip]:not([flow])::before,
        [tooltip]:not([flow])::after,
        [tooltip][flow^="up"]::before,
        [tooltip][flow^="up"]::after {
            left: 50%;
            transform: translate(-50%, -0.5em);
        }

        /* FLOW: DOWN */
        [tooltip][flow^="down"]::before {
            top: 100%;
            border-top-width: 0;
            border-bottom-color: #333;
        }

        [tooltip][flow^="down"]::after {
            top: calc(100% + 5px);
        }

        [tooltip][flow^="down"]::before,
        [tooltip][flow^="down"]::after {
            left: 50%;
            transform: translate(-50%, 0.5em);
        }

        /* KEYFRAMES */
        @keyframes tooltips-vert {
            to {
                opacity: 0.9;
                transform: translate(-50%, 0);
            }
        }

        @keyframes tooltips-horz {
            to {
                opacity: 0.9;
                transform: translate(0, -50%);
            }
        }

        /* FX All The Things */
        [tooltip]:not([flow]):hover::before,
        [tooltip]:not([flow]):hover::after,
        [tooltip][flow^="up"]:hover::before,
        [tooltip][flow^="up"]:hover::after {
            animation: tooltips-vert 300ms ease-out forwards;
        }

        .payment_content-area {
            padding: 2rem;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .v-tabs .nav-tabs>li {
            display: block;
            float: none;
            border-radius: 0;
        }

        .v-tabs .nav-tabs>li,
        .v-tabs .nav-tabs>li.active {
            z-index: 1;
        }

        .v-tabs .nav-tabs>li>a,
        .v-tabs .nav-tabs>li.active>a,
        .v-tabs .nav-tabs>li>a:focus,
        .v-tabs .nav-tabs>li>a:hover,
        .v-tabs .nav-tabs>li.active>a:focus,
        .v-tabs .nav-tabs>li.active>a:hover {
            border: 0px solid;
            border-radius: 0;
        }

        .v-tabs .nav-tabs>li.active>a,
        .v-tabs .nav-tabs>li>a:focus,
        .v-tabs .nav-tabs>li>a:hover {
            position: relative;
            background-color: #ef4416;
            color: white;
            z-index: 1;
            border: none;
        }

        .v-tabs .tab-content {
            background-color: lightblue;
            flex: 1;
        }

        /* Payment */
        :root {
            --field-border: 1px solid #eeeeee;
            --accent-color: #2962ff;
            --sidebar-color: #f1f1f1;
            --secondary-text: #aaaaaa;
            --radius-sm: 0.25em;
            --radius-md: 0.5em;
        }

        * {
            box-sizing: border-box;
        }

        .flex {
            display: flex;
        }

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .flex-fill {
            display: flex;
            flex: 1 1;
        }

        .flex-vertical {
            display: flex;
            flex-direction: column;
        }

        .flex-vertical-center {
            display: flex;
            align-items: center;
        }

        .flex-between {
            display: flex;
            justify-content: space-between;
        }

        .p-sm {
            padding: 0.5em;
        }

        .pl-sm {
            padding-left: 0.5em;
        }

        .pr-sm {
            padding-right: 0.5em;
        }

        .pb-sm {
            padding-bottom: 0.5em;
        }

        .p-md {
            padding: 1em;
        }

        .pb-md {
            padding-bottom: 1em;
        }

        .m-md {
            margin: 1em;
        }

        .size-md {
            font-size: 0.85em;
        }

        .size-lg {
            font-size: 1.5em;
        }

        .size-xl {
            font-size: 2em;
        }

        .half-width {
            width: 50%;
        }

        .pointer {
            cursor: pointer;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .ellipsis {
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .f-main-color {
            color: #2962ff;
        }

        .f-secondary-color {
            color: var(--secondary-text);
        }

        .b-main-color {
            background: var(--accent-color);
        }

        .numbers::-webkit-outer-spin-button,
        .numbers::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .popup {
            position: relative;
            width: 50em;
            background: #ffffff;
        }

        .popup .close-btn {
            position: absolute;
            right: 0;
            top: 0;
            background: #fcfcfc;
            border-bottom-left-radius: var(--radius-sm);
            transition: background-color 0.25s ease-in-out;
        }

        .popup .close-btn:hover {
            background: #ef5350;
        }

        .sidebar {
            width: 16.5em;
            padding-left: 2em;
            padding-top: 5em;
        }

        .header .title {
            font-size: 1.2em;
        }

        .header .title span {
            font-weight: 300;
        }

        .card-data>div {
            padding-bottom: 1em;
        }

        .card-data>div:first-child {
            padding-top: 1em;
        }

        .card-property-title {
            display: flex;
            flex-direction: column;
            flex: 1 1;
            margin-right: 0.5em;
        }

        .card-property-title strong {
            padding-bottom: 0.5em;
            font-size: 0.85em;
        }

        .card-property-title span {
            color: var(--secondary-text);
            font-size: 0.75em;
        }

        .card-property-value {
            flex: 1 1;
        }

        .card-number {
            background: #fafafa;
            border: var(--field-border);
            border-radius: var(--radius-md);
            padding: 0.5em 1em;
        }

        .card-number-field * {
            line-height: 1;
            margin: 0;
            padding: 0;
        }

        .card-number-field input {
            width: 3em;
            height: 100%;
            padding: 0.5em 0;
            margin: 0 0.75em;
            border: none;
            color: #888888;
            background: transparent;
            text-align: center;
            font-family: inherit;
            font-weight: 500;
        }

        .timer span {
            background: #311b92;
            color: #ffffff;
            width: 1.2em;
            padding: 4px 0;
            display: inline-block;
            text-align: center;
            border-radius: var(--radius-sm);
        }

        .timer span+span {
            margin-left: 2px;
        }

        .timer em {
            font-style: normal;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
            height: 3em;
            overflow: hidden;
            border: var(--field-border);
            border-radius: var(--radius-md);
        }

        .input-container input,
        .input-container i {
            line-height: 1;
        }

        .input-container input {
            flex: 1 1;
            height: 100%;
            width: 100%;
            text-align: center;
            border: none;
            border-radius: var(--radius-md);
            font-family: inherit;
            font-weight: 800;
            font-size: 0.85em;
        }

        .input-container input:focus {
            background: #e3f2fd;
            color: #283593;
        }

        .input-container input::placeholder {
            color: #ddd;
        }

        .input-container input::-webkit-outer-spin-button,
        .input-container input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .input-container i {
            position: absolute;
            right: 0.5em;
        }

        .purchase-section {
            position: relative;
            overflow: visible;
            padding: 0 1em 1em 1em;
            background: var(--sidebar-color);
            border-top-left-radius: 0.8em;
            border-top-right-radius: 0.8em;
        }

        .purchase-section:before {
            content: "";
            position: absolute;
            width: 1.6em;
            height: 1.6em;
            border-radius: 50%;
            left: -0.8em;
            bottom: -0.8em;
            background: #ffffff;
        }

        .purchase-section:after {
            content: "";
            position: absolute;
            width: 1.6em;
            height: 1.6em;
            border-radius: 50%;
            right: -0.8em;
            bottom: -0.8em;
            background: #ffffff;
        }

        .card-mockup {
            position: relative;
            margin: -5em 1em 1.5em 1em;
            padding: 1.5em 1.2em;
            height: 10em;
            border-radius: var(--radius-md);
            background: #ffffff;
            box-shadow: 0 0.5em 1em 0.125em rgba(0, 0, 0, 0.1);
        }

        .card-mockup:after {
            content: "";
            position: absolute;
            width: 25%;
            top: -0.2em;
            left: 37.5%;
            height: 0.2em;
            background: var(--accent-color);
            border-top-left-radius: 0.2em;
            border-top-right-radius: 0.2em;
        }

        .card-mockup:before {
            content: "";
            position: absolute;
            top: 0;
            width: 25%;
            left: 37.5%;
            height: 0.5em;
            background: #2962ff36;
            border-bottom-left-radius: 0.2em;
            border-bottom-right-radius: 0.2em;
            box-shadow: 0 2px 15px 5px #2962ff4d;
        }

        .purchase-props {
            margin: 0;
            padding: 0;
            font-size: 0.8em;
            width: 100%;
        }

        .purchase-props li {
            width: 100%;
            line-height: 2.5;
        }

        .purchase-props li span {
            color: var(--secondary-text);
            font-weight: 600;
        }

        .separation-line {
            border-top: 1px dashed #aaa;
            margin: 0 0.8em;
        }

        .total-section {
            position: relative;
            overflow: hidden;

            padding: 1em;
            background: var(--sidebar-color);
            border-bottom-left-radius: 0.8em;
            border-bottom-right-radius: 0.8em;
        }

        .total-section:before {
            content: "";
            position: absolute;
            width: 1.6em;
            height: 1.6em;
            border-radius: 50%;
            left: -0.8em;
            top: -0.8em;
            background: #ffffff;
        }

        .total-section:after {
            content: "";
            position: absolute;
            width: 1.6em;
            height: 1.6em;
            border-radius: 50%;
            right: -0.8em;
            top: -0.8em;
            background: #ffffff;
        }

        .total-label {
            font-size: 0.8em;
            padding-bottom: 0.5em;
        }

        .total-section strong {
            font-size: 1.5em;
            font-weight: 800;
        }

        .total-section small {
            font-weight: 600;
        }

        @media (max-width: 991px) {
            .responsive>thead th {
                display: none;
            }

            .responsive>tbody td,
            .responsive>tbody th {
                display: block;
            }

            .responsive>tbody>tr:nth-child(even) td,
            .responsive>tbody>tr:nth-child(even) th {
                background-color: #eee;
            }

            [row-header] {
                position: relative;
                width: 50%;
                vertical-align: middle;
            }

            [row-header]:before {
                content: attr(row-header);
                display: inline-block;
                vertical-align: middle;
                text-align: left;
                width: 50%;
                padding-right: 30px;
            }
        }
    </style> --}}

    <section class="container page-wrapper mt-65 mb-30">
        <main>
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="blk-clr text-center">Plan Name: {{ $plan->name }} </h3>
                    </div>

                    <div class="card-body">
                        <div class="container ">
                            <div class="container border">

                                <!-- Top Row -->
                                <div class="row p-2 border-bottom">
                                    <div class="col-lg-4 text-center">
                                        <span>Order Date: </span>
                                        <span class="thm-clr">{{ date('d-m-y') }}</span>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                        <div class="payment-status-top">
                                            Payment Status :
                                            {{-- <span class="badge bg-success">Paid</span> --}}
                                            <span class="badge bg-danger p-1">Unpaid</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                        Order Item : &nbsp;<span class="badge bg-info p-1"> {{ $plan->name }}</span>


                                    </div>
                                </div>

                                <!-- Top Second Row -->
                                <div class="row py-2 px-3 border-bottom">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Invoice Number : <span class="thm-clr">#556</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>
                                                Client Name : <span class="thm-clr">{{ Auth::user()->name }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4" style="display: flex; justify-content: end; text-align: end">
                                        <ul class="">
                                            <li class="text-end">
                                                Total Payable : <span class="thm-clr"> ${{ number_format($plan->price, 2) }}
                                                </span>
                                            </li>
                                            <li class="text-end">
                                                {{-- Order Quantity : <span class="thm-clr">5</span> --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="separation-line"></div>

                                <div class="col-lg-10 offset-lg-1">
                                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                        <div class="row">

                                            <div class="card-body">
                                                <div class="col-lg-12">
                                                    <ul class="nav nav-tabs d-flex justify-content-center mx-auto"
                                                        id="myTab" role="tablist"
                                                        style="width:60%; border-bottom: 1px solid var(--main-text-color)">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link m-0 rounded-0" id="cash-on-delivery"
                                                                data-bs-toggle="tab" data-bs-target="#cash-on-delivery-pane"
                                                                type="button" role="tab"
                                                                aria-controls="cash-on-delivery-pane" aria-selected="true">
                                                                Paypal </button>
                                                        </li>
                                                        <li class="nav-item border-0" role="presentation">
                                                            <button class="nav-link active m-0 rounded-0" id="stripe"
                                                                data-bs-toggle="tab" data-bs-target="#stripe-pane"
                                                                type="button" role="tab" aria-controls="stripe-pane"
                                                                aria-selected="false"> Stripe Pay</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade" id="cash-on-delivery-pane"
                                                            role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                            <div class="row">
                                                                <h5 class="text-center pt-3 pb-0">Paypal
                                                                </h5>
                                                                <div class="col-lg-12 text-center">
                                                                    <h5 class="text-center text-site">Will be added
                                                                        Soon.....</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade show active" id="stripe-pane"
                                                            role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                            <div class="row">
                                                                <div class="row mt-2" id="app">
                                                                    <div class="card-form">
                                                                        <div class="card-list">
                                                                            <div class="card-item">
                                                                                <div class="card-item__side -front">
                                                                                    <div class="card-item__focus"></div>
                                                                                    <div class="card-item__cover">
                                                                                        <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/20.jpeg"
                                                                                            class="card-item__bg" />
                                                                                    </div>
                                                                                    <div class="card-item__wrapper">
                                                                                        <div class="card-item__top">
                                                                                            <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png"
                                                                                                class="card-item__chip" />
                                                                                            <div class="card-item__type">
                                                                                                <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/visa.png"
                                                                                                    alt=""
                                                                                                    class="card-item__typeImg" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <label for="cardNumber"
                                                                                            class="card-item__number"
                                                                                            ref="cardNumber">
                                                                                            <span>
                                                                                                <div class="card-item__numberItem">
                                                                                                    0000 0000 0000
                                                                                                </div>
                                                                                            </span>
                                                                                        </label>
                                                                                        <div class="card-item__content">
                                                                                            <label for="cardName"
                                                                                                class="card-item__info"
                                                                                                ref="cardName">
                                                                                                <div
                                                                                                    class="card-item__holder">
                                                                                                    Card Holder
                                                                                                </div>
                                                                                                <div
                                                                                                    class="card-item__name">
                                                                                                    <transition-group
                                                                                                        name="slide-fade-right">
                                                                                                        <span
                                                                                                            class="card-item__nameItem">Card
                                                                                                            Holder
                                                                                                            Name</span>
                                                                                                </div>
                                                                                            </label>
                                                                                            <div class="card-item__date"
                                                                                                ref="cardDate">
                                                                                                <label for="cardMonth"
                                                                                                    class="card-item__dateTitle">Expires</label>
                                                                                                <label for="cardMonth"
                                                                                                    class="card-item__dateItem">
                                                                                                    <span v-if="cardMonth"
                                                                                                        key="cardMonth">05</span></label>
                                                                                                <label for="cardMonth"
                                                                                                    class="card-item__dateItem">
                                                                                                    <span v-if="cardMonth"
                                                                                                        key="cardMonth">05</span></label>
                                                                                                <label for="cardMonth"
                                                                                                    class="card-item__dateItem">
                                                                                                    <span v-if="cardMonth"
                                                                                                        key="cardMonth">2026</span></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-item__side -back">
                                                                                    <div class="card-item__cover">
                                                                                        <img src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                                                                            class="card-item__bg" />
                                                                                    </div>
                                                                                    <div class="card-item__band"></div>
                                                                                    <div class="card-item__cvv">
                                                                                        <div class="card-item__cvvTitle">
                                                                                            CVV
                                                                                        </div>
                                                                                        <div class="card-item__cvvBand">
                                                                                            <span
                                                                                                v-for="(n, $index) in cardCvv"
                                                                                                :key="$index"> *
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="card-item__type">
                                                                                            <img src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/visa.png'"
                                                                                                v-if="getCardType"
                                                                                                class="card-item__typeImg" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-form__inner">
                                                                            <div class="card-input">
                                                                                <div id="card-element"></div>
                                                                            </div>
                                                                            <div class="card-input">
                                                                                <label for="cardName"
                                                                                    class="card-input__label">Card
                                                                                    Holder</label>
                                                                                <input type="text" id="cardName"
                                                                                    placeholder="Card Holder Name"
                                                                                    class="form-control" />
                                                                            </div>
                                                                            <div class="card-form__row w-50 mx-auto">
                                                                                <button type="submit" class="card-form__button" id="card-button" data-secret="{{ $intent->client_secret }}">
                                                                                    Pay {{ number_format($plan->price, 2) }} $
                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <!-- Content Area End -->
                            </div>
                        </div>
                    </div>
                </div>

        </main>
    </section>
@endsection
@push('scripts')
    {{-- <script>
    document.addEventListener("input", (event) => {
        const bounds = document.querySelectorAll("[data-bound]");

        for (const bound of bounds) {
            if (bound === event.target) {
                const targetId = bound.getAttribute("data-bound");
                const defValue = bound.getAttribute("data-def");

                const targetEl = document.getElementById(targetId);

                targetEl.innerText = bound.value || defValue;
            }
        }
    });
</script>

<script>
    document.addEventListener("input", (event) => {
        const elements = document.querySelectorAll("[data-moc]");

        for (const element of elements) {
            if (element === event.target) {
                const targetId = element.getAttribute("data-moc");
                const defValue = element.getAttribute("data-doc");
                const targetEl = document.getElementById(targetId);
                targetEl.innerText = element.value || defValue;
            }
        }
    });
</script> --}}
    <script>
        $(document).ready(function() {
            $('#cardName').on('input', function() {
                var inputVal = $(this).val();

                $('.card-item__nameItem').text(inputVal); // Assuming '.welcome_name' exists elsewhere in your HTML
            });
            $('input[name="cardnumber"]').on('input', function() {
                var inputnumberVal = $(this).val();
                $('.card-item__numberItem').text(inputnumberVal);
            });
        });
    </script>

    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');

    cardElement.mount('#card-element');

    const form = document.getElementById('payment-form');
    const cardBtn = document.getElementById('card-button');
    const cardHolderName = document.getElementById('cardName');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        cardBtn.disabled = true;
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value
                    }
                }
            }
        );

        if (error) {
            // console.error(error);
            cardBtn.disabled = false;
        } else {
            let token = document.createElement('input');
            token.setAttribute('type', 'hidden');
            token.setAttribute('name', 'token');
            token.setAttribute('value', setupIntent.payment_method);
            form.appendChild(token);
            form.submit();
        }
    });

    </script>
@endpush
