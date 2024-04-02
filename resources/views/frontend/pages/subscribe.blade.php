@extends('frontend.master')
@section('content')
    <style>
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
    </style>

    <section class="container page-wrapper mt-65 mb-30">
        <main>
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="blk-clr text-center">Payment Information</h3>
                    </div>

                    <div class="card-body">
                        <div class="container ">
                            <div class="container border">

                                <!-- Top Row -->
                                <div class="row p-2">
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
                                <hr />
                                <!-- Top Second Row -->
                                <div class="row mx-1 p-2">
                                    <div class="col-lg-4">
                                        <ul>
                                            <li>Invoice Number : <span class="thm-clr">#556</span></li>
                                            <li>
                                                Client Name : <span class="thm-clr">{{ Auth::user()->name }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"></div>
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
                                <div class="row mt-2 p-2">
                                    <div class="col-lg-2">
                                        <ul class="nav flex-column mb-3 border-0" id="ex1" role="tablist">
                                            <li class="nav-item mb-2" role="presentation">
                                                <a class="nav-link active btn" id="ex1-tab-1" data-bs-toggle="tab"
                                                    href="#paypal" role="tab" type="button" aria-controls="paypal"
                                                    aria-selected="true">PayPal</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link btn" id="ex1-tab-2" data-bs-toggle="tab" href="#stripe"
                                                    role="tab" type="button" aria-controls="stripe"
                                                    aria-selected="false">Stripe</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <form id="payment-form" action="{{ route('subscription.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                                        <div class="col-lg-10" style="padding: 0px">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="paypal">
                                                    <div class="screen flex-center" style="padding-bottom: 2rem">
                                                        <form class="popup flex p-lg">
                                                            <div class="close-btn pointer flex-center p-sm">
                                                                <i class="ai-cross"></i>
                                                            </div>
                                                            <!-- CARD FORM -->
                                                            <div class="flex-fill flex-vertical">
                                                                <div class="header flex-between flex-vertical-center">
                                                                    <div class="flex-vertical-center">
                                                                        <i
                                                                            class="ai-bitcoin-fill size-xl pr-sm f-main-color"></i>
                                                                        <span class="title">
                                                                            <strong>Paypal</strong><span>Pay</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="card-data flex-vertical">
                                                                    <!-- Card Number -->
                                                                    <div class="flex-between flex-vertical-center">
                                                                        <div class="card-property-title">
                                                                            <strong>Card Number</strong>
                                                                            <span>Enter 16-digit card number on the
                                                                                card</span>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Card Field -->
                                                                    <div class="flex-between">
                                                                        <div
                                                                            class="card-number flex-vertical-center flex-fill">
                                                                            <div
                                                                                class="card-number-field flex-vertical-center flex-fill">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 48 48" width="24px"
                                                                                    height="24px">
                                                                                    <path fill="#ff9800"
                                                                                        d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z" />
                                                                                    <path fill="#d50000"
                                                                                        d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z" />
                                                                                    <path fill="#ff3d00"
                                                                                        d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z" />
                                                                                </svg>
                                                                                <input class="numbers" type="number"
                                                                                    min="1" max="9999"
                                                                                    placeholder="0000" />-
                                                                                <input class="numbers" type="number"
                                                                                    placeholder="0000" />-
                                                                                <input class="numbers" type="number"
                                                                                    placeholder="0000" />-
                                                                                <input class="numbers" type="number"
                                                                                    placeholder="0000"
                                                                                    data-bound="carddigits_mock"
                                                                                    data-def="0000" />
                                                                            </div>
                                                                            <i
                                                                                class="ai-circle-check-fill size-lg f-main-color"></i>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Expiry Date -->
                                                                    <div class="flex-between">
                                                                        <div class="card-property-title">
                                                                            <strong>Expiry Date</strong>
                                                                            <span>Enter the expiration date of the
                                                                                card</span>
                                                                        </div>
                                                                        <div
                                                                            class="card-property-value flex-vertical-center">
                                                                            <div class="input-container half-width">
                                                                                <input
                                                                                    class="numbers form-control form-control-sm"
                                                                                    data-bound="mm_mock" data-def="00"
                                                                                    type="number" min="1"
                                                                                    max="12" step="1"
                                                                                    placeholder="MM" />
                                                                            </div>
                                                                            <span class="m-md">/</span>
                                                                            <div class="input-container half-width">
                                                                                <input
                                                                                    class="numbers form-control form-control-sm"
                                                                                    data-bound="yy_mock" data-def="01"
                                                                                    type="number" min="23"
                                                                                    max="99" step="1"
                                                                                    placeholder="YY" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- CCV Number -->
                                                                    <div class="flex-between">
                                                                        <div class="card-property-title">
                                                                            <strong>CVC Number</strong>
                                                                            <span>Enter card verification code</span>
                                                                        </div>
                                                                        <div class="card-property-value">
                                                                            <div class="input-container">
                                                                                <input id="cvc" type="text" />
                                                                                <i id="cvc_toggler" data-target="cvc"
                                                                                    class="ai-eye-open pointer"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Name -->
                                                                    <div class="flex-between">
                                                                        <div class="card-property-title">
                                                                            <strong>Cardholder Name</strong>
                                                                            <span>Enter cardholder's name</span>
                                                                        </div>
                                                                        <div class="card-property-value">
                                                                            <div class="input-container">
                                                                                <input id="name"
                                                                                    data-bound="name_mock"
                                                                                    data-def="Mr. Cardholder"
                                                                                    type="text" class="uppercase"
                                                                                    placeholder="CARDHOLDER NAME" />
                                                                                <i class="ai-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- SIDEBAR -->
                                                            <div class="sidebar flex-vertical">
                                                                <div class="purchase-section flex-vertical">
                                                                    <div class="card-mockup flex-vertical">
                                                                        <div class="flex-fill flex-between">
                                                                            <i
                                                                                class="ai-bitcoin-fill size-xl f-secondary-color"></i>
                                                                            <i
                                                                                class="ai-wifi size-lg f-secondary-color"></i>
                                                                        </div>
                                                                        <div>
                                                                            <div id="name_mock"
                                                                                class="size-md pb-sm uppercase ellipsis">
                                                                                mr. Cardholder
                                                                            </div>
                                                                            <div class="size-md pb-md">
                                                                                <strong>
                                                                                    <span class="pr-sm">
                                                                                        &#x2022;&#x2022;&#x2022;&#x2022;
                                                                                    </span>
                                                                                    <span id="carddigits_mock">0000</span>
                                                                                </strong>
                                                                            </div>
                                                                            <div class="flex-between flex-vertical-center">
                                                                                <strong class="size-md">
                                                                                    <span id="mm_mock">00</span>/<span
                                                                                        id="yy_mock">01</span>
                                                                                </strong>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 48 48" width="24px"
                                                                                    height="24px">
                                                                                    <path fill="#ff9800"
                                                                                        d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z" />
                                                                                    <path fill="#d50000"
                                                                                        d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z" />
                                                                                    <path fill="#ff3d00"
                                                                                        d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="purchase-props">
                                                                        <li class="flex-between">
                                                                            <span>Company</span>
                                                                            <strong>Apple</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>Order number</span>
                                                                            <strong>429252965</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>Product</span>
                                                                            <strong>MacBook Air</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>VAT (20%)</span>
                                                                            <strong>$100.00</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="separation-line"></div>
                                                                <div
                                                                    class="total-section flex-between flex-vertical-center">
                                                                    <div class="flex-fill flex-vertical">
                                                                        <div class="total-label f-secondary-color">
                                                                            You have to Pay
                                                                        </div>
                                                                        <div>
                                                                            <strong>${{ number_format($plan->price, 2) }}</strong>
                                                                            <small>
                                                                                <span
                                                                                    class="f-secondary-color">USD</span></small>
                                                                        </div>
                                                                    </div>
                                                                    <i class="ai-coin size-lg"></i>
                                                                </div>
                                                                <div class="action flex-center" style="padding-top: 2rem">
                                                                    <a type="submit" href="#"
                                                                        class="btn btn-site-1">Pay Now</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="stripe">
                                                    <div class="screen flex-center" style="padding-bottom: 2rem">
                                                        <form class="popup flex p-lg">
                                                            <div class="close-btn pointer flex-center p-sm">
                                                                <i class="ai-cross"></i>
                                                            </div>
                                                            <!-- CARD FORM -->
                                                            <div class="flex-fill flex-vertical">
                                                                <div class="header flex-between flex-vertical-center">
                                                                    <div class="flex-vertical-center">
                                                                        <i
                                                                            class="ai-bitcoin-fill size-xl pr-sm f-main-color"></i>
                                                                        <span class="title">
                                                                            <strong>Stripe</strong> <span>Pay</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div id="card-element"></div>
                                                                    <div class="flex-between mt-2">
                                                                        <div class="card-property-title">
                                                                            <h6 class="mb-0">
                                                                                <strong>Cardholder Name</strong>
                                                                                <span>Enter cardholder's name</span>
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-property-value">
                                                                            <div class="input-container">
                                                                                <input id="name"
                                                                                    data-moc="name_mock2"
                                                                                    data-doc="Mr. Cardholder"
                                                                                    type="text" class="uppercase"
                                                                                    placeholder="CARDHOLDER NAME" />
                                                                                <i class="ai-person"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- SIDEBAR -->
                                                            <div class="sidebar flex-vertical">
                                                                <div class="purchase-section flex-vertical">
                                                                    <div class="card-mockup flex-vertical">
                                                                        <div class="flex-fill flex-between">
                                                                            <i
                                                                                class="ai-bitcoin-fill size-xl f-secondary-color"></i>
                                                                            <i
                                                                                class="ai-wifi size-lg f-secondary-color"></i>
                                                                        </div>
                                                                        <div>
                                                                            <div id="name_mock2"
                                                                                class="size-md pb-sm uppercase ellipsis">
                                                                                mr. Cardholder
                                                                            </div>
                                                                            <div class="size-md pb-md">
                                                                                <strong>
                                                                                    <span class="pr-sm">
                                                                                        &#x2022;&#x2022;&#x2022;&#x2022;
                                                                                    </span>
                                                                                    <span id="carddigits_mock2">0001</span>
                                                                                </strong>
                                                                            </div>
                                                                            <div class="flex-between flex-vertical-center">
                                                                                <strong class="size-md">
                                                                                    <span id="mm_mock2">00</span>/<span
                                                                                        id="yy_mock2">01</span>
                                                                                </strong>
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 48 48" width="24px"
                                                                                    height="24px">
                                                                                    <path fill="#ff9800"
                                                                                        d="M32 10A14 14 0 1 0 32 38A14 14 0 1 0 32 10Z" />
                                                                                    <path fill="#d50000"
                                                                                        d="M16 10A14 14 0 1 0 16 38A14 14 0 1 0 16 10Z" />
                                                                                    <path fill="#ff3d00"
                                                                                        d="M18,24c0,4.755,2.376,8.95,6,11.48c3.624-2.53,6-6.725,6-11.48s-2.376-8.95-6-11.48 C20.376,15.05,18,19.245,18,24z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <ul class="purchase-props">
                                                                        <li class="flex-between">
                                                                            <span>Company</span>
                                                                            <strong>Apple</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>Order number</span>
                                                                            <strong>429252965</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>Product</span>
                                                                            <strong>MacBook Air</strong>
                                                                        </li>
                                                                        <li class="flex-between">
                                                                            <span>VAT (20%)</span>
                                                                            <strong>$100.00</strong>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="separation-line"></div>
                                                                <div
                                                                    class="total-section flex-between flex-vertical-center">
                                                                    <div class="flex-fill flex-vertical">
                                                                        <div class="total-label f-secondary-color">
                                                                            You have to Pay
                                                                        </div>
                                                                        <div>
                                                                            <strong>549</strong>
                                                                            <small>.99
                                                                                <span
                                                                                    class="f-secondary-color">USD</span></small>
                                                                        </div>
                                                                    </div>
                                                                    <i class="ai-coin size-lg"></i>
                                                                </div>
                                                                <div class="action flex-center" style="padding-top: 2rem">
                                                                    <a type="submit" href="#"
                                                                        class="btn btn-site-1">Pay Now</a>
                                                                </div>
                                                            </div>
                                                        </form>
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
        const stripe = Stripe('{{ env('STRIPE_KEY') }}')

        const elements = stripe.elements()
        const cardElement = elements.create('card')

        cardElement.mount('#card-element')

        const form = document.getElementById('payment-form')
        const cardBtn = document.getElementById('card-button')
        const cardHolderName = document.getElementById('card-holder-name')

        form.addEventListener('submit', async (e) => {
            e.preventDefault()

            cardBtn.disabled = true
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            )

            if (error) {
                cardBtn.disable = false
            } else {
                let token = document.createElement('input')
                token.setAttribute('type', 'hidden')
                token.setAttribute('name', 'token')
                token.setAttribute('value', setupIntent.payment_method)
                form.appendChild(token)
                form.submit();
            }
        })
    </script>
@endpush
